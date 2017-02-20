<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Course;
use App\Http\Models\Member;
use App\Http\Models\Category;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$faker = Faker\Factory::create();

       	//create 1000 members
		for($i=0;$i<1000;++$i){
			Member::create([
					'email'		=>	$faker->lexify($string = '???????????@mail.com'),
					'username'	=>	$faker->lexify($string = '???????'),
					'password'	=>	'123456',
					'status'	=>	1
				]);
		};

		//create 3 parent categories
		for ($i=0; $i < 3 ; ++$i) {
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
				'parent_id'			=>	rand(1000, 1002),
				'title'				=>	$faker->lexify($string = 'Mục con ???'),
				'alias'				=>	$faker->slug(),
				'description'		=>	implode('',$faker->sentences(4)),
				'create_date'		=>	time(),
				'picture'			=>	'',
				'create_user'		=>	'ducnvna@gmail.com',
				'status'			=>	1
				]);
		}

		//create 1000 courses
		for($i=0; $i<100; ++$i){
			Course::create([
					'title'			=>	$faker->sentence,
					'introtext'		=>	implode('',$faker->sentences(8)),
					'content'		=>	implode('',$faker->sentences(30)),
					'cat_id'		=>	rand ( 0 , 1 ),
					'parent_cat_id'	=>	0,
					'mentor_id'		=>	rand ( 1 , 3 ),
					'picture'		=>	'',
					'alias'			=>	$faker->slug(),
					'create_date'	=>	time(),
					'num_of_learn'	=>	0,
					'love'			=>	rand(1, 1000),
					'updated_at'	=>	time()
				]);
		}
    }
}
