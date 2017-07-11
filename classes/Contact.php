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

  public function create_contact($contact_params){
    $this->set_params($contact_params);
    $this->add_contact();
  }

  public function set_params($contact_params){
    $this->id         = $contact_params['id'];
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
      '$this->id',
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
