import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";
import comfirmAlert from "../comfirm.js";

(function ($, window, document){
    $(function () {

        $( "#bien_so" ).keyup(function() {
            let str = $(this).val();
            let value = base.removeVietnameseTonesBienSo(str);
            $(this).val(value);
        });

        $( "#so_may" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSug(str);
            $(this).val(value);
        });

        $( "#so_khung" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSug(str);
            $(this).val(value);
        });

        $('#so_CMND').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g,'');
        });

        $('#so_dien_thoai').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g,'');
        });

        $("#gia_mua").on('input', function(e){
            $(this).val(base.formatCurrency(this.value.replace(/[,VNĐ]/g,'')));
        }).on('keypress',function(e){
            if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
        }).on('paste', function(e){
            var cb = e.originalEvent.clipboardData || window.clipboardData;
            if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
        });

        $(document).on('click','#them-khach-hang',function(){
            $('.error').html("");
            let dataForm = new FormData($('#form-them-khach-hang')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Thêm giao dịch thành công");
                    window.location.href = window.location.origin+'/quanlyxe/editthongtinxe/'+response['id'];
                })
                .fail(function (response){
                    $('.error').html("");
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click','#update-thong-tin-khach-hang',function(){
            $('.error').html("");
            let dataForm = new FormData($('#form-update-khach-hang')[0]);
            dataForm.append('_method', METHOD_PATCH);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Update thông tin khách hàng thành công");
                    window.location.href = window.location.origin+'/quanlyxe/editthongtinxe/'+response['id'];
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click','.xoa-khach-hang',function() {
            let dataSearch = $('#form-search').serialize();
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE,dataSearch)
                            .done(function (response){
                                if(response == "xoa-thong-tin-lien-qua-khach-hang")
                                {
                                    comfirmAlert.showErrorMessageAlert("Vui lòng xóa thông tin xe liên quan đến khách hàng");
                                    return false;
                                }
                                comfirmAlert.showSuccessMessageAlert("Xóa hóa đơn thành công");
                                $('.table').html(response);
                            });
                    }
                });
        });

        $(document).on('click', '.paginate-page a', function(e) {
            e.preventDefault();
            let url_search = $(this).attr('href');
            getPosts(url_search);
        });

        function loading()
        {
            let url_load = window.location.origin+'/Logo/loading.gif';
            let html = "<tr>\
                            <td colspan='6' class='text-center'>\
                                <img src='"+url_load+"' >\
                            </td>\
                        </tr>";
            $('#danh-sach-khach-hang').html(html);
        }

        function getPosts(url_search)
        {
            loading();
            base.callApi( url_search, METHOD_GET)
                .done(function (response) {
                    $('.table').html(response);
                })
        }

        $(document).on('click', '#tim-kiem', function(){
            let dataSearch = $('#form-search').serialize();
            let url = $(this).attr('data-url');
            loading();
            base.callApi( url, METHOD_GET, dataSearch)
                .done(function (response) {
                    $('.table').html(response);
                    $('.paginate-page a').unbind('click').on('click', function(e) {
                        e.preventDefault();
                        let url_search  = $(this).attr('href');
                        getPosts(url_search);
                    });
                })
        });
    })
}(window.jQuery, window, document))
