<?php
	$servername="localhost";
	$username="root"; 
	$password=""; 
	$dbname="SRM";
	$connect=MySQLi_connect($servername,$username,$password) or die("could not connect");
	if($connect)
		echo"done";
	$db=mysqli_select_db($connect,$dbname);
	$sql=mysqli_query($connect,"Select * from teachertbl");
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
  height:25px;
  opacity: 0.9;
  
}
		</style>
	</head>

	<body>

	<h2>Manage Lecturers</h2></br>

		<table style="width:100%;">
			<t>
				<th>Full NAme</th>
				<th>Id</th> 
				<th>Email Id</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Password</th>
				<th>RegDate</th>
				<th>Status</th>
			</t>
			<?php
				while($rows=mysqli_fetch_assoc($sql))
				{
	?>	
					<tr>
						<td><?php echo $rows["Full Name"];?></td>
						<td><?php echo $rows["id"];?></td>
						<td><?php echo $rows["Email Id"];?></td>
						<td><?php echo $rows["Gender"];?></td>
						<td><?php echo $rows["DOB"];?></td>
						<td><?php echo $rows["Password"];?></td>
						<td><?php echo $rows["RegDate"];?></td>
						<td><?php echo $rows["Status"];?></td>		
					</tr>
			<?php
			}
	?>
		</table>
		<button type="submit" class="submitbtn">Submit</button>
  
	</body>
</html>
