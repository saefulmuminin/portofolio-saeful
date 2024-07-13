<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PortfolioCategory;

class PortfolioCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Graphic Design'],
            ['name' => 'Web Design'],
            ['name' => 'Software'],
            ['name' => 'Apps'],
            ['name' => 'Animation'],
            ['name' => 'Illustration'],
            ['name' => 'Graphic, Logo'],
            ['name' => 'Web Design'],
            ['name' => 'Others'],
        ];

        foreach ($categories as $category) {
            PortfolioCategory::create($category);
        }
    }
}
