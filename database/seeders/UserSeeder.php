<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'jeyson Miranda',
            'email' => 'jeyson.miranda11@hotmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(1)->create();
    }
}
