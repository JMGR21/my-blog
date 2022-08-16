<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 30; $i++) {
            $c = Category::inRandomOrder()->first();
            
            $title = Str::random(20);

            Post::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur laboriosam dolor esse accusamus adipisci?",
                'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur laboriosam dolor esse accusamus adipisci? Error deserunt saepe possimus ipsum voluptate aliquam iste quod a sunt perspiciatis, illum totam, natus ipsa!",
                'category_id' => $c->id,
                'posted' => "yes"
            ]);
        }
    }
}
