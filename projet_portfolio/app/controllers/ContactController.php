<?php
include dirname(__FILE__) . '/../servicesImpl/ContactInfo.php';

$contact = new ContactInfo();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $object = $_POST['object'];


    $contact->createContact($email, $firstname, $lastname, $object);

}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $email = $_GET['email'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $object = $_GET['object'];

    $contact->createContact($email, $firstname, $lastname, $object);
}
/*header('Location: http://localhost:8080/public/assets/template/contact.php');
exit;*/
?>