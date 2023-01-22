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
  
  <title>javascript cards</title>
  <!-- <link rel="stylesheet" href="css/preloginstyle.css"> -->
  <link rel="stylesheet" href="css/navbarstyle.css">
  <link rel="stylesheet" href="css/preloginstyle.css">
  <style>

    *{
      font-family: sans-serif;
      margin: 0;
      padding: 0;
}

body{
  background: #ebeef1;  
}
.container{
  width: 80%;
  margin: auto;
  padding-top: 100px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.boxes{
  border: none;
  border-radius: 20px;
  width: 50%;
  height: 200px;
  display: flex;
  margin: 5px;
  align-items: center;   
  justify-content: center; 
  text-align:center;
  box-shadow:  5px 5px 5px -1px rgba(10, 99, 169, 0.16),
               -5px -5px 5px -1px rgba(255, 255, 255, 0.70); 
  transition: 300ms all;
  background-size: cover;
  background-position: center;
  background: #ebeef1;
  padding: 10px 5px;
}
a{
  color:blue;
  text-decoration: none;
}
.boxes:hover {
  transform: scale(1.05);
}
.boxes:hover .box-content{
  background-color: transparent;
  color: black;
}
.btn{
    width:100%;
    border:transparent;
    margin: 42px 0 2px;
    height: 39px;
    font-size: 15px;
    border-radius: 10px;
    padding: 5px 12px;
    box-sizing: border-box;
    outline:none;
    box-shadow:  5px 5px 5px -1px rgba(10, 99, 169, 0.10),
                -5px -5px 5px -1px rgba(255, 255, 255, 0.50); 
    cursor: pointer;
}
.btn:hover{
  box-shadow:  inset 5px 5px 5px -1px rgba(10, 99, 169, 0.16),
                inset -5px -5px 5px -1px rgba(255, 255, 255, 0.70); 
}
p{
  color:#496072;
}
.bottom-gap{
  padding:40px;
}
 </style>
</head>

<body >
  
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
    
  </div>
  <div class="bottom-gap"></div>

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
    <p>Feedback ${i+1}</p><br>
    <h2>${namedetails[i]}</h2>
    <h2>${usndetails[i]}</h2><br>
   
    <h3>
      Votes: ${countvalue[usndetails[i]]}
    </h3>
    <input type="hidden" id="usnvalue" name="usnval" value="${usndetails[i]}" >
    <!--<a class="showmore" href="#">Read More</a>-->
    <!--<input type="button" value="fetchdata" onclick=opengoogle(textdetails[${i}])>-->
    <br><a href="displaydetails.html" class="btn" onclick=opengoogle(textdetails[${i}])>Read Grievance</a>
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

