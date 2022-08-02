function showToster(status, message) {
    // alert("Hello");
    toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: 'slideDown',
        timeOut: 2000
    };
    if (status == 'success') {
        toastr.success(message, 'Success');
    }
    if (status == 'error') {
        toastr.error(message, 'Fail');

    }
    if (status == 'warning') {
        toastr.warning(message, 'Warning');

    }
}
