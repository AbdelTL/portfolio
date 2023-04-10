<?php
include dirname(__FILE__) . '/../servicesImpl/PortfolioBaseImpl.php';

$portfolio = new PortfolioBaseImpl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imgName = $_POST['imgName'];
    $title = $_POST['title'];
    $object = $_POST['object'];

    $portfolio->createPortfolio($imgName, $title, $object);
}