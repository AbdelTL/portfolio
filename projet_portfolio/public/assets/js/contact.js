const emailCheck = (email) => /[a-zA-Z0-9-._]+@[a-zA-Z0-9-._]+\.[a-z]{2,}/.test(
    email)
const errorContainer = document.querySelector('form p:first-of-type')
const email = document.getElementById('email')

const eventInputEmail = function (event) {
    if (emailCheck(email.value)) {
        email.classList.remove('error')
        errorContainer.innerText = ''
        email.style.borderColor= ''

        return true;
    } else {
        errorContainer.innerText = 'L\'email n\'a pas le bon format'
        email.style.borderColor = 'red'
        email.classList.add('error')
    }
}

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

document.querySelector('form')
    .addEventListener('submit', (event) => {
        event.preventDefault()
        eventInputEmail(event)
        email.addEventListener('input', eventInputEmail)
        if(eventInputEmail(event)){
        submitAjax(event);}
    })