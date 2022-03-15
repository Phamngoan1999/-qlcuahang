import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document){
    $(function () {

        $(document).on('click', '#update-thong-tin', function() {
            $('.error').html("");
            let dataForm = new FormData($('#form-update-thong-tin-xe')[0]);
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
        })

        $(document).on('click', '.xoa-anh', function() {
            let delete_Url = $(this).attr("data-url");
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(delete_Url, METHOD_DELETE)
                            .done(function (response){
                                console.log(response);
                                if(response == "ko-the-xoa-anh")
                                {
                                    comfirmAlert.showErrorMessageAlert("Không thể xóa ảnh");
                                    return false;
                                }
                                comfirmAlert.showSuccessMessageAlert("Xóa ảnh thành công");
                                $('.gallery').html(response);
                            });
                    }
                });
        })

        $(document).on('click', '.xoa-anh-web', function() {
            let delete_Url = $(this).attr("data-url");
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(delete_Url, METHOD_DELETE)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa ảnh thành công");
                                $('.image_preview').html(response);
                            });
                    }
                });
        })
    })
}(window.jQuery, window, document))
