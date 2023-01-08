<?php
require 'config.php';
session_start();
if(!empty($_SESSION["usn"])){
  header("Location: index1.php");
}
if(isset($_POST["submit"])){
  $usn = $_POST["usn"];
  $password = $_POST["password"];
  $hashed_pass=password_hash($password,PASSWORD_DEFAULT);
  $result = mysqli_query($conn, "SELECT * FROM studentinfo WHERE usn = '$usn'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if(password_verify($password,$row['password'])){
      $_SESSION["login"] = true;
      $_SESSION["usn"] = $row["usn"];
      header("Location: index1.php");
    }
    else{
      echo
      "<script> alert('Wrong Password.'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered.'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

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
            <h2>LOGIN</h2>
            <form class="" action="" method="post" autocomplete="off">
              
              <input type="text" name="usn" id="usn" class="input-box" placeholder="Enter your USN" > <br>
              
              <input type="password" name="password" id="password" class="input-box" placeholder="Password" > <br>
              
              <button type="submit" class="main-btn" name="submit">SUBMIT</button>

              <a href="registration.php">
                <button type="button" class="side-btn" onclick="registration.php">REGISTER</button>
              </a>

            </form>
            <br>
            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>