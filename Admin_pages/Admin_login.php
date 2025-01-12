<?php

$host="localhost";
$user="root";
$password="";
$db="techtronix";

$data=mysqli_connect($host,$user,$password,$db);
if($data==false){
    echo"error";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["name"];
    $password=$_POST["pass"];

    $sql="select * from admins where username='".$username."' and password='".$password."'";

    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["username"]== $username && $row["password"]==$password){
        header("location:Admin_dashboard.php");
    }
        
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login</title>
    
    <!-- font awesome cdn link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'>
    
    <!-- custom css file link -->
    <link rel='stylesheet' href='../CSS/Admin_login.css'>
</head>
<body>

<!-- admin login form section -->

<section class="form-container">
    <form action="" method="POST">
        <div class="form-logo">
        <img src="../Images/Techtronix-logo.png">
        </div>
        <h3>Welcome Admin !</h3>
        <p>default username = <span>admin</span> & password = <span>0000</span></p>
        <div class="input-box">
        <input type="text" name="name" maxlength="20" required placeholder="Enter your username" 
        class="box">
        <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-box">
        <input type="password" name="pass" maxlength="20" required placeholder="Enter your password" 
        class="box">
        <i class="fa-solid fa-lock"></i>
        </div> 
        <button type="submit" name="submit" class="btn">Login</button>
    </form>

</body>

</html>