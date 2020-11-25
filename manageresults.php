<?php
	$servername="localhost";
	$username="root"; 
	$password=""; 
	$dbname="SRM";
	$connect=MySQLi_connect($servername,$username,$password) or die("could not connect");
	$db=mysqli_select_db($connect,$dbname);
	$sql=mysqli_query($connect,"select * from tableresult2");
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

	<h2>Manage Results</h2></br>

		<table style="width:100%;">
			<t>
				<th>StudenName</th>
				<th>StudentId</th> 
				<th>Class</th>
				<th>Daa</th>
				<th>Os</th>
				<th>Flat</th>
				<th>Wit</th>
				<th>Ntc</th>
				<th>TotalPercentage</th>
				<th>Grade</th>
				<th>Action</th>
			</t>
			<?php
				while($rows=mysqli_fetch_assoc($sql))
				{
					echo"<tr>";
					echo'<td>'.$rows["StudentName"].'</td>';
					echo'<td>'.$rows["StudentId"].'</td>';
					echo'<td>'.$rows["Class"].'</td>';
					echo'<td>'.$rows["Daa"].'</td>';
					echo'<td>'.$rows["Os"].'</td>';
					echo'<td>'.$rows["Flat"].'</td>';
					echo'<td>'.$rows["Wit"].'</td>';
					echo'<td>'.$rows["Ntc"].'</td>';
					echo'<td>'.$rows["TotalPercentage"].'</td>';
					echo'<td>'.$rows["Grade"].'</td>';
					echo "<td><a href=\"studentsedit.php?id=$rows[StudentId]\"><input type='submit' value='EDIT'></a></td>";
					echo"</tr>";
			}
			?>
			
		</table>
  
	</body>
</html>
