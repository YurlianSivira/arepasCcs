@include('header')
              

@yield('content')

 <div class="section_login">
                <div class="ban1">
                    <img class="tam" src="http://www.gifsanimados.org/data/media/915/bandera-de-venezuela-imagen-animada-0016.gif"/>
                </div>
                <div class="ban2">
                    <img class="tam2" src="http://www.gifsanimados.org/data/media/725/bandera-de-argentina-imagen-animada-0011.gif"/>
                </div>
                <div class="mens">
                    <div class="mens_login">
                        <h2>Inicie su sesión</h2>
                        <form class="ingreso" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                            
                            <input class="campo" type="text" name="user_name" placeholder="Usuario" value="{{ old('user_name') }}" required autofocus>

                            @if ($errors->has('user_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_name') }}</strong>
                            </span>
                            @endif
                        </div>
                
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <input class="campo" type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <input class="btn" type="submit" value="Ingresar"><br>

                    <div class="recordar">
                        <input class="tilde" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label>Recordarme</label>
                    </div>
                
                    <div class="olvido">
                        <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvido contraseña?</a> 
                    </div>
                </form> 
                </div>
            </div>
        </div>
                <img class="fondo_mobile" src="images/arepas.jpeg">
             
 @extends('footer')



