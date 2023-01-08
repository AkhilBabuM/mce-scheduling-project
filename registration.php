<?php
require 'config.php';
session_start();
if(!empty($_SESSION["usn"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $usn = $_POST["usn"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $hashed_pass=password_hash($password,PASSWORD_DEFAULT);
  $hashed_confirm_pass=password_hash($confirmpassword,PASSWORD_DEFAULT);
  $duplicate = mysqli_query($conn, "SELECT * FROM studentinfo WHERE usn = '$usn' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO studentinfo VALUES('$name','$email','$usn','$hashed_pass')";
      mysqli_query($conn, $query);
     
      header("Location: login.php");
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>

    <link rel="stylesheet" href="css/preloginstyle.css">
    <link rel="stylesheet" href="css/registrationstyle.css">
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
                <!-- <li>
                    <a href="">Link 4</a>
                </li> -->
            </ul>
        </nav>
    </header>
    <div class="container">
      
      <div class="card">
        <div class="inner-box">
          <div class="card-front">
            <h2>REGISTRATION</h2>
            <form class="" action="" method="post" autocomplete="off">

              <input type="text" name="name" id="name" class="input-box" placeholder="Enter your Name" required value=""> <br>
             
              <input type="text" name="usn" id="usn" class="input-box" placeholder="Enter your USN" required value=""> <br>
              
              <input type="email" name="email" id="email" class="input-box" placeholder="Enter your Email" required value=""> <br>
             
              <input type="password" name="password" id="password" class="input-box" placeholder="Password" required value=""> <br>
              
              <input type="password" name="confirmpassword" id="confirmpassword" class="input-box" placeholder="Confirm Password" required value=""> <br>

              <button type="submit" class="main-btn" name="submit">SUBMIT</button>

              <a href="login.php">
                <button type="button" class="side-btn" onclick="login.php">GO TO LOGIN</button>
              </a>
            </form>
            <br>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>