<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>@yield('title')</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <!---Style for navbar --->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Smartself</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/home">Home</a></li>
      <li class="dropdown"><a  href="/products">Products </a>
      </li>
      <!---<li><a href="account.php">Account</a></li>--->
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="controlPanel.php"><span></span> Control Panel</a></li>
          <li><a href="cos.php"><span></span> Cos</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      <li><a href="registration.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 <head>
 <h1></h1>
 </head>
 @yield('content')
 <!---aici se introduce pe rand create, delete, show si list. Afiseaza pe ecran cate 5 produse-->
</div>
<footer class="w3-container w3-black" style="padding:10px">
  	<h3 class="w3-opacity w3-medium">Smartself -Smart yourself !</h3>
 	<p class="w3-opacity w3-medium">All rights reserved.</p>
 	<p class="w3-opacity w3-medium">2020</p>
</footer>
</body>
</html>