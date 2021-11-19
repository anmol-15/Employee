<?php 
$con = mysqli_connect ("127.0.0.1", "root", "", "employee"); //creating connections

$ID = $_POST['number'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$contacts = $_POST['contacts'];
$job = $_POST['job'];
$location = $_POST['location'];
$department = $_POST['department'];
$salary = $_POST['salary'];

$sql = "INSERT INTO `registration`(`ID_Number`, `Employee_Name`, `Employee_Gender`, `Employee_Email`, `Employee_Contacts`, `Employee_Job_Tile`, `Employee_Location`, `Employee_Department`, `Employee_Salary`) VALUES('$ID','$name', '$gender', '$email', '$contacts', '$job', '$location', '$department', '$salary')";

if(mysqli_query ($con, $sql)) {
    header("Location:All.php");
}
?>