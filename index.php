<!DOCTYPE html>
<html lang="en">
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

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	
	<!--start: Wrapper -->
	<div id="wrapper">
		
		<!--start: Container -->
		<div class="fluid container">
		
		
			<!--start: Header -->
			<header>
			
				<!--start: Row -->
				<div class="row">
					
				<h1><font size="34">Flopkart</font></h1>
					</div>
					<!--end: Logo -->
					
					<!--start: Social Links -->
					
						
			</header>
			<!--end: Header-->
			
			<!--start: Navigation-->	
			<div class="navbar navbar-inverse">
    			<div class="navbar-inner">
        			<div class="row">
          				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
          				</a>
          				<div class="nav-collapse collapse">
            				<ul class="nav">
              					<li class="active"><a href="index.html">Home</a></li>
              					<li><a href="login.php">Admin login</a></li>
								<li><a href="user/userloginregister.php">Sign Up</a></li>
              					<li class="dropdown">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
                					<ul class="dropdown-menu">
                  						<li><a href="#">View Profile</a></li>
                  						<li><a href="#">Edit Profile</a></li>
                  						<li class="divider"></li>
                  						
                					</ul>
              					</li>
            				</ul>
          				</div>
        			</div>
      			</div>
    		</div>
			<!--end: Navigation-->
			
		</div>
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="fluid container">
	
			<!-- start: Flexslider -->
			<div class="slider">
			
				<div class="flexslider">
					<ul class="slides">
						<?php
						require 'database.php';
	$obj=new product_all();
	$result=$obj->getallpro();
	while($row=$result->fetch_assoc())
	{
		
	
					echo '<li>'.
							'<img src="'.$row["p_img"] .'" />'.
						
								
							
						'</li>';

						
	}
	?>

					</ul>
				
				</div>
				</div>
			
			</div>
		
<div class="row">
      	<?php	
		$obj=new product_all();
	$result=$obj->getallpro();
	while($row=$result->fetch_assoc())
	{  
		echo '<div class="col-ld-4">'.
    	 '<a href="#" class="thumbnail">'.
      '<img src="'. $row["p_img"].'" width="350px"height="300px"alt="...">'.
    '</a>'.
	  '<center><h2> '. $row["p_name"] .'</h2></center>'.
         '<center> <h4>Price :- '.  $row["p_color"] .'</h4></center>'.
         '<center> <h4>Color :- '.  $row["p_prize"] .'rs.</h4></center>'.
                 '<center> <h4>Warranty :- '.  $row["p_warr"] .'</h4></center>'.
        
'</div>';
	}
    ?>

<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
