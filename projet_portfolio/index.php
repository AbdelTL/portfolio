<?php



//include dirname(__FILE__) . '/app/controllers/ContactController.php';
include dirname(__FILE__) . '/app/servicesImpl/PortfolioBaseImpl.php';
//$portfolio=new PortfolioBaseImpl();
//
//$result = $portfolio->getField(1);


//$contact = new ContactController();
//$contact->createContact();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>portfolio</title>

    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/navbar.css">

    <script src="/public/assets/js/script.js" defer></script>
</head>
<body>
<?php include 'public/assets/template/navbar.html'; ?>



<main>


    <fieldset>
        <legend> &emsp;&emsp;SOME OF MY LATEST WORK&emsp;
        </legend>
    </fieldset>
    <section id="articles">
        <?php
        $portfolio = new PortfolioBaseImpl();
        $items = $portfolio->getPortfolio();
        foreach($items as $item) {
        ?>
        <a href="" style="color: white" >
            <article>
                <header>
                    <img src="public/assets/img/<?php echo $item['imgName'];?>" alt="">
                </header>
                <section>
                    <h2 style="white-space: nowrap;"><?php echo htmlspecialchars($item['title']); ?></h2>
                    <p style="white-space: nowrap;"><?php echo htmlspecialchars($item['object']); ?></p>
                </section>

            </article>
        </a>
        <?php } ?>
    </section>

</main>
</body>
</html>

