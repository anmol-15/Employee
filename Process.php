<?php 
$con = mysqli_connect ("127.0.0.1", "root", "", "employee"); //creating connections

$name = $_POST['name'];
$email = $_POST['email'];
$contacts = $_POST['contacts'];
$username = $_POST['user'];
$password = $_POST['password'];


$sql = "INSERT INTO `addnew`(`Full_Name`, `Email_Address`, `Contacts`, `User_Name`, `Password`) VALUES('$name', '$email', '$contacts', '".$_POST['user']."', '$password')";

if(mysqli_query($con, $sql)) {
    echo "Records Saved!!";
}
?>