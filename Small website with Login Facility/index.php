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
$q = "select * from cms where page_id = 1";
	$res = mysqli_query($cn,$q) or exit(mysql_error($cn));
	$cont = mysqli_fetch_assoc($res);
	echo stripslashes($cont['page_content']);	
	//This PHP function returns a string with the backslashes 
	//(\) removed that were added by the PHP addslashes() function. 
?>
</p>
</div>
</body>
</html>