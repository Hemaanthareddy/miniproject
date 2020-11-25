<?php
include("config.php");
$id=$_GET['id'];
$sql=mysqli_query($connect,"select * from tblsubjects where id=$id");
while($rows=mysqli_fetch_array($sql))
				{	
					$subname=$rows["SubjectName"];
					$subcode=$rows["SubjectCode"];
					$updatedate=$rows["UpdationDate"];
				}
?>
<?php
if(isset($_REQUEST["submit"]))
	{
	$subname=$_REQUEST["subname"];
	$subcode=$_REQUEST["subcd"];
	$updatedate=$_REQUEST["updatedate"];
	 @$update=mysqli_query($connect,"UPDATE tblsubjects SET SubjectName = '$subname'
WHERE id =$id");
	
	if($update)
		echo"updated";
	else
		echo"not updated";
	}
?>

<!DOCTYPE html>
<html>
<form action="" method="post" bgcolor="lightblue">
    Subject Name<input type="text"  name="subname" id="subnm" value="<?php echo $subname;?>">
	<br>
	<br>
    Subject Code<input type="text" name="subcd" id="subcd" value="<?php echo $subcode;?>">
	<br>
	<input type="hidden" name="createdate" id="subcd" value="<?php echo $creationdate;?>">
	<br>
    Update Date<input type="text" name="updatedate" id="subcd" value="<?php echo $updatedate;?>">
	<br>
	<input type="hidden" name="id" id="id" value="<?php echo _GET['id'];?>">
	<input type="submit" name="submit" value="submit"/>
</form>
</html>
