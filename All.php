
<?php
// to table
// comes above above the head
$sql= "SELECT * FROM `registration`";
$search_result=filtertable($sql);

function filtertable($sql)
{
  $con=mysqli_connect("127.0.0.1", "root", "", "employee");
  $filter_result=mysqli_query($con,$sql);
  return $filter_result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
   <!--  Table -->

<!-- Employee Details
    ID Number
    Employee Name
    Employee Gender M,F
    Employee Email
    Employee Contacts
    Employee Job Title
    Employee Location
    Employee Department
    Employee Salary -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1>Employee</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-item nav-link " href="New.html">Add a New Employee</a>
      <a class="nav-item nav-link " href="Update.php">Update an Employee</a>
      <a class="nav-item nav-link " href="All.html">All Employees</a>
      <a class="nav-item nav-link " href="Delete.php">Delete an Employee</a>
      <a class="nav-item nav-link " href="Index.php">Logout</a>
  </div>
</nav>



<div class="container">
        <table class="table  table-bordered table-hover bg-light table-sm">
  <thead>
    <tr class="container bg-secondary" style="color: white;">
      <th scope="col"> Number </th>
      <th scope="col"> ID Number </th>
      <th scope="col"> Employee Name </th>
      <th scope="col"> Employee Gender </th>
      <th scope="col"> Employee Email </th>
      <th scope="col"> Employee Contacts </th>
      <th scope="col"> Employee Job Title </th>
      <th scope="col"> Employee Location </th>
      <th scope="col"> Employee Department </th>
      <th scope="col"> Employee Salary </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $count=1;

    while($row = mysqli_fetch_array($search_result)) {
?>
<tr>
  <td><?php echo $count; ?></td>
  <td><?php echo $row["ID_Number"]; ?></td>
  <td><?php echo $row["Employee_Name"]; ?></td>
  <td><?php echo $row["Employee_Gender"]; ?></td>
  <td><?php echo $row["Employee_Email"]; ?></td>
  <td><?php echo $row["Employee_Contacts"]; ?></td>
  <td><?php echo $row["Employee_Job_Tile"]; ?></td>
  <td><?php echo $row["Employee_Location"]; ?></td>
  <td><?php echo $row["Employee_Department"]; ?></td>
  <td><?php echo $row["Employee_Salary"]; ?></td>
</tr>

<?php 
$count++;} ?>

  </tbody>
</table>
      <a href="Dashboard.html" style="text-decoration: none;">Back</a> 
</body>
</html>