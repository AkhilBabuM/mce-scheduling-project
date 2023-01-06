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
    <title>grievance</title>
</head>
<body>
    <form action="" method="post">
   <!-- <label for="usn">USN : </label>
      <input type="text" name="usn" id = "usn" > <br> <br>
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" > <br> <br>-->
      <label for="subject">Subject</label>
      <input type="text" name="subject" id="subject"> <br> <br>
      <textarea name="text" id="text" cols="80" rows="20"></textarea> <br>
      <label for="public">Do you want display it publicly for poll?</label> <br>
      <label>Yes </label><input type="radio" name="radio" value="yes"></label>
      
      <label>No <input type="radio" name="radio" value="no"></label> <br> <br>
      <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>