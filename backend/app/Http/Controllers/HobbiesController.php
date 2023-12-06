<?php

namespace App\Http\Controllers;

use App\Models\Hobbies;
use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function update(Request $request, $id)
    {
        try {
            $hobbies = Hobbies::where('id', $id)->first();

            // Actualizamos los campos existentes
            $hobbies->name = $request->input('name', $hobbies->name);
            $hobbies->description = $request->input('level', $hobbies->description);
            $hobbies->save();

            $hobbiesData  = [
                'name' => $hobbies->name,
                'description' => $hobbies->description,
            ];

            return response()->json(['message' => 'Datos del usuario actualizados con éxito', 'hobbies' => $hobbiesData]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar datos del usuario: ' . $e->getMessage()], 500);
        }
    }
}
