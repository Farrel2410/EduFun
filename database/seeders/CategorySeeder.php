<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder {
    public function run() {
        Category::create(['name' => 'Data Science']);
        Category::create(['name' => 'Network Security']);
    }
}
