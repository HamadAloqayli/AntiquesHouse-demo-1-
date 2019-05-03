<?php

include "database.php";

$title = $_POST['titleAdd'];
$text = $_POST['textAdd'];

$sql = " INSERT INTO comment(title,text,status) VALUES('$title','$text',1) ";

mysqli_query($con,$sql);
header("Location:modify.php?sucsses=SUCSSESFULY ADDED!");


mysqli_close($con);





?>