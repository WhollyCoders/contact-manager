<?php
require('../classes/Contact.php');
class ContactsController{
  public $connection;
  public $contact;
  public function __construct($connection){
    $this->contact = new Contact($connection);
    $this->connection = $this->contact->connection;
    // $this->welcome_message();
  }

  public function index(){
    return $this->contact->get_all_contacts();
  }
  public function show($id){
    return $this->contact->get_one_contact($id);
  }
  // public function _new(){
  //
  // }
  public function edit($id){
    return $this->contact->get_one_contact($id);
  }
  public function create($contact_params){
    $this->contact->create_contact($contact_params);
  }
  public function update($update_params){
    $this->contact->edit_contact($update_params);

  }
  public function delete($id){
    return $this->contact->delete_contact($id);
  }

  public function welcome_message(){
    echo('>>> ContactsController Class Instantiated...<br>');
  }
}
 ?>
