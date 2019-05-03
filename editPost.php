<?php

include "database.php";

$id = $_POST['idEdit'];
$title = $_POST['titleEdit'];
$img = $_FILES['imgEdit']['name'];
$text = $_POST['textEdit'];

$sql = " UPDATE post SET title = '$title' , text = '$text' WHERE id = '$id'  ";

mysqli_query($con,$sql);
header("Location:modifyPost.php?sucsses=SUCSSESFULY EDIT!");


mysqli_close($con);





?>