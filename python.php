

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


/*table containing images*/

#main_table{
  border:3px solid black;
  border-collapse: collapse;
  margin:0 auto;
  width: 80%;
  margin-top: 50px;
  margin-bottom: 50px;
  border-radius: 30px;

}
#main_table td,#main_table th{
  border: 2px solid black;
  padding: 10px;

}
#main_table th{
 background-color: #000000;
 color: white;
}
.view_button{
  
  
  
}
#main_table tr:nth-child(even){background-color: #f2f2f2;}

#main_table tr:hover {background-color: #ddd;}



    

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

<!-- fetching c++ programming data from database -->

<?php

include '../database/config.php';

$sql="select * from paper where parent='python'";

$result=mysqli_query($conn,$sql);

?>

<!-- main table goes here -->

<table id="main_table">
  <tr>
    <th>id</th>
    <th>Course Name</th>
    <th>Question Paper</th>
    <th>View Image</th>
    <!-- <th>Download</th> -->

    <?php
    $i=0;

    while ($row=mysqli_fetch_array($result))
     {
       $i=$i+1;
      
      
    
       
    ?>
    
    <tr>
      <td><?php echo $i; ?></td>
      <td><?= $row['course_name']; ?></td>
      <td><?= $row['course_image']; ?></td>
      <td><a href="view2.php?id=<?=$row['id'];?>"><button>View</button></a></td>
      <!-- <td><input type="button" name="" value="Download"></td> -->
      
    </tr>
    <?php


     }

    ?>
  
</table>



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



