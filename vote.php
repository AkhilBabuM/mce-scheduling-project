<?php
//USE A COOKIE
require 'config.php';
session_start();
//$query = mysqli_query($conn,"SELECT * FROM table");
$sql = "SELECT * FROM grievance";
//$result = mysqli_query($conn, $query)
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  //$row["text"];
  //  print_r($row);
  $storeradiovalue[] = $row["radio"];
  $storeusn[] = $row["usn"];
  $storename[] = $row["name"];
  $storesubject[] = $row["subject"];
  $storetext[] = $row["text"];
  //echo("{$row['text']}");
}
//$row = mysqli_fetch_assoc($result)
//print_r($store[1]['text']);
//echo("row['text']");
if (isset($_POST["submit"])) {
  $id = $_SESSION["usn"];
  $radio = $_POST["radio"];
  $usnval = $_POST["usnvalue"];
  if ($radio == "yes") {
    $result1 = mysqli_query($conn, "SELECT * FROM studentinfo WHERE usn ='$id'");
    $result2 = mysqli_query($conn, "SELECT * FROM grievance WHERE usn ='$usnval'");
    $row = mysqli_fetch_assoc($result1);
    $row1 = mysqli_fetch_assoc($result2);
    $usn = $row["usn"];
    $name = $row["Name"];
    $name1 = $row1["name"];
    $usn1 = $row1["usn"];
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
  <link rel="stylesheet" href="css/navbarstyle.css">
  <link rel="stylesheet" href="css/preloginstyle.css">
  <style>
    * {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      background: #ebeef1;
    }

    .container {
      width: 1300px;
      margin: auto;
      padding-top: 100px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .boxes {
      border: none;
      border-radius: 20px;
      width: 50%;
      height: 200px;
      display: flex;
      margin: 5px;
      align-items: center;
      justify-content: center;
      text-align: center;
      box-shadow: 5px 5px 5px -1px rgba(10, 99, 169, 0.16),
        -5px -5px 5px -1px rgba(255, 255, 255, 0.70);
      transition: 300ms all;
      background-size: cover;
      background-position: center;
      background: #ebeef1;
      padding: 10px 5px;
    }

    a {
      color: blue;
      text-decoration: none;
    }

    .boxes:hover {
      transform: scale(1.05);
    }

    .boxes:hover .box-content {
      background-color: transparent;
      color: black;
    }

    .btn {
      width: 100%;
      border: transparent;
      margin: 42px 0 2px;
      height: 39px;
      font-size: 15px;
      border-radius: 10px;
      padding: 5px 12px;
      box-sizing: border-box;
      outline: none;
      box-shadow: 5px 5px 5px -1px rgba(10, 99, 169, 0.10),
        -5px -5px 5px -1px rgba(255, 255, 255, 0.20);
      cursor: pointer;
      
    }

    .btn:hover {
      box-shadow: inset 5px 5px 5px -1px rgba(10, 99, 169, 0.16),
        inset -5px -5px 5px -1px rgba(255, 255, 255, 0.70);
    }

    p {
      color: #496072;
    }

    .bottom-gap {
      padding: 40px;
    }
    
    button{
      padding:0px;
      margin:0px;
    }
  </style>
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

  <div class="container" style="height:0;">

  </div>

  <script src="displaydetails.js"></script>
</body>

</html>
<script>
  var namedetails = new Array();
  var usndetails = new Array();
  var subjectdetails = new Array();
  var textdetails = new Array();
  var radiodetails = new Array();
  radiodetails = <?= json_encode($storeradiovalue) ?>;
  namedetails = <?= json_encode($storename) ?>;
  usndetails = <?= json_encode($storeusn) ?>;
  subjectdetails = <?= json_encode($storesubject) ?>;
  textdetails = <?= json_encode($storetext) ?>;
  /* for(var i=0;i<details.length;i++)
   {
       console.log(details[i]);
   }*/
  for (var i = 0; i < namedetails.length; i++) {
    if (radiodetails[i] == "yes") {
      let divelement = document.createElement('div');
      divelement.style.marginTop = "30px";
      divelement.innerHTML = `
    <form style="width:600px" padding-left:20px; action="" method="post">
      <div style="padding-left:0px; width:350px; float:left;">  
        <h3>
        Subject : ${subjectdetails[i]}
        </h3>
        <br>
        <div id="detfetch${i}">
        <h2>${namedetails[i]}</h2>
        <h2>${usndetails[i]}</h2>
        </div>
        
        <br><a href="displaydetails.html" class="btn" onclick=opengoogle(textdetails[${i}])>Read Grievance</a>
        <br><br>
      </div>
      <div style="padding-top:30px; padding-bottom:30px; float:right; width:140px; box-shadow: 5px 5px 5px -1px rgba(10, 99, 169, 0.16),
         -5px -5px 5px -1px rgba(255, 255, 255, 0.70);background-color:#6b9fc7; border-radius:20px; color:white;">
        <!--<h3>Do you want to vote?</h3>-->
        <label>UPVOTE</label><input type="radio" name="radio" value="yes"></label> <br>
        <label>DOWNVOTE <input type="radio" name="radio" value="no"></label> <br><br>
        <input type="hidden" id="usnvalue" name="usnvalue" value="${usndetails[i]}">
        <button style="padding:0px; margin:0px; width:60px; height:30px;" type="submit" class="btn" name="submit">Submit</button>
      </div>
    </form>
  </div><br>`;
      var dynamic = document.querySelector('.container');
      dynamic.appendChild(divelement);
      divelement.classList.add("boxes");
    }
  }

  function opengoogle(name) {

    console.log(name);
    sessionStorage.setItem("fulldetails", name)

  }
</script>