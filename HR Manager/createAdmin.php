<?php
    include("initialize.php");
     $conn = new mysqli($servername,$username,$password,$dbname);

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $name = $_POST["name"];
        $username = $_POST["username"];
        $mailid = $_POST["mailid"];
        $password = $_POST["password"];

        $q2 = "INSERT INTO administrator (name,username,mailid,password) values ('".$name."','".$username."','".$mailid."','".$password."')";
        if($conn->query($q2)===true){
            header("Location:login.html");
        }else{
            echo "Error : " . $conn->error;
        }

    
    }


?>