<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
</head>
<body>
    

      <div class="container jumbotron">
       

        <div class="card mx-auto" style="width: 30%;">
          <div class="card-body">
   <div class="">
        <h1 >Login</h1>




<?php
  if (@$_GET['Empty']==true)
  {
  ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!!</strong> <?php echo $_GET['Empty']?>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </button>
  </div>

  
<?php
}
?>





        <form action="loginlogic.php" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-5 col-form-label"> Username </label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" required placeholder="Username" name="user">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-5 col-form-label"> Password </label>
    <div class="col-sm-7">
      <input type="password" class="form-control" required id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"> Login </button>
       <div data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;">Register Here</div>
    </div>
  </div>
</form>  
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
 





<div class="card mx-auto">
  <div class="card-body mx-auto">
   <div class="container">
        <h1 style="text-align: center;">Registration</h1>
        <form action="Process.php" method="POST">
             <div class="form-group row">
    <label for="inputPassword3" class="col-form-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="inputPassword3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-form-label">Email Address</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="inputEmail3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-form-label">Contacts</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contacts" id="inputPassword3" maxlength="10">
    </div>
  </div>

 <div class="form-group row">
    <label for="inputPassword3" class="col-form-label">User  name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="user" id="inputPassword3">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword3">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" style="text-decoration: none;">Sign Up</button>
      <a href="Index.html" style="text-decoration: none;"> Login! </a>
</form>  
    </div>
  </div>
</div>
      </div>
     
    </div>
  </div>
</div>


</body>
</html>