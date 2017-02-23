<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Member;


class MemberTableSeeder extends Seeder
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
					'email'		=>	'user'.$i.'@gmail.com',
					'username'	=>	'user00'.$i,
					'password'	    =>	'$2y$10$wBqR1wNApDE6mZEJtmqzYOf04DYrAMd7Q3qRWPCTEGzGlE2HmRcee',
					'first_name'	=>	$faker->lexify($string = '???????'),
					'middle_name'	=>	$faker->lexify($string = '???????'),
					'last_name'	    =>	$faker->lexify($string = '???????'),
					'is_teaching'   =>  rand ( 0 , 1 ),
					'status'	    =>	1
				]);
		}

		
    }
}
