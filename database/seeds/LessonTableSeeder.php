<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Course;
use App\Http\Models\Member;
use App\Http\Models\Category;
use App\Http\Models\User;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$faker = Faker\Factory::create();

    }
}
