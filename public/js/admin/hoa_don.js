import base, {METHOD_GET, METHOD_POST, METHOD_PATCH, METHOD_DELETE} from "../base.js";
import comfirmAlert from "../comfirm.js";


(function ($, window, document){
    $(function () {

        $(document).on('click','#add-phu-tung',function(event) {
            let them = $('.phu-tung').html();
            $('#list-phu-tung').append(them);
        });

        $(document).on('click','.xoa-phu-tung',function(event) {
            $(this).parents( ".them-phu-tung" ).remove();
        });

        $(document).on('click','#add-luu-thong-tin',function(event) {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let url = $(this).attr('data-url');
            base.callApiWithFormData( url, METHOD_POST, dataForm)
                .done(function (response) {
                    comfirmAlert.showSuccessMessageAlert('Lưu thông tin thành công');
                    window.location.href = window.location.origin+'/quanlysuachua/themhoadon';
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });

        $(document).on('click','#nhan-don-sua-chua',function(event) {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhandon()
                .then(result => {
                    if (result) {
                        base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Nhận đơn thành công");
                            });
                    }
                });
        });


        $(document).on('click','#huy-don-sua-chua',function(event) {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhandon()
                .then(result => {
                    if (result) {
                        base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                            .done(function (response){
                                comfirmAlert.showSuccessMessageAlert("Hủy thành công");
                            });
                    }
                });
        });

        $(document).on('click','#len-hoa-don-sua-chua',function(event) {
            let dataForm = new FormData($('#form-hoa-don')[0]);
            let updateUrl = $(this).attr('data-url');
            comfirmAlert.confirmnhandon()
                .then(result => {
                    if (result) {
                        base.callApiWithFormData( updateUrl, METHOD_POST, dataForm)
                            .done(function (response){
                                console.log(response);
                                // comfirmAlert.showSuccessMessageAlert("Hủy thành công");
                            });
                    }
                });
        });
    })
}(window.jQuery, window, document))
