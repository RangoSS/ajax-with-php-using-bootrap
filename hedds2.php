<?php

session_start();
//here we start the session and check if the session is not emty
$usernames= isset($_SESSION['username']) ? $_SESSION['username'] : "";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><!--this comes first-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--this one works-->
<script type="text/javascript" src="js/main.js"></script>


<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/forhead.css">
<link rel="stylesheet" type="text/css" href="css/aboutus.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/skul.css">
<link rel="stylesheet" type="text/css" href="css/tabs.css">

</head>
<body>

<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">MUGUMO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
       <!--<img src="uploads/logos.jpg" alt="we do it" title="Mugumo the core founder" />-->
      </div>
      
       <a href="logout.php" >Logout <?php echo  $usernames; ?></a>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="startPage.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Register</a></li>
          
          <li class="menu-has-children"><a href="">Products</a>
            <ul>
              <li><a href="school.php">Schools</a></li>
              <li><a href="#">Instruments</a></li>
              <li><a href="#">Gadgets</a></li>
              <li><a href="#">Uniforms</a></li>
            </ul>
          </li>
           <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <!-- <li><a href="">Contact</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->

    </div>

    <!--seesion dispalying current-->
      
  </header><!-- #header -->

         
         
      