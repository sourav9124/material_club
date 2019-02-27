<?php




require 'config.php';
$msg="";
if (isset($_POST["submit"]))
 {
	$course_name=$_POST["CourseName"];
	$parent_name=$_POST["parent"];
	
	$target_dir="question_paper/";

	$target_file=$target_dir.basename($_FILES["course_image"]["name"]);
	move_uploaded_file($_FILES["course_image"]["tmp_name"],$target_file);

  $sql="INSERT INTO paper(course_name,course_image,parent)VALUES('$course_name','$target_file','$parent_name')";

  if(mysqli_query($conn,$sql))
  {
  	$msg="paper added successfully";
  }
  else
  {
  	$msg="Failed to add the paper.";
  }
}



?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="author" content="sourav singh">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width ,initial-scale=1 shrink-to-fit=no">
	<title>Material_club</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

     <style type="text/css">
     	.image{
 background-image: url(image/add_background_img2.jpeg);
 
 background-size: cover;
}
 
     </style>
</head>
<body class="image">

	<!-- new nav bar -->

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><h3><i>Material_club</i></h3></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  	<ul>
  		<span></span>
  		<span></span>
  	</ul>
    <ul class="navbar-nav mr-auto">
    	
    
      <li style="width: 300px; margin-right:15px; "><input type="text" class="form-control" id="search" name=""></li>
    	<li style=" margin-right:10px;"><input type="submit" class="btn btn-primary" id="serach_btn" name="" value="Search"></li>
      
    </ul>

   
  </div> 
</nav>

	<div class="container">
		<span><div class="row ">
		<div class="col-md-5 bg-light mt-5  rounded bg-dark"  style="margin-right: 800px;">
			<h2 class="text-center p-2 text-secondary">ADD BRANCH TO DATABASE</h2>
			<form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
				<div class="form-group">
					<input type="text" name="CourseName" class="form-control" placeholder="Course Name" required>
				</div>
				<div class="form-group">
					<input type="text" name="parent" class="form-control" placeholder="parent Name" required>
				</div>

				
				<div class="form-group">
					<div class="custom-file">
						<input type="file" name="course_image" class="custom-file-input" id="customFile"
						 required>

						 <label for="customFile" class="custom-file-label">Choose paper Image</label>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-success btn-block" value="Add Branch">
				</div>
				<div class="form-group">
					<h4 class="text-center text-danger"><?= $msg; ?></h4>
				</div>
			</form>

		</div>
			
		</div>

		



		
	</div>

</body>
</html>


