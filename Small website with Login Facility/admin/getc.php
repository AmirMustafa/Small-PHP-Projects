<?php
include('../db.php');
	$q = "select * from cms where page_id = ".$_REQUEST['id'];
	$res = mysqli_query($cn,$q) or exit(mysqli_error($cn));
	$cont = mysqli_fetch_assoc($res);
	echo stripslashes($cont['page_content']);
?>