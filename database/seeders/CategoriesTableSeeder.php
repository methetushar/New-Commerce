<?php

namespace Database\Seeders;

use App\Models\Backend\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'          =>  'Root',
            'description'   =>  'This is the root category, don\'t delete this one',
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);



        $this->factory('App\Models\Backend\Category', 10)->create();
    }
}
