<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::truncate();

        for ($i=0; $i < 20; $i++) { 
            Category::create([
                'title' => "Category $i",
                'slug' => "category-$i"
            ]);
        }
    }
}
