<?php
include('../db.php');
$user = mysqli_real_escape_string($cn,trim($_REQUEST['un']));
$pwd = mysqli_real_escape_string($cn,trim($_REQUEST['pwd']));

$qur = "select * from adminlogin where username = '$user' and pass = '$pwd'";
$r = mysqli_query($cn,$qur) or exit(mysqli_error($cn));
$row = mysqli_num_rows($r);
if($row == 0)
{
	?>
		<script>
			alert('Invalid Username or Password');
			window.location = 'index.php';
		</script>
	<?php
}
else
{	
	ob_start();
	session_start();
	$_SESSION['username'] = $user;
	$_SESSION['login'] = 1;
	?>
		<script>
			window.location = 'admin_page.php';
		</script>
	<?php
}
?>