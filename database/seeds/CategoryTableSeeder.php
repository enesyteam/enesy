<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$faker = Faker\Factory::create();
        

		//create 3 parent categories
		for ($i=0; $i < 4 ; ++$i) {
			Category::create([
				'id'				=>	1000+$i,
				'parent_id'			=>	0,
				'title'				=>	$faker->lexify($string = 'Mục cha ???'),
				'alias'				=>	$faker->slug(),
				'description'		=>	implode('',$faker->sentences(4)),
				'create_date'		=>	time(),
				'picture'			=>	'',
				'create_user'		=>	'ducnvna@gmail.com',
				'status'			=>	1
				]);
		}

		//create 15 child categories
		for ($i=0; $i < 15 ; ++$i) {
			Category::create([
				'parent_id'			=>	rand(1000, 1003),
				'title'				=>	$faker->lexify($string = 'Mục con ???'),
				'alias'				=>	$faker->slug(),
				'description'		=>	implode('',$faker->sentences(4)),
				'create_date'		=>	time(),
				'picture'			=>	'',
				'create_user'		=>	'ducnvna@gmail.com',
				'status'			=>	1
				]);
		}
    }
}
