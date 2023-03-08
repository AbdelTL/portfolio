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

</head>
<body>

<?php include 'navbar.html'; ?>

<div class="container">
    <h1>contact me</h1>
    <h4 style="text-align:center">I'd love to hear from you!</h4>
    <form method="POST" action="<?php echo __DIR__ . '/../../../app/controllers/SubmitController.php';
    ?>">

        <label for="firstname">firstname:</label>
        <input type="text" id="firstname" name="firstname" placeholder="Your name..">

        <label for="lastname">lastname:</label>
        <input type="text" id="lastname" name="lastname" placeholder="Your last name..">

        <label for="email">email:</label>
        <input type="text" id="email" name="email" placeholder="Your email..">

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
