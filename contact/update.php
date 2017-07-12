<?php
if(isset($_POST['edit_contact'])){
  require('../../__CONNECT/dbconnect.php');
  require('../classes/ContactsController.php');

  $contact_id         =   $_POST['edit_id'];
  $contact_email      =   $_POST['edit_email'];
  $contact_firstname  =   $_POST['edit_firstname'];
  $contact_lastname   =   $_POST['edit_lastname'];
  $contact_phone      =   $_POST['edit_phone'];

  $update_params = array(
    'id'            =>    $contact_id,
    'email'         =>    $contact_email,
    'firstname'     =>    $contact_firstname,
    'lastname'      =>    $contact_lastname,
    'phone'         =>    $contact_phone
  );

  $contacts_controller = new ContactsController($connection);
  $contacts_controller->update($update_params);
  header('Location: ./index');

}else{
  // *** OPTION - Send to an ERROR Page ***
  header('Location: ./index');
}
?>
