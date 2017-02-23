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
