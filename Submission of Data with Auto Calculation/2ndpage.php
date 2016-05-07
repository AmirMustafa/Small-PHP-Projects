<?php
	echo "Your Personal Details are as Follows: <hr />";
	$name = $_REQUEST['name'];
	$sub1 = $_REQUEST['sub1'];
	$sub2 = $_REQUEST['sub2'];
	$sub3 = $_REQUEST['sub3'];

	class student
	{
		private $n;
		private $s1;
		private $s2;
		private $s3;
		private $total;
		private $perc;
		
		public function student($a,$b,$c,$d)
		{
			$this->n=$a;
			$this->s1=$b;
			$this->s2=$c;
			$this->s3=$d;
			$this->total=$b+$c+$d;
			$this->perc=(($b+$c+$d)/3);
			
		}

		public function getValue()
		{
			echo "The student Name is:  ".$this->n."<br />";
			echo "The Subject 1 marks is:  ".$this->s1."<br />";
			echo "The Subject 2 marks is:  ".$this->s2."<br />";
			echo "The Subject 3 marks is:  ".$this->s3."<br />";
			echo "The Total marks is:  ".$this->total."<br />";
			echo "The Percentage is:  ".$this->perc." %<br />";
			
		}
	}

	$object = new student($name,$sub1,$sub2,$sub3);
	$object->getValue();
	
?>