<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <!-- ID       textbox       Button -->
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


<div class="card mx-auto" style="width: 40%;">
  <div class="card-body">
    <h5 class="card-title">Delete an Employee</h5>
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
    <form action="Deletelogic.php" method="POST"> 
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-3 col-form-label">ID Number</label>
      <div class="col-sm-6">
        <input class="form-control" name="number" id="inputEmail3" placeholder="Enter ID Number">
      </div>
      </div>
      <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-danger"> <!-- <a href="Dashboard.html" style="color: white; text-decoration: none;"> --> Delete <!-- </a> --> </button>
        <a href="Dashboard.html" style="text-decoration: none;"> Back </a>
      </div>
        </div>
      
      </form>

  </div>
</div>



    
</body>
</html>