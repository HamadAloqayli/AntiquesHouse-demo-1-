<?php

include "database.php";

session_start();

if(!isset($_POST['submit']))
{
    header("Location:Shop.php");
    mysqli_close($con);
    session_destroy();
    exit();
}
if(!isset($_SESSION['id']))
{
    $imgId = $_POST['imgId'];

    header("Location:Detail.php?idImg=".$imgId."&errorInAdd");
    mysqli_close($con);
    session_destroy();
    exit();
}

$empId = $_POST['empId'];
$postId = $_POST['postId'];

$sql = " INSERT INTO orderr(Eid,Pid) VALUES('$empId','$postId') ";

mysqli_query($con,$sql);
header("Location:Shop.php?sucsses");


mysqli_close($con);


?>