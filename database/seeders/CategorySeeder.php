<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $seedCategories = [
            [
                'id' => 1,
                'name' => 'unknown',
                'code' => 'UNK',
                'description' => 'default category for any contact not allocated a category by the user',
            ],
            [
                'id' => 1000,
                'name' => 'work',
                'code' => 'WRK',
                'description' => 'work colleagues',
            ],
            [
                'name' => 'friends',
                'code' => 'FRND',
                'description' => 'People who are mates',
            ],
        ];

        foreach ($seedCategories as $seedCategory) {
            Category::create($seedCategory);
        }
    }
}
