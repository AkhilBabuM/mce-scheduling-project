<?php
require 'config.php';
session_start();
//$query = mysqli_query($conn,"SELECT * FROM table");
$sql="SELECT g.usn,g.name,g.subject,g.text,g.radio FROM grievance g";
//$result = mysqli_query($conn, $query)
$result=$conn->query($sql);
//$sql1="SELECT candidateusn from vote";
//$result1=mysqli_query($conn,$sql1);
//$rowcount=mysqli_num_rows($result1);
//$countnumber=0
//print($rowcount);

//print_r($result1);
//$rowcount=mysqli_num_rows($result1);
//print($rowcount);
$sql1="SELECT candidateusn,count(*) as votecount from vote v group by candidateusn ";
$result1=mysqli_query($conn,$sql1);

while($row=$result1->fetch_assoc())
{
  $countarray[$row["candidateusn"]]=$row["votecount"];
}
//print_r($countarray);
//print_r($result1);
//echo("{$row['text']}")
//$count=0;
while($row = $result->fetch_assoc()){
    //$row["text"];
  //  print_r($row);
    $storeusn[]=$row["usn"];
    $storename[]=$row["name"];
    $storesubject[]=$row["subject"];
    $storetext[]=$row["text"];
   //if(array_key_exists($row["usn"],$countarray))
   //{
    // $storecount[]=$countarray[$storeusn];
     //$count++;
  // }
  
}
//$row = mysqli_fetch_assoc($result)
//print_r($store[1]['text']);
//echo("row['text']");
if(isset($_POST['usnval'])){
//$usnval[]=$_POST["usnval"];
echo("usn value is : ". $_POST['usnval']);
}

//echo("usn value is : ".$usnval);
/*$result=mysqli_query($conn,"SELECT count(voterusn) FROM vote where candidateusn='4MC20CS021'");
$row=mysqli_fetch_assoc($result);

print_r($row);*/

//$result = mysqli_query($conn, $query)

    //$row["text"];
  //  print_r($row);
    
    //echo("{$row['text']}");
//}
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
 //var countvalue=new Array();
 namedetails=<?= json_encode($storename) ?>;
 usndetails=<?= json_encode( $storeusn) ?>;
 subjectdetails=<?= json_encode($storesubject) ?>;
 textdetails=<?= json_encode($storetext) ?>;
 countvalue=<?= json_encode( $countarray) ?>;
 console.log(countvalue);
 let keys=Object.keys(countvalue);
 /*let values=Object.values(countvalue);
 console.log(keys);
 console.log(values);*/
 /*Object.keys(countvalue).forEach(function(e) {

if (countvalue[e] === undefined)
  countvalue[e] = 0;
});*/
for(let i=0;i<usndetails.length;i++){
  if(countvalue[usndetails[i]]==undefined)
  {
    countvalue[usndetails[i]]=0;
  }
}
 /*if(countvalue[keys]==undefined)
 {

 }*/
 /*for(var i=0;i<namedetails.length;i++)
 {
  if(usndetails[i]==keys[i]){
    
  }
 }*/
/* for(var i=0;i<details.length;i++)
 {
     console.log(details[i]);
 }*/
 //test comment
 for(var i=0;i<namedetails.length;i++)
 {
  
 let divelement=document.createElement('div');
  divelement.style.marginTop="30px";
  divelement.innerHTML=`
  <form action="" method="post">
  <div id="detfetch${i}">
    <h2>Name : ${namedetails[i]}</h2>
    <h2>USN : ${usndetails[i]}</h2>
   
    <h3>
      Count value: ${countvalue[usndetails[i]]}
    </h3>
    <input type="hidden" id="usnvalue" name="usnval" value="${usndetails[i]}" >
    <!--<a class="showmore" href="#">ReadMore</a>-->
    <!--<input type="button" value="fetchdata" onclick=opengoogle(textdetails[${i}])>-->
    <a href="displaydetails.html" onclick=opengoogle(textdetails[${i}])>ReadMore</a>
    </form>
  </div><br>` ; 
  var dynamic = document.querySelector('.container');  
  dynamic.appendChild(divelement);
  divelement.classList.add("boxes");
 // divelement.classList.add("cards");
 // divelement.classList.add("box-content");
 //}
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

