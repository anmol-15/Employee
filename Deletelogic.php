<!-- Delete -->
<?php

$con=mysqli_connect("127.0.0.1", "root", "", "employee");
$query ="DELETE FROM `registration` WHERE `ID_Number`= '".$_POST['number']."' ";
$result=mysqli_query($con,$query);
if ($con->query($query) === TRUE) {
	header("Location: Delete.php?Empty=Deletetion Successful!!");
}

?>