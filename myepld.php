<?php

include "common.php";

/*inluding the header of the page*/

$IPATH = $_SERVER["DOCUMENT_ROOT"]."/PHP-ASSIGNMENT/"; 

include($IPATH."top.html");

?>  
<br>
<h2 style="text-align: center;" id="h2"><i>Welcome to English Premier League</i></h2>
<img src="images/epld.jpg" id="home-image">
<form action="#" method="POST" id="comment-section">
    <h3>Leave a Reply</h3><br>
    <p>Your email address will not be published. Required field are marked<span>*</span></p>
    <p>Comment</p>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
    <p>Name<span>*</span></p>
    <input type="text" name="name" id="name"><br>
    <p>Email<span>*</span></p>
    <input type="email" name="email"><br>
    <button type="submit">POST</button>
    <br>
</form>
<?php
include($IPATH."bottom.html");
    ?>
</body>
</html>