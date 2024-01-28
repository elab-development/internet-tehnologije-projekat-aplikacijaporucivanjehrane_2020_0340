<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(['role' => 'admin']);

        User::factory()->count(5)->create(['role' => 'user']);
     
        User::factory()->count(5)->create(['role' => 'dostavljac']);
     
        // Administrator
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
     
        // Ulogovani korisnik
        User::factory()->create([
            'name' => 'Logged In User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);
    }
}
