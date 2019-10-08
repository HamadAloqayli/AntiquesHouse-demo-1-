
<?php

$host = 'localhost';
$user = 'id11154632_root123';
$pass = 'root123';
$db = 'id11154632_mydb';

$con = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()) {

    die("failed to connect ". mysqli_connect_error() );
}


?>