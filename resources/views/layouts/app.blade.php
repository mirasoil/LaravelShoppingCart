<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Smartself</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
 <!---Style for navbar --->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
@if(Auth::guard('admin')->check())
    @include('navigation.adminnav')
@elseif(Auth::guard('user')->check())
    @include('navigation.usernav')
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light">     
    <a class="navbar-brand" href="{{ url('/') }}">
        Smartself
    </a>
</nav>
@endif
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
            
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
<!-- Footer -->
<footer>
        	<div class="footer-top">
		        <div class="container">
		        	<div class="row">
		        		<div class="col-md-3 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
		        			<h3>About me</h3>
		        			<p>
		        				I am a self-taught programmer always looking for new and creative ideas to improve my everyday work.
		        			</p>
	                    </div>
		        		<div class="col-md-4 offset-md-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
		        			<h3>Contact</h3>
		                	<p><i class="fas fa-map-marker-alt"></i> Miraslau, Alba</p>
		                	<p><i class="fas fa-phone"></i> Phone: 0752336523</p>
		                	<a href="mailto:ispas_teodora@yahoo.com"><p><i class="fas fa-envelope"></i> Email</p></a>
	                    </div>
	                    <div class="col-md-4 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	                    	<div class="row">
	                    		<div class="col">
	                    			<h3>Links</h3>
	                    		</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="col-md-6">
	                    			<p><a class="scroll-link" href="/home">Home</a></p>
	                    			<p><a href="/shop">Products</a></p>
	                    			<p><a href="#">Our clients</a></p>
	                    		</div>
	                    		<div class="col-md-6">
	                    			<p><a href="#">Plans &amp; pricing</a></p>
	                    			<p><a href="#">Affiliates</a></p>
	                    			<p><a href="#">Terms</a></p>
	                    		</div>
	                    	</div>
	                    </div>
		            </div>
		        </div>
	        </div>
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://www.facebook.com/ispas.teodora.9"> Ispas Teodora</a>
  </div>
        </footer>
<!-- Footer -->
@yield('scripts')
</body>
</html>