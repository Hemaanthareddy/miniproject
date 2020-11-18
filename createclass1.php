<?php
	$servername="localhost";
	$username="root"; 
	$password=""; 
	$dbname="srms";



$link = mysqli_connect($servername,$username,$password,$dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

include("createclass.php");
if(isset($_REQUEST["submit"]))
	{
		@$classname=$_REQUEST["clsname"];
		@$classnum=$_REQUEST["clsnum"];
		@$section=$_REQUEST["sec"];
		
		$sql = "INSERT INTO createclass (clsname, clsnum, sec) VALUES ('$classname', '$classnum', '$section')";
		
		
	}

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
