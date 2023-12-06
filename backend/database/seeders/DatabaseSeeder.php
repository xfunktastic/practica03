<?php

namespace Database\Seeders;

use App\Models\Hobbies;
use App\Models\Frameworks;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(User::class);
        $this->call(Hobbies::class);
        $this->call(Frameworks::class);
    }
}
