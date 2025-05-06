<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Maneja la solicitud de inicio de sesión de un usuario.
     *
     * @param Request $request La solicitud HTTP que contiene las credenciales del usuario.
     * @return \Illuminate\Http\JsonResponse Una respuesta JSON con el token de acceso o un error.
     */
    public function login(Request $request)
    {
        // Valida los campos requeridos del formulario de inicio de sesión
        $this->validateLogin($request);

        // Intenta autenticar al usuario con las credenciales proporcionadas (email y password)
        if (Auth::attempt($request->only('email', 'password'))) {
            // Si la autenticación es exitosa, genera un token de acceso usando Sanctum
            return response()->json([
                'token' => $request->user()->createToken($request->name)->plainTextToken,
                'message' => 'Success'
            ]);
        }

        // Si la autenticación falla, devuelve un mensaje de error con código 401 (No autorizado)
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    /**
     * Valida los campos del formulario de inicio de sesión.
     *
     * @param Request $request La solicitud HTTP entrante.
     * @return array<string, mixed> Los datos validados.
     */
    public function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => 'required|email',   // El campo email es obligatorio y debe tener formato válido
            'password' => 'required',      // El campo password es obligatorio
            'name' => 'required',          // El campo name es obligatorio (usado para nombrar el token)
        ]);
    }
}
