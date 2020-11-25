<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "premier_league";

$conn = mysqli_connect("$host", "$user", "$password", "$db");
/*
$newSeason = "CREATE TABLE season(ID INT NOT NULL AUTO_INCREMENT,
Home_Team VARCHAR(50),
Away_Team VARCHAR(50),
Home_Goals INT(11),
Away_Goals INT(11),
PRIMARY KEY(ID)
)";

$result = mysqli_query($conn, $newSeason) or die("Bad Create: $newSeason");
*/
$update = "INSERT INTO season(Home_Team, Away_Team, Home_Goals, Away_Goals)
VALUES('Arsenal','Manchester United', '2', '3')";

$updateResult = mysqli_query($conn, $update);

?>