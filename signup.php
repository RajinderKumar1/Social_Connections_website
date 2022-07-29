
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign up to Social Connections</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php
include "partials/navbar.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<br></br><br></br>
<h3 class = "text-center">Sign up to   <img src="partials/Logo2.png" style="width:13%;"></img></img></h3>
<form>
<div class="mb-3">
<label for="name" class="form-label">Name</label>
<input type="text" name ="name" class="form-control" id="name">
</div>
<div class="mb-3">
<label for="mobile" class="form-label">Mobile</label>
<input type="number" name = "mobile" class="form-control" id="mobile">
<div id="emailHelp" class="form-text">We'll never share your mobile  with anyone else.</div>
</div>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1">
</div>


<div class="mb-3">
<label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
<input type="password" class="form-control" id="exampleInputPassword1">
</div>


<button type="submit" style = "margin-left :3%;" class="btn btn-success">Sign up</button>
</form>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>




<?php
include "partials/footer.php";
?>







