<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arepas Caracas</title>

      <!--   Fonts  --> 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      <!--   Styles  -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
           
    </head>

		<header>
			<h1><img class="logo" src="images/logo.png"></h1>	
			<h2 class="eslogan">El sabor criollo en Argentina</h2>

            <div class="enlace_login">
            @if (Route::has('login'))
                <div class="top-right ">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a><br>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
			
            </div>
       			
		</header>