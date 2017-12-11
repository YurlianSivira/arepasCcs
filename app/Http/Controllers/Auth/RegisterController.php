<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|min:3',
            'last_name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|numeric|max:12',
            'address' => 'required|string|min: 10',
            'user_name' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'user_name' => $data['user_name'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function store(Request $request){
        $messages=[
            'name' => 'El nombre es requerido',
            'name' => 'El nombre debe tener al menos 3 carácteres',
            'last_name' => 'El apellido es requerido',
            'last_name' => 'El apellido debe tener al menos 4 carácteres',
            'email' => 'El correo electronico es requerido',
            'phone' => 'El número de telefono es requerido',
            'phone' => 'El número de telefono debe ser numérico',
            'address' => 'La dirección es requerida',
            'address' => 'La direccion debe tener al menos 50 carácteres', 
            'user_name' => 'El nombre de usuario es requerido',
            'user_name' => 'El nombre de usuario debe tener al menos 3 carácteres',
            'password' => 'La contraseeña es requerida',
            'password' => 'La contraseña debe tener al menos 6 carácteres',
        ];
    }

     public function actualizar (Request $request)
    {
        $user = User::find($request->id);
        // echo $user;
        // echo "<br>";
        // echo $user->image->src;
        // echo "<br>";
        if ($request->file) {
          // Borrar avatar
          //dd($request->file);
          //dd(\Auth::user()->image->src);
          \Storage::delete($user->image->src);
          //borrar las filas imagen
          $user->image->delete();
          $file = request()->file('file');
          $extension = strtolower($file->extension());
          $fileName = uniqid().'.'.$extension;
          $file->storeAs('images/users-'.$user->id, $fileName);
          // Guardar avatar nuevo
          $image= Image::create([
            'src' =>  'images/users-'.$user->id.'/'.$fileName,
            'user_id' => $user->id
          ]);
          $user->image($request->input('file'),$request->user_id);
      }
      //  $user = \Auth::user()->update($request->all());
      // $user = \Auth::user()->update([
      //     'name' => $request['name'],
      //     'email' => $request['email'],
      //     'password' => bcrypt($request['password']),
      //     'fecha_de_nacimiento'=>$request['fecha_de_nacimiento'],
      //     'genero'=>$request['genero'],
      // ]);
      //$user->update($request->all());
      return redirect('/profile');
    }
}

