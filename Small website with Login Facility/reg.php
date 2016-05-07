<html>
<head>
<title>Practical Case Study</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include('header.php'); ?>
<div id="content">
	<div id="form">
	<form method="post" action="register.php" enctype="multipart/form-data" >
	<table width="426" cellpadding="5" cellspacing="5">
	<caption>Registration Form</caption>	 
		<tr>
			<td >First Name</td>
			 <td  ><input type="text" name="fn" required /></td>
		</tr>		
		<tr>
			<td >Middle Name</td>		    
		    <td ><input type="text" name="mn" required /></td>	    
		</tr>		
		<tr>
			<td >Last Name</td>	    
		    <td ><input type="text" name="ln" required /></td>		    
		</tr>		
		<tr>
			<td >Email/username</td>		    
		    <td ><input type="email" name="email" required /></td>	    
		</tr>		
		<tr>
			<td >Password</td>		    
		    <td ><input type="password" name="pwd" required /></td>	   
		</tr>		
		<tr>
			<td >Mobile</td>		    
		    <td ><input type="text" name="mob" required /></td>		    
		</tr>		
		<tr>
			<td >Gender</td>		    
		    <td ><input type="radio" name="gender" value="male" required />Male 
	          <input type="radio" name="gender" value="female"/>
            Female</td>		    
		</tr>		
		<tr>
			<td >City</td>		    
		    <td ><select name="city" required />	      
				<option value="">Select</option>
				<option value="Pune">Pune</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Delhi">Delhi</option>
			</select></td>	    
		</tr>		
		<tr>
			<td >Upload Photo</td>		
		    <td ><input type="file" name="image" required /></td>	    
		</tr>		
		<tr>
			<td >Upload Resume</td>			
		    <td ><input type="file" name="resume" required /></td>	    
		</tr>		
		<tr>
			<td >Register</td>		    
		    <td ><input type="submit" name="submit" value="Register" /></td>		    
		</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>