import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document){
    $(function () {

        $( "#bien_so" ).keyup(function() {
            let str = $(this).val();
            let value = base.removeVietnameseTonesBienSo(str);
            $(this).val(value);
        });

        $( "#so_may" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSug(str);
            $(this).val(value);
        });

        $( "#so_khung" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSug(str);
            $(this).val(value);
        });

        $( "#dung_tich" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSug(str);
            $(this).val(value);
        });

        $( "#dang_ky_tai" ).keyup(function() {
            let str = $(this).val();
            let value = base.checkSpecail(str);
            $(this).val(value);
        });

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
    })
}(window.jQuery, window, document))
