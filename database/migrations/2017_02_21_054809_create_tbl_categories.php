<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_categories', function (Blueprint $table) {
                    $table->engine = 'InnoDB';
                    $table->charset = 'utf8';
                    $table->collation = 'utf8_unicode_ci';
                    $table->increments('id')->unsigned();
                    $table->integer('parent_id')->nullable();
                    $table->string('title', 255)->nullable();
                    $table->string('alias', 255)->nullable();
                    $table->string('description',500)->nullable();
                    $table->string('picture', 255)->nullable();
                    $table->string('create_user', 255)->nullable();  
                    $table->integer('create_date')->nullable();
                    $table->tinyInteger('level')->unsigned()->nullable()->default(1)->index();
                    $table->string('ordering')->nullable()->index();
                    $table->tinyInteger('status')->unsigned()->nullable()->default(0)->index()->comment = '1:active, 0:not active';
    
                    
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_categories');
    }
}
