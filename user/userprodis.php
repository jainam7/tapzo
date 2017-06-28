<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	
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
<body>
<?php

$id=$_SESSION["id"];
$localhost="localhost";
$user="root";
$password="";
$database="shopping_cart";
$conn=new mysqli($localhost,$user,$password,$database);
$q='select * from user_tbl where u_id="'. $id .'"';
$result=$conn->query($q);
$row=$result->fetch_assoc();
$name=$row["u_name"];
$mob=$row["u_mob"];
$add=$row["u_add"];
$img=$row["u_img"];
$gen=$row["gen"];

?>
	<?php
		if(empty($_SESSION["name"]))
	{
echo "plz sign in";
$name="Please Sign In";
$id="0";
	}
    else
    {

  $name=$_SESSION["name"];
$id=$_SESSION["id"];
    }  
	include '../header.php';
                        ?>
			<section class="main-content">				

			<section class="header_text sub">
				<h4><span>Your Account</span></h4>
         
			</section>			
			
					<div class="col">					
                        <div class="row-sm-4"></div>
                        <div class="row-sm-8" align="center">
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="usrupdate.php" method="post" class="form-stacked" align="center">
							<fieldset>
								<div class="control-group">
                                    <table align="center">
                                        <tr rowspan="5"><td colspan="2">       <div class="container">
 
  <img src="<?php echo $img; ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
</div></tr>
									<tr><td><label class="control-label">Username:<td><?php echo $id; ?></label></tr>
                                    <tr><td><label class="control-label">Name:<td><?php echo $name; ?></label></tr>
                                    <tr><td><label class="control-label">Mobile:<td><?php echo $mob; ?></label></tr>
                                    <tr><td><label class="control-label">Address:<td><?php echo $add; ?></label></tr>
                                    <tr><td><label class="control-label">Gender:<td><?php echo $gen; ?></label></tr>
                                    </table>
						        </div>
								<hr>
								<div class="actions" align="center"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Update Details"></div>
												</div></form>
												<hr>
									<form action="passup.php" method="post">
									
								<div class="actions" align="center"><a href="passup.php"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Update Password"></a></div></form>
				
			
                <div class="row-sm-4">

                </div>
          
			</section>			
</body>
</html>