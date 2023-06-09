<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class TableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
             'name' => 'Test User',
             'username' => 'admin', 
             'email' => 'admin@gmail.com',
             'password' => bcrypt('123')
        ]);
        
    }
}
