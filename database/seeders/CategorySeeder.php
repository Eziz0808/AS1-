<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = ['Mersedes','Bmw','','Toyota','Lexus','Hyuandai','Kia','Nissan','Opel','Honda'];


            foreach ($categories as $categor) {
                Category::create([
                    'name' => $category 
        
                ]);
            }



            


            


    }
}    
