<?php

    $database= new mysqli("localhost","root","","happy-panda");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
<?php 
/*
$server = "localhost";
$user = "root";
$pass = "";
$database = "edoc";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
*/
?>