<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("Config.php");
$stid=$_POST['stid'];
$q=mysqli_query($connect,"SELECT id from std_entry WHERE student_name='$stid'");
$q=mysqli_fetch_assoc($q);
$id=$q['id'];
$subj=$_POST['st'];
$atten=$_POST['present'];
$date = date('Y-m-d H:i:s');
if ($stid!="" && $subj!="" && $atten!="" && $date!= "" && $subj!="Select Subject Name" && $stid!="Select Name") {
$query=mysqli_query($connect,"Insert into tbl (id,stu,sub,attend,Date)VALUES('$id','$stid','$subj','$atten','$date')");
}
if(!$query)
{
	echo mysqli_error();
	}





header("Location:AttendenceForm.php");
?>