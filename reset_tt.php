<?php
    require 'config1.php';


    $sql = "TRUNCATE cse5a";
    $conn->query($sql);

    $sql = "INSERT INTO cse5a SELECT * FROM ocse5a";

    $conn->query($sql);

    $conn->close();
?>
