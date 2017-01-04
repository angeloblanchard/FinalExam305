<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Teamwork Times Form</title>
  <link href="basic-styles.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php include 'nav-bar.inc' ?>
  <h1> Please enter the following*: </h1>
  <form method="post" action="form-processing.php">
    <input type="text" name="student_name" size="30" maxlength="40"
      placeholder="Your Name(first, last)" required><br>
    <input type="email" name="email" size="30" maxlength="40"
      placeholder="Your Email" required><br>
    <p>Times Available: </p>
    <label><input type="checkbox" name="checked[]" value="8am-10am"> 8am to 10am</label><br>
    <label><input type="checkbox" name="checked[]" value="10am-12pm"> 10am to 12pm</label><br>
    <label><input type="checkbox" name="checked[]" value="12pm-2pm"> 12pm to 2pm</label><br>
    <label><input type="checkbox" name="checked[]" value="2pm-4pm"> 2pm to 4pm</label><br>
    <label><input type="checkbox" name="checked[]" value="4pm-6pm"> 4pm to 6pm</label><br>
    <label><input type="checkbox" name="checked[]" value="6pm-8pm"> 6pm to 8pm</label><br>
    <label><input type="checkbox" name="checked[]" value="8pm-10pm"> 8pm to 10pm</label><br>
    <input type="submit" value="Submit">
    <p><i>* everything is required</i></p>
  </form>
</body>
</html>
