<?php
	if(isset($_REQUEST['submit']))
	{
		echo "Form Submitted Successfully ....... <hr /><br />";
		
		$p1 = '/(^[A-Z]{1,1})+([a-z]{1,19})$/';
		$p2 = '/(^[a-z]{1,1})+([a-z0-9]{1,20})+([._]{0,1})([a-z0-9]{1,10})+([@]{1,1})([a-z0-9]{2,10})+([.]{1,1})([a-z]{1,3})+([.]{0,1})([a-z]{1,3})$/';
		$p3 = '/(^[a-zA-Z0-9!@#$%^&*]{3,10})+([!@#$%^&*]{1,1})+([a-zA-Z0-9!@#$%^&*]{2,7})$/';
		$p4 = '/[987]{1,1}+([0-9]{9,9})$/';

		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$ename = $_REQUEST['ename'];
		$pname = $_REQUEST['pname'];
		$mname = $_REQUEST['mname'];
		$city = $_REQUEST['city'];
		

		if(empty($fname))
		{
			echo "First name cannot be blank.";
		}

		else if(!preg_match($p1,$fname))
		{
			echo "Please enter first name in the valid format. eg John";
		}

		else if(empty($lname))
		{
			echo "Last name cannot be blank.";
		}

		else if(!preg_match($p1,$lname))
		{
			echo "Please enter last name in the valid format. eg Snow";
		}

		else if(empty($ename))
		{
			echo "Email addrerss cannot be blank.";
		}

		else if(!preg_match($p2,$ename))
		{
			echo "Please enter email address in the valid format. eg abc@gmail.com";
		}

		else if(empty($pname))
		{
			echo "Password cannot be blank.";
		}

		else if(!preg_match($p3,$pname))
		{
			echo "Please enter password in the valid format. eg Password@123";
		}

		else if(empty($mname))
		{
			echo "Mobile number cannot be blank. ";
		}

		else if(!preg_match($p4,$mname))
		{
			echo "Please enter mobile name in the valid format. eg. 7377618756";
		}

		else if(!isset($_REQUEST['gender']))
		{
			echo "Select your gender.";
		}

		else if(!isset($_REQUEST['hobby']))
		{
			echo "Select your hobby.";
		}

		else if($city == 'select')
		{
			
			echo "You forgot to select city";
			
		}

		

		else
		{
			echo "The first name is  ".$_REQUEST['fname']."<br />";
			echo "The last name is  ".$_REQUEST['lname']."<br />";
			echo "The e-mail address is  ".$_REQUEST['ename']."<br />";
			echo "The password is  ".$_REQUEST['pname']."<br />";
			echo "The mobile no. is  ".$_REQUEST['mname']."<br />";
			echo "The gender is  ".$_REQUEST['gender']."<br />";
			echo "The hobby is  ".implode(",",$_REQUEST['hobby'])."<br />";
		}
		
	}

	else
	{
		echo "Please submit the form first.";
	}
?>