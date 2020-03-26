<?php

use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$faker = Faker\Factory::create();

        Category::create(array(
			'name' 			=> 'Nintendo',
			'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing'
        ));     

        Category::create(array(
			'name' 			=> 'Play Station 4',
			'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing'
        ));

        Category::create(array(
			'name' 			=> 'Xbox One',
			'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing'
        ));
    }
}
