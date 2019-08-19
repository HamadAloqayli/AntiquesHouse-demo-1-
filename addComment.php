<?php

include "database.php";

$title = $_POST['titleAdd'];
$text = $_POST['textAdd'];
$dateComment = $_POST['dateComment'];

$sql = " INSERT INTO comment(title,text,date,status) VALUES('$title','$text','$dateComment',1) ";

mysqli_query($con,$sql);
header("Location:modify.php?sucsses=SUCSSESFULY ADDED!");


mysqli_close($con);





?>