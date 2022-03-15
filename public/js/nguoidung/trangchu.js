
(function ($, window, document) {
    $(function () {

        $( "#luu-binh-luan" ).click(function() {
            $('.error').html();
            $('#show-modal').modal("show");
            let timeout = setTimeout(function(){
                $('#show-modal').modal("hide");
            },2000);
            $( "#luu-phan-hoi" ).submit();
        });

    })
})(window.jQuery, window, document)
