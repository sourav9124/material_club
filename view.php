<?php
include '../database/config.php';

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="select * from paper where id='$id'";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);
	$extension='../database/';
	
	$name=$row['course_name'];
	$image=$extension.$row['course_image'];
	


}


?>

<!DOCTYPE html>
<html>
<head>
	<title>material_club</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
    	

     /* for material club logo*/
    	#logo{

    		margin-left: -150px;
    		margin-top: 10px;
    	}

     /* for right logo*/
    	#logo2{

    		
    		float: right;
    		margin-top: -80px;
    		margin-right: 2px;
    	}
      /*text beside the logo*/
    	#header{

    		float: right;
    		margin-top: -70px;
    		margin-right: -20px;
    		font-size: 23px;
    		font-style: italic;
    		font-weight: bold;	
    	}
    	#navbar_text{
    		color: white;
    	}



     .block{
    width: 700px;
    height: 200px;
    
    
    
    float: right;



  }

 /* for block logo or image*/
  .subject{

    padding-left: 70px;
    padding-top: 30px;


  
  }

  /*for block text*/
  .cse{
    padding-left: 180px;
    padding-top: 25px;
    font-size: 50px;
    color: white;
  }
  

  /* main branch table*/
  
  .main_table{
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 100px;

  
  }



  .main_table td{

    padding: 10px;

  }

  /*Main footer*/

  .footer{
    background-color: #757575;
    height: 200px;
    width: 100%;

  }
  /*footer table*/
  .footer_table{
    color: white;
  }

  /*followers*/

  .followers{
    padding-left: 400px;
    margin-top: -50px;
    
  }
  .contact_us{
    padding-left: 300px;
    padding-top:-20px;
  }


  /*for button css*/

  /*first button*/
  .container_button{
    margin-left: 5px;
    border: 2px solid #0277BD;
    
  }
  
  
  .btn1{
    

  }
  .btn1_div{
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 120px;
    padding-right: 120px;
    font-weight: bold;
    font-size: 15px;

    

  }

 /* 2nd button*/

 .btn2{

  }
  .btn2_div{
     padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 120px;
    padding-right: 120px;
    font-weight: bold;
    font-size: 15px;

  }

 /* 3rd button*/

 .btn3{

  }
  .btn3_div{
     padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 120px;
    padding-right: 120px;
    font-weight: bold;
    font-size: 15px;
    


  }

  /*4th button*/

  .btn4{

  }
  .btn4_div{
     padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 120px;
    padding-right: 120px;
    font-weight: bold;
    font-size: 15px;

  }

  .cname{
  	margin-top: 5px;
  	text-align: center;
  	font-weight: bold;
  	font-size: 30px;
  	border:3px solid #212121;
  	padding: 20px;
  	background: #212121;
  	color: white;
  	width: 800px;
  	margin-left: 280px;

  }
  .cimage{
   margin-left: 180px;
   margin-bottom: 20px;
  	
  
  
  


  }
  .images{
  	height:200%;
  	width: 900px;
  	padding-left: 100px;
  	
  }

    </style>
  
</head>
<body>
	<div class="container">
		<div id="logo">
			<img src="../images/material_club_logo.jpg" height="100px">
		</div>
		<div id="header">EDUCATION FOR YOUR BETTER TOMORROW</div>
        </div>
        <div id="logo2">
        	<img src="../images/material_club_logo2.jpg" height="60px;">
        </div>
	<!-- NAV BAR GOES HERE -->

	
		
		<nav class="navbar navbar-expand-lg navbar-light bg-dark" id="navbar">
  <a class="navbar-brand" href="#" style="color:white;">About</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar_Content">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link navbar-expand-lg" href="#" style="color:white; font-size: 20px;">Home</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:white; font-size: 20px;">Mcq</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#" style="color:white; font-size: 20px;">PPt</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white; font-size: 20px;">
          Find Paper
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



	<div class="cname"><?= $name?></div>
	<div class="cimage"><img src="<?= $image?>" class="images">
	</div>










<div class="footer">

  <table class="footer_table">
    
    <tr>
      <th>

      <td>
        <ul>
          <li style="font-size: 18px;font-weight:bold;color: #A5D6A7">ABOUT US</li>
          <li>Company</li>
          <li>Our Team</li>
          <li>Careers</li>
          <li>Privacy Policy</li>
          
          <li>Term of Use</li>
        </ul>
      </td>

      </th>

      <th class="followers">
        
        <td>
        <ul>
          <li style="font-size: 20px;font-weight:bold;color: #A5D6A7">FOLLOWERS</li>
          <li>FACEBOOK</li>
          <li>LINKEDIN</li>
          <li>YOUTUBE</li>
          <li>TWITTER</li>
          <li>WHATSAPP</li>
          <li>INSTAGRAM</li>
         
        </ul>
      </td>
      </th>
      
      <th class="contact_us">
        
        <td>
        <ul>
          <li style="font-size: 20px;font-weight:bold;color: #A5D6A7">CONTACT US</li>
          <li>Address :- Lovely professional university Punjab</li>
          <li>Email :- souravsingh0021@gmail.com<br>&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rajatagrahari10@gmail.com</li>
          <li>Mobile number :- 7978818256<br>&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8808888606</li>
          
         
        </ul>
      </td>
      </th>
      
    </tr>

    

      
      
    


    
  </table>
  

</div>






  

</body>
</html>



