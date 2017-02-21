<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
                    $table->engine = 'InnoDB';
                    $table->charset = 'utf8';
                    $table->collation = 'utf8_unicode_ci';

                    $table->increments('id')->unsigned();
                    $table->string('email', 255)->nullable();
                    $table->string('mobile', 255)->nullable();
                    $table->string('username', 255)->nullable();
                    $table->string('password', 255)->nullable();
                    $table->string('full_name', 255)->nullable();
                    $table->date('updated_at', 255)->nullable();                    
                    $table->tinyInteger('active')->unsigned()->nullable()->default(1)->index()->comment = '1:active 2:not active';
                    $table->string('info', 4000)->nullable();
                    $table->integer('create_date')->nullable();
                    $table->string('create_user', 255)->nullable();
                    $table->integer('modify_date')->nullable();
                    $table->string('modify_user', 255)->nullable();
                    $table->string('remember_token', 255)->nullable();
                    $table->tinyInteger('type_admin')->unsigned()->nullable()->default(1)->index()->comment = '1:Supper admin\n2:Admin';
                    $table->integer('permission')->nullable();
                    $table->string('avatar', 255)->nullable();

                    
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
