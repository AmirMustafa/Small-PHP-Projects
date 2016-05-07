<html>
<head>
<title>Practical Case Study</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include('header.php'); ?>
<div id="content">
<div id="form">
	<form action="logincheck.php" method="post">
	<table cellpadding="5" cellspacing="5">
		<caption>Login</caption>
		<tr>
			<td>Username</td>
			<td><input type="text" name="un" required /></td>
		</tr>		
		<tr>
			<td>Password</td>
			<td><input type="password" name="pwd" required /></td>
		</tr>		
		<tr>
			<td>Login</td>
			<td><input type="submit" name="submit" value="Login" /></td>
		</tr>		
	</table>
	</form>
</div>
</div>
</body>
</html>