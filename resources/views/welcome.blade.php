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
                        <a href="{{ route('register') }}">Registro</a>
                    @endauth
                </div>
            @endif
            </div>
                
    </header>
    
    <body>
        <div class="section_a">
                <div class="ban1">
                    <img class="tam" src="http://www.gifsanimados.org/data/media/915/bandera-de-venezuela-imagen-animada-0016.gif"/>
                </div>
                <div class="ban2">
                    <img class="tam2" src="http://www.gifsanimados.org/data/media/725/bandera-de-argentina-imagen-animada-0011.gif"/>
                </div>
                <div class="mens">
                    <div class="mens_reg">
                        <p>Disfruta de grandes promociones, descuentos y servicio de delivery gratis</p>                    
                        <div class="reg">
                            <a href="register">Registrate</a>
                        </div>
                    </div>
                </div>

                <img class="fondo_mobile" src="images/arepas.jpeg">
            

            </div>


            <!--BANDERAS-->
            <!-- <div id="cf">
                <img class="bottom" src="images/banArgentina.jpg"/>
                 <img class="top" src="images/banVenezuela.jpg"/>
            </div> -->
        
    </body>

    <footer>
            <div class="enlaces1">
                <a href="#">¿Quienes somos?</a><br>
                <a href="#">Productos</a><br>
                <a href="#">Promociones</a><br>
            </div>

            <div class="enlaces2">
                <a href="register">Registro</a><br>
                <a href="preguntas.html">Preguntas</a><br>
                <a href="contacto.html">Contacto</a><br>
            </div>
        
            <div class="logo_footer">
                <a href="#inicio"><img src="images/mixta.png"></a>
            </div> 

            <div class="red">
                <a href="http://facebook.com" target="new"><img src="images/face.png"></a>
                <a href="http://instagram.com" target="new"><img src="images/inst.png"></a>
                <a href="http://twitter.com" target="new"><img src="images/twi.png"></a>
                
            </div>
            
            <div class="horario">
                <h3><marquee class="hor" >HORARIO: Lunes a Sabados 09:00 a 22:00 / Domingos 09:00 a 18:00</marquee></h3>
            </div>

    </footer>

</html>


