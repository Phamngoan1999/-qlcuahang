import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document){
    $(function () {

        $(document).on('click','.xoa-binh-luan',function(){
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                console.log(response);
                                comfirmAlert.showSuccessMessageAlert("Xóa bình luận thành công");
                                $('.table').html(response);
                                $('.paginate-page a').unbind('click').on('click', function(e) {
                                    e.preventDefault();
                                    let url_search  = $(this).attr('href');
                                    getPosts(url_search);
                                });
                            });
                    }
                });
        });

        $(document).on('click','.model-tra-loi',function(){
            let updateId = $(this).val();
            let url = $(this).attr('data-url');
            base.callApi(url, METHOD_GET, updateId)
                .done(function (response) {
                    $('#form-binh-luan').html(response);
                    $('#modal-show-binh-luan').modal('show');
                });
        });

        $(document).on('click', '.update-binh-luan', function(){
            let dataForm = new FormData($('#form-show-binh-luan')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $("#modal-show-binh-luan").modal("hide");
                    comfirmAlert.showSuccessMessageAlert("Update bình luận thành công!");
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click', '#tim-kiem', function(){
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
        });

        $(document).on('click', '.paginate-page a', function(e) {
            e.preventDefault();
            let url_search = $(this).attr('href');
            getPosts(url_search);
        });

        function loading()
        {
            let url_load = window.location.origin+'/Logo/loading.gif';
            let html = "<tr>\
                            <td colspan='6' class='text-center'>\
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
