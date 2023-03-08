<?php
include dirname(__FILE__) . '/controllers/ContactController.php';

$contact = new ContactController();
//$contact->createContact();



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>

    <?php
    include dirname(__FILE__) .'/../public/assets/template/contact.php';?>
       <a href="../public/assets/template/contact.php"  ><img src="../public/assets/img/instagram.svg" alt="icone du site"></a>
<?php $contact->getById(1);?>

</p>
</body>
</html>
