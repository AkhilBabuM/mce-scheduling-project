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
</head>
<body>
    <div class="main"></div>
</body>
<script>
    var classinfo=new Array();
    classinfo=<?= json_encode($class) ?>;
    console.log(classinfo);
    var parentelement=document.querySelector(".main");
    for(let i=0;i<classinfo.length;i++)
    {   
        let divelement=document.createElement('div');
        divelement.innerHTML=`
        <a href="ltimetable.php" onclick="opentt(${classinfo[i]})">${classinfo[i]}</a>`
        parentelement.appendChild(divelement);
    }
    function opentt(name){
        sessionStorage.setItem("timetable",name);
        console.log(name);
    }
</script>
</html>