<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'title' => 'Men',
            'description' => 'Man@example.com',
        ]);
        \App\Models\Category::create([
            'title' => 'Women',
            'description' => 'Women@example.com',
        ]);
        \App\Models\Category::create([
            'title' => 'Child',
            'description' => 'Child@example.com',
        ]);
    }
}
