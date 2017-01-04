<?php
define('DB_HOST', '********');
define('DB_USER', '********');
define('DB_PASSWORD', '********');
define('DB_NAME', '********');
// Connects to my Database
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(mysql_error());

if (mysqli_connect_errno())
{
  echo '<h1>Unable to connect to database</h1>';
  // FOR DEBUGGING ONLY /////////////////////////////
  // warning: error message reveals system internals
  echo mysqli_connect_error();
  ///////////////////////////////////////////////////
  echo '</body>';
  echo '</html>';
  exit();
}
mysqli_set_charset($connection, 'utf8');
?>
