<?php
ini_set('display_errors', 1); //0 to disable
error_reporting(E_ALL); //add this to hide notices:  & ~E_NOTICE

// Check if GET key 'page' exists :
//  if( isset($_GET['page']) ) {
//  $page = $_GET['page'];
//  }
//  else {
//  $page = 'index';
// }


// Check if GET key 'page' exists on line variant :
 $page = isset($_GET['page']) ? $_GET['page'] : 'index'; 


// Using a variable inside a PHP string
// $name = "Hamid";
// $using_double_quotes = "My name is $name and I'm here!"; // echo $using_double_quotes;
// $using_single_quotes = 'My name is '.$name.' and voilà!'; echo $using_single_quotes;
?>
<!DOCTYPE html>

<html lang="en">

<head>

<!--#meta-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="How to use PHP to create a dynamic website">
<meta name="keywords" content="php,dynamic site,cool,raoul">
<meta name="author" content="Hamid Hosseini">
<!--#title-->
<title>welcome to my blog</title>

<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/site.webmanifest">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!--css file-->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="plugins/prims/prism.css">

<!--fontAwesome js-->
<script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" 
integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7"
crossorigin="anonymous"></script>

<!--Font family-->
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500&display=swap" rel="stylesheet">
</head>

<body>

<!-- header  -->
<header class="part-one">	    
<h1>Hamid's Blog</h1>
  <nav class="navbar" > 
<a href="./"><img class="img-hamid" src="img/hamid.jpg" alt="image" >	</a>
    <div class="myname">Hi, my name is Hamid.You can find some examples about javascript.<br><a href="about.html">Find out more about me</a></div>
    <ul class="ul-nav">
            <li class="li-nav"><a class="link-nav" href="https://hamidhosseini680@gmail.com"><i class="far fa-envelope fa-fw"></i></a></li>
            <li class="li-nav"><a class="link-nav" href="http://linkedin.com/in/hamid-hosseini-4388021a8"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
            <li class="li-nav"><a class="link-nav" href="https://github.com/hamid-poco"><i class="fab fa-github-alt fa-fw"></i></a></li>
        </ul>
        <hr> 
  <ul class="ul-nav-two">
    <li class="li-nav-two">
        <a class="link-nav-two" href="?page=index">HOME</a>
    </li>
    <li class="li-nav-two">
        <a class="link-nav-two" href="?page=post-template">WORK</a>
    </li>
    <li class="li-nav-two">
        <a class="link-nav-two" href="?page=about">ABOUT ME</a>
    </li>
  </ul>
  <div class="btn">
    <a id="click" class="btn-two" href="#" onclick="myfunction();">Click me Please</a>
  </div>
</nav>
</header>

<main>

<?php
require_once("html/$page.html");
?>
  
</main>


<footer class="footer">
<small class="">Designed with <i class="fas fa-heart" ></i> by <a href="#" target="_blank">Hamid poco</a> for developers</small>
  </footer> 


  <script src="plugins/prims/prism.js"></script>
  <script src="js/main.js"></script>
 </body>

</html>
