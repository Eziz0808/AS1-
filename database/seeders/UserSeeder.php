<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([ 
            'name' => 'Eziz',
            'email' => 'eziz@example.com',
            'password' => 'uhgfuweg',

        ]);

        
        User::create([ 
            'name' => 'Dawut',
            'email' => 'dawut@example.com',
            'password' => 'uhgfuweg',

        ]);

        User::create([ 
            'name' => 'Sapar',
            'email' => 'sapar@example.com',
            'password' => 'uhgfuweg',

        ]);

        User::create([ 
            'name' => 'Akmuhammet',
            'email' => 'muha@example.com',
            'password' => 'uhgfuweg',

        ]);

        User::create([ 
            'name' => 'Allanur',
            'email' => 'allanur@example.com',
            'password' => 'uhgfuweg',

        ]);


        



    }







































}
