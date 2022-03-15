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
                    $('.paginate-page a').unbind('click').on('click', function(e) {
                        e.preventDefault();
                        let url_search  = $(this).attr('href');
                        getPosts(url_search);
                    });
                })
        })

        $(document).on('click', '.paginate-page a', function(e) {
            e.preventDefault();
            let url_search = $(this).attr('href');
            getPosts(url_search);
        });

        function loading()
        {
            let url_load = window.location.origin+'/Logo/loading.gif';
            let html = "<tr>\
                            <td colspan='7' class='text-center'>\
                                <img src='"+url_load+"' >\
                            </td>\
                        </tr>";
            $('#danh-sach-binh-luan').html(html);
        }

        function getPosts(url_search)
        {
            loading();
            base.callApi( url_search, METHOD_GET)
                .done(function (response) {
                    $('.table').html(response);
                })
        }
    })
}(window.jQuery, window, document))
