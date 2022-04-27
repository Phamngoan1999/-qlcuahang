import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document){
    $(function () {

        $(document).on('change','#gallery-photo-add',function(event){
            if (this.files) $.each(this.files, readAndPreview);
            function readAndPreview(i, file) {
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
                    return alert(file.name +" is not an image");
                }
                var html = "";
                var reader = new FileReader();
                $(reader).on("load", function() {
                    html += '<div class="themanh">\
                                <image src="'+this.result+'" class="anh"  width="150px" height="150px"/>\
                                <button type="button" class="btn btn-danger ikon_xoa" title = "Xóa ảnh"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>\
                            </div>';
                    $('div.gallery').append(html);
                });
                reader.readAsDataURL(file);
            }
        });

        $(document).on('change','#gallery-photo-add-web',function(event){
            if (this.files) $.each(this.files, readAndPreview);
            function readAndPreview(i, file) {
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
                    return alert(file.name +" is not an image");
                }
                var html = "";
                var reader = new FileReader();
                $(reader).on("load", function() {
                    html += '<div class="themanh">\
                                <image src="'+this.result+'" class="anh"  width="150px" height="150px"/>\
                                <button type="button" class="btn btn-danger ikon_xoa" title = "Xóa ảnh"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>\
                            </div>';
                    $('div.image_preview').append(html);
                });
                reader.readAsDataURL(file);
            }
        });

        $(document).on('click','.ikon_xoa',function(event){
            $(this).parent( ".themanh" ).remove();
        });

        $(document).on('click', '#them-xe', function() {
            $('.error').html("");
            let dataForm = new FormData($('#form-them-xe')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Thêm gia dịch thành công");
                    window.location.href = window.location.origin+'/quanlyxe/editthongtinxe/'+response['id'];
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click', '.xoa-thong-tin-xe', function(){
            let dataSearch = $('#form-search').serialize();
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        loading();
                        base.callApi(deleteUrl, METHOD_DELETE,dataSearch)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa Thông tin xe thành công");
                                $('.danh-sach-load').html(response);
                                $('.paginate-page a').unbind('click').on('click', function(e) {
                                    e.preventDefault();
                                    let url_search  = $(this).attr('href');
                                    getPosts(url_search);
                                });
                            });
                    }
                });
        });

        $(document).on('click', '#search', function() {
            let dataSearch = $('#form-search').serialize();
            let url = $(this).attr('data-url');
            loading();
            base.callApi( url, METHOD_GET, dataSearch)
                .done(function (response) {
                    $('.danh-sach-load').html(response);
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
            $('#danh-sach').html(html);
        }

        function getPosts(url_search)
        {
            loading();
            base.callApi( url_search, METHOD_GET)
                .done(function (response) {
                    $('.danh-sach-load').html(response);
                })
        }
    })
}(window.jQuery, window, document))
