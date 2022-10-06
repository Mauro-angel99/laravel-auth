<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = [
            ['label' => 'FrontEnd', 'color' => 'danger'],
            ['label' => 'BackEnd', 'color' => 'dark'],
            ['label' => 'FullStack', 'color' => 'success'],
        ];
        foreach($labels as $label)
        {
            $tag = new Tag();
            $tag->label = $label['label'];
            $tag->color = $label['color'];
            $tag->save();

        }
    }
}