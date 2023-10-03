<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Nischal Basnet',
            'email' => 'nischalbasnet@gmail.com',
            'password' => Hash::make('raj1234'),
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'Sagun Ghimire',
            'email' => 'sagunghimire@gmail.com',
            'password' => Hash::make('sagunsir'),
        ]);

        
        \App\Models\User::factory()->create([
            'name' => 'Samir Dotel',
            'email' => 'samirdotel@gmail.com',
            'password' => Hash::make('sameer'),
        ]);

        
        \App\Models\User::factory()->create([
            'name' => 'Bibek Pandit',
            'email' => 'bibekpandit@gmail.com',
            'password' => Hash::make('hello123'),
        ]);
    }
}
