<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Contact</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1>Add Contact</h1>
    <form class="form-addContact" action="./create.php" method="post">
      <p>
        Email:<br>
        <input type="email" name="add_email">
      </p>
      <p>
        First Name:<br>
        <input type="text" name="add_firstname">
      </p>
      <p>
        Last Name:<br>
        <input type="text" name="add_lastname">
      </p>
      <p>
        Phone:<br>
        <input type="text" name="add_phone">
      </p>
      <p>
        <input type="submit" name="add_contact" value="Add Contact"> | <a href="./index">View Contacts</a>
      </p>
    </form>
  </div>
</body>
</html>
