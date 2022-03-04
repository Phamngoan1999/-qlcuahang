import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "./base.js";

import comfirmAlert from "./comfirm.js";

(function ($, window, document){
    $(function () {

        $(document).on('click', '#add-hang-xe', function(){
            let dataForm = new FormData($('#form-add-hang-xe')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $("#add-hang-xe-modal").modal('hide');
                    comfirmAlert.showSuccessMessageAlert("Thêm Hãng xe thành công!");
                    $('#danh-sach-hang-xe').html(response);
                    $('#hangxe').val("");
                }).fail(function (response) {
                    $('.error-hangxe').html("Vui lòng nhập tên hãng xe!");
                })
        });

        $(document).on('click', '.xoa-hang-xe', function(){
            let deleteUrl = $(this).attr('data-url-delete');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa Hãng xe thành công");
                                $('#danh-sach-hang-xe').html(response);
                            });
                    }
                });
        });

        $(document).on('click', '.show-modal-hang-xe', function(){
            let updateId = $(this).val();
            let url = $(this).attr('data-url-show');
            base.callApi(url, METHOD_GET, updateId)
                .done(function (response) {
                    $('#form-show-hang-xe').html(response);
                    $('#show-hang-xe-modal').modal('show');
                });
        });

        $(document).on('click', '.edit-hang-xe', function(){
            let dataForm = new FormData($('#form-show-hang-xe')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $("#show-hang-xe-modal").modal("hide");
                    comfirmAlert.showSuccessMessageAlert("Update Hãng xe thành công!");
                    $("#danh-sach-hang-xe").html(response);
                })
        });

        $(document).on('click', '#add-loai-xe', function(){
            $('.error').html();
            let dataForm = new FormData($('#form-add-loai-xe')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {

                    $("#modal-add-loai-xe").modal('hide');
                    comfirmAlert.showSuccessMessageAlert("Thêm loại xe thành công");
                    $('#danh-sach-loai-xe').html(response);
                })
                .fail(function (response){
                    $('.error-loaixe').html("Vui lòng nhập loại xe!");
                })
        });

        $(document).on('click', '.xoa-loai-xe', function(){
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa Loại xe thành công");
                                $('#danh-sach-loai-xe').html(response);
                            });
                    }
                });
        });

        $(document).on('click', '.show-modal-loai-xe', function(){
            let updateId = $(this).val();
            let url = $(this).attr('data-url');
            base.callApi(url, METHOD_GET, updateId)
                .done(function (response) {
                    $('#form-show-loai-xe').html(response);
                    $('#show-loai-xe-modal').modal('show');
                });
        });

        $(document).on('click', '.edit-loai-xe', function(){
            let dataForm = new FormData($('#form-show-loai-xe')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $("#show-loai-xe-modal").modal("hide");
                    comfirmAlert.showSuccessMessageAlert("Update Loại xe thành công");
                    $("#danh-sach-loai-xe").html(response);
                })
        });

        $(document).on('click', '#add-dong-xe', function(){
            let dataForm = new FormData($('#form-add-dong-xe-post')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $("#btn-add-dong-xe").modal("hide");
                    comfirmAlert.showSuccessMessageAlert("Thêm dòng xe thành công");
                    $('#danh-sach-dong-xe').html(response);
                    $('input').val("");
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click', '.xoa-dong-xe', function(){
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa Dòng xe thành công");
                                $('#danh-sach-dong-xe').html(response);
                            });
                    }
                });
        });

        $(document).on('click', '.show-dong-xe', function(){
            let url = $(this).attr('data-url');
            base.callApi(url, METHOD_GET)
                .done(function (response) {
                    $('.form-update-dongxe').html(response);
                    $('#modal-edit-dong-xe').modal('show');
                    $('.js-example-basic-single').select2();
                });
        });

        $(document).on('click', '.update-dong-xe', function(){
            let dataForm = new FormData($('#form-update-dong-xe-post')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $("#modal-edit-dong-xe").modal("hide");
                    comfirmAlert.showSuccessMessageAlert("Update Dòng xe thành công!");
                    $("#danh-sach-dong-xe").html(response);
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click', '.btn-click-hangxe', function(){
            $('.error').html("");
        });

        $(document).on('click', '.btn-click-loaixe', function(){
            $('.error').html("");
        });

        $(document).on('click', '.btn-add-dong-xe', function(){
            $('.error').html("");
        });
    })
}(window.jQuery, window, document))
