<?php include('db.php'); ?>
<html>
<head>
<title>Practical Case Study</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include('header.php'); ?>
<div id="content">
<p>
<?php
$q = "select * from cms where page_id = 2";
	$res = mysqli_query($cn,$q) or exit(mysqli_error($cn));
	$cont = mysqli_fetch_assoc($res);
	echo stripslashes($cont['page_content']);// stripslashes function is used to remove 
	//the slashes added by the function addslashes
	
?>
</p>
</div>
</body>
</html>