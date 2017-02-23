<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\User;

class UserTableSeeder extends Seeder
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
		}
       	
    }
}
