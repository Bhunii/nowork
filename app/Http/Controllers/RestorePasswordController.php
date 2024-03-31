<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RestorePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Función que devuelve la vista con el formulario de recuperar contraseña
     *
     * @return response()
     */
    public function create()
    {
        return view('auth.restore-password.create');
    }

    /**
     * Función que recibe el email del usuario y en caso de que exista le envía el email de recuperación de contraseña
     *
     * @return response()
     */
    public function store(Request $request)
    {
        // Validación del email
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        // Generamos un token único
        $token = Str::random(64);

        // Eliminamos la anterior reseteo de contraseña sin terminar
        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        // Creamos la solicitud de reseteo de contraseña
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Enviamos el email de recuperación de contraseña
        Mail::send('email.recuperar-contrasenia', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Recuperar Contraseña');
        });

        return back()->with('message', 'Te hemos enviado un email con las instrucciones para que recuperes tu contraseña');
    }
    /**
     * Función que devuelve la vista con el formulario que actualiza la contraseña
     *
     * @return response()
     */
    public function edit($token)
    {
        return view('auth.restore-password.edit', ['token' => $token]);
    }

    /**
     * Función que actualiza la contraseña del usuario
     *
     * @return response()
     */
    public function update(Request $request)
    {
        // Validaciones
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        // Obtenemos el registro que contiene la solicitud de reseteo de contraseña
        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        // Si no existe la solicitud devolvemos un error
        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Token inválido');
        }

        // Actualizamos la contraseña del usuario
        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);


        // Eliminamos la solicitud
        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        // Devolvemos al formulario de login (devolvera un 404 puesto que no existe la ruta)
        return redirect('/login')->with('message', 'Tu contraseña se ha cambiado correctamente');
    }
}
