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
    <link rel="stylesheet" href="css/preloginstyle.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/navbarstyle.css">
    
  </head>
  <body>
  <header>
      <div class="logo">MCE Portal</div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="" class="active">Home</a>
                </li>
                <li>
                    <a href="">Schedule</a>
                </li>
                <li>
                    <a href="grievance.php">Grievance</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="logout.php">LOGOUT</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
      <h1>Welcome <?php echo $row["Name"]; ?></h1> 
    </div>
    
    <script src="js/navbar.js"></script>
  </body>
</html>