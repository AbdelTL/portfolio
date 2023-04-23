<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="../js/contact.js" defer></script>
    <script src="../js/script.js" defer></script>


</head>
<body>
<?php
if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
} else {
    $language = 'en';
}
include '../locales/' . $language . '.php';

?>
<?php include 'navbar.php'; ?>
<div>
    <a href="ContactGet.php" style="font-size: 2rem; ">Contact Get methode</a>
</div>

<a href="Contact.php" style="font-size: 2rem; ">Contact Post methode</a>

</body>
</html>
