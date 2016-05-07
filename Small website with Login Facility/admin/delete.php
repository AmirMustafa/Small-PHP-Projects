<?php
include('../db.php');

$q = mysqli_query($cn,"delete from info where id = ".$_REQUEST['id']);
if($q)
{
	?>
		<script>
			alert('Record Deleted!');
			window.location = 'admin_page.php';
		</script>
	<?php
}
else
{
	?>
		<script>
			alert('Error! Record Not Deleted!');
			window.location = 'admin_page.php';
		</script>
	<?php
}



?>