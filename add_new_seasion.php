<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "premier_league";

$conn = mysqli_connect($host, $user, $password, $db);

$newSeason = "CREATE TABLE season_11(
    a_Date int(11) NOT NULL,
    HomeTeam varchar(50) NOT NULL,
    AwayTeam varchar(50) NOT NULL,
    FTHG int(11) NOT NULL,
    FTAG int(11) NOT NULL

);";

mysqli_query($conn, $newSeason);
?>
