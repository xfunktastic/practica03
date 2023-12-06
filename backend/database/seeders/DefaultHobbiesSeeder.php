<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hobbies;

class DefaultHobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Hobbies::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Tocar Guitarra',
            'description' => 'Me gusta tocar la guitarra'
        ]);
        \App\Models\Hobbies::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Cantar',
            'description' => 'Me gusta cantar canciones'
        ]);
        \App\Models\Hobbies::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Música',
            'description' => 'Me gusta la música'
        ]);
    }

}
