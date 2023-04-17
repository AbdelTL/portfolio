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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>


</head>
<body>
<?php include '../locales/fr.php'?>

<?php include 'navbar.php'; ?>
<div class="container">
    <h1>contact me</h1>
    <h4 style="text-align:center">I'd love to hear from you!</h4>
    <form method="POST" action="http://localhost:8080/app/controllers/PortfolioController.php"

    <label for="imgName">imgName:</label>
    <input type="text" id="imgName" name="imgName" placeholder="Your name..">

    <label for="title">title:</label>
    <input type="text" id="title" name="title" placeholder="Your last name..">

    <label for="object">object:</label>
    <input type="text" id="object" name="object" placeholder="Your last name..">
    <input type="submit" value="Submit">

    </form>
</div>

</body>
</html>
