<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<form action="docToTry2.php" method="post" enctype="multipart/form-data">

<input type="file" name="file" >
<input type="submit" name="submit">

</form>

<?php 


// $url = "www.hamad.com";
// $bom = explode(".",$url);
// echo end($bom);

$mailTo = "xakowi@mail-desk.net";
$subject = "Test mail function";
$message = "Hi\n\nThis message from php";
$header = "From: test@mail-desk.net";

mail($mailTo,$subject,$message,$header);



   // $array = [
   //    ["hamad",21],
   //    ["fahad",17],
   //    ["yazeed",10]
   // ];

   // foreach($array as $key => $value)
   // {
   //          echo $value[0] ." and ". $value[1] ."<br>";
   //          $_REQUEST[];
   //          $_SERVER[];
   // }
    

?>


<video src="https://www.youtube.com/watch?v=vNAWpFTuv1s"></video>




<script>


</script>

</body>
</html>