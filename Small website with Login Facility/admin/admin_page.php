<?php
include('sessioncheck.php');
include('../db.php'); ?>
<html>
<head>
<title>Practical Case Study</title>
<link rel="stylesheet" href="../style.css" />
<script>
	function ask(a)
	{
		var x = confirm('Do you really want to delete');
		if( x == true)
		{
			window.location = 'delete.php?id='+a;
		}
		else
		{
			window.location = 'admin_page.php';
		}
	}
</script>
<style>
	table,td,th
	{
		border:1px solid black;
		border-collapse:collapse;		
	}
	table { margin-top:30px; }
</style>
</head>
<body>
<?php include('header.php');?>
<table cellpadding="10" cellspacing="10">
	<tr>
		<th>View</th>
		<th>Delete</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>City</th>
		<th>Image</th>
		<th>Resume</th>
	</tr>
<?php
$q = "select * from info";
$r = mysqli_query($cn,$q);
while($arr = mysqli_fetch_row($r))
{
 ?>
 <tr>
 <th><a href="view.php?id=<?php echo $arr[0]; ?>">View</a></th>
 <th><a onClick="ask(<?php echo $arr[0]; ?>)">Delete</a></th>
 <th><?php echo $arr[1]; ?></th>
 <th><?php echo $arr[2]; ?></th>
 <th><?php echo $arr[3]; ?></th>
 <th><?php echo $arr[4]; ?></th>
 <th><?php echo $arr[5]; ?></th>
 <th><?php echo $arr[6]; ?></th>
 <th><?php echo $arr[7]; ?></th>
 <th><?php echo $arr[8]; ?></th>
 <th><img src="../<?php echo $arr[9]; ?>" height="25" width="25"></th>
 <th><a href="../<?php echo $arr[10]; ?>">Resume</a></th>
</tr>
<?php
}
?>
</table>
</body>
</html>