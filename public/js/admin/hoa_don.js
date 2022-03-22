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
            let dataForm = new FormData($('#form-hoa-don')[0]);
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

        $(document).on('click','#nhan-don-sua-chua',function() {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhandon()
                .then(result => {
                    if (result) {
                        base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Nhận đơn thành công");
                                $('.chi-tiet-hoa-don').html(response)
                                $('.js-example-basic-single').select2();
                                $(".don-gia-validate").on('input', function(e){
                                    $(this).val(formatCurrency(this.value.replace(/[,VNĐ]/g,'')));
                                }).on('keypress',function(e){
                                    if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
                                }).on('paste', function(e){
                                    var cb = e.originalEvent.clipboardData || window.clipboardData;
                                    if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
                                });
                            });
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
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhandon()
                .then(result => {
                    if (result) {
                        base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                            .done(function (response){
                                if(response === "nhap-thieu-don-gia")
                                {
                                    $('.error-don-gia').html('<div class="error">Vui lòng nhập đơn giá phụ tùng</div></p>');
                                    return false;
                                }
                                comfirmAlert.showSuccessMessageAlert("Đã hoàn thành hóa đơn này");
                                $('.chi-tiet-hoa-don').html(response)
                                $('.js-example-basic-single').select2();
                            });
                    }
                });
        });

        $(document).on('click','.xoa-hoa-don',function() {
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa hóa đơn thành công");
                                $('.table-div').html(response);
                            });
                    }
                });
        });
    })
}(window.jQuery, window, document))
