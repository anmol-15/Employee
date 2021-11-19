
<?php 
$con=mysqli_connect("127.0.0.1", "root", "", "employee");
if (!$con) {
	echo "NOT CONNECTED TO SERVER";
}
session_start();

$status="Verified";
$query ="SELECT  * FROM `addnew` WHERE `User_Name`='".$_POST['user']."' AND `Password`='".$_POST['password']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
	header("Location:Dashboard.html");
}
else{
	header("Location:index.php?Empty= Wrong Credentials men!!");
}
?>