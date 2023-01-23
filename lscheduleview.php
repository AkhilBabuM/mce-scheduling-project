<?php
require 'config.php';
session_start();

if (!empty($_SESSION["tid"])) {
    $sql = "SELECT * from lecturerinfo";
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()) {
        $class = explode(',', $row["lectureclass"]);
        if (isset($_POST["submit"])) {
            $_SESSION["ttval"] = $_POST["ttval"];
            $value = $_SESSION["ttval"];
            header("Location: schedule.php");
        }
    }

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
        a {
            font-size: 50px;
            color: #08528a;
        }
    </style>
</head>

<body style="background-color:#ebeef1;">
    <header style="position:absolute; top:0px;">
        <a href="index1.php">
            <div class="logo">MCE Portal</div>
        </a>

        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="lscheduleview.php" class="active">Classes</a>
                </li>
                <li>
                    <a href="timetable/studttfetch.php">Schedule</a>
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
    <div class="links" style="text-align:center;  margin-top:300px; margin-left:auto; margin-right:auto; width:20%"></div>
</body>
<script>
    var classinfo = new Array();
    classinfo = <?= json_encode($class) ?>;
    console.log(classinfo);

    var parentelement=document.querySelector(".links");
    for(let i=0;i<classinfo.length;i++)
    {   
        let divelement=document.createElement('div');
        divelement.innerHTML=`
        <form action="" method="post" style=" margin-top:60px;">
        <!--<a href="schedule.php" onclick="opentt(classinfo[${i}])">${classinfo[i]}</a>-->
        <input type="hidden" name="ttval" value="${classinfo[i]}">
        <button class="main-btn" type="submit" name="submit" >${classinfo[i]}</button>

        </form>`;
        parentelement.appendChild(divelement);
    }
    /*function opentt(tt){
        sessionStorage.setItem("timetable",tt);
        console.log(name);
    }*/

   /* var session = '<?php echo json_encode($_SESSION['ttval']) ?>';
    alert(session);*/

</script>

</html>