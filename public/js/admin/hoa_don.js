import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";
import comfirmAlert from "../comfirm.js";


(function ($, window, document){
    $(function () {

        $(document).on('click','#add-phu-tung',function(event) {
            let them = $('.phu-tung').html();
            $('#list-phu-tung').append(them);
        });

        $(document).on('click','#add-luu-thong-tin',function(event) {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert('Lưu thông tin thành công')
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
}(window.jQuery, window, document))
