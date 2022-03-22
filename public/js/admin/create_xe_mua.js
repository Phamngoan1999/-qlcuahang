import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";
function removeVietnameseTonesBienSo(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str = str.replace(/đ/g,"d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    // Some system encode vietnamese combining accent as individual utf-8 characters
    // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
    str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
    str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
    // Remove extra spaces
    // Bỏ các khoảng trắng liền nhau
    str = str.replace(/ + /g," ");
    str = str.trim();
    // Remove punctuations
    // Bỏ dấu câu, kí tự đặc biệt
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|{|}|\||\\/g," ");
    return str;
}
(function ($, window, document){
    $(function () {

        $( "#bien_so" ).keyup(function() {
            let str = $(this).val();
            let value = removeVietnameseTonesBienSo(str);
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
