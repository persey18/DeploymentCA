
<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Richies Buns</title>


<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> <!--goes back one directory -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../css/home.css"> <!-- this my css file . I put it here too override the bootstrap style sheets  -->
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js">  </script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--was having problems making the website responsive on my mobile
    added this to make it work  -->

  

</head>

<body>
      <div id="logo"> <!-- this my my logo   -->
        <div class="row-fluid">
      
    <a href="../home3.html">       <!--  link back to homepage -->  
           <img class="img-responsive" src="../images/logo7.png" alt="header"  /><!--  make logo responsive  -->

       </a>
   </div>
       </div>

        <nav id="myNavbar" class="navbar navbar-default" role="navigation"> <!-- Dafault Navbar from bootstrap -->
        <div class="container-fluid" id:"fullNav">  <!--i used container fluid to make the page fuller , i took inspiration from another site called http://www.blanco-nino.com/#about-1 which looks great on all screens  -->
        <div class="navbar-header">
        <button class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse" type="button"> <!--Data is an HTML5 data attribute that automatically hooks up the element to the type of widget it is.-->


        <span class="sr-only">Toggle navigation</span> <!-- The <span> tag provides a way to add a hook to a part of a text or a part of a document. -->
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        </button>
        
  
    </div>
    
    <div id="navbarCollapse" class="collapse navbar-collapse"> <!-- Navbar collapse makes the navbar close on smaller screens  -->
    <ul class=" nav navbar-nav navbar-left"> <!-- moves the navbar to the left  -->
    <li>
         

<li>
         <li class="dropdown">                 <!--Dropdown with an unorder list to arrange my navbar better and not clutter it up  -->
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Shop<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="../buns.html">Buns</a></li> <!-- a href is the hyperlink tag , allows me to link all the pages -->
                <li><a href="../Cakes.html">Cakes</a></li>
                <li><a href="../BakedGoods.html">Baked Goods </a></li>
              
            </ul>
        </li>

<li>
<a target="_blank" href="">News</a>
</li>
<li>
    <a target="" href="../recipes.html">Recipes</a>
</li>
 <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us<b class="caret"></b></a>
            <ul class="dropdown-menu"> <!--Dropdown with an unorder list to arrange my navbar better and not clutter it up  -->
                <li><a href="../AboutUs.html">About Us</a></li> <!-- goes back one directory -->
                <li><a href="../ContactUs.html">Contact Us</a></li>
              
            </ul>
        </li>
</ul>
    <div class="bs-example pull-right">   <!-- pulls the button to the right of the navbar  -->
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#loginModal" class="btn btn-lg btn-custom" data-toggle="modal">Sign in / Register</a> <!-- gave it a class of btn-custom to change the colour -->
    
     <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      
      <div class="modal-body">
          <form name="form1" method="post" action="checklogin.php">  <!--the form data is sent for processing to a PHP file named "checklogin.php". The form data is sent with the HTTP POST method. -->
          <form class="form col-md-12 center-block"> <!-- make form grid size 12 columns within the modal  -->
            <div class="form-group">       
              <input type="text" name="myusername" id="myusername" class="form-control input-lg" placeholder="username"><!-- these ids are important 
                  as they are used within the php file  -->
            </div>
            <div class="form-group"> <!-- input type password will hide what the user is typying with *** , placeholder is the faded text you see before you input data-->
              <input type="password" name="mypassword" id="mypassword" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"><a href="registration.html">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
            </form>
          </form>
      </div>
      <div class="modal-footer"> 
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button> <!-- close the modal -->
          </div>    
      </div>
  </div>
  </div>
</div>
    
            </div>    
            </div>
        
    </nav>  <!-- END OF NAV BAR -->
    
    <div id="WelcomeHeading" class="title-desc-inner">
<h1>You are now logged out ! </h1>
</div>
    

