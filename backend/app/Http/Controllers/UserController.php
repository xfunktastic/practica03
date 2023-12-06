<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::with(['Frameworks', 'Hobbies'])->get();
    }

    public function update(Request $request, $id)
    {
        try {
            $user = User::where('id', $id)->first();

            // Actualizamos los campos existentes
            $user->name = $request->input('name', $user->name);
            $user->lastname = $request->input('lastname', $user->lastname);
            $user->age = $request->input('age', $user->age);
            $user->city = $request->input('city', $user->city);
            $user->email = $request->input('email', $user->email);
            $user->github = $request->input('github', $user->github);
            $user->instagram = $request->input('instagram', $user->instagram);
            $user->summary = $request->input('summary', $user->summary);
            $user->save();

            $userData = [
                'name' => $user->name,
                'lastname' => $user->lastname,
                'age' => $user->age,
                'city' => $user->city,
                'email' => $user->email,
                'github' => $user->github,
                'instagram' => $user->instagram,
                'summary' => $user->summary,
            ];

            return response()->json(['message' => 'Datos del usuario actualizados con éxito', 'user' => $userData]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar datos del usuario: ' . $e->getMessage()], 500);
        }
    }
}
