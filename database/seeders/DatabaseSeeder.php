<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Seeder;
use Database\Seeders\GalerySeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            GalerySeeder::class
        ]);
    }
}
