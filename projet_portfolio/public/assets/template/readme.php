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
<p style="font-size: 2rem; background-color:white;"  >
    liste des chose dans ce projet,<br> d'abord le projet je l'ai commancer sur github, alors si vous voulez voire les encien commite
    voila <a href="https://github.com/AbdelTL/portfolio" style="color: #121212"> https://github.com/AbdelTL/portfolio</a>, dans le site ya des lien qui mene vers rien c normal, pour chaque
    portfolio normalement doit y avoire une page,<br>
    - tout les page sont traduite en ang et fr si vous choisisez une langue un cookie sera cree et la restera pour 1 mois <br>
    - tout les fonction qui gere le serveur sont au dossier 'app', un petie resume pour des class.php:<br>
    <br>
    --ContactInfo.php dans le dossier servicesImpl a cree la table contact qui store le nom prenom email et objet du contact y a deux f
    fonction important une qui fetch tout les element de la database et une aute qui cree un element dans la database avant la creation/ insersion
    dans la database tout les chanp sont verifier pour les faille xss et injection sql dans le cas ou une requet est rejeter au niveau
    de la base on retourn a l'utilisateur une alert<br>
    --ContactController dans le dossier controller a pour mision en cas de post faire le post et cas get faire le get<br>
    --PortfolioBaseImpl.php dans le dossier servicesImpl cree la table portfolio, avec le nom de la photo que que on veut voir dans le index
    l'image doit etre store dans le dossier img puis le titre du portfolio et une bref description. il ya pas de verification des champ
    car c la partie administrateur, cette partie ne doit pas etre visible en temps normal est doit etre proteger avec Autentification(c normal qu'elle n;est pas encore proter).<br>
    --PortfolioController dans le dossier controller, ce controlleur est un peut different on peut voir deux request en post chaque une pour
    une fonction presise l'une est utiliser pour retrive tout les portfolios et l'autre pour cree avec la methode post<br>
    --pour la database c dans le dossier config qu'elle est configurer<br>
    --tout ce qui est en rappot avec l'authentificqtion y est pas<br><br>
    pour le coter clien:<br>
    les fonction sont dans public/assets<br>
    les appel ajax de contact "mehtode get" est dans "contactGet.js", et contact "type post" est dans "contact.js(avec s)" le fichier contacts.php
    a un lien vers les deux type de contact post qui s'appel contact.php et contat get qui s'appel contactGet.php

</p>
</body>
</html>

