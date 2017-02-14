<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach (range(1, 3) as $category) {
	    	for($i=1; $i<=2; $i++) {
		        DB::table('products')->insert([
		            'name' => 'Product-'.$i,
		            'description' => "Product-".$i." Description",
		            'sku' => '100000'.$i,
		            'category_id' => $category
		        ]);
	    	}
    	}
    }
}
