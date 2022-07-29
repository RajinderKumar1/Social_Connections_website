

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>post</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<br></br>
<br>
<?php

include "partials/navbar.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_GET['cat_id'];
	include "partials/_connect.php";
	$subject = $_POST['subject'];
	$sub_des = $_POST['sub_des'];
	
	

	$sql = " INSERT INTO `thread` (`subject`, `sub_des`, `user_id`, `cat_id`, `time`) VALUES ( '$subject', '$sub_des ', '1', '$id', current_timestamp());";
	$result = mysqli_query($conn, $sql);
	

}
	


if($result){
		echo ' <div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Post successfully!</strong> Your post has posted Successsfully. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div> ';
		
		}

	?>
<br></br>
<h3 class="text-center">Post a Question</h3>
<?php
$cat_id = $_GET['cat_id'];
echo ' <form action = "postque.php?cat_id='. $cat_id .'"  method = "POST">
';
?>

<div class="mb-3">
<label for="que" class="que">Question</label>
<input type="text" name = "subject" class="form-control" id="que" aria-describedby="emailHelp">
<div id="emailHelp" class="form-text">please define a question .</div>
</div>
<div class="mb-3">
<label for="des" class="form-label">Description</label>
<textarea type="text" name="sub_des" class="form-control" id="des"></textarea>
</div>


<button type="submit" class="btn btn-primary" style="margin-left:42%; margin-top:7%;;">Post now </button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>




<?php
include "partials/footer.php";
?>