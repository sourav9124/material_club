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
    width: 280px;
    height: 180px;
    
    
    
    float: right;



  }

 /* for block logo or image*/
  .subject{

    padding-left: 70px;
    padding-top: 30px;


  
  }

  /*for block text*/
  .data_structure{
    padding-left: 20px;
    padding-top: 25px;
    font-size: 39px;
    color: white;
  }
  .cod{
    padding-left:90px;
    font-size: 43px;
    color: white;
    padding-top: 25px;
  }
  .python{
    padding-left: 70px;
    font-size: 45px;
    color: white;
    padding-top: 20px;
  }
  .software_engineering{
     padding-left: 40px;
    font-size: 40px;
    color: white;
    padding-top: 2px;
  }
  .dbms{
    padding-left: 70px;
    font-size: 50px;
    color: white;
    padding-top: 20px;
  }
  .discrete_mathematics{
    padding-left: 30px;
    font-size: 40px;
    color: white;
    padding-top: 0px;
  }
  .computer_networks{
    padding-left: 40px;
    font-size: 42px;
    color: white;
    padding-top: 0px;

  }
  .java{
    padding-left:80px;
    font-size: 50px;
    color: white;
    padding-top: 20px;
  }
  .operating_system{
    padding-left: 40px;
    font-size: 45px;
    color: white;
    padding-top: 0px;
  }
  .algorithm{
    padding-left: 30px;
    font-size: 50px;
    color: white;
    padding-top:15px;

  }
  .mathsProbablity{
    padding-left:40px;
    font-size: 42px;
    color: white;
    padding-top: 0px;
  }
  .artificial_intelligence{
    padding-left:40px;
    font-size: 40px;
    color: white;
    padding-top:0px;
  }
  .verbal_ability{
    padding-left:80px;
    font-size: 45px;
    color: white;
    padding-top: 0px;
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

    </style>
  
</head>
<body>
  <div class="container">
    <div id="logo">
      <img src="images/material_club_logo.jpg" height="100px">
    </div>
    <div id="header">EDUCATION FOR YOUR BETTER TOMORROW</div>
        </div>
        <div id="logo2">
          <img src="images/material_club_logo2.jpg" height="60px;">
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


<!-- 4 buttons are here -->


<div class="container_button">

  <a href="first_year.php">
  <button class="btn1"><div class="btn1_div">First Year</div></button>
  </a>

  <a href="second_year.php">
  <button class="btn2"><div class="btn2_div">Second Year</div></button>
  </a>

  <a href="third_year.php">
  <button class="btn3"><div class="btn3_div">Third Year</div></button>
  </a>

  <a href="fourth_year.php">
  <button class="btn4"><div class="btn4_div">Fourth Year</div></button>
  </a>
</div>



<table class="main_table">


  
  <tr>
     <td>
       <a href="./paper_viewer_second_year/data_structure.php">

         <div class="block" style="background-color:#E53935;
                                   background-size: cover;">

            <div class="subject">
               <!-- <img src="java.png" height="80"> -->
            </div>

            <div class="data_structure">Data Structure</div>
    
         </div>
       </a>
    </td>


    <td>
      <a href="./paper_viewer_second_year/cod.php"><div class="block" style="background-color:#424242;
                                   background-size: cover;">

        <div class="subject">
           <!-- <img src="java.png" height="80"> -->
        </div>
        <div class="cod">COD</div>
    
      </div>
    </a>
</td>
  <td><a href="./paper_viewer_second_year/python.php"><div class="block" style="background-color:#00695C;
                                   background-size: cover;">

    <div class="subject">
      <!-- <img src="java.png" height="80"> -->
      
    </div>
    <div class="python">Python</div>
    
  </div></a></td>
</tr>


<!-- 2nd tr -->

  <tr>
  <td><a href="./paper_viewer_second_year/software_engineering.php"><div class="block" style="background-color:#2E7D32;
                                   background-size: cover;">

    <div class="subject">
      <!-- <img src="java.png" height="80"> -->
      
    </div>
    <div class="software_engineering">Software Engineering</div>
    
  </div></a></td>
  <td><a href="./paper_viewer_second_year/dbms.php"><div class="block" style="background-color:#F9A825;
                                   background-size: cover;">

    <div class="subject">
     <!--  <img src="java.png" height="80"> -->
      
    </div>
    <div class="dbms">DBMS</div>
    
  </div>
</a>
</td>
  <td><a href="./paper_viewer_second_year/discrete_mathematics.php"><div class="block" style="background-color:#1DE9B6;
                                   background-size: cover;">

    <div class="subject">
      <!-- <img src="java.png" height="80"> -->
      
    </div>
    <div class="discrete_mathematics">Discrete<br>Mathematics</div>
    
  </div></a></td>
</tr>

   <!-- 3rd tr -->

   <tr>
      <td>
       <a href="./paper_viewer_second_year/computer_networks.php">

         <div class="block" style="background-color:#004D40;
                                   background-size: cover;">

            <div class="subject">
               <!-- <img src="java.png" height="80"> -->
            </div>

            <div class="computer_networks">Computer<br>Networks</div>
    
         </div>
       </a>
    </td>

     <td>
       <a href="./paper_viewer_second_year/java.php">

         <div class="block" style="background-color:#E65100;
                                   background-size: cover;">

            <div class="subject">
               <!-- <img src="java.png" height="80"> -->
            </div>

            <div class="java">JAVA</div>
    
         </div>
       </a>
    </td>

      </td>

     <td>
       <a href="./paper_viewer_second_year/operating_system.php">

         <div class="block" style="background-color:#3E2723;
                                   background-size: cover;">

            <div class="subject">
               <!-- <img src="java.png" height="80"> -->
            </div>

            <div class="operating_system">Operating<br>System</div>
    
         </div>
       </a>
    </td>


   </tr>


   <!-- 4th tr -->

     <!-- 3rd tr -->

   <tr>
      <td>
       <a href="./paper_viewer_second_year/algorithm.php">

         <div class="block" style="background-color:#B71C1C;
                                   background-size: cover;">

            <div class="subject">
               <!-- <img src="java.png" height="80"> -->
            </div>

            <div class="algorithm">Algorithm</div>
    
         </div>
       </a>
    </td>

     <td>
       <a href="./paper_viewer_second_year/maths_probablity.php">

         <div class="block" style="background-color:#1B5E20;
                                   background-size: cover;">

            <div class="subject">
               <!-- <img src="java.png" height="80"> -->
            </div>

            <div class="mathsProbablity">Maths<br>(Probablity)</div>
    
         </div>
       </a>
    </td>

      </td>

     <td>
       <a href="./paper_viewer_second_year/artificial_intelligence.php">

         <div class="block" style="background-color:#212121;
                                   background-size: cover;">

            <div class="subject">
               <!-- <img src="java.png" height="80"> -->
            </div>

            <div class="artificial_intelligence">Artificial<br>Intelligence</div>
    
         </div>
       </a>
    </td>


   </tr>

   <!-- 5th tr -->

    

   <tr>
      <td>
       <a href="./paper_viewer_second_year/verbal_ability.php">

         <div class="block" style="background-color:#E65100;
                                   background-size: cover;">

            <div class="subject">
               <!-- <img src="java.png" height="80"> -->
            </div>

            <div class="verbal_ability">Verbal Ability</div>
    
         </div>
       </a>
    </td>
  </tr>


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



