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
    <script src="../js/adminArea.js" defer></script>


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
<div><a href="NewPortfolio.php" style="font-size: 2rem">Add Portfolio</a>
<p></p>

</div>
</body>
</html>
