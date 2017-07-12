<?php
if(isset($_POST['add_contact'])){
  require('../../__CONNECT/dbconnect.php');
  require('../classes/ContactsController.php');
  require('./params.php');
  $contacts_controller = new ContactsController($connection);
  $contacts_controller->create($contact_params);
  header('Location: ./index');
}else{
  // *** OPTION - Send to an ERROR Page ***
  header('Location: ./index');
}
?>
