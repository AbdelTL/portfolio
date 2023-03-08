<?php

include dirname(__FILE__) . '/../servicesImpl/ContactInfo.php';

class ContactController
{
//get
    public function getContact()
    {
        $contact = new ContactInfo();
        $data = $contact->getContact();
        echo "<table>";
        foreach ($data as $row) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["firstname"] . " </td ><td > " . $row["lastname"] . "</td ><td > " . $row["object"] . "</td></tr>";
        }
        echo "</table>";
    }

    public function createContact()
    {
        $contact = new ContactInfo();
        $contact->createContact("test", "test2", "test2", "test");
    }

//post
    public function getById(int $id)
    {
        $contact = new ContactInfo();
        $data = $contact->getContactById($id);
        echo "<table>";
        echo "<tr><td>" . $data["id"] . "</td><td>" . $data["email"] . "</td><td>" . $data["firstname"] . " </td ><td > " . $data["lastname"] . "</td ><td > " . $data["object"] . "</td></tr>";
        echo "</table>";
    }


}