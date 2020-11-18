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

include("addlecturer.php");
if(isset($_REQUEST["submit"]))
	{
		@$fname=$_REQUEST["fulnm"];
		@$id=$_REQUEST["id"];
		@$emailid=$_REQUEST["emid"];
		@$gender=$_REQUEST["gender"];
		@$date     = date('Y-m-d',strtotime($_POST['dob']));
		
		@$lecpass=$_REQUEST["lecpass"];
		@$regdt=$_REQUEST["regdt"];
		@$status=$_REQUEST["status"];
		
		
		$sql = "INSERT INTO lecturer (fulnm,id,emid,gender,dob,lecpass,regdt,status) VALUES ('$fname', '$id', '$emailid', '$gender', '$date', '$lecpass', '$regdt', '$status')";
		
		
	}

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>