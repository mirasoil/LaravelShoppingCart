<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>@yield('title')</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Smartself') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/shop') }}">Products <span class="sr-only">(current)</span></a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ url('/products') }}">Control Panel</a></li>
                       <li class="nav-item dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                        
                    </ul>
                
            </div>
        </nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
            <button type="button" class="btn btn-info" data-toggle="dropdown">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
            </button>
            <div class="dropdown-menu">
                <div class="row total-header-section">
                    <div class="col-lg-6 col-sm-6 col-6">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </div>
 <?php $total = 0 ?>
 @foreach((array) session('cart') as $id => $details)
 <?php $total += $details['price'] * $details['quantity'] ?>
 @endforeach
        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
        </div>
    </div>
 @if(session('cart'))
 @foreach(session('cart') as $id => $details)
        <div class="row cart-detail">
            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                <img src="img/{{$details['image'] }}" />
            </div>
        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
        <p>{{ $details['name'] }}</p>
        <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
        </div>
        </div>
 @endforeach
 @endif
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Show all</a>
        </div>
    </div>
    </div>
 </div>
 </div>
 </div>
</div>
<div class="container page">
 @yield('content')
</div>
<footer class="w3-container w3-black" style="padding:10px">
  	<h3 class="w3-opacity w3-medium">Smartself -Smart yourself !</h3>
 	<p class="w3-opacity w3-medium">All rights reserved.</p>
 	<p class="w3-opacity w3-medium">2020</p>
</footer>
@yield('scripts')
</body>
</html>