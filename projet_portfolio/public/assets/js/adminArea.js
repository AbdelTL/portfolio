const form = document.querySelector('form');

const submitAjax = function (event) {
    const data = new FormData(form);
    data.append('function', 'createPortfolio');


    fetch('http://localhost:8080/app/controllers/PortfolioController.php', {
        method: 'POST',
        body: data
    })
        .then(response => {
            if (response.ok) {
                // alert('Form submitted successfully!');
                form.reset();
            } else {
                alert('Error submitting form.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });

}
document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault()
    submitAjax(event);
})
