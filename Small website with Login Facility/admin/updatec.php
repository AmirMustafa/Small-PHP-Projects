<?php include('../db.php');

$q = mysqli_query($cn,"update cms set page_content = '".addslashes($_REQUEST['content'])."' where page_id = ".$_REQUEST['page']) or exit(mysqli_error($cn));
// addslashes function is used if in para we have semicolon, apostrope, double quotes, single quote den this
// function adds an slash (/) before the semicolon, etc so that it will not confuse between the actual code and
// and the para. mostly used while writting paragraphs.
if($q)
{
	?>
		<script>
			alert('Content Updated!');
			window.location = 'cms.php'; 
		</script>
	<?php
	
}
else
{
	?>
		<script>
			alert('Error! Content Not Updated!');
			window.location = 'cms.php'; 
		</script>
	<?php
	
}


 ?>