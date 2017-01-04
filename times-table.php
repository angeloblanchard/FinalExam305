<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Teamwork Times</title>
  <link href="basic-styles.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="#table">
  <?php
  include 'nav-bar.inc';
      include 'dbconnect.php';
      // Create an empty array to hold error strings
      // if there are one or more errors
      $errors = array();
      // Create query for sql
      $query = "SELECT student_name, student_email, availability "
      . "FROM times_table ORDER BY student_name DESC";

      // run the query
      $result = mysqli_query($connection, $query);

      if (!$result)
      {
          echo "<h1>Query failed</h1>";
          echo "</body>";
          echo "</html>";
          exit();
      }
      else {
        echo "<table align='center'>"
        . "<tr> <th>Student Name</th> <th>Email</th>"
        . "<th>Availability</th></tr>";
        while ($row = mysqli_fetch_array($result))
        {
          $name = $row[student_name];
          $email = $row[student_email];
          $times = $row[availability];
          echo "<tr><td>" . "$name" . "</td>"
          . "<td>" . "$email" . "</td>"
          . "<td>" . "$times" . "</td></tr>";
        }
        echo "</table>";
      }
      // Close connection
      mysqli_close($connection);
  ?>
  </div>
</body>
</html>
