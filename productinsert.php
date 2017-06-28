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
</head>
<body>
<form method="post"action="<?php echo $_SERVER["PHP_SELF"] ?>">
<input type="text"name="txt1"placeholder="enter id">
<input type="text"name="txt2"placeholder="enter name of product">
<input type="text"name="txt3"placeholder="enter color">
<input type="text"name="txt4"placeholder="enter prize">
<input type="text"name="txt5"placeholder="enter manufectorer">
<input type="text"name="txt6"placeholder="enter warrenty">
<input type="file"name="txt7">
<input type="text"name="txt8"placeholder="stock">
<input type="submit"name="btn"value="Insert">
</form>
<table class="table">
<?php
$_pid="";
$_pname="";
$_pcolor="";
$_pprize="";
$_pmanu="";
$_pwarr="";
$_pimg="";
$_stock="";
?>
<?php
if(isset($_POST["btn"]))
{
        $_pid=$_POST["txt1"];
        $_pname=$_POST["txt2"];
        $_pcolor=$_POST["txt3"];
        $_pprize=$_POST["txt4"];
        $_pmanu=$_POST["txt5"];
        $_pwarr=$_POST["txt6"];
        $_pimg=$_POST["txt7"];
        $_stock=$_POST["txt8"];
        require 'database.php';
        $obj=new product_all();
        $res=$obj->insertpro($_pid,$_pname,$_pcolor,$_pprize,$_pmanu,$_pwarr,$_pimg,$_stock);
       
       if($res===true)
        {
            echo "done";
           

        }
        else
        {
            echo "not done";
        }
}
?>
</table>

</body>
</html>