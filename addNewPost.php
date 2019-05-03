<?php

include "database.php";

if(!empty($_FILES['imageAdd']['name']))
{

$img = $_FILES['imageAdd']['name'];
$target="savedImg/".basename($_FILES['imageAdd']['name']);
$title = $_POST['titleAdd'];
$text = $_POST['descriptionAdd'];
$type = $_POST['typeAdd'];
$price = $_POST['priceAdd'];


$sqlAddPost = " INSERT INTO post(image,title,text,category,price) VALUES('$img','$title','$text','$type','$price') ";

mysqli_query($con,$sqlAddPost);

move_uploaded_file($_FILES['imageAdd']['tmp_name'],$target);

header("Location:modifyPost.php?sucsses=SUCSSESFULY ADDED!");

}
else {
    header("Location:modifyPost.php?sucsses= SORRY!");
}

mysqli_close($con);





?>