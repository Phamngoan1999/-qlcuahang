import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";


(function ($, window, document){
    $(function () {

        $( "#dung_tich" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSug(str);
            $(this).val(value);
        });

        $( "#gia_dang_web" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSpecail(str);
            $(this).val(value);
        });

        $( "#so_km_di" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSug(str);
            $(this).val(value);
        });

        $(document).on('change','#gallery-photo-avata-web', function(e) {
            let reader = new FileReader();
            reader.onload = function (e){
                $('#thumbnail').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $(document).on('change','#gallery-photo-add-web',function(event){
            let  kiemtra = "ok";
            if (this.files) $.each(this.files, ktraanh);
            function ktraanh(i, file) {
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    kiemtra = "not-ok";
                }
            }
            if(kiemtra === "not-ok")
            {
                alert("Vui lòng chọn file ảnh");
                return false;
            }
            if(kiemtra)
            {
                if (this.files) $.each(this.files, readAndPreview);
                function readAndPreview(i, file) {
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
            }
        });

        $(document).on('click','#update-thong-tin',function(event){
            let dataForm = new FormData($('#form-dang-thong-tin-xe-web')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Đăng thông tin thành công");
                    $('.content-wrapper').html(response);
                    $('.js-example-basic-single').select2();
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click','#delete-thong-tin-web',function(event){
            let dataForm = new FormData($('#form-dang-thong-tin-xe-web')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Gỡ thông tin thành công");
                    $('.content-wrapper').html(response);
                    $('.js-example-basic-single').select2();
                    $( "#dung_tich" ).keyup(function() {
                        let str = $(this).val();
                        let value = base.checkSug(str);
                        $(this).val(value);
                    });

                    $( "#gia_dang_web" ).keyup(function() {
                        let str = $(this).val();
                        let value = base.checkSpecail(str);
                        $(this).val(value);
                    });

                    $( "#so_km_di" ).keyup(function() {
                        let str = $(this).val();
                        let value = base.checkSug(str);
                        $(this).val(value);
                    });
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click','#update-thong-tin-web',function(event){
            let dataForm = new FormData($('#form-dang-thong-tin-xe-web')[0]);
            let url = $(this).attr('data-url');
            dataForm.append('_method', METHOD_PATCH);
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert("Update thành công web thành công");
                    $('.content-wrapper').html(response);
                    $('.js-example-basic-single').select2();
                    $( "#dung_tich" ).keyup(function() {
                        let str = $(this).val();
                        let value = base.checkSug(str);
                        $(this).val(value);
                    });

                    $( "#gia_dang_web" ).keyup(function() {
                        let str = $(this).val();
                        let value = base.checkSpecail(str);
                        $(this).val(value);
                    });

                    $( "#so_km_di" ).keyup(function() {
                        let str = $(this).val();
                        let value = base.checkSug(str);
                        $(this).val(value);
                    });
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click', '.xoa-anh-web', function() {
            let delete_Url = $(this).attr("data-url");
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
                                $('.image_preview').html(response);
                            });
                    }
                });
        });

        $(document).on('click','.ikon_xoa',function(event){
            $(this).parent( ".themanh" ).remove();
        });


})
}(window.jQuery, window, document))
