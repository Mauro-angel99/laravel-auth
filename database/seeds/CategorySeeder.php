<?php

use App\Models\Category;
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
        $categories = [
            ['label' => 'HTML', 'color' => 'danger'],
            ['label' => 'CSS', 'color' => 'info'],
            ['label' => 'ES6', 'color' => 'warning'],
            ['label' => 'Bootstrap', 'color' => 'dark'],
            ['label' => 'VueJS', 'color' => 'primary'],
            ['label' => 'PHP', 'color' => 'secondary'],
            ['label' => 'SQL', 'color' => 'danger'],
            ['label' => 'Laravel', 'color' => 'success'],
        ];

        foreach($categories as $category){
            $new_categories = new Category();
            $new_categories->label = $category['label'];
            $new_categories->color = $category['color'];
            $new_categories->save();
        }
    }
}