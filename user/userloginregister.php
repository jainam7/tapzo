<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.c
{
     background-color: #f44336;
}
</style>

	
    <!-- start: CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body class="c">
	<?php
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
require 'userdatabase.php';
$cnn=new user_all;
$result=$cnn->loginselect($u1,$p1);
if($result->num_rows==1)
{
$row=$result->fetch_assoc();
$_SESSION["id"]=$row["u_id"];
$_SESSION["name"]=$row["u_name"];
echo "done";
//header('location: ../index.php');
}
else
{echo "Kindly Check Your Username and Password";}
}
else
{
}
	include '../header.php';
if(isset($_POST["but2"]))
{
	$r_a=md5(rand());
	$token=substr($r_a,0,6);
	$nm=$_POST["nm1"];
	$id=$_POST["idd"];
	$pas=$_POST["pass"];
	$mob=$_POST["mobi"];
	$add=$_POST["add1"];
	$im=$_POST["pic"];
	$gend=$_POST["gen"];
	echo $nm,$id,$pas,$mob,$add,$im,$gend;
require 'userdatabase.php';
$conn=new user_all;
$result=$conn->insert($nm,$id,$pas,$mob,$add,$im,$gend,'no',$token);
if($result===true)
{
$_SESSION["id"]=$id;
$_SESSION["name"]=$nm;
$f=1;

}
else
{
    echo "Entered User id Already taken";
}
}
?>
			<section class="header_text sub">
			
				<h2><span>Login or Regsiter</span></h2>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="#" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" name="username1" placeholder="Enter your username" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" name="password1" placeholder="Enter your password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input name="num1" tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="forgetpassword.php" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="#" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input name="nm1" type="text" placeholder="Enter your username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input name="idd" type="email" placeholder="Enter your email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input name="pass" type="password" placeholder="Enter your password" class="input-xlarge">
									</div>
								</div>	
								<div class="control-group">
									<label class="control-label">Mobile</label>
									<div class="controls">
										<input name="mobi" type="number" placeholder="Enter your mobile number" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Profile Pic</label>
									<div class="controls">
										<input name="pic" type="text" placeholder="Enter your profile pic path" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Gender</label>
									<div class="controls">
										<input name="gen" type="radio" value="Male" class="input-xlarge">Male
										
										<input name="gen" type="radio" value="Female" class="input-xlarge">Female
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Address</label>
									<div class="controls">
										<textarea name="add1"></textarea>
									</div>
								</div>
															                            
								<div class="control-group">
									<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
								</div>
								<hr>
								<div class="actions"><input name="but2" tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>
</body>
</html>