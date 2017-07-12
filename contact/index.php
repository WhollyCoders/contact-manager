<?php
require('../../__CONNECT/dbconnect.php');
require('../classes/ContactsController.php');
$contacts_controller = new ContactsController($connection);
$contacts = $contacts_controller->index();
$con = $contacts_controller->show(5);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contacts Index</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1>Contacts Index</h1>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Date Entered</th>
      </tr>
      <?php foreach ($contacts as $contact) {
        $id = $contact['id'];
        ?>
        <tr>
          <td><?php echo($id);?></td>
          <td><?php echo($contact['email']);?></td>
          <td><?php echo($contact['firstname']);?></td>
          <td><?php echo($contact['lastname']);?></td>
          <td><?php echo($contact['phone']);?></td>
          <td><?php echo($contact['date_entered']);?></td>
          <td><a href="./show.php?contact_id=<?php echo($id);?>">View</a></td>
          <td><a href="./edit.php?contact_id=<?php echo($id);?>">Update</a></td>
          <td><a href="./delete.php?contact_id=<?php echo($id);?>">Delete</a></td>
        </tr>
        <?php } ?>
      </table>
      <a href="./json" target="_blank">View JSON</a> | <a href="./new" target="_blank">Add Contact</a>
      <!-- <div class="container">
        <h2>One Contact</h2>
        <table class="table">
          <p>
            <label>ID: </label> <?php echo($con['id'].'<br>'); ?>
            <label>Email: </label> <?php echo($con['email'].'<br>'); ?>
            <label>First Name: </label> <?php echo($con['firstname'].'<br>'); ?>
            <label>Last Name: </label> <?php echo($con['lastname'].'<br>'); ?>
            <label>Phone: </label> <?php echo($con['phone'].'<br>'); ?>
            <label>Date Entered: </label> <?php echo($con['date_entered'].'<br>'); ?>
          </p>
        </table>
      </div> -->
    </div>
  </body>
  </html>
