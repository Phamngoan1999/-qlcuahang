import base, {METHOD_PATCH, METHOD_POST} from "../base.js";
import comfirmAlert from "../comfirm.js";


(function ($, window, document) {
    $(function () {
        $(document).on('click','#update-thong-tin',function(event) {
            $('.error').html("");
            let dataForm = new FormData($('#update-thong-tin-tai-khoan')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Update Dòng xe thành công!");
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        })
    })
})(window.jQuery, window, document)
