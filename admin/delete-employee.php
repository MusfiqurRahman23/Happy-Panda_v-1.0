<?php

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
            header("location: ../login.php");
        }

    }else{
        header("location: ../login.php");
    }
    
    
    if($_GET){
        //import database
        include("../connection.php");
        $id=$_GET["id"];
        $result001= $database->query("select * from employee where eid=$id;");
        $email=($result001->fetch_assoc())["eemail"];
        $sql= $database->query("delete from webuser where email='$email';");
        $sql= $database->query("delete from employee where eemail='$email';");
        //print_r($email);
        header("location: employees.php");
    }


?>