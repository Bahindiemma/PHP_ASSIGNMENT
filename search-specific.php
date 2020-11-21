<html>
    <head>

    </head>
    <body>
        <h2>Search Page</h2>
    </body>
</html>
<table>
    <tr>
<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "premier_league";
  $conn = mysqli_connect($host, $user, $password, $db);




  if(isset($_POST['search-button'])){
    $search = mysqli_real_escape_string($conn, $_POST['search']);
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
?>