<?php
    require 'config1.php';

   if(isset($_POST['submit']))
   {
   /* $a1=$_POST['a'];
    $a2=$_POST['b'];
    $a3=$_POST["a3"];
    $a4=$_POST["a4"];
    $a5=$_POST["a5"];
    $a6=$_POST["a6"];
    $a7=$_POST["a7"];
    $a8=$_POST["a8"];
    $b1=$_POST["b1"];
    $b2=$_POST["b2"];
    $b3=$_POST["b3"];
    $b4=$_POST["b4"];
    $b5=$_POST["b5"];
    $b6=$_POST["b6"];
    $b7=$_POST["b7"];
    $b8=$_POST["b8"];
    $c1=$_POST["c1"];
    $c2=$_POST["c2"];
    $c3=$_POST["c3"];
    $c4=$_POST["c4"];
    $c5=$_POST["c5"];
    $c6=$_POST["c6"];
    $c7=$_POST["c7"];
    $c8=$_POST["c8"];
    $d1=$_POST["d1"];
    $d2=$_POST["d2"];
    $d3=$_POST["d3"];
    $d4=$_POST["d4"];
    $d5=$_POST["d5"];
    $d6=$_POST["d6"];
    $d7=$_POST["d7"];
    $d8=$_POST["d8"];
    $e1=$_POST["e1"];
    $e2=$_POST["e2"];
    $e3=$_POST["e3"];
    $e4=$_POST["e4"];
    $e5=$_POST["e5"];
    $e6=$_POST["e6"];
    $e7=$_POST["e7"];
    $e8=$_POST["e8"];
    $f1=$_POST["f1"];
    $f2=$_POST["f2"];
    $f3=$_POST["f3"];
    $f4=$_POST["f4"];
    $f5=$_POST["f5"];
    $f6=$_POST["f6"];
    $f7=$_POST["f7"];
    $f8=$_POST["f8"];*/
   
   
    for($x=0;$x<48;$x++){
        $f[$x]=$_POST["a".$x];
    }
   
    //echo($f[0]);

    //$f1=$_POST["a0"];
  /*  $sql="UPDATE cse5a set h1='$a1', h2='$a2',h3='$a3',h4='$a4',h5='$a5',h6='$a6',h7='$a7',h8='$a8' where day_='mon';";
    $conn->query($sql);
    $sql="UPDATE cse5a set h1='$b1', h2='$b2',h3='$b3',h4='$b4',h5='$b5',h6='$b6',h7='$b7',h8='$b8' where day_='tue'";
    $conn->query($sql);
    $sql="UPDATE cse5a set h1='$c1', h2='$c2',h3='$c3',h4='$c4',h5='$c5',h6='$c6',h7='$c7',h8='$c8' where day_='wed'";
    $conn->query($sql);
    $sql="UPDATE cse5a set h1='$d1', h2='$d2',h3='$d3',h4='$d4',h5='$d5',h6='$d6',h7='$d7',h8='$d8' where day_='thu'";
    $conn->query($sql);
    $sql="UPDATE cse5a set h1='$e1', h2='$e2',h3='$e3',h4='$e4',h5='$e5',h6='$e6',h7='$e7',h8='$e8' where day_='fri'";
    $conn->query($sql);
    $sql="UPDATE cse5a set h1='$f1', h2='$f2',h3='$f3',h4='$f4',h5='$f5',h6='$f6',h7='$f7',h8='$f8' where day_='sat';";
    $conn->query($sql);*/
   /* $sql="UPDATE cse5a set h1='$f[0]', h2='$f[1]',h3='$f[2]',h4='$f[3]',h5='$f[4]',h6='$f[5]',h7='$f[6]',h8='$f[7]' where day_='mon';";
    $conn->query($sql);*/
    $days=array("mon","tue","wed","thu","fri","sat");
    $count=0;
    for($a=0,$b=1,$c=2,$d=3,$e=4,$i=5,$g=6,$h=7;$a<=40,$b<=41,$c<=42,$d<=43,$e<=44,$i<=45,$g<=46,$h<=47;$a+=8,$b+=8,$c+=8,$d+=8,$e+=8,$i+=8,$g+=8,$h+=8){
        $sql="UPDATE cse5a set h1='$f[$a]', h2='$f[$b]',h3='$f[$c]',h4='$f[$d]',h5='$f[$e]',h6='$f[$i]',h7='$f[$g]',h8='$f[$h]' where day_='$days[$count]';";
        $conn->query($sql);
        $count++;
    }
   }
   if(!empty($_SESSION["ttval"])){

    $tablename=$_SESSION["ttval"];
    $sql="SELECT * from $tablename";
   $result=mysqli_query($conn,$sql);

   while($row=$result->fetch_assoc()){
    $col1[]=$row["h1"];
   /// print_r($col1);
    $col2[]=$row["h2"];
    //print_r($col2);
    $col3[]=$row["h3"];
    //print_r($col3);
    $col4[]=$row["h4"];
    $col5[]=$row["h5"];
    $col6[]=$row["h6"];
    $col7[]=$row["h7"];
    $col8[]=$row["h8"];
}}
else{
 $tablename=$_SESSION["ttval"];
 echo($tablename);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbarstyle.css">
    <link rel="stylesheet" href="preloginstyle.css">
    <!-- <style>
        table.center {

            margin-right: auto;
            margin-left: auto;
        }

        form.center {

            margin-right: auto;
            margin-left: auto;
        }

        table,
        td,
        th {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 6px;
        }
    </style> -->
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
            left: 90px
        }

        .styled-table {
            position: absolute;
            border-radius: 25px;
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
    <title>Update Schedule</title>
    <script>
        const dom = document.getElementById("dropDown");

        const arrayData = {
            "1": "DBMS",
            "2": "Java",
            "3": "OS",
            "4": "WP"
        }

        for (let key in arrayData) {
            let option = document.createElement("option");
            option.setAttribute('value', data[key]);

            let optionText = document.createTextNode(key);
            option.appendChild(optionText);

            dom.appendChild(option);
        }
      
        /* 
        var dropdown = document.getElementById("dropDown");


        function addOptions(options) {

            dropdown.innerHTML = "";

            for (var i = 0; i < options.length; i++) {

                var option = document.createElement("option");

                option.value = options[i];
                option.text = options[i];

                dropdown.appendChild(option);
            }
        }

        addOptions(["ADJ", "DBMS", "WP"]); */
    </script>
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
                    <a href="studttfetch.php">Schedule</a>
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
    <form action="schedule.php" method="post">
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
            <tr>
                <td>Monday</td>
                <td>
                   <input type="text" id="a0" value="" maxlength="8" name="a0" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a1"  name="a1" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a2" name="a2" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a3" name="a3" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a4" name="a4" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a5" name="a5" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a6" name="a6" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a7" name="a7" />
                </td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>
                    <input type="text" maxlength="8" value="" id="a8" name="a8" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a9" name="a9" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a10" name="a10" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a11" name="a11" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a12" name="a12" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a13" name="a13" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a14"  name="a14" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a15"  name="a15" />
                </td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>
                    <input type="text" maxlength="8" value="" id="a16" name="a16" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a17" name="a17" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a18" name="a18" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a19" name="a19" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a20" name="a20" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a21" name="a21" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a22"  name="a22" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a23"  name="a23" />
                </td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>
                    <input type="text" maxlength="8" value="" id="a24" name="a24" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a25" name="a25" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a26" name="a26" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a27" name="a27" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a28" name="a28" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a29" name="a29" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a30"  name="a30" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a31"  name="a31" />
                </td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>
                    <input type="text" maxlength="8" value="" id="a32" name="a32" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a33" name="a33" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a34" name="a34" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a35" name="a35" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a36"  name="a36" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a37"  name="a37" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a38"  name="a38" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a39"  name="a39" />
                </td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td>
                    <input type="text" maxlength="8" value="" id="a40"  name="a40" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a41"  name="a41"/>
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a42" name="a42" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a43" name="a43" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a44"  name="a44" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a45"  name="a45" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a46"  name="a46" />
                </td>
                <td>
                    <input type="text" maxlength="8" value="" id="a47"  name="a47" />
                </td>
            </tr>
        </table>
        <br>
        <button type="submit" name="submit" class="main-btn" style="width:200px; position: absolute; top:650px; left:90px">Update</button>
    </form>
    <script src="js/navbar.js"></script>
</body>

</html>
<script>
   /* var ttdetails=<?= json_encode($f) ?>;
    console.log(ttdetails);
    for(var i=0;i<48;i++)
    {
    document.querySelector(`#a${i}`).value=ttdetails[i];
    }*/
    var ttcol1=new Array();
    var ttcol2=new Array();
    var ttcol3=new Array();
    var ttcol4=new Array();
    var ttcol5=new Array();
    var ttcol6=new Array();
    var ttcol7=new Array();
    var ttcol8=new Array();
    ttcol1=<?= json_encode($col1) ?>;
    ttcol2=<?= json_encode($col2) ?>;
    ttcol3=<?= json_encode($col3) ?>;
    ttcol4=<?= json_encode($col4) ?>;
    ttcol5=<?= json_encode($col5) ?>;
    ttcol6=<?= json_encode($col6) ?>;
    ttcol7=<?= json_encode($col7) ?>;
    ttcol8=<?= json_encode($col8) ?>;
    console.log(ttcol1);
    console.log(ttcol2);
    for(var a=0, b=1, c=2, d=3, e=4, i=5, g=6, h=7, k=0;a<=40,b<=41,c<=42,d<=43,e<=44,i<=45,g<=46,h<=47,k<=7;a+=8,b+=8,c+=8,d+=8,e+=8,i+=8,g+=8,h+=8,k++)
    {
        document.querySelector(`#a${a}`).value=ttcol1[k];
        document.querySelector(`#a${b}`).value=ttcol2[k];
        document.querySelector(`#a${c}`).value=ttcol3[k];
        document.querySelector(`#a${d}`).value=ttcol4[k];
        document.querySelector(`#a${e}`).value=ttcol5[k];
        document.querySelector(`#a${i}`).value=ttcol6[k];
        document.querySelector(`#a${g}`).value=ttcol7[k];
        document.querySelector(`#a${h}`).value=ttcol8[k];
    }

 /*    const dom = document.getElementById("dropDown");

        const arrayData = {
            "1": "DBMS",
            "2": "Java",
            "3": "OS",
            "4": "WP"
        }

        for (let key in arrayData) {
            let option = document.createElement("option");
            option.setAttribute('value', data[key]);

            let optionText = document.createTextNode(key);
            option.appendChild(optionText);

            dom.appendChild(option);
        } */
      
        /* 
        var dropdown = document.getElementById("dropDown");


        function addOptions(options) {

            dropdown.innerHTML = "";

            for (var i = 0; i < options.length; i++) {

                var option = document.createElement("option");

                option.value = options[i];
                option.text = options[i];

                dropdown.appendChild(option);
            }
        }

        addOptions(["ADJ", "DBMS", "WP"]); */
</script>