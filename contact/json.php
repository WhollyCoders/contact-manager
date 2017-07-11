<?php
require('../../__CONNECT/dbconnect.php');
require('../classes/ContactsController.php');
$contacts_controller = new ContactsController($connection);
$contacts = $contacts_controller->index();
echo($contacts_controller->contact->json);
?>
