<?php
include dirname(__FILE__) . '/app/servicesImpl/PortfolioBaseImpl.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="portfolio"/>
    <title>portfolio</title>

    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/navbar.css">
    <link rel="stylesheet" href="/public/assets/css/footer.css">
    <script src="/public/assets/js/script.js" defer></script>
    <script src="/public/assets/js/navbar.js" defer></script>
</head>
<body>
<?php


if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
    include 'public/assets/locales/' . $language . '.php';
} else
    if (isset($_GET['lang'])) {
        $language = $_GET['lang'];
        setcookie('language', $language, time() + 3600 * 24 * 30); //  cookie  expire in 30 days

    } else {
        $language = 'en';
    }

include 'public/assets/locales/' . $language . '.php';

?>

<?php include 'public/assets/template/navbar.php'; ?>


<main>


    <fieldset>
        <legend> &emsp;&emsp;SOME OF MY LATEST WORK&emsp;
        </legend>
    </fieldset>
    <a href="">
        see all
    </a>

    <section id="articles">

        <?php
        $portfolio = new PortfolioBaseImpl();
        $items = $portfolio->getPortfolio();
        $numItems = count($items);
        $maxItems = 4;
        if ($maxItems >= $numItems)
            $maxItems = $numItems;
        for ($i = 0; $i < $maxItems; $i++) {
            $item = $items[$i];
            ?>
            <a href="" style="color: white">
                <article>
                    <header>
                        <img src="public/assets/img/<?php echo $item['imgName']; ?>" alt="">
                    </header>
                    <section>
                        <h2 style="white-space: nowrap;"><?php echo htmlspecialchars($item['title']); ?></h2>
                        <p style="white-space: nowrap;"><?php echo htmlspecialchars($item['object']); ?></p>
                    </section>
                    <?php if ($i == $maxItems - 1 and $numItems > $maxItems) { ?>

                        <button id="load-more-btn">Load More</button>

                    <?php } ?>
                </article>

            </a>
        <?php } ?>

    </section>

</main>

</body>
<footer>
    <ul>
        <li>
            <h1>I</h1>
            <h3>1</h3>
        </li>
        <li>

            <h1>II</h1>
            <h3>2</h3>
        </li>
        <li>
            <h1>III</h1>
            <h3>3</h3>
        </li>
        <li>
            <h1>IIII</h1>
            <h3>4</h3>
            <h3>5</h3>
            <h3>6</h3>
        </li>
    </ul>
    <label for="language-select"></label>
    <select id="language-select">
        <option value="en">English</option>
        <option value="fr">French</option>
    </select>


</footer>
</html>

