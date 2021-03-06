import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document) {
    $(function () {

        $(document).on('click','#update-thong-tin-khach-hang',function(){
            $('.error').html("");
            let dataForm = new FormData($('#form-update-khach-hang')[0]);
            dataForm.append('_method', METHOD_PATCH);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Update thông tin khách hàng thành công");
                    window.location.href = window.location.origin+'/quanlykhachhang/showkhachang/'+response['id'];
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
