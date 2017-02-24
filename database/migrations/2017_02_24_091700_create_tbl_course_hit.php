<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCourseHit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_course_hit', function (Blueprint $table) {
                            $table->engine = 'InnoDB';
                            $table->charset = 'utf8';
                            $table->collation = 'utf8_unicode_ci';                       
                            $table->increments('id')->unsigned();
                            $table->integer('course_id')->nullable();
                            $table->integer('view')->nullable();
                            $table->integer('create_date')->nullable();
                            $table->integer('updated_at')->nullable();
                            
                        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_course_hit');
    }
}
