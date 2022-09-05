<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Anime'
        ]);
        Category::create([
            'name' => 'Webtoon'
        ]);
        Category::create([
            'name' => 'Film'
        ]);
        Category::create([
            'name' => 'Music'
        ]);
        Category::create([
            'name' => 'Drama korea'
        ]);
    }
}
