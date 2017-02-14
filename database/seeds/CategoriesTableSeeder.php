<?php

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
        foreach (range(1, 3) as $category) {
	        DB::table('categories')->insert([
	            'name' => 'Category-'.$category
	        ]);
    	}
    }
}
