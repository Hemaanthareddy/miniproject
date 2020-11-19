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
	$sql=mysqli_query($connect,"select * from studenttbl");
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

	<h2>Manage Students</h2></br>

		<table style="width:100%;">
			<t>
				<th>Studen Id</th>
				<th>User Name</th> 
				<th>Password</th>
				<th>Student Email</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Class Id</th>
				<th>Reg Date</th>
				<th>UpdationDate</th>
				<th>Status</th>
				<th>Action</th>
			</t>
			<?php
				while($rows=mysqli_fetch_assoc($sql))
				{
					echo"<tr>";
					echo'<td>'.$rows["StudentId"].'</td>';
					echo'<td>'.$rows["UserName"].'</td>';
					echo'<td>'.$rows["Password"].'</td>';
					echo'<td>'.$rows["StudentEmail"].'</td>';
					echo'<td>'.$rows["Gender"].'</td>';
					echo'<td>'.$rows["DOB"].'</td>';
					echo'<td>'.$rows["ClassId"].'</td>';
					echo'<td>'.$rows["RegDate"].'</td>';
					echo'<td>'.$rows["UpdationDate"].'</td>';
					echo'<td>'.$rows["Status"].'</td>';
					echo "<td><a href=\"edit1.php?id=$rows[StudentId]\"><input type='submit' value='EDIT'></a></td>";
					echo"</tr>";
			}
	?>
			
		</table>
		<button type="submit" class="submitbtn">Submit</button>
  
	</body>
</html>
