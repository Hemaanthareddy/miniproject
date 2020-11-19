?>
<?php
if(isset($_REQUEST["submit"]))
	{
	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$studentmail=$_REQUEST["mail"];
	$dob=$_REQUEST["dob"];
	$classid=$_REQUEST["clsid"];
	$status=$_REQUEST["status"];
	$update=mysqli_query($connect,"UPDATE studenttbl SET UserName = '$username' WHERE StudentId=$id");
if($update)
		echo"updated";
else
		echo"not updated";
	}
?>
<!DOCTYPE html>
<html>
<form action="" method="post">
	<input type="hidden" name="id" id="id" value="<?php echo _GET['id'];?>">
	<br>
	<br>
	UserName<input type="text" name="username" id="subcd" value="<?php echo $username;?>">
	<br>
	<br>
	Password<input type="text" name="password" id="subcd" value="<?php echo $password;?>">
	<br>
	<br>
    StudentEmail<input type="text" name="mail" id="mail" value="<?php echo $studentmail;?>">
	<br>
	<br>
	DOB<input type="text"  name="dob" id="dob" value="<?php echo $dob;?>">
	<br>
	<br>
    ClassId<input type="text" name="clsid" id="clsid" value="<?php echo $classid;?>">
	<br>
	<br>
	Status<input type="text" name="status" id="status" value="<?php echo $status;?>">
	<br>
	<br>
	<input type="submit" name="submit" value="submit"/>
</form>
</html>
