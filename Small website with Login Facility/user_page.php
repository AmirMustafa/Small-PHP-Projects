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
	<table width="426" cellpadding="5" cellspacing="5">
	<caption>Registration Form</caption>
	 	<tr>
			<td >Photo</td>
			<td ><img src="<?php echo $res[9]; ?>" height="50px" width="50px"></td>
		 </tr>		
		<tr>
			<td >First Name</td>
		    <td ><?php echo $res[1]; ?>  </td>
		</tr>	
		<tr>
			<td >Middle Name</td>			
		    <td ><?php echo $res[2]; ?>  </td>		   
		</tr>		
		<tr>
			<td >Last Name</td>			
		    <td ><?php echo $res[3]; ?> </td>		   
		</tr>		
		<tr>
			<td >Email/username</td>			
		    <td ><?php echo $res[4]; ?>  </td>		    
		</tr>		
		<tr>
			<td >Mobile</td>			
		    <td ><?php echo $res[6]; ?>  </td>		    
		</tr>
		<tr>
			<td >Gender</td>			
		    <td ><input type="radio" name="gender" value="male" <?php if($res[7] == 'male'){ ?> checked="checked" <?php } ?> />
		      Male 
	          <input type="radio" name="gender" value="female" <?php if($res[7] == 'female'){ ?> checked="checked" <?php } ?> />
            Female</td>		    
		</tr>		
		<tr>
			<td >City</td>			
		    <td ><select name="city"  />		      
				<option value="">Select</option>
				<option <?php if($res[8] == 'Pune'){ ?> selected="selected" <?php } ?> value="Pune">Pune</option>
				<option <?php if($res[8] == 'Mumbai'){ ?> selected="selected" <?php } ?> value="Mumbai">Mumbai</option>
				<option <?php if($res[8] == 'Delhi'){ ?> selected="selected" <?php } ?> value="Delhi">Delhi</option>
			</select></td>		    
		</tr>			
		<tr>
			<td >Download Resume</td>			
		    <td  ><a href="<?php echo $res[10]; ?>" target="_blank"/>Click to Download Resume</a></td>	
			
		</tr>		
	</table>
	</div>
</div>
</body>
</html>