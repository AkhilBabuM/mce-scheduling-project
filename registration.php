<?php
require 'config.php';
session_start();
if (!empty($_SESSION["usn"])) {
  header("Location: index1.php");
}
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $usn = $_POST["usn"];
  $email = $_POST["email"];
  $branch = $_POST["branch"];
  $year = $_POST["year"];
  $section = $_POST["section"];
  $bys = $branch . $year . $section;
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
  $hashed_confirm_pass = password_hash($confirmpassword, PASSWORD_DEFAULT);
  $duplicate = mysqli_query($conn, "SELECT * FROM studentinfo WHERE usn = '$usn' OR email = '$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  } else {
    if ($password == $confirmpassword) {
      $query = "INSERT INTO studentinfo VALUES('$name','$email','$usn','$hashed_pass','$bys')";
      mysqli_query($conn, $query);

      header("Location: login.php");
      echo "<script> alert('Registration Successful'); </script>";
    } else {
      echo "<script> alert('Password Does Not Match'); </script>";
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
<header style="z-index:3;">
  <a href="login.php"><div class="logo">MCE Portal</div></a>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="nav-bar">
                <ul>
                    <li>
                        <a href="login.php" >Login</a>
                    </li>
                    <li>
                        <a href="" class="active">Register</a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
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

            <!-- <input type="text" name="branch" id="branch" class="input-box" placeholder="Enter Branch (eg. CSE)" required value=""> <br> -->

            <div class="select">
              <select name="branch" id="branch" class="input-box">
                <option selected disabled class="disabled_option">Select your Branch</option>
                <option value="CSE">Computer Science</option>
                <option value="MEE">Mechanical</option>
                <option value="ISE">Information Science</option>
              </select>
            </div>

            <!-- <input type="text" name="year" id="year" class="input-box" placeholder="Enter your Year" required value=""> <br> -->
            <div class="select">
              <select name="year" id="year" class="input-box">
                <option selected disabled class="disabled_option">Select your Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>

            <!-- <input type="text" name="section" id="section" class="input-box" placeholder="Enter your Section" required value=""> <br> -->
            <div class="select">
              <select name="section" id="section" class="input-box">
                <option selected disabled class="disabled_option">Select your Section</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>
            </div>


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
  <script src="js/navbar.js"></script>
</body>

</html>