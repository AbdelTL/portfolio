const loadMoreBtn = document.getElementById('load-more-btn');
let counter = 4;
let subset;

const loadMore = function (event) {
    event.preventDefault();
    const articlesSection = document.getElementById('articles');
    const data = new URLSearchParams();
    data.append('function', 'getPortfolio');

    fetch('http://localhost:8080/app/controllers/PortfolioController.php', {
        method: 'POST',
        body: data
    })
        .then(response => response.json())
        .then(result => {
            // console.log(result.length);

            subset = result.slice(counter, counter + 3);
            if (counter + 3 >= result.length)
                subset = result.slice(counter, result.length);
            counter += 3;


            subset.forEach(row => {
                // console.log(row);
                const newContent = '<a href=""><article><header><img src="public/assets/img/' + row.imgName + '" alt=""></header><section><h2>' + row.title + '</h2><p>' + row.object + '</p></section></article></a>';

                articlesSection.insertAdjacentHTML('afterbegin', newContent);
            });
            if (counter >= result.length) {
                loadMoreBtn.disabled = true;
                return;
            }
        });

}

var languageSelect = document.getElementById('language-select');

languageSelect.addEventListener('change', function() {
    var selectedLanguage = languageSelect.value;

    var newUrl = window.location.origin + window.location.pathname + '?lang=' + selectedLanguage;

    window.location.href = newUrl;
});

loadMoreBtn.addEventListener('click', loadMore)

