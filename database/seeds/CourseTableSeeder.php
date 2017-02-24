<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Course;
use App\Http\Models\CourseHit;
use App\Http\Models\CourseBenefit;
use App\Http\Models\CourseRequirement;

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
		for($i=0; $i<300; ++$i){
			Course::create([
					'id'			=>	$i+1,
					'title'			=>	$faker->sentence,
					'introtext'		=>	implode('',$faker->sentences(8)),
					'content'		=>	implode('',$faker->sentences(30)),
					'cat_id'		=>	rand ( 1000 , 1003 ),
					'parent_cat_id'	=>	rand ( 1000 , 1003 ),
					'price'	=>	rand ( 10 , 1003 ),
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
			CourseHit::create([
					'course_id'		=>	$i+1,
					'view'		    =>	rand ( 1, 1003 ),
					'create_date'	=>	time(),
					'updated_at'	=>	time()
				]);	
			$y_max = rand ( 2 , 8 );
			for($y=0; $y<$y_max; ++$y){
					CourseBenefit::create([
							'course_id'		=>	$i+1,
							'title'		    =>	"Lợi ích ".rand ( 1, 1003 ),
							'create_date'	=>	time(),
							'updated_at'	=>	time()
						]);	
					CourseRequirement::create([
							'course_id'		=>	$i+1,
							'title'		    =>	'Yêu cầu'.rand ( 1, 1003 ),
							'create_date'	=>	time(),
							'updated_at'	=>	time()
						]);	
				}										
		}
    }
}
