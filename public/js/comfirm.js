
const comfirmAlert = {
    confirm: function (){
        return swal({
            title: "Bạn chắc chắn xóa?",
            text: "Sau khi xóa bạn không thể khôi phục!",
            icon: "warning",
            buttons: true,
            dangerMode: true
        });
    },
    confirmnhandon: function (){
        return swal({
            title: "Bạn chắc chắn nhận đơn sửa chữa?",
            text: "Hãy lưu thông tin hóa đơn",
            icon: "success",
            buttons: true,
            dangerMode: true
        });
    },
    showSuccessMessageAlert: function showSuccessMessageAlert(title)
    {
        toastr.success(title);
    },
    showErrorMessageAlert: function showErrorMessageAlert(title)
    {
        toastr.error(title);
    },
    showErrorMessage: function showErrorMessage(errors)
    {
        for(let key in errors)
        {
            $(".error-"+key).html(errors[key]);
        }
    },
    resetError: function resetError()
    {
        $('.error').html("");
    }
};

export default comfirmAlert;
