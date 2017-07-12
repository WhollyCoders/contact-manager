<?php
$contact_email      =   $_POST['add_email'];
$contact_firstname  =   $_POST['add_firstname'];
$contact_lastname   =   $_POST['add_lastname'];
$contact_phone      =   $_POST['add_phone'];

$contact_params = array(
  'email'         =>    $contact_email,
  'firstname'     =>    $contact_firstname,
  'lastname'      =>    $contact_lastname,
  'phone'         =>    $contact_phone
);
 ?>
