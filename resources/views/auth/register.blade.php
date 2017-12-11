@include('header')


    <body>
        @yield('content')
        <div class="registro">
        <section class="regi">
            <h3>Formulario de Registro</h3>

            <form class="regis" action="{{ route('register')}} " method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <label>Información personal</label><br>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                       
                        <input class="campo1" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>
                            
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                         
                    </div>

                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

                        <input class="campo1" type="text" name="last_name" placeholder="Apellido" value="{{ old('last_name') }}" required autofocus>

                            @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                            @endif
                         
                    </div>
                    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input class="campo1" type="email" name="email" placeholder="Correo electrónico" value="{{old('email') }}" required autofocus>
                        
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                         
                    </div>

                    <div class="form-group{{ $errors->has('phono') ? ' has-error' : '' }}">

                        <input class="campo1" type="numeric" name="phono" placeholder="Telefono" value="{{old('phono') }}" required autofocus>
                        
                            @if ($errors->has('phono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phono') }}</strong>
                                    </span>
                            @endif
                         
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">

                        <input class="campo1" type="text" name="address" placeholder="Direccion" value="{{old('address') }}" required autofocus>
                        
                            @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                         
                    </div>

                <label>Elija nombre de usuario y contraseña</label><br>

                    <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">

                        <input class="campo1" type="text" name="user_name" placeholder="Nombre de usuario" value="{{old('user_name') }}" required autofocus>
                        
                            @if ($errors->has('user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                            @endif
                         
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        
                        <input class="campo1" type="password" name="password" placeholder="Contraseña" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                        
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input class="campo1" type="password" name="cpassword" placeholder="Confirmar contraseña" required>

                           
                    </div>

                <label>Foto de perfil</label><br>

                    <div>
                        <input class="perf" type="file" name="foto-perfil"><br>
                        <button class="volver"><a href="login">Volver</a></button>
                        <input type="submit" value="Registrar">
                        <input type="reset" value="Borrar">
                    </div>
            </form>
                  
        </section>
    </div>
</body>

@extends('footer')