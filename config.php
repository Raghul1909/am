
<?php
$connect=mysqli_connect("localhost","root","");
if(!$connect)
{
	echo "Error".mysqli_error();
	}
	
	
	$db=mysqli_select_db($connect,"attendance_db");
	if(!$db)
	{
		echo "Error".mysqli_error();
		}
		
?>