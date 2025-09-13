<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::factory(3)->create();
        // For each category, create 10 posts assigned to that category
        $categories->each(function ($category) {
            Post::factory(10)->create([
                'category_id' => $category->id,
            ]);
        });

    }
}
