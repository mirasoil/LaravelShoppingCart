<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smartself</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login/user') }}">Login as user</a>
                        <a href="{{ url('/login/admin') }}">Login as admin</a>
                        @if (Route::has('register'))
                            <a href="{{ url('/register/user') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <a href="/shop" style="text-decoration: none;color: gray;">
                <div class="title m-b-md">
                    Smartself
                </div>
                <div class="links">
                    <h3>Products</h3>
            </a>
                    <!-- <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
                <br>
                <img class="" src="img/iot2.jpg" alt="Smart home" width="1600" height="460">

            </div>
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
		                	<p><i class="fas fa-phone"></i> 0752336523</p>
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
    </body>
</html>
