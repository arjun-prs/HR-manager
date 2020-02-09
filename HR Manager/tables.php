<?php 
include('initialize.php');
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$table1 = "CREATE TABLE department
(
    deptID varchar(10),
    deptname varchar(20),
    managerID varchar(10),
    noofemp integer,
    primary key (deptID)
)";

$table2 = "CREATE TABLE employee
(
    eid varchar(10) NOT NULL,
    empname varchar(20),
    dob date,
    doj date,
    city varchar(15),
    managerID varchar(10),
    deptID varchar(10),
    designation varchar(20),
    primary key (eid),
    foreign key(deptID)references department(deptID)
)";

$table3 = "CREATE TABLE experience
(
    eid varchar(10),
    company varchar(20),
    designation varchar(20),
    noofyears integer,
    foreign key(eid)references employee(eid)
)";

$table4 = "CREATE TABLE educate
(
    eid varchar(10),
    degree varchar(10),
    cgpa varchar(5),
    foreign key(eid)references employee(eid)
)";

if($conn->query($table1)===true)
{
    echo "Table DEPARTMENT has been created";
}
else{
    echo "Error creating table" . $conn->error; 
}
echo "\n" ;
if($conn->query($table2)===true)
{
    echo "Table EMPLOYEE has been created";
}
else{
    echo "Error creating table" . $conn->error; 
}
echo"\n";
if($conn->query($table3)===true)
{
    echo "Table EXPERIENCE has been created";
}
else{
    echo "Error creating table" . $conn->error; 
}
echo "\n";

if($conn->query($table4)===true)
{
    echo "Table EDUCATE has been created";
}
else{
    echo "Error creating table" . $conn->error; 
}
?>

