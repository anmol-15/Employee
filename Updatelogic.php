<?php 
// Update Code
$con=mysqli_connect("127.0.0.1", "root", "", "employee");

$sql="UPDATE `registration` SET `Employee_Name`='".$_POST['name']."', `Employee_Gender`='".$_POST['gender']."', `Employee_Email`='".$_POST['email']."', `Employee_Contacts`='".$_POST['contacts']."', `Employee_Job_Tile`='".$_POST['job']."', `Employee_Job_Tile`='".$_POST['job']."', `Employee_Location`='".$_POST['location']."', `Employee_Department`='".$_POST['department']."', `Employee_Salary`='".$_POST['salary']."'  WHERE ID_Number='".$_POST['number']."'";

if(mysqli_query($con,$sql)) {
	header("Location: Update.php?Empty= Update Success");
}
?>