<?php
require 'config.php';
session_start();
if(isset($_POST["submit"])){
    $id = $_SESSION["usn"];
   
    $radio=$_POST["radio"];
    $result = mysqli_query($conn, "SELECT * FROM studentinfo WHERE usn ='$id'");
    $row = mysqli_fetch_assoc($result);
    $usn = $row["usn"];
    $name=$row["Name"];
    $text=$_POST["text"];
    $subject=$_POST["subject"];
    $query = "INSERT INTO grievance VALUES('$usn','$name','$subject','$text','$radio')";
    mysqli_query($conn, $query);
    echo
    "<script> alert('Grievance submitted successfully'); </script>";
    header("Location: index1.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance</title>

    <link rel="stylesheet" href="css/loggedinstyle.css">
    <link rel="stylesheet" href="css/grievancestyle.css">
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
                    <a href="index1.php">Home</a>
                </li>
                <li>
                    <a href="">Schedule</a>
                </li>
                <li>
                    <a href=""  class="active">Grievance</a>
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
				<h2>FEEDBACK</h2>
					<form action="" method="post">
				<!-- <label for="usn">USN : </label>
						<input type="text" name="usn" id = "usn" > <br> <br>
						<label for="name">Name : </label>
						<input type="text" name="name" id = "name" > <br> <br>-->
						<!-- <label for="subject">Subject</label> -->
						<input type="text" placeholder="SUBJECT" name="subject" id="subject" class="input-box"> <br> <br>
						<textarea placeholder="Type your grievance" name="text" id="text" cols="20" rows="20"></textarea> <br>
						<center>
							<label for="public">Do you want display it publicly for poll?</label> <br>
							<label>Yes </label><input type="radio" name="radio" value="yes"></label>
				    	<label>No <input type="radio" name="radio" value="no"></label> <br> <br>
						</center>
						<button type="submit" name="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>