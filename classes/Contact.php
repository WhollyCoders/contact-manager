<?php
class Contact{
  public $connection;
  public $id;
  public $email;
  public $firstname;
  public $lastname;
  public $phone;
  public $data;
  public $json;
  public function __construct($connection){
    $this->connection = $connection;
    // $this->welcome_message();
  }

  public function delete_contact($id){
    $sql = "DELETE FROM `contacts` WHERE contact_ID='$id';";
    $result = mysqli_query($this->connection, $sql);
    if(!$result){echo('*** Error DELETING Contact *** <br>');}
  }

  public function edit_contact($update_params){
    $this->update_params($update_params);
    $this->update_contact();
  }

  public function update_params($update_params){
    $this->id         = $update_params['id'];
    $this->email      = $update_params['email'];
    $this->firstname  = $update_params['firstname'];
    $this->lastname   = $update_params['lastname'];
    $this->phone      = $update_params['phone'];
  }

  public function update_contact(){
    $sql = "UPDATE `contacts` SET
      `contact_email`     = '$this->email',
      `contact_firstname` = '$this->firstname',
      `contact_lastname`  = '$this->lastname',
      `contact_phone`     = '$this->phone'
      WHERE `contact_ID`  = '$this->id';";
    $result = mysqli_query($this->connection, $sql);
    if(!$result){echo('*** Error UPDATING Contact *** <br>');}
  }

  public function create_contact($contact_params){
    $this->set_params($contact_params);
    $this->add_contact();
  }

  public function set_params($contact_params){
    $this->email      = $contact_params['email'];
    $this->firstname  = $contact_params['firstname'];
    $this->lastname   = $contact_params['lastname'];
    $this->phone      = $contact_params['phone'];
  }

  public function add_contact(){
    $sql = "INSERT INTO `contacts` (
      `contact_ID`,
      `contact_email`,
      `contact_firstname`,
      `contact_lastname`,
      `contact_phone`,
      `contact_date_entered`
    ) VALUES (
      NULL,
      '$this->email',
      '$this->firstname',
      '$this->lastname',
      '$this->phone',
      CURRENT_TIMESTAMP
    );";
    $result = mysqli_query($this->connection, $sql);
    if(!$result){echo('*** Error Adding Contact *** <br>');}
  }

  public function get_all_contacts(){
    $sql = "SELECT * FROM `contacts`;";
    $result = mysqli_query($this->connection, $sql);
    return $this->get_contact_data($result);
  }
  public function get_one_contact($id){
    $sql = "SELECT * FROM `contacts` WHERE contact_ID='$id' LIMIT 1;";
    $result = mysqli_query($this->connection, $sql);
    return $this->get_contact_data($result);
  }

  public function get_fullname($id){
    $sql = "SELECT * FROM `contacts` WHERE contact_ID='$id' LIMIT 1;";
    $result = mysqli_query($this->connection, $sql);
    $this->get_contact_data($result);
    return $this->data['firstname'].' '.$this->data['lastname'];
  }

  public function get_contact_data($result){
    if($result){
      $this->data = array();
      $rows = mysqli_num_rows($result);
      if($rows > 1){
        while($row = mysqli_fetch_assoc($result)){
          require('../contact/schema.php');
        }
      }else{
        $row = mysqli_fetch_assoc($result);
          require('../contact/schema.php');
        $this->data = $this->data[0];
        // print_r($this->data);
      }
      $this->json = json_encode($this->data);
      return $this->data;
    }
  }

  public function welcome_message(){
    echo('>>> Contact Class Instantiated...<br>');
  }
}

//https://about.me/whollycoder
 ?>
