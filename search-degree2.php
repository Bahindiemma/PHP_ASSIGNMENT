<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>    
<?php
$seasons = array("season-one","season-two","season-three","season-four","season-five","season-six","season-seven","season-eight","season-nine","season-ten");

for($i=0; $i<count($seasons);$i++){

if(isset($_POST[$seasons[$i]])){
    $sql= "SELECT * 
    FROM 'season_0910'
    WHERE 'col 1' 
    LIKE '%$search%' OR 
    'col 2' LIKE '%$search%' OR
    'col 3' LIKE '%$search%' OR
    'col 4' LIKE '%$search%' OR
    'col 5' LIKE '%$search%' OR
    'col 6' LIKE '%$search%' ";

$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

if($queryResults > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['col 2']."</td><td>".$row['col 3']."</td><td>".$row['col 4']."</td><td>".$row['col 5']."</td><td>".$row['col 6']."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "There are no results matching your search.";
}
}
}
?>
</body>
</html>
