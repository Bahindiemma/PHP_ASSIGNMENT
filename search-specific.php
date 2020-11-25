<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bacon.css">
</head>
<body>
<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/PHP-ASSIGNMENT/"; include($IPATH."top.html"); ?>
    <table>
        <tr>
    <?php
   include "db.php";

    if($conn-> connect_error){
        die("connection failed: ".$conn-> connect_error);
    }
    $sql = "SELECT `col 2` AS DATE, `col 3` AS HomeTeam, `col 4` AS AwayTeam, `col 5` AS HomeGoals, `col 6` AS AwayGoals FROM season_0910 WHERE `col 3` = 'arsenal' OR `col 4`='arsenal'";
    $result = $conn->query($sql);

    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<a href='search-spacific.php?ID={$row['HomeTeam']}'><tr><td>".$row['DATE']."</a></td><td>".$row['HomeTeam']."</td><td>".$row['AwayTeam']."</td><td>".$row['HomeGoals']."</td><td>".$row['AwayGoals']."</td></tr>";
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