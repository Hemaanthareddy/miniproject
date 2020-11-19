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
	$sql=mysqli_query($connect,"select clsname,clsnum from createclass");
	?>
<!DOCTYPE html>
<html>
	<head>
	
		<style>
		body{
			background-image: url("https://image.freepik.com/free-photo/wall-wallpaper-concrete-colored-painted-textured-concept_53876-31799.jpg");
	
	background-repeat: no-repeat;
	background-size: 1400px 670px;
			}
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

	<h2>Manage Classes</h2></br>

		<table style="width:100%;" id="table">
			<t>
				<th>#</th>
				<th>Class Name</th> 
				<th>Class Name Numeric</th>
				<th>Section</th>
				<th>Creation Date</th>
				<th>Action</th>
			</t>
	<?php
				while($rows=mysqli_fetch_assoc($sql))
				{
	?>
					<tr>
						<td><?php echo $rows["clsname"];?></td>
						<td><?php echo $rows["clsnum"];?></td>
					</tr>
				}
			<?php
			}
	?>
</table>

	</body>
</html>
