<?php
include("config.php");
$id=$_GET['id'];
$sql=mysqli_query($connect,"select * from teachertbl");
while($rows=mysqli_fetch_array($sql))
				{	
					$name=$rows["Full Name"];
					$email=$rows["Email Id"];
					$dob=$rows["DOB"];
					$status=$rows["Status"];
				}
?>
<?php
if(isset($_REQUEST["submit"]))
	{
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$dob=$_REQUEST["dob"];
	$status=$_REQUEST["status"];
	 $update=mysqli_query($connect,"UPDATE teachertbl SET Full Name ='$name'
WHERE id =$id");
	
	if($update)
		echo"updated";
	else
		echo"not updated";
	}
?>

<!DOCTYPE html>
<html>
<form action="" method="post">
    Full Name<input type="text"  name="name" id="subnm" value="<?php echo $name;?>">
	<br>
	<br>
    <input type="hidden" name="id" id="subcd" value="<?php echo _GET['id'];?>">
	<br>
	EmailId<input type="text" name="email" id="email" value="<?php echo $email;?>">
	<br>
    <input type="hidden" name="gender" id="gender" value="<?php echo $gender;?>">
	<br>
	DOB<input type="Date" name="dob" id="dob" value="<?php echo $dob;?>">
	<br>
	Status<input type="text" name="status" id="status" value="<?php echo $status;?>">
	<input type="submit" name="submit" value="submit">
</form>
</html>
