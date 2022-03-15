import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document){
    $(function () {

        $(document).on('click','#tim-kiem',function() {
            let dataSearch = $('#form-search').serialize();
            let url = $(this).attr('data-url');
            loading();
            base.callApi( url, METHOD_GET, dataSearch)
                .done(function (response) {
                    $('.table').html(response);
                })
        })


        function loading()
        {
            let url_load = window.location.origin+'/Logo/loading.gif';
            let html = "<tr>\
                            <td colspan='7' class='text-center'>\
                                <img src='"+url_load+"' >\
                            </td>\
                        </tr>";
            $('#report').html(html);
        }

    })
}(window.jQuery, window, document))
