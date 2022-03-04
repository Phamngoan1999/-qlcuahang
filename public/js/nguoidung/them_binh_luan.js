import base, {METHOD_POST} from "../base.js";
import comfirmAlert from "../comfirm.js";


(function ($, window, document) {
    $(function () {
        $(document).on('click','.msg_send_btn',function(event){
            let dataForm = new FormData($('#them-binh-luan')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    swal("Good job!", "You clicked the button!", "success");
                    let image = window.location.origin+'/Logo/tai-anh-dang-loading-messenger-trinh-duyet-anh-dong-gif-3.gif';
                    let html = "<div><img src="+image+"></div>";

                    setTimeout(function() {
                        $('#body').html(html);
                    }, 2000);
                    window.location.href = window.location.origin+'/Trangchitiet/'+response['iMa_xe'];
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
})(window.jQuery, window, document)
