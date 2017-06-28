
<!DOCTYPE html>
<html>

<head>
<!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->
</head>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
	<?php
    include 'header.php';
		if(empty($_SESSION["name"]))
	{
$name="Please Sign In";
$id="0";
	}
    else
    {

  $name=$_SESSION["name"];
$id=$_SESSION["id"];
    }  
if(isset($_POST["num1"]))
{
$u1=$_POST["username1"];
$p1=$_POST["password1"];
require 'classusr.php';
$cnn=new product_all;
$result=$cnn->loginselect($u1,$p1);
if($result->num_rows==1)
{
$row=$result->fetch_assoc();
$_SESSION["id"]=$row["usr_id"];
$_SESSION["name"]=$row["usr_name"];
header('location:index1.php');
}
else
{echo "Kindly Check Your Username and Password";}
}
else
{
}
?>
<h1>Login Form</h1>

<form action="/action_page.php"class="form-group" >
  <div class="">
    <img src="" alt="" class="">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" class="form-control"placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
