
(function ($, window, document) {
    $(function () {

        $("#tim-kiem").click(function () {
            $('#show-modal').modal("show");
            setTimeout(function () {
                $('#show-modal').modal("hide");
            }, 2000);
            $("#tim-kiem-theo-dieu-kien").submit();
        });

    });
})(window.jQuery, window, document)
