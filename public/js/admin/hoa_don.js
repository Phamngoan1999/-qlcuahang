import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";
import comfirmAlert from "../comfirm.js";


(function ($, window, document){
    $(function () {

        $(document).on('change','.ma-cua-hang',function (){
            $('#list-phu-tung').html("");
        })

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
            base.callApi(url, METHOD_GET, data)
                .done(function (response) {
                    $('.modal-body').html(response);
                    $('#modal-list-dich-vu').modal('show');
                });
        });

        $(document).on('click', '.data-click', function (){
            let url = $(this).attr('data-url');
            let data;
            //lưu dữ liệu luôn
            if($(this).is(":checked")){
                data = {
                    'idCheck': $(this).val(),
                    'trangthai': 'add'
                };
            }else {
                data = {
                    'idCheck': $(this).val(),
                    'trangthai': 'remove'
                };
            }
            base.callApi( url, METHOD_GET, data)
                .done(function (response){
                    console.log(response);
                });
        })

        $(document).on('click','#luu-dich-vu',function(e) {
            let url = $(this).attr('data-url');
            let data = {
                'idCuaHangSelect': $('#idCuaHangSelect').val()
            };
            base.callApi(url, METHOD_GET, data)
                .done(function (response){
                    $("#list-phu-tung").html(response);
                    $("#modal-list-dich-vu").modal("hide");
                })
        })

        $(document).on('click','.xoa-no-confirm',function() {
            $(this).parents( ".them-phu-tung" ).remove();
        });

        $(document).on('click','.xoa-phu-tung-confirm',function() {
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                if(response === "Hay-xoa-hoa-don")
                                {
                                    comfirmAlert.showErrorMessageAlert("Không thể xóa phụ tùng này");
                                    return false;
                                }
                                comfirmAlert.showSuccessMessageAlert("Xóa phụ tùng thành công");
                                window.location.href = window.location.origin+'/quanlysuachua/showhoadon/'+response;
                            });
                    }
                });
        });

        // $(document).on('click','.update-luu-thong-tin',function() {
        //     $('.error').html("");
        //     let dataForm = new FormData($('#form-hoa-don')[0]);
        //     dataForm.append('_method', METHOD_PATCH);
        //     let url = $(this).attr('data-url');
        //     base.callApiWithFormData( url, METHOD_POST, dataForm)
        //         .done(function (response) {
        //             if(response === "nhap-thieu")
        //             {
        //                 $('.error-phutung').html('<div class="error">Vui lòng nhập phụ tùng</div></p>');
        //                 return false;
        //             }
        //             comfirmAlert.showSuccessMessageAlert('Lưu thông tin thành công');
        //             window.location.href = window.location.origin+'/quanlysuachua/showhoadon/'+response['id'];
        //         })
        //         .fail(function (response){
        //             let errors = response.responseJSON.errors;
        //             for(let key in errors)
        //             {
        //                 $(".error-"+key).html(errors[key]);
        //             }
        //         })
        // });

        $(document).on('click','#add-luu-thong-tin',function() {
            $('.error').html("");
            let ktra = true;
            if($('.ma-cua-hang').val() == "")
            {
                $('.error-iMa_cua_hang').html('<p>Vui lòng chọn cửa hàng</p>');
                ktra = false;
            }
            if($('.xe-sua-chua').val() == "")
            {
                $('.error-iMa_xe').html('<p>Vui lòng chọn xe sửa chữa</p>');
                ktra = false;
            }
            var listItems = $("#list-phu-tung").children();
            var count = listItems.length;
            if(count == 0)
            {
                $('.error-phutung').html('<div class="error">Vui lòng nhập phụ tùng</div></p>');
                ktra = false;
            }
            $('input[name^="phutung"]').each(function()
            {
                // tasks.push($(this).val());
                if($(this).val() == "")
                {
                    $('.error-phutung-rong').html('<div class="error">Vui lòng nhập phụ tùng</div></p>');
                    ktra = false;
                }
            });
            if(ktra)
            {
                $( "#form-hoa-don").submit();
            }
        });

        $(document).on('click','#nhan-don-sua-chua',function() {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhandon()
                .then(result => {
                    if (result) {
                        $('#form-hoa-don').submit();
                    }
                });
        });


        $(document).on('click','#huy-don-sua-chua',function() {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhuydon()
                .then(result => {
                    if (result) {
                        base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Hủy thành công");
                                $('.chi-tiet-hoa-don').html(response)
                                $('.js-example-basic-single').select2();
                            });
                    }
                });
        });

        $(document).on('click','#len-hoa-don-sua-chua',function() {
            // var tasks= new Array();
            let ktra = true;
            $('input[name^="dongia"]').each(function()
            {
                // tasks.push($(this).val());
                if($(this).val() == "")
                {
                    $('.error-don-gia').html('<div class="error">Vui lòng nhập đơn giá phụ tùng</div></p>');
                    ktra = false;
                }
            });
            if(ktra)
            {
                $('.error-don-gia').html('');
                let dataForm = new FormData($('#form-hoa-don')[0]);
                let updateUrl = $(this).attr('data-url');
                comfirmAlert.confirmlendon()
                    .then(result => {
                        if (result) {
                            base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                                .done(function (response){
                                    comfirmAlert.showSuccessMessageAlert("Đã hoàn thành hóa đơn này");
                                    $('.chi-tiet-hoa-don').html(response)
                                    $('.js-example-basic-single').select2();
                                });
                        }
                    });
            }
        });

        $(document).on('click','.xoa-hoa-don',function() {
            let deleteUrl = $(this).attr('data-url');
            comfirmAlert.confirm()
                .then(result => {
                    if (result) {
                        loading();
                        base.callApi(deleteUrl, METHOD_DELETE)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Xóa hóa đơn thành công");
                                $('.table-div').html(response);
                            });
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
                    $('.table').html(response);
                })
        }

        $(document).on('click', '.paginate-page-modal a', function(e) {
            e.preventDefault();
            let url_search = $(this).attr('href');
            getPostsModal(url_search);
        });

        function loadingModal()
        {
            let url_load = window.location.origin+'/Logo/loading.gif';
            let html = "<tr>\
                            <td colspan='6' class='text-center'>\
                                <img src='"+url_load+"' >\
                            </td>\
                        </tr>";
            $('#danh-sach-load-modal').html(html);
        }

        function getPostsModal(url_search)
        {
            loadingModal();
            base.callApi( url_search, METHOD_GET)
                .done(function (response) {
                    $('.table-modal').html(response);
                })
        }
    })
}(window.jQuery, window, document))
