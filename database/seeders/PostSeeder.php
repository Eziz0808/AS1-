<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $users = User::all();

        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                'title' => "Post $i",
                'categori' => "This is the body of $i",
                'category_id' => $categories->random()->id,
            ]);
        }
        
    }
}
