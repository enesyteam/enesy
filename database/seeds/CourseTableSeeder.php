<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Course;
use App\Http\Models\Member;
use App\Http\Models\Category;
use App\Http\Models\User;

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
        //create 10 admin
		for($i=1;$i<11;++$i){
			User::create([
					'email'		=>	'admin'.$i.'@gmail.com',
					'username'	=>	'admin'.$i,
					'password'	=>	'$2y$10$wBqR1wNApDE6mZEJtmqzYOf04DYrAMd7Q3qRWPCTEGzGlE2HmRcee',
					'active'	=>	1,
					'mobile'	=>	'123456',
					'full_name' =>  $faker->lexify($string = '???????')
				]);
		};
       	//create 1000 members
		for($i=0;$i<1000;++$i){
			Member::create([
					'email'		=>	'user'.$i.'@gmail.com',
					'username'	=>	'user00'.$i,
					'password'	    =>	'$2y$10$wBqR1wNApDE6mZEJtmqzYOf04DYrAMd7Q3qRWPCTEGzGlE2HmRcee',
					'first_name'	=>	$faker->lexify($string = '???????'),
					'middle_name'	=>	$faker->lexify($string = '???????'),
					'last_name'	    =>	$faker->lexify($string = '???????'),
					'is_teaching'   =>  rand ( 0 , 1 ),
					'status'	    =>	1
				]);
		};

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

		//create 1000 courses
		for($i=0; $i<1000; ++$i){
			Course::create([
					'title'			=>	$faker->sentence,
					'introtext'		=>	implode('',$faker->sentences(8)),
					'content'		=>	implode('',$faker->sentences(30)),
					'cat_id'		=>	rand ( 1000 , 1003 ),
					'parent_cat_id'	=>	rand ( 1000 , 1003 ),
					'mentor_id'		=>	rand ( 1 , 3 ),
					'picture'		=>	'',
					'video'		    =>	'/default/course-preview.mp4',
					'alias'			=>	$faker->slug(),
					'create_date'	=>	time(),
					'num_of_learn'	=>	0,
					'love'			=>	rand(1, 1000),
					'updated_at'	=>	time(),
					'status'			=>	1
				]);
		}
    }
}
