<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table data</title>
 <link rel="stylesheet" href="htdocs/bacon.css">

</head>
<body>
    
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/PHP-ASSIGNMENT/"; include($IPATH."top.html"); ?>

    <table>
    <tr>
    <?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "premier_league";
    $conn = mysqli_connect($host, $user, $password, $db);
    
    if($conn-> connect_error){
        die("connection failed: ".$conn-> connect_error);
    }
    $sql = "SELECT `col 2`,`col 3`,`col 4`,`col 5`,`col 6` FROM season_0910";
    $result = $conn->query($sql);

    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row['col 2']."</td><td>".$row['col 3']."</td><td>".$row['col 4']."</td><td>".$row['col 5']."</td><td>".$row['col 6']."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "0 results";
    }
    $conn->close();
    ?>
    </tr>
    </table>
    <?php
    include($IPATH."bottom.html");
    ?>
</body>
</html>
