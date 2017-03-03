<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_course', function (Blueprint $table) {
                    $table->engine = 'InnoDB';
                    $table->charset = 'utf8';
                    $table->collation = 'utf8_unicode_ci';
                    $table->increments('id')->unsigned();
                    $table->string('picture', 255)->nullable();
                    $table->string('video', 255)->nullable();
                    $table->integer('parent_cat_id')->nullable();
                    $table->integer('cat_id')->nullable();
                    $table->string('title', 255)->nullable();
                    $table->string('alias', 255)->nullable();
                    $table->string('introtext',500)->nullable();
                    $table->text('content')->nullable();
                    $table->double('price')->nullable();
                    $table->double('sale')->nullable();
                    $table->tinyInteger('status')->unsigned()->nullable()->default(0)->index()->comment = '1:active, 0:not active';   
                    $table->tinyInteger('trending')->unsigned()->nullable()->default(0)->index();  
                    $table->string('create_user', 255)->nullable();  
                    $table->integer('love')->nullable();
                    $table->integer('num_of_learn')->nullable();
                    $table->integer('time_learn')->nullable();
                    $table->integer('mentor_id')->nullable();
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
        Schema::dropIfExists('tbl_course');
    }
}
