<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
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
      <a class="nav-item nav-link " href="All.php">All Employees</a>
      <a class="nav-item nav-link " href="Delete.php">Delete an Employee</a>
      <a class="nav-item nav-link " href="Index.php">Logout</a>
  </div>
</nav>


    <div class="card mx-auto" >
  <div class="card-body">
   <div class="container">
        <h1 style="text-align: center;"> Update Employee Details </h1>
        <?php
  if (@$_GET['Empty']==true)
  {
  ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!!</strong> <?php echo $_GET['Empty']?>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </button>
  </div>

  
<?php
}
?>
        <form action="Updatelogic.php" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> ID Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="number" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Employee Name </label>
    <div class="col-sm-10">
      <input type="type" class="form-control" name="name" id="inputPassword3">
    </div>
  </div>
<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Employee Gender </label>
    <div class="col-sm-10">
        <select class="form-control" name="gender">
            <option>Select Gender</option>
            <option> Male </option>
            <option> Female </option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Employee Email </label>
    <div class="col-sm-10">
      <input type="type" class="form-control" name="email" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Employee Contacts </label>
    <div class="col-sm-10">
      <input type="type" class="form-control" name="contacts" id="inputPassword3" maxlength="10">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Employee Job Title </label>
    <div class="col-sm-10">
      <input type="type" class="form-control" name="job" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Employee Location </label>
    <div class="col-sm-10">
      <input type="type" class="form-control" name="location" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Employee Department </label>
    <div class="col-sm-10">
        <select class="form-control" name="department">
            <option>Select Department</option>
            <option>Finance Department</option>
            <option>HR Department</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Employee Salary </label>
    <div class="col-sm-10">
      <input type="type" class="form-control" name="salary" id="inputPassword3">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success"> <!-- <a href="Dashboard.html" style="color: white; text-decoration: none;"> --> Add <!-- </a> --> </button>
      <a href="Dashboard.html" style="text-decoration: none;">Back</a>
</form>  
    </div>
  </div>
</div>
</body>
</html>