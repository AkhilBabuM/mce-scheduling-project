<?php
//USE A COOKIE
require 'config.php';
session_start();
//$query = mysqli_query($conn,"SELECT * FROM table");
$sql="SELECT * FROM grievance";
//$result = mysqli_query($conn, $query)
$result=$conn->query($sql);
while($row = $result->fetch_assoc()){
    //$row["text"];
  //  print_r($row);
    $storeradiovalue[]=$row["radio"];
    $storeusn[]=$row["usn"];
    $storename[]=$row["name"];
    $storesubject[]=$row["subject"];
    $storetext[]=$row["text"];
    //echo("{$row['text']}");
}
//$row = mysqli_fetch_assoc($result)
//print_r($store[1]['text']);
//echo("row['text']");
if(isset($_POST["submit"])){
    $id = $_SESSION["usn"];
    $radio=$_POST["radio"];
    $usnval=$_POST["usnvalue"];
    if($radio=="yes"){
    $result1 = mysqli_query($conn, "SELECT * FROM studentinfo WHERE usn ='$id'");
    $result2 = mysqli_query($conn, "SELECT * FROM grievance WHERE usn ='$usnval'");
    $row = mysqli_fetch_assoc($result1);
    $row1 = mysqli_fetch_assoc($result2);
    $usn = $row["usn"];
    $name=$row["Name"];
    $name1=$row1["name"];
    $usn1=$row1["usn"];
    $query = "INSERT INTO vote VALUES('$name','$usn','$name1','$usn1','$radio')";
    mysqli_query($conn, $query);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width ,initial-scale = 1.0">
  <!--<link rel="stylesheet" href="style2.css">-->
  <title>javascript cards</title>
  <style>
    /*.container{
      background-color:black;
    }*/
    *{
  margin: 0;
  padding: 0;
}

body{
  background-color: #334145;  
}
.container{
  width: 80%;
  margin: auto;
  padding-top: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.boxes{
  border: 5px solid white;
  width: 50%;
  height: 200px;
  display: flex;
 /* flex-direction: column;*/
  margin: 5px;
  align-items: center;   
  justify-content: center; 
  text-align:center;
  box-shadow: 0 0 10px silver;
  transition: 300ms all;
  background-size: cover;
  background-position: center;
  background-color: #334145;  
  background-color: white;
  padding: 10px 5px;
}

.boxes:hover {
  transform: scale(1.1);
}
.boxes:hover .box-content{
  background-color: transparent;
  color: black;
}

 </style>
</head>
<!--onload="loded()"-->
<body >
 <!-- <div class="bg">

  </div>-->
  <div class="container">
    
  </div>
 <!-- <script src="js/script.js" type="text/javascript" charset="utf-8"></script>-->
 <script src="displaydetails.js"></script>
</body>
</html>
<script>
 var namedetails=new Array();
 var usndetails=new Array();
 var subjectdetails=new Array();
 var textdetails=new Array();
 var radiodetails=new Array();
 radiodetails=<?= json_encode($storeradiovalue) ?>;
 namedetails=<?= json_encode($storename) ?>;
 usndetails=<?= json_encode( $storeusn) ?>;
 subjectdetails=<?= json_encode($storesubject) ?>;
 textdetails=<?= json_encode($storetext) ?>;
/* for(var i=0;i<details.length;i++)
 {
     console.log(details[i]);
 }*/
 for(var i=0;i<namedetails.length;i++)
 {
     if(radiodetails[i]=="yes")
{
    let divelement=document.createElement('div');
    divelement.style.marginTop="30px";
    divelement.innerHTML=`
    <form action="" method="post">
    <div id="detfetch${i}">
    <h2>Name : ${namedetails[i]}</h2>
    <h2>USN : ${usndetails[i]}</h2>
    <h3>
     Subject : ${subjectdetails[i]}
    </h3>
    <!--<a class="showmore" href="#">ReadMore</a>-->
    <!--<input type="button" value="fetchdata" onclick=opengoogle(textdetails[${i}])>-->
    <a href="displaydetails.html" onclick=opengoogle(textdetails[${i}])>ReadMore</a>
    <h3>Do you want to vote?</h3>
    <label>Yes </label><input type="radio" name="radio" value="yes"></label>  
    <label>No <input type="radio" name="radio" value="no"></label> <br> <br>
    <input type="hidden" id="usnvalue" name="usnvalue" value="${usndetails[i]}">
    <button type="submit" name="submit">Submit</button>
    </form>
  </div><br>` ; 
  var dynamic = document.querySelector('.container');  
  dynamic.appendChild(divelement);
  divelement.classList.add("boxes");
 // divelement.classList.add("cards");
 // divelement.classList.add("box-content");
 }
 }
 //console.log(details);
 function opengoogle(name){
   //console.log("abc",name);
   console.log(name);
   sessionStorage.setItem("fulldetails",name)
  // var data =name;
   
  //location.replace("displaydetails.html"+data);
 }
</script>

