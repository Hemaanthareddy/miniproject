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

include("createsubject.php");
if(isset($_REQUEST["submit"]))
	{
		@$subname=$_REQUEST["subname"];
		@$subcode=$_REQUEST["subcd"];
		
		
		$sql = "INSERT INTO subject (subname, subcd) VALUES ('$subname', '$subcode')";
		
		
	}

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
