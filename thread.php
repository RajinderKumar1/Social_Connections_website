<?php
include "partials/navbar.php";

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>thread</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<br></br>
<br>
<?php
include "partials/_connect.php";
$id = $_GET['cat_id'];

$sql = "SELECT * FROM `topics` WHERE sr_no = $id"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<div class = container>

<h2 class ="text-center">  <?php  echo $row['heading']  ; ?> </h2>
<p >

<?php  echo $row['description'] ; ?>
</p>









</div>
<br>
<?php

echo '  <button type="button" class="btn btn-outline-primary" style="float:right; margin-right:3%;"><a href="postque.php?cat_id='.$id.'" style="text-decoration:none;">Post Question</a></button> ';

?>


<br></br>
<hr></hr>
<h5>Browse Questions</h5>


<?php

$catid = $_GET['cat_id'];

$sqlnew = "SELECT * FROM `thread` WHERE cat_id = $catid"; 
$resultnew = mysqli_query($conn, $sqlnew);
$rownew = mysqli_fetch_assoc($resultnew);
$notfound = true;
while($rownew = mysqli_fetch_assoc($resultnew) ){
	$notfound = false;
	
	echo '  <div class="media"><div style = "display:flex;" ><img class="mr-3" src="img/user.jpg" alt="Generic placeholder image" style = "width:2rem; "><a href= "que.php?thread_id='.$rownew['thread_id'].'" style = "text-decoration : none ;" > <h6  style = " display: block ; " class="mt-0">'.$rownew['subject'].'</h6> </div></a> <div class="media-body">'.  substr($rownew['sub_des'],0,80).'...</div> </div>' ;
   echo '<br>';


}
if($notfound){
	
	echo' <div class="alert alert-info" role="alert"> No Question Found ! --<a href="postque.php?cat_id='.$id.'" class="alert-link">post a first question</a>. Give it a click if you want to post. </div>  ';
	}
?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>




<?php
include "partials/footer.php";
?>