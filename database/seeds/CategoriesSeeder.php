<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories=[
            'Clothes','Electronics','Shoes','Foods'
        ];
        foreach ($categories as $category){
            Category::create([
                'name'=>$category,
                'slug'=>Str::slug($category)
            ]);

        }
    }

}
