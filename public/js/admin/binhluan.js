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
                                comfirmAlert.showSuccessMessageAlert("Xóa bình luận thành công");
                                // $('#danh-sach-cua-hang').html(response);
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
                    comfirmAlert.showSuccessMessageAlert("Update Dòng xe thành công!");
                    // $("#danh-sach-dong-xe").html(response);
                })
                .fail(function (response){
                    let errors = response.responseJSON.errors;
                    for(let key in errors)
                    {
                        $(".error-"+key).html(errors[key]);
                    }
                })
        });
    })
}(window.jQuery, window, document))
