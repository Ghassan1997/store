<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class CategoryDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
Category::factory()->count(50)->create();
    }
}
