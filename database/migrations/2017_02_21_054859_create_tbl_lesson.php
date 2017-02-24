<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblLesson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('tbl_lesson', function (Blueprint $table) {
                    $table->engine = 'InnoDB';
                    $table->charset = 'utf8';
                    $table->collation = 'utf8_unicode_ci';
                    
                    $table->increments('id')->unsigned();
                    $table->integer('cat_id')->nullable();
                    $table->integer('parent_cat_id')->nullable();
                    $table->integer('course_id')->nullable();
                    $table->integer('section_id')->nullable();
                    $table->string('title', 255)->nullable();
                    $table->string('introtext', 500)->nullable();
                    $table->string('path', 255)->nullable();
                    $table->string('file_type', 255)->nullable();
                    $table->string('file_size', 255)->nullable();
                    $table->string('duration', 255)->nullable();
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
         Schema::dropIfExists('tbl_lesson');
    }
}
