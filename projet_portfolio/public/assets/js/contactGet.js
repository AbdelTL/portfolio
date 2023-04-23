const emailCheck = (email) => /[a-zA-Z0-9-._]+@[a-zA-Z0-9-._]+\.[a-z]{2,}/.test(
    email)
const errorContainer = document.querySelector('form p:first-of-type')
const email = document.getElementById('email')

const eventInputEmail = function (event) {
    if (emailCheck(email.value)) {
        email.classList.remove('error')
        errorContainer.innerText = ''
        email.style.borderColor = ''

        return true;
    } else {
        errorContainer.innerText = 'L\'email n\'a pas le bon format'
        email.style.borderColor = 'red'
        email.classList.add('error')
    }
}

const form = document.querySelector('form');
const onSubmit = function (event) {
    event.preventDefault()
    eventInputEmail(event)
    email.addEventListener('input', eventInputEmail)
    if (eventInputEmail(event)) {
        const formData = new FormData(form);
        const formDataQueryString = new URLSearchParams(formData).toString();
        const options = {
            method: 'GET',
        };

        fetch(`http://localhost:8080/app/controllers/ContactController.php?${formDataQueryString}`, options)
            .then(response => {
                if (response.ok) {
                    form.reset();
                } else {
                    alert('There was a problem submitting the form. Please try again later.');
                }
            })

    }
}

form.addEventListener('submit', onSubmit)
