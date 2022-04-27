import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";


(function ($, window, document){
    $(function () {
        $(document).on('change','#gallery-photo-add-mua-xe',function(event){
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


        $(document).on('click','.ikon_xoa',function(event){
            $(this).parent( ".themanh" ).remove();
        });

        $(document).on('click','#tim-kiem',function(){
            $('.error').html("");
            let dataForm = new FormData($('#form-gia-dich-xe')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    $('#thong-tin-khach-hang').html(response);
                    $('#so_CMND').keyup(function () {
                        this.value = this.value.replace(/[^0-9\.]/g,'');
                    });
                    $('#so_dien_thoai').keyup(function () {
                        this.value = this.value.replace(/[^0-9\.]/g,'');
                    });
                    $('.js-example-basic-single').select2();
                })
        });


        $(document).on('click','#them-khach-hang-mua-xe',function(event) {
            $('.error').html("");
            let dataForm = new FormData($('#form-gia-dich-xe')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    if(response == "gia-ban-khong-hop-le")
                    {
                        $(".error-gia_ban").html("Giá bán không hợp lệ");
                        return false;
                    }
                    comfirmAlert.showSuccessMessageAlert('Lưu thông tin thành công');
                    $('.content-wrapper').html(response);
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
            $(this).parent( ".themanh" ).remove();
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(delete_Url, METHOD_DELETE)
                            .done(function (response){
                                if(response == "ko-the-xoa-anh")
                                {
                                    comfirmAlert.showErrorMessageAlert("Vui lòng gỡ thông tin xe trên web");
                                    return false;
                                }
                                comfirmAlert.showSuccessMessageAlert("Xóa ảnh thành công");
                            });
                    }
                });
        });
    })
}(window.jQuery, window, document))
