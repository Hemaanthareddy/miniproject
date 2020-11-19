<?php
	$servername="localhost";
	$username="root"; 
	$password=""; 
	$dbname="SRM";
	$connect=MySQLi_connect($servername,$username,$password) or die("could not connect");
	if($connect)
		echo"done";
	$db=mysqli_select_db($connect,$dbname);
	If($db)
		echo"yes";
	$sql=mysqli_query($connect,"select * from tblsubjects");
	?>
<!DOCTYPE html>
<html>
	<head>
		<style>
			table,td,th{
			border: 1px solid black;
			border-collapse: collapse;
			}
			.submitbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  
  opacity: 0.9;
  
}
		</style>
	</head>

	<body>

	<h2>Manage Subjects</h2></br>

		<table style="width:100%;">
			<t>
				<th>#</th>
				<th>Subject Name</th> 
				<th>Subject Code</th>
				<th>Creation Date</th>
				<th>Updation Date</th>
				<th>Action</th>
			</t>
			<?php
				while($rows=mysqli_fetch_assoc($sql))
				{
	?>
					<tr>
						<td><?php echo $rows["id"];?></td>
						<td><?php echo $rows["SubjectName"];?></td>
						<td><?php echo $rows["SubjectCode"];?></td>
						<td><?php echo $rows["Creationdate"];?></td>
						<td><?php echo $rows["UpdationDate"];?></td>
						
					</tr>
			<?php
			}
	?>
			
		</table>
		<button type="submit" class="submitbtn">Submit</button>
  
	</body>
</html>
