<?php
include('initialize.php');
$conn = new mysqli($servername,$username,$password,$dbname);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "hi";
    $empid  = $_POST["eid"];
    $empname = $_POST["empname"];
    $dob = $_POST["dob"];
    $doj = $_POST["doj"];
    $city = $_POST["city"];
    $degree = $_POST["degree"];
    $cgpa = $_POST["cgpa"];

    $query = "INSERT into employee (eid,empname,dob,doj,city) values ('".$empid."','".$empname."','".$dob."','".$doj."','".$city."')";

    if($conn->query($query)===true)
    {
        header("Location:add.php");
    }







}

?>