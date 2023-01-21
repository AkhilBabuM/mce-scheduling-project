<?php
    require 'config1.php';

   if(isset($_POST['submit']))
   {
   
   
   
    for($x=0;$x<48;$x++){
        $f[$x]=$_POST["a".$x];
    }
   
    $days=array("mon","tue","wed","thu","fri","sat");
    $count=0;
    for($a=0,$b=1,$c=2,$d=3,$e=4,$i=5,$g=6,$h=7;$a<=40,$b<=41,$c<=42,$d<=43,$e<=44,$i<=45,$g<=46,$h<=47;$a+=8,$b+=8,$c+=8,$d+=8,$e+=8,$i+=8,$g+=8,$h+=8){
        $sql="UPDATE cse5a set h1='$f[$a]', h2='$f[$b]',h3='$f[$c]',h4='$f[$d]',h5='$f[$e]',h6='$f[$i]',h7='$f[$g]',h8='$f[$h]' where day_='$days[$count]';";
        $conn->query($sql);
        $count++;
    }
   }
   $sql="SELECT * from cse5a";
   $result=mysqli_query($conn,$sql);

   while($row=$result->fetch_assoc()){
    $col1[]=$row["h1"];
    $col2[]=$row["h2"];
    $col3[]=$row["h3"];
    $col4[]=$row["h4"];
    $col5[]=$row["h5"];
    $col6[]=$row["h6"];
    $col7[]=$row["h7"];
    $col8[]=$row["h8"];
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
    </style>
    <title>Update Schedule</title>
</head>

<body>
   
    <table class="center tb">
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
    var array=new Array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
   for(let i=0;i<6;i++){
    let trelement=document.createElement('tr');
    let td=trelement.appendChild(document.createElement('td'));
    td.innerHTML=array[i];
    let td1=trelement.appendChild(document.createElement('td'));
    td1.innerHTML=ttcol1[i];
    let td2=trelement.appendChild(document.createElement('td'));
    td2.innerHTML=ttcol2[i];
    let td3=trelement.appendChild(document.createElement('td'));
    td3.innerHTML=ttcol3[i];
    let td4=trelement.appendChild(document.createElement('td'));
    td4.innerHTML=ttcol4[i];
    let td5=trelement.appendChild(document.createElement('td'));
    td5.innerHTML=ttcol5[i];
    let td6=trelement.appendChild(document.createElement('td'));
    td6.innerHTML=ttcol6[i];
    let td7=trelement.appendChild(document.createElement('td'));
    td7.innerHTML=ttcol7[i];
    let td8=trelement.appendChild(document.createElement('td'));
    td8.innerHTML=ttcol8[i];
  var dynamic = document.querySelector('.tb');  
  dynamic.appendChild(trelement);
   }
</script>