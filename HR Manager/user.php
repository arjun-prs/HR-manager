<!DOCTYPE html>
<?php
include('initialize.php');
$conn = new mysqli($servername,$username,$password,$dbname);
if($_SERVER["REQUEST_METHOD"] == "POST")
{

  $uname = $_POST["uname"];
  $pwd = $_POST["pwd"];
//   echo $uname;
//   echo $pwd;
  $result = $conn->query("SELECT * FROM administrator where username = '".$uname."' and password = '".$pwd."' ");
  $row = mysqli_fetch_assoc($result);
    if(!$row){
        
        $wrongMessage = "Incorrect credentials. Please enter again.";
        echo "<script type='text/javascript'>alert('$wrongMessage');</script>";
        header("Location:login.html");
        
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome<?php echo " $uname";?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <script src="https://kit.fontawesome.com/495ff72d66.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC|Montserrat|Oswald|Raleway|Roboto+Mono|Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="padding: 25px;">
    <a class="navbar-brand" href="./index.html"><span style="font-family:'Montserrat';">Smart HR Manager</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./index.html"><i class="fa fa-fw fa-home"></i>Home <span class="sr-only">(current)</span></a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href=""><i class="fas fa-users-cog"></i>About</a>
        </li>
      </ul>
      <span class="navbar-text badge badge-lg badge-warning" style="color:black;">
        Hello <?php echo " $uname "; ?>
    </span>
      <span class="navbar-text" style="padding-left:5px;">
        <button type="button" onClick="location.href='index.html'" class="btn btn-outline-success">Logout</button>
      </span>
    </div>
  </nav>
    
</body>
</html>
