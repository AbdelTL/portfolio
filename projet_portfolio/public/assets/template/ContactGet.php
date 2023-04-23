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
    <script src="../js/contactGet.js" defer></script>


</head>
<body>
<?php include '../locales/fr.php'?>
<?php include 'navbar.php'; ?>


<div class="container">
    <h1>contact Get</h1>
    <h4 style="text-align:center">I'd love to hear from you!
    m get</h4>
    <form method="GET" action="http://localhost:8080/app/controllers/ContactController.php"

    <label for="firstname">firstname:</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name..">

    <label for="lastname">lastname:</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">

    <label for="email">email:</label>
    <input type="text" id="email" name="email" placeholder="Your email..">
    <p></p>

    <label for="country">Country</label>
    <select id="country" name="country">
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        <option value="france">France</option>
    </select>

    <label for="object">object:</label>
    <textarea id="object" name="object" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

    </form>
</div>


</body>
</html>
