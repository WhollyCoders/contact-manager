<?php
if(isset($_GET['contact_id'])){
  $id = $_GET['contact_id'];
  require('../../__CONNECT/dbconnect.php');
  require('../classes/ContactsController.php');
  $contacts_controller = new ContactsController($connection);
  $contacts_controller->delete($id);
  header('Location: ./index');
}else{
  header('Location: ./index');
}
 ?>
