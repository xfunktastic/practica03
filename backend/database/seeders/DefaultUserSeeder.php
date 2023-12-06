<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ignacio',
            'lastname' => 'Avendaño',
            'age' => 22,
            'country' => 'Chile',
            'city' => 'Antofagasta',
            'email' => 'ignacio.avendano@alumnos.ucn.cl',
            'github' => 'https://github.com/xfunktastic',
            'instagram' => 'https://instagram.com/ignacio.avr',
            'summary' => 'Soy estudiante de Ingeniería Civil en Computación e Informática en la Universidad Catolica del Norte',
        ]);
    }
}
