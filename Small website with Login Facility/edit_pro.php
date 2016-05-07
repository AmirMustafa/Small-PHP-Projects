<?php
include('sessioncheck.php');
include('db.php');
$q = "select * from info where eml = '".$_SESSION['username']."'";
$r = mysqli_query($cn,$q);
$res = mysqli_fetch_row($r);
?>
<html>
<head>
<title>Practical Case Study</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include('header1.php'); ?>
<div id="content">
	<div id="form">
	<form method="post" action="update.php" enctype="multipart/form-data">
	<table width="426" cellpadding="5" cellspacing="5">
	<caption>Registration Form</caption>				
		<tr>
			<td>First Name</td>			
		    <td><input type="text" name="fn" value="<?php echo $res[1]; ?>" required /></td>		  
		</tr>		
		<tr>
			<td>Middle Name</td>		    
		    <td><input type="text" name="mn" value="<?php echo $res[2]; ?>" required /></td>		    
		</tr>		
		<tr>
			<td>Last Name</td>	    
		    <td><input type="text" name="ln" value="<?php echo $res[3]; ?>" required /></td>		    
		</tr>		
		<tr>
			<td>Mobile</td>		    
		    <td><input type="text" name="mob" value="<?php echo $res[6]; ?>" required /></td>	    
		</tr>		
		<tr>
			<td>Gender</td>		    
		    <td><input type="radio" name="gender" value="male" <?php if($res[7] == 'male'){ ?> checked="checked" <?php } ?> required />
		      Male 
	          <input type="radio" name="gender" value="female" <?php if($res[7] == 'female'){ ?> checked="checked" <?php } ?> />
            Female</td>		    
		</tr>		
		<tr>
			<td>City</td>		    
		    <td><select name="city" required />		      
				<option value="">Select</option>
				<option <?php if($res[8] == 'Pune'){ ?> selected="selected" <?php } ?> value="Pune">Pune</option>
				<option <?php if($res[8] == 'Mumbai'){ ?> selected="selected" <?php } ?> value="Mumbai">Mumbai</option>
				<option <?php if($res[8] == 'Delhi'){ ?> selected="selected" <?php } ?> value="Delhi">Delhi</option>
			</select></td>		    
		</tr>
		<tr>
			<td>Upload Photo</td>			
		    <td><input type="file" name="image" value="<?php echo $res[9] ?>" required /></td>		    
		</tr>		
		<tr>
			<td>Upload Resume</td>			
		    <td><input type="file" name="resume" value="<?php echo $res[10] ?>" required /></td>		    
		</tr>		
		<tr>
			<td>Register</td>		    
		    <td><input type="submit" name="submit" value="Upadate" /></td>	    
		</tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>