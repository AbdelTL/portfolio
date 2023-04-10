const submitAjax = function (event) {
    let form = event.target;
    $.ajax({
        url: $(form).attr('action'),
        type: "POST",
        data: new FormData(form),
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            $(form).trigger("reset"); // to reset form input fields
        },
        error: function (e) {
            console.log(e);
        }
    });
}
document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault()
    submitAjax(event);
})
