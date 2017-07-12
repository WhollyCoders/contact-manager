<?php
if(isset($_GET['contact_id'])){
  $id = $_GET['contact_id'];
  require('../../__CONNECT/dbconnect.php');
  require('../classes/ContactsController.php');
  $contacts_controller = new ContactsController($connection);
  $contact = $contacts_controller->show($id);
}else{
  header('Location: ./index');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Show Contact</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1>Show Contact</h1>
    <p>
      <?php echo('<strong>'.$contact['firstname'].' '.$contact['lastname'].'</strong><br>'); ?>
      <?php echo($contact['phone'].'<br>'); ?>
      <?php echo($contact['email'].'<br>'); ?>
    </p>
    <a href="./edit.php?contact_id=<?php echo($id);?>">Update Contact</a> | <a href="./delete.php?contact_id=<?php echo($id);?>">Delete Contact</a>
  </div>
</div>
</body>
</html>
