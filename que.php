<?php
include "partials/navbar.php";

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About us</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<br></br><br>


<?php
 include "partials/_connect.php";


$thread_id = $_GET['thread_id'];

$sqlnew = "SELECT * FROM `thread` WHERE thread_id = $thread_id"; 
$resultnew = mysqli_query($conn, $sqlnew);
$rownew = mysqli_fetch_assoc($resultnew);
echo ' <div class="card text-center">
 <div class="card-header"> Question </div>
 <div class="card-body">
 <h5 class="card-title">'.$rownew['subject'].'</h5>
 <p class="card-text">'.$rownew['sub_des'].'.</p> 

 </div> <div class="card-footer text-muted"> posted on '.$rownew['time'].' </div> </div>
  ';



/*
while($rownew = mysqli_fetch_assoc($resultnew) ){
	
	echo ' <div class="card text-center">
 <div class="card-header"> Question </div>
 <div class="card-body">
 <h5 class="card-title">'.$rownew['subject'].'</h5>
 <p class="card-text">'.$rownew['sub_des'].'.</p> 

 </div> <div class="card-footer text-muted"> posted on '.$row['time'].' </div> </div>
  ';


}
*/




?>

<div style="min-height:13rem;">



</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>




<?php
include "partials/footer.php";
?>

