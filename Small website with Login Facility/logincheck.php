<?php
include('db.php');// check for the connection
$user = mysqli_real_escape_string($cn,trim($_REQUEST['un'])); //fetch user name
$pwd = mysqli_real_escape_string($cn,trim($_REQUEST['pwd'])); //fetch the password
$qur = "select * from info where eml = '$user' and pwd = '$pwd'";
$r = mysqli_query($cn,$qur) or exit(mysqli_error($cn));
$row = mysqli_num_rows($r);
if($row == 0)
{
	?>
		<script>
			alert('Invalid Username or Password');
			window.location = 'login.php';
		</script>
	<?php
}
else
{
	ob_start();// if we have any echo statement before session_start then that echo is stored in output buffer
	session_start();
	$_SESSION['username'] = $user;
	$_SESSION['login'] = 1;
	?>
		<script>
			window.location = 'user_page.php';
		</script>
	<?php
}
?>