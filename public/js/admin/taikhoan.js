import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document){
    $(function () {

        $(document).on('click', '.add-cua-hang', function(){
            $('.error').html("");
            let dataForm = new FormData($('#form-add-cua-hang')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $("#cap-tai-khoan-modal").modal("hide");
                    comfirmAlert.showSuccessMessageAlert("Cấp tài khoản thành công");
                    $('#danh-sach-cua-hang').html(response);
                    $(".name-cua-hang").val("");
                    $(".email-cua-hang").val("");
                    $(".diachi-cua-hang").val("");
                    $(".matkhau-cua-hang").val("");
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

        $(document).on('click', '.show-cua-hang', function(){
            let url = $(this).attr('data-url');
            base.callApi(url)
                .done(function (response) {
                    $('.show-info-cua-hang').html(response);
                    $('#update-tai-khoan-modal').modal('show');
                })
        });


        $(document).on('click', '.update-cua-hang', function(){
            let dataForm = new FormData($('#form-update-cua-hang')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $("#update-tai-khoan-modal").modal("hide");
                    comfirmAlert.showSuccessMessageAlert("Update tài khoản thành công");
                    $('#danh-sach-cua-hang').html(response);
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    console.log(errors);
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click', '.xoa-tai-khoan-cua-hang', function(){
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa Tài khoản thành công");
                                $('#danh-sach-cua-hang').html(response);
                            });
                    }
                });
        });

        $(document).on('click', '#them-tai-khoan', function(){
            comfirmAlert.resetError();
            $('input').val("");
        });
    })
}(window.jQuery, window, document))
