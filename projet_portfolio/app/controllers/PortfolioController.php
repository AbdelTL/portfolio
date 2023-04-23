<?php
include dirname(__FILE__) . '/../servicesImpl/PortfolioBaseImpl.php';
//!!!!!!post

//create
$portfolio = new PortfolioBaseImpl();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['function'])) {
    $function = $_POST['function'];

    if ($function === 'createPortfolio') {
        $imgName = $_POST['imgName'];
        $title = $_POST['title'];
        $object = $_POST['object'];

        $portfolio->createPortfolio($imgName, $title, $object);
    }
}

//request all portfolios
if (isset($_POST['function'])) {
    $function = $_POST['function'];
    if ($function === 'getPortfolio') {
        $result = $portfolio->getPortfolio();
        echo json_encode($result);
    }
}