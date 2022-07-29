
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Social Connections - Express your Thoughts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link href = "partials/stylenew.css" rel = "stylesheet"></link>


</head>
<body>
<?php
include "partials/navbar.php";
?>
<div id="carouselExampleIndicators" class="carousel slide" style ="margin-top:8%;"data-bs-ride="true">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner  " style = "margin-left:0.55%; ">
<div class="carousel-item active">
<img src="img/slider1.jpg "  class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="img/slider2.jpg" width= "100%" alt="...">
</div>
<div class="carousel-item">
<img  src="img/slider3.jpg" width= "100%" height="30%" alt="...">
</div>

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>


<br></br>
<hr ></hr>


<!-- Category container starts here --> 

<!-- Category container starts here --> 
<div class="container my-4" id="ques">
 <h2 class="text-center my-4"> Browse Categories</h2> 
<div class="row my-2"> 
<!-- Fetch all the categories and use a loop to iterate through categories -->
 <?php 
include "partials/_connect.php";

$sql = "SELECT * FROM `topics`"; 
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result))
{ // echo $row['category_id']; // 

echo '<div class="col-md-6 my-2  ">
 <div class="card" style="width: 18rem;">
 <img src="'.$row['img'].'"class="card-img-top" alt="image for this category">
 <div class="card-body"> 
<h5 class="card-title"><a style = " text-decoration:none;" href= "thread.php?cat_id='.$row['sr_no'].'  ">'.$row['heading'].'</a></h5> <p class="card-text">' . substr($row['description'], 0, 90). '... </p> 
<a class="btn btn-primary" href = "thread.php?cat_id='.$row['sr_no'].'">View Threads</a> 
</div> </div> </div>'; }
 ?>
 </div> 
</div>


<?php
include "partials/footer.php";

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>