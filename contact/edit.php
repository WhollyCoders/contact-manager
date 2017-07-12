<?php
  if(isset($_GET['contact_id'])){
    $id = $_GET['contact_id'];
    require('../../__CONNECT/dbconnect.php');
    require('../classes/ContactsController.php');
    $contacts_controller = new ContactsController($connection);
    $contact = $contacts_controller->edit($id);
  }else{
      header('Location: ./index');
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Update Contact</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1>Update Contact</h1>
    <form class="form-addContact" action="./update.php" method="post">
      <input type="hidden" name="edit_id" value="<?php echo($contact['id']); ?>">
      <p>
        <strong>Email:</strong><br>
        <input type="email" name="edit_email" value="<?php echo($contact['email']); ?>">
      </p>
      <p>
        <strong>First Name:</strong><br>
        <input type="text" name="edit_firstname" value="<?php echo($contact['firstname']); ?>">
      </p>
      <p>
        <strong>Last Name:</strong><br>
        <input type="text" name="edit_lastname" value="<?php echo($contact['lastname']); ?>">
      </p>
      <p>
        <strong>Phone:</strong><br>
        <input type="text" name="edit_phone" value="<?php echo($contact['phone']); ?>">
      </p>
      <p>
        <input type="submit" name="edit_contact" value="Update Contact"> | <a href="./index">View Contacts</a>
      </p>
    </form>
  </div>
</body>
</html>
