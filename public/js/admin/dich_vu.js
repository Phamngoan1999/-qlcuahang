import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";

import comfirmAlert from "../comfirm.js";

(function ($, window, document) {
    $(function () {
        $(document).on('click', '#add-dich-vu', function () {
            if($('.ten_dich_vu_create').val() == ''){
                $('.error-ten_dich_vu').html("Vui lòng nhập tên dịch vụ")
                return false;
            }
            let gia = $('.gia_dich_vu_create').val();
            if(gia == ''){
                $('.error-gia_dich_vu').html("Vui lòng đơn giá dịch vụ")
                return false;
            }
            if(gia.substr(0, 1) == 0){
                $('.error-gia_dich_vu').html("Vui lòng chính xác đơn giá dịch vụ")
                return false;
            }
            $('#form-add-dich-vu-post').submit();
        });

        $(document).on('click', '.model-update-dich-vu', function () {
            let url = $(this).attr('data-url');
            base.callApi(url)
                .done(function (response) {
                    $("#dich-vu-update").html(response);
                    $('#dich-vu-update-modal').modal("show");
                });
        });

        $(document).on('click', '#update-dich-vu', function () {

            if($('.ten_dich_vu_update').val() == ''){
                $('.error-ten_dich_vu').html("Vui lòng nhập tên dịch vụ")
                return false;
            }
            let gia = $('.gia_dich_vu_update').val();
            if(gia == ''){
                $('.error-gia_dich_vu').html("Vui lòng đơn giá dịch vụ")
                return false;
            }
            if(gia.substr(0, 1) == 0){
                $('.error-gia_dich_vu').html("Vui lòng chính xác đơn giá dịch vụ")
                return false;
            }
            $('#form-update-dich-vu-post').submit();


            // let dataForm = new FormData($('#form-update-dich-vu-post')[0]);
            // let url = $(this).attr('data-url');
            // dataForm.append('_method', METHOD_PATCH);
            // base.callApiWithFormData(url, METHOD_POST, dataForm)
            //     .done(function (response) {
            //         comfirmAlert.showSuccessMessageAlert("Update dịch vụ thành công");
            //         $('#dich-vu-update-modal').modal("hide");
            //     })
            //     .fail(function (response) {
            //         let errors = response.responseJSON.errors;
            //         for (let key in errors) {
            //             $(".error-" + key).html(errors[key]);
            //         }
            //     });
        });

        $(document).on('click','#tim-kiem-dich-vu', function (){
            let dataForm = $('#form_dich_vu_search').serialize();
            let url = $(this).attr('data-url');
            loading();
            base.callApi(url, METHOD_GET, dataForm)
                .done(function (response) {
                    $('#table-row').html(response);
                })
                .fail(function (response) {
                    let errors = response.responseJSON.errors;
                    for (let key in errors) {
                        $(".error-" + key).html(errors[key]);
                    }
                });
        });

        $(document).on('click', '.xoa-dich-vu', function () {
            let idDichVu = $(this).attr('data-id');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        $('#delete-dich-vu-form-'+idDichVu).submit();
                    }
                });
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
                            <td colspan='5' class='text-center'>\
                                <img src='"+url_load+"' >\
                            </td>\
                        </tr>";
            $('.danh-sach-load').html(html);
        }

        function getPosts(url_search)
        {
            loading();
            base.callApi( url_search, METHOD_GET)
                .done(function (response) {
                    $('#table-row').html(response);
                })
        }

        $(document).on('click','#add-phu-tung',function() {
            $('.error').html("");
            let maCuaHang = $('.ma-cua-hang').val();
            if(maCuaHang == "")
            {
                $('.error-iMa_cua_hang').html('<p>Vui lòng chọn cửa hàng</p>');

            }
            let data = {
                iMa_cua_hang: maCuaHang
            };
            let url = $(this).attr('data-url');
            base.callApiWithFormData(url, METHOD_POST, data)
                .done(function (response) {
                    $('.modal-body').html(response);
                    $('#modal-list-dich-vu').modal('show');
                });
        });

    })
}(window.jQuery, window, document))
