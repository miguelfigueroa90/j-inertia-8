<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'miguelfigueroa90@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        Note::factory(30)->create();
    }
}
