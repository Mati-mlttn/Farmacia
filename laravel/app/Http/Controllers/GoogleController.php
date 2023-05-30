<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $customLog = Log::channel('login');
        $response = null;
        $loginRedirect = redirect()->route('login.view');

        try {
            //se conecta con google y obtiene los datos asociados al correo ingreado por el usuario
            $usuario = Socialite::driver('google')->user();

            // obtiene la ip donde el usuario se conecto
            $ipAddress = $request->ip();

            if (!$this->isAllowedDomain($usuario->getEmail())) {
                $customLog->info("El usuario '{$usuario['email']}' intentó ingresar, pero no está permitido.");
                $response = $loginRedirect->withErrors(['email' => 'El inicio de sesión solo está permitido para usuarios de la institución.']);
            } else {
                $usuario_registrado = User::where('email', $usuario->email)->first();

                // si ek usuario es nuevo
                if (!$usuario_registrado) {
                    $user = new user();
                    $user->name = $usuario['name'];
                    $user->email = $usuario['email'];
                    $user->google_id = $usuario['id'];
                    $user->estado = false; //crea al usuario @ideauno.cl deshabilitado 
                    $user->email_verified_at = now();
                    $user->created_at = now();
                    $user->updated_at = now();
                    $user->save();

                    $customLog->info("El usuario '{$usuario['email']}' se registró en QHH3.");
                    $response = $loginRedirect->withErrors(['email' => 'El usuario fue registrado. Pero su ingreso aún no está autorizado. Por favor contacta a un administrado.']);
                } elseif ($usuario_registrado->estado == false) {
                    $customLog->info("El usuario '{$usuario['email']}' está intentando ingresar, pero no tiene acceso.");
                    $response = $loginRedirect->withErrors(['estado' => 'Su cuenta actualmente no está activa. Si considera que esto es un error, por favor, póngase en contacto con un administrador.']);
                } else {
                    $customLog->info("El usuario '{$usuario_registrado->email}' inició sesión desde la dirección IP: {$ipAddress}.");
                    Auth::login($usuario_registrado, true);
                    $response = redirect()->route('home.view');
                }
            }
        } catch (\Exception $e) {
            $customLog->error("Se produjo un error inesperado al intentar iniciar sesión con el correo electrónico: '{$usuario_registrado->email}'.");
            $response = $loginRedirect;
        }

        return $response;
    }

    private function isAllowedDomain($email)
    {
        $allowedDomain = 'gmail.com';
        $emailDomain = substr(strrchr($email, "@"), 1);
        return $emailDomain === $allowedDomain;
    }
}
