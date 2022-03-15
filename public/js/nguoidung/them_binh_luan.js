
(function ($, window, document) {
    $(function () {

        $( ".msg_send_btn" ).click(function() {
            $('#show-modal').modal("show");
            let timeout = setTimeout(function(){
                $('#show-modal').modal("hide");
            },2000);
            $( "#them-binh-luan" ).submit();
        });

    })
})(window.jQuery, window, document)
