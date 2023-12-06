<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Frameworks;

class DefaultFrameworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Frameworks::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Python',
            'level' => 'Principiante',
            'year' => 1
        ]);
        \App\Models\Frameworks::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Java',
            'level' => 'Principiante',
            'year' => 2
        ]);
        \App\Models\Frameworks::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'C++',
            'level' => 'Intermedio',
            'year' => 3
        ]);
        \App\Models\Frameworks::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'HTML',
            'level' => 'Intermedio',
            'year' => 4
        ]);
    }

}
