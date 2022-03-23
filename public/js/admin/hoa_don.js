import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";
import comfirmAlert from "../comfirm.js";


function htmlThemPhuTung()
{
    let html = '<div class="phu-tung">\n' +
'                                <div class="row them-phu-tung" >\n' +
'                                    <div class="col-md-4">\n' +
'                                        <div class="form-group">\n' +
'                                            <label for="">Phụ tùng</label>\n' +
'                                            <input type="text" class="form-control phu-tung-check" name="phutung[]"  placeholder="Phụ tùng">\n' +
'                                        </div>\n' +
'                                    </div>\n' +
'                                    <div class="col-md-2">\n' +
'                                        <div class="form-group">\n' +
'                                            <label for="" style="visibility: hidden;">Phụ tùng</label>\n' +
'                                            <button type="button" class="btn btn-danger xoa-phu-tung"><i class="fas fa-trash-alt"></i></button>\n' +
'                                        </div>\n' +
'                                    </div>\n' +
'                                </div>\n' +
'                            </div>'  ;
    return html;
}
(function ($, window, document){
    $(function () {

        $(document).on('click','#add-phu-tung',function() {
            $('.error').html("");
            let them = htmlThemPhuTung();
            $('#list-phu-tung').append(them);
        });

        $(document).on('click','.xoa-phu-tung',function() {
            $(this).parents( ".them-phu-tung" ).remove();
        });

        $(document).on('click','.xoa-phu-tung-confirm',function() {
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                if(response === "Hay-xoa-hoa-don")
                                {
                                    comfirmAlert.showErrorMessageAlert("Không thể xóa phụ tùng này");
                                    return false;
                                }
                                comfirmAlert.showSuccessMessageAlert("Xóa phụ tùng thành công");
                                window.location.href = window.location.origin+'/quanlysuachua/showhoadon/'+response;
                            });
                    }
                });
        });

        $(document).on('click','.update-luu-thong-tin',function() {
            $('.error').html("");
            let dataForm = new FormData($('#form-hoa-don')[0]);
            dataForm.append('_method', METHOD_PATCH);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    if(response === "nhap-thieu")
                    {
                        $('.error-phutung').html('<div class="error">Vui lòng nhập phụ tùng</div></p>');
                        return false;
                    }
                    comfirmAlert.showSuccessMessageAlert('Lưu thông tin thành công');
                    window.location.href = window.location.origin+'/quanlysuachua/showhoadon/'+response['id'];
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click','#add-luu-thong-tin',function() {
            $('.error').html("");
            let ktra = true;
            if($('.ma-cua-hang').val() == "")
            {
                $('.error-iMa_cua_hang').html('<p>Vui lòng chọn cửa hàng</p>');
                ktra = false;
            }
            if($('.xe-sua-chua').val() == "")
            {
                $('.error-iMa_xe').html('<p>Vui lòng chọn xe sửa chữa</p>');
                ktra = false;
            }
            if($('#list-phu-tung').html() == "")
            {
                $('.error-phutung').html('<div class="error">Vui lòng nhập phụ tùng</div></p>');
                ktra = false;
            }
            $('input[name^="phutung"]').each(function()
            {
                // tasks.push($(this).val());
                if($(this).val() == "")
                {
                    $('.error-phutung-rong').html('<div class="error">Vui lòng nhập phụ tùng</div></p>');
                    ktra = false;
                }
            });
            if(ktra)
            {
                $( "#form-hoa-don").submit();
                // let dataForm = new FormData($('#form-hoa-don')[0]);
                // let url = $(this).attr('data-url');
                // base.callApiWithFormData( url, METHOD_POST, dataForm)
                //     .done(function (response) {
                //         if(response === "nhap-thieu")
                //         {
                //             $('.error-phutung').html('<div class="error">Vui lòng nhập phụ tùng</div></p>');
                //             return false;
                //         }
                //         comfirmAlert.showSuccessMessageAlert('Lưu thông tin thành công');
                //         window.location.href = window.location.origin+'/quanlysuachua/showhoadon/'+response['id'];
                //     })
                //     .fail(function (response){
                //         let errors = response.responseJSON.errors;
                //         for(let key in errors)
                //         {
                //             $(".error-"+key).html(errors[key]);
                //         }
                //     })
            }
        });

        $(document).on('click','#nhan-don-sua-chua',function() {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhandon()
                .then(result => {
                    if (result) {
                        $('#form-hoa-don').submit();
                    }
                });
        });


        $(document).on('click','#huy-don-sua-chua',function() {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhuydon()
                .then(result => {
                    if (result) {
                        base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Hủy thành công");
                                $('.chi-tiet-hoa-don').html(response)
                                $('.js-example-basic-single').select2();
                            });
                    }
                });
        });

        $(document).on('click','#len-hoa-don-sua-chua',function() {
            // var tasks= new Array();
            let ktra = true;
            $('input[name^="dongia"]').each(function()
            {
                // tasks.push($(this).val());
                if($(this).val() == "")
                {
                    $('.error-don-gia').html('<div class="error">Vui lòng nhập đơn giá phụ tùng</div></p>');
                    ktra = false;
                }
            });
            if(ktra)
            {
                $('.error-don-gia').html('');
                let dataForm = new FormData($('#form-hoa-don')[0]);
                let updateUrl = $(this).attr('data-url');
                comfirmAlert.confirmlendon()
                    .then(result => {
                        if (result) {
                            base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                                .done(function (response){
                                    comfirmAlert.showSuccessMessageAlert("Đã hoàn thành hóa đơn này");
                                    $('.chi-tiet-hoa-don').html(response)
                                    $('.js-example-basic-single').select2();
                                });
                        }
                    });
            }
        });

        $(document).on('click','.xoa-hoa-don',function() {
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        loading();
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa hóa đơn thành công");
                                $('.table-div').html(response);
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
            $('#danh-sach').html(html);
        }

        function getPosts(url_search)
        {
            loading();
            base.callApi( url_search, METHOD_GET)
                .done(function (response) {
                    $('.table').html(response);
                })
        }
    })
}(window.jQuery, window, document))
