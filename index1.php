<?php
require 'config.php';
session_start();
if(!empty($_SESSION["usn"])){
  $id = $_SESSION["usn"];
  $result = mysqli_query($conn, "SELECT * FROM studentinfo WHERE usn ='$id'");
  $row = mysqli_fetch_assoc($result);
}
else{
 //header("Location: index.php");
 echo("{$_SESSION['id']}");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome <?php echo $row["Name"]; ?></h1>
    <a href="logout.php">Logout</a>
    <a href="grievance.php">Grievance Form</a>
  </body>
</html>