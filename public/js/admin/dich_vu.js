import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document) {
    $(function () {
        $(document).on('click', '#add-dich-vu', function (event) {
            let dataForm = new FormData($('#form-add-dich-vu-post')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData(url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Thêm dịch vụ thành công");
                    $('#add-dich-vu-modal').modal("hide");
                })
                .fail(function (response) {
                    let errors = response.responseJSON.errors;
                    for (let key in errors) {
                        $(".error-" + key).html(errors[key]);
                    }
                });
        });

        $(document).on('click', '.model-update-dich-vu', function () {
            let url = $(this).attr('data-url');
            base.callApi(url)
                .done(function (response) {
                    $("#dich-vu-update").html(response);
                    $('#dich-vu-update-modal').modal("show");
                });
        });

        $(document).on('click', '#update-dich-vu', function () {
            let dataForm = new FormData($('#form-update-dich-vu-post')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData(url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Update dịch vụ thành công");
                    $('#dich-vu-update-modal').modal("hide");
                })
                .fail(function (response) {
                    let errors = response.responseJSON.errors;
                    for (let key in errors) {
                        $(".error-" + key).html(errors[key]);
                    }
                });
        });

        $(document).on('click', '.xoa-dich-vu', function () {
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response) {
                                if (response == "khong-the-xoa") {
                                    comfirmAlert.showErrorMessageAlert("Không thể xóa loại xe");
                                    return false;
                                }
                                comfirmAlert.showSuccessMessageAlert("Xóa Loại xe thành công");
                                $('#danh-sach-loai-xe').html(response);
                            });
                    }
                });
        });

        $(document).on('click','#add-phu-tung',function() {
            $('.error').html("");
            let maCuaHang = $('.ma-cua-hang').val();
            if(maCuaHang == "")
            {
                $('.error-iMa_cua_hang').html('<p>Vui lòng chọn cửa hàng</p>');

            }
            let data = {
                iMa_cua_hang: maCuaHang
            };
            let url = $(this).attr('data-url');
            base.callApiWithFormData(url, METHOD_POST, data)
                .done(function (response) {
                    $('.modal-body').html(response);
                    $('#modal-list-dich-vu').modal('show');
                });
        });

    })
}(window.jQuery, window, document))
