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

include("addstudent.php");
if(isset($_REQUEST["submit"]))
	{
		@$fname=$_REQUEST["fulnm"];
		@$id=$_REQUEST["rlnm"];
		@$emailid=$_REQUEST["emid"];
		@$gender=$_REQUEST["gender"];
		@$class=$_REQUEST["cls"];
		@$date     = date('Y-m-d',strtotime($_POST['dob']));
		
		@$stupass=$_REQUEST["stupass"];
		@$regdt=$_REQUEST["regdt"];
		@$status=$_REQUEST["status"];
		
		
		$sql = "INSERT INTO student (fulnm,rlnm,emid,gender,cls,dob,stupass,regdt,status) VALUES ('$fname', '$id', '$emailid', '$gender','$class', '$date', '$stupass', '$regdt', '$status')";
		
		
	}

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>