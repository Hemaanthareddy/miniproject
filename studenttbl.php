<?php
	$servername="localhost";
	$username="root"; 
	$password=""; 
	$dbname="SRM";
	$connect=MySQLi_connect($servername,$username,$password) or die("could not connect");
	if($connect)
		echo"done";
	else
		echo"not";
	$db=mysqli_select_db($connect,$dbname);
	If($db)
		echo"yes";
	include("pro 1.php");
	if(isset($_REQUEST["submit"]))
	{
	@$username=$_REQUEST["username"];
	@$password=$_REQUEST["password"];
	$extract=mysqli_query($connect,"select * from studenttbl where UserName='$username' && Password='$password'");
	$rowcount=mysqli_num_rows($extract);
	if($rowcount==true)
	{
		 header("location:Ban1.php");
	}
	else
	{
		echo "You are not student";
	}
	}
	?>
