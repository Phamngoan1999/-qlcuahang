import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";
import comfirmAlert from "../comfirm.js";


(function ($, window, document){
    $(function () {

        $(document).on('click','#add-phu-tung',function() {
            $('.error').html("");
            let data = {
                iMa_cua_hang: $('#maCuaHang').val(),
                iMa_hoa_don: $('#maHoaDon').val()
            };
            let url = $(this).attr('data-url');
            base.callApi(url, METHOD_GET, data)
                .done(function (response) {
                    $('.modal-body').html(response);
                    $('#modal-list-dich-vu').modal('show');

                });
        });

        $(document).on('click','.xoa-phu-tung-confirm',function() {
            $(this).parents( ".them-phu-tung" ).remove();
        });

        $(document).on('click', '.data-click', function (){
            let url = $(this).attr('data-url');
            let data;
            //lưu dữ liệu luôn
            if($(this).is(":checked")){
                data = {
                    'idCheck': $(this).val(),
                    'trangthai': 'add',
                    'hoa_don': ""
                };
            }else {
                data = {
                    'idCheck': $(this).val(),
                    'trangthai': 'remove',
                    'hoa_don': $('#idHoaDonSelect').val()
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
                'idCuaHangSelect': $('#idCuaHangSelect').val(),
                'idHoaDonSelect': $('#idHoaDonSelect').val()
            };
            base.callApi(url, METHOD_GET, data)
                .done(function (response){
                    $("#list-phu-tung").html(response);
                    $("#modal-list-dich-vu").modal("hide");
                })
        })

        $(document).on('click','.update-luu-thong-tin',function() {
            $('.error').html("");
            let ktra = true;
            var listItems = $("#list-phu-tung").children();
            var count = listItems.length;
            if(count == 0)
            {
                $('.error-phutung').html('<div class="error">Vui lòng nhập phụ tùng</div></p>');
                ktra = false;
            }
            if(ktra){
                let dataForm = new FormData($('#form-hoa-don')[0]);
                let url = $(this).attr('data-url');
                base.callApiWithFormData( url, METHOD_POST, dataForm)
                    .done(function (response) {
                        console.log(response);
                        comfirmAlert.showSuccessMessageAlert('Lưu thông tin thành công');
                    })
                    .fail(function (response){
                        let errors = response.responseJSON.errors;
                        for(let key in errors)
                        {
                            $(".error-"+key).html(errors[key]);
                        }
                    })
            }
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

        $(document).on('click', '.paginate-page-modal a', function(e) {
            e.preventDefault();
            let url_search = $(this).attr('href');
            getPostsModal(url_search);
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
