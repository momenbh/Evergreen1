<!DOCTYPE HTML>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons -->
<link rel="shortcut icon" href="{{url('public/frontend/images/fav.png')}}">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<title>Evergreen</title> 

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" media="screen">
</head>
<body>
<div class="animsition">
  <div class="wrapper boxed">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>
    

    <!-- Sidebar Menu-->
    <div class="menu"> 
        <span class="close-menu icon-cross2 right-boxed"></span>
        
        <ul class="menu-list right-boxed">
          <li class="active">
            <a  href="index.php">Home</a>
          </li>
          <li>
            <a href="about.php">About</a>
          </li>
          <li>
            <a href="{{route('list.project')}}">Projects</a>
          </li>
          <li>
            <a href="{{route('list.news')}}">News</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
        </ul>
        <div class="menu-footer right-boxed">
          <div class="social-list">
            <a target="_blank" href="https://www.facebook.com/Evergreen92Propertybd/" class="icon ion-social-facebook"></a>
            <a target="_blank" href="https://www.instagram.com/evergreenvillage92/" class="icon ion-social-instagram"></a>
            <a href="https://www.youtube.com/channel/UCIYMEw18Ytt4kPXA9YRRcFg" class="icon ion-social-youtube"></a>
            <a target="_blank" href="https://www.linkedin.com/in/evergreen-property-565a70274/" class="icon ion-social-linkedin"></a>
          </div>
          <div class="copy">© Evergreen 2023. All Rights Reseverd<br> Design by NIBIZ SOFT</div>
        </div>
    </div>

    <!-- Navbar -->

    <header class="navbar boxed js-navbar">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="brand" href="index.php">
        <img alt="" src="{{url('frontend/images/logo_white.jpg')}}">
        <div class="brand-info">
          <div class="brand-name"></div>
          <div class="brand-text"></div>
        </div>
      </a>

      <!--<div class="social-list hidden-xs">-->
      <!--  <a href="#" class="icon ion-social-twitter"></a>-->
      <!--  <a href="#" class="icon ion-social-facebook"></a>-->
      <!--  <a href="#" class="icon ion-social-googleplus"></a>-->
      <!--  <a href="#" class="icon ion-social-linkedin"></a>-->
      <!--  <a href="#" class="icon ion-social-dribbble-outline"></a>-->
      <!--</div>-->

      <div class="navbar-spacer hidden-sm hidden-xs"></div>

      <!-- <address class="navbar-address hidden-sm hidden-xs">call us: <span class="text-dark">(+080) 9684 32 45 789</span></address> -->
    </header>