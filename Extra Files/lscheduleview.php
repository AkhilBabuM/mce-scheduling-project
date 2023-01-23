<?php
require 'config.php';
session_start();
if(!empty($_SESSION["tid"])){
$sql="SELECT * from lecturerinfo";
$result=mysqli_query($conn,$sql);
while($row = $result->fetch_assoc()){
$class=explode(',',$row["lectureclass"]);
}
#print_r($class);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/preloginstyle.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/navbarstyle.css">
    <style>
        a{
            font-size: 50px;
            color: #08528a;
        }
    </style>
</head>
<body style="background-color: #ebeef1;">
<header style="position:absolute; top:0px;">
      <a href="index1.php"><div class="logo">MCE Portal</div></a>
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
                    <a href="timetable/studttfetch.php">Schedule</a>
                </li>
                <li>
                    <a href="grievance.php">Grievance</a>
                </li>
                <li>
                    <a href="vote.php">Vote</a>
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
    <div class="links card" style="text-align:center;  margin-top:300px; margin-left:40%;"></div>
</body>
<script>
    var classinfo=new Array();
    classinfo=<?= json_encode($class) ?>;
    console.log(classinfo);
    var parentelement=document.querySelector(".links");
    for(let i=0;i<classinfo.length;i++)
    {   
        let divelement=document.createElement('div');
        divelement.innerHTML=`
        <form action="" class=" btn main-btn" style=" margin-top:120px;"></form>
        <a href="schedule.php" onclick="opentt(classinfo[${i}])">${classinfo[i]}</a>
        </form>`;
        parentelement.appendChild(divelement);
    }
    function opentt(tt){
        sessionStorage.setItem("timetable",tt);
        console.log(name);
    }
</script>
</html>