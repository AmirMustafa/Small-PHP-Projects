<?php
	if(!file_exists('std.xml'))
		{
		$snm = $_REQUEST['sname'];
		$sb1 = $_REQUEST['sub1'];
		$sb2 = $_REQUEST['sub2'];
		$sb3 = $_REQUEST['sub3'];

		$ttl = $sb1 + $sb2 + $sb3;
		$av = $ttl/3;

		$d = new DomDocument();
		$root = $d->createElement('students');
		$node = $d->createElement('std');

		$sname = $d->createElement('sname');
		$val = $d->createTextNode($snm);
		$sname->appendChild($val);
		$node->appendChild($sname);

		$sub1 = $d->createElement('sub1');
		$val = $d->createTextNode($sb1);
		$sub1->appendChild($val);
		$node->appendChild($sub1);

		$sub2 = $d->createElement('sub2');
		$val = $d->createTextNode($sb2);
		$sub2->appendChild($val);
		$node->appendChild($sub2);

		$sub3 = $d->createElement('sub3');
		$val = $d->createTextNode($sb3);
		$sub3->appendChild($val);
		$node->appendChild($sub3);

	
		$total = $d->createElement('total');
		$val = $d->createTextNode($ttl);
		$total->appendChild($val);
		$node->appendChild($total);

		$avg = $d->createElement('avg');
		$val = $d->createTextNode($av);
		$avg->appendChild($val);
		$node->appendChild($avg);

		$root->appendChild($node);
		$d->appendChild($root);
		

		$d->Save('std.xml');
		$d = simplexml_load_file('std.xml');

		foreach($d as $i)
		{
			foreach($i as $j)
			{
				echo $j->getName()." = ".$j."<br/>";
			}
			echo "<hr/>";
		}
		

		
	}
	else
	{
		$xml = simplexml_load_file('std.xml'); 

		$sname = $_REQUEST['sname'];
		$sub1 = $_REQUEST['sub1'];
		$sub2 = $_REQUEST['sub2'];
		$sub3 = $_REQUEST['sub3'];

		$total = $sub1 + $sub2 + $sub3;
		$avg = $total/3;

		

		$ch = $xml->addChild('std');
		$ch->addChild('sname',$sname);
		$ch->addChild('sub1',$sub1);
		$ch->addChild('sub2',$sub2);
		$ch->addChild('sub3',$sub3);
		$ch->addChild('total',$total);
		$ch->addChild('avg',$avg);
		

		$xml->asXml('std.xml');

		foreach($xml as $i)
		{
			foreach($i as $j)
			{
				echo $j->getName()." = ".$j."<br />";
			}
		}
		echo "<hr/>";

	}
	
	echo "<a href='form1.html'>Back</a>";
	

	
	
?>