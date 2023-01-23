<?php
require 'config.php';

if (isset($_POST['submit'])) {



    for ($x = 0; $x < 48; $x++) {
        $f[$x] = $_POST["a" . $x];
    }

    $days = array("mon", "tue", "wed", "thu", "fri", "sat");
    $count = 0;
    for ($a = 0, $b = 1, $c = 2, $d = 3, $e = 4, $i = 5, $g = 6, $h = 7; $a <= 40, $b <= 41, $c <= 42, $d <= 43, $e <= 44, $i <= 45, $g <= 46, $h <= 47; $a += 8, $b += 8, $c += 8, $d += 8, $e += 8, $i += 8, $g += 8, $h += 8) {
        $sql = "UPDATE cse5a set h1='$f[$a]', h2='$f[$b]',h3='$f[$c]',h4='$f[$d]',h5='$f[$e]',h6='$f[$i]',h7='$f[$g]',h8='$f[$h]' where day_='$days[$count]';";
        $conn->query($sql);
        $count++;
    }
}
$sql1 = "SELECT bys from studentinfo where usn='4MC20CS002'";
$result1 = mysqli_query($conn, $sql1);
$row1 = $result1->fetch_assoc();
$tablename = $row1["bys"];
$sql = "SELECT * from $tablename";
$result = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);

while ($row = $result->fetch_assoc()) {
    $col1[] = $row["h1"];
    $col2[] = $row["h2"];
    $col3[] = $row["h3"];
    $col4[] = $row["h4"];
    $col5[] = $row["h5"];
    $col6[] = $row["h6"];
    $col7[] = $row["h7"];
    $col8[] = $row["h8"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbarstyle copy.css">
    <link rel="stylesheet" href="css/preloginstyle.css">
    <style>
        /* table.center {
            margin-right: auto;
            margin-left: auto;
        }

        form.center {
            margin-right: auto;
            margin-left: auto;
        }

        table,td,th {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 6px;
        } */
        body {
            background-color: #ebeef1;
        }

        table.center {
            margin-right: auto;
            margin-left: auto;
            margin-top: 300px;
        }

        .styled-table {
            transform: scale(1.6);
            border-radius: 25px;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); */
            box-shadow: 10px 10px 10px -1px rgba(10, 99, 169, 0.16),
                -10px -10px 10px -1px rgba(255, 255, 255, 0.70);
            overflow: hidden;
            background-color: #ebeef1;
        }

        .styled-table thead tr {
            border: solid;

            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {

            box-shadow: inset 5px 5px 5px -1px rgba(5, 48, 78, 0.05),
                inset -5px -5px 5px -1px rgba(255, 255, 255, 0.3);
            border-width: 1px;
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
    </style>
    <title>Time Table</title>
</head>

<body>
<header>
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
                    <a href="studttfetch.php" class="active">Schedule</a>
                </li>
                <li>
                    <a href="C:\xampp\htdocs\MiniProj1\grievance.php">Grievance</a>
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
    <table class="center tb styled-table">
        <tr>
            <th>Day</th>
            <th>8:30-9:30</th>
            <th>9:30-10:30</th>
            <th>11:00-12:00</th>
            <th>12:00-1:00</th>
            <th>1:30-2:30</th>
            <th>2:30-3:30</th>
            <th>3:30-4:30</th>
            <th>4:30-5:30</th>
        </tr>

</body>

</html>
<script>
    var ttcol1 = new Array();
    var ttcol2 = new Array();
    var ttcol3 = new Array();
    var ttcol4 = new Array();
    var ttcol5 = new Array();
    var ttcol6 = new Array();
    var ttcol7 = new Array();
    var ttcol8 = new Array();
    ttcol1 = <?= json_encode($col1) ?>;
    ttcol2 = <?= json_encode($col2) ?>;
    ttcol3 = <?= json_encode($col3) ?>;
    ttcol4 = <?= json_encode($col4) ?>;
    ttcol5 = <?= json_encode($col5) ?>;
    ttcol6 = <?= json_encode($col6) ?>;
    ttcol7 = <?= json_encode($col7) ?>;
    ttcol8 = <?= json_encode($col8) ?>;
    var array = new Array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    for (let i = 0; i < 6; i++) {
        let trelement = document.createElement('tr');
        let td = trelement.appendChild(document.createElement('td'));
        td.innerHTML = array[i];
        let td1 = trelement.appendChild(document.createElement('td'));
        td1.innerHTML = ttcol1[i];
        let td2 = trelement.appendChild(document.createElement('td'));
        td2.innerHTML = ttcol2[i];
        let td3 = trelement.appendChild(document.createElement('td'));
        td3.innerHTML = ttcol3[i];
        let td4 = trelement.appendChild(document.createElement('td'));
        td4.innerHTML = ttcol4[i];
        let td5 = trelement.appendChild(document.createElement('td'));
        td5.innerHTML = ttcol5[i];
        let td6 = trelement.appendChild(document.createElement('td'));
        td6.innerHTML = ttcol6[i];
        let td7 = trelement.appendChild(document.createElement('td'));
        td7.innerHTML = ttcol7[i];
        let td8 = trelement.appendChild(document.createElement('td'));
        td8.innerHTML = ttcol8[i];
        var dynamic = document.querySelector('.tb');
        dynamic.appendChild(trelement);
    }
</script>