import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document){
    $(function () {

        $(document).on('click','#update-thong-tin',function(event){
            let dataForm = new FormData($('#form-dang-thong-tin-xe-web')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Đăng thông tin thành công");
                    $('.group-button').show();
                    $('.button-hide').hide();
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

    })
}(window.jQuery, window, document))
