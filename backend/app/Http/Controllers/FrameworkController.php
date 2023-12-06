<?php

namespace App\Http\Controllers;

use App\Models\Frameworks;
use Illuminate\Http\Request;

class FrameworkController extends Controller
{
    public function update(Request $request, $id)
    {
        try {
            $framework = Frameworks::where('id', $id)->first();

            // Actualizamos los campos existentes
            $framework->name = $request->input('name', $framework->name);
            $framework->level = $request->input('level', $framework->level);
            $framework->year = $request->input('year', $framework->year);
            $framework->save();

            $frameworkData  = [
                'name' => $framework->name,
                'level' => $framework->level,
                'year' => $framework->year,
            ];

            return response()->json(['message' => 'Datos del usuario actualizados con éxito', 'framework' => $frameworkData]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar datos del usuario: ' . $e->getMessage()], 500);
        }
    }
}
