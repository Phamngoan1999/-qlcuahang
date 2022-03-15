export const METHOD_GET = "GET";
export const METHOD_POST = "POST";
export const METHOD_PATCH = "PATCH";
export const METHOD_DELETE = "DELETE";

function setupajax()
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

toastr.options = {
    "closeButton": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

const base = {
    callApiWithFormData: function callApiWithFormData( url, method, data){
        setupajax();
        return $.ajax({
            url: url,
            type: method,
            data: data,
            contentType: false,
            processData: false,
            beforeSend: function() {
                load()
            }
        })
    },
    callApi: function callApi(url, method = METHOD_GET, data= null){
        setupajax();
        return $.ajax({
            url: url,
            type: method,
            data: data
        })
    }
};

function load()
{
    $('#show-modal').modal("show");
    let timeout = setTimeout(function(){
        $('#show-modal').modal("hide");
    },2000);
}
export default base;
