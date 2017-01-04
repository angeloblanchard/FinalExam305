<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Teamwork Times Form-Processing Page</title>
  <link href="basic-styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
 // Create an empty array to hold error strings
 // if there are one or more errors
 $errors = array();
 // Read in all of the variables from the form
 // and do some basic data validation.

 $name = null;
 if (!empty($_POST['student_name']))
 {
   $name = $_POST['student_name'];
 }
 else
 {
   // this is the syntax to add something at the end of the array
   $errors[] = 'Name(first and last) is required.';
   // $name should still be null if there was an error
 }

 $email = null;
 if (!empty($_POST['email']))
 {
   $email = $_POST['email'];
 }
 else
 {
   $errors[] = 'Email is required.';
   // $email should still be null if there was an error
 }
 $date_posted = gmdate("Y\-m\-d");

 $checked= implode(', ', $_POST['checked']);

 if (!empty($errors))
 	{
     // the $errors array is not empty, so print out each error
     echo '<h1>Form Submission Error</h1>';
     echo '<p>The following errors were detected in the form:</p>';
     echo '<ul>';
     foreach ($errors as $e)
 	{
       echo "<li>$e</li>";
     }
     echo '</ul>';
     echo '</body>';
     echo '</html>';
     exit();
   }
   // if there are no errors in the form, then we can move forward
   // with trying to place a new row into the database table

   //Connect to my database
   include("dbconnect.php");

   // escape all of the VARCHAR values to make them safe
   // to help prevent SQL injection
   $name = mysqli_real_escape_string($connection, $name);
   $email = mysqli_real_escape_string($connection, $email);
   $checked = mysqli_real_escape_string($connection, $checked);

   // set up the query string
   $query = "INSERT INTO times_table ("
           . "student_name, "
           . "student_email, "
           . "availability, "
           . "date_posted"
           . ") "
           . "VALUES ("
           . "'$name', "
           . "'$email', "
 	         . "'$checked', "
           . "'$date_posted'"
           . ")";
    // FOR DEBUGGING ONLY ///////////////////////////////////////////
    // Check the query string to see if it was constructed correctly
    // echo "<pre>$query</pre>";
    /////////////////////////////////////////////////////////////////

    // run the query
  $result = mysqli_query($connection, $query);
  // close connection to the database
  mysqli_close($connection);
  if (!$result)
  {
	foreach ($errors as $e)
	{
      echo "<li>$e</li>";
    }
    echo '<h1>Query failed</h1>';
    echo '</body>';
    echo '</html>';
    exit();
  }
  else {
    echo "Submission Complete! <br>"
      . "$name <br>"
      . "$email <br>"
      . "$checked <br>"
      . "$date_posted <br>"
      . "<a href='index.php'>Return Home</a>";
  }
  ?>
