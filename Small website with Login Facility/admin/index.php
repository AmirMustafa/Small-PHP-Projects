<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
	#log
	{	
		margin-left:350px;
		margin-top:200px;
		border:1px solid black;
		width:300px;
		background:#CCCCCC;
		border-radius:25px;
	}
</style>
</head>
<body>
<div id="log">
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
</body>
</html>
