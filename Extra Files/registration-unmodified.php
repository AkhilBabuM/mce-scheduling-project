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
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="inner-box">
          <div class="card-front">
            <h2>REGISTRATION</h2>
            <form class="" action="" method="post" autocomplete="off">
              <label for="name">Name : </label>
              <input type="text" name="name" id="name" placeholder="Enter your name" required value=""> <br>
              <label for="usn">USN : </label>
              <input type="text" name="usn" id="usn" required value=""> <br>
              <label for="email">Email : </label>
              <input type="email" name="email" id = "email" required value=""> <br>
              <label for="password">Password : </label>
              <input type="password" name="password" id = "password" required value=""> <br>
              <label for="confirmpassword">Confirm Password : </label>
              <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
              <button type="submit" name="submit">Register</button>
            </form>
            <br>
            <a href="login.php">Login</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>