<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('tbl_member', function (Blueprint $table) {
                    $table->engine = 'InnoDB';
                    $table->charset = 'utf8';
                    $table->collation = 'utf8_unicode_ci';
                    
                    $table->increments('id')->unsigned();
                    $table->string('email', 255)->nullable();
                    $table->string('phone', 100)->nullable();
                    $table->string('username', 255)->nullable();
                    $table->string('password', 255)->nullable();
                    $table->string('first_name', 255)->nullable();
                    $table->string('middle_name', 255)->nullable();
                    $table->string('last_name', 255)->nullable();
                    $table->date('updated_at', 255)->nullable();                    
                    $table->tinyInteger('status')->unsigned()->nullable()->default(2)->index()->comment = '1.approved 2.waiting review 3.in review 4. rejected';
                    $table->string('info', 4000)->nullable();
                    $table->integer('create_date')->nullable();
                    $table->string('create_user', 255)->nullable();
                    $table->integer('modify_date')->nullable();
                    $table->string('modify_user', 255)->nullable();
                    $table->string('remember_token', 255)->nullable();
                    $table->string('avatar', 255)->nullable();
                    $table->tinyInteger('is_teaching')->unsigned()->nullable()->default(0)->index()->comment = '1. là giáo viên 0. ko phải giáo viên';
                    $table->string('sex', 45)->nullable();
                    $table->date(format)('dob')->nullable();
                    $table->string('social', 255)->nullable();
                    $table->string('address', 255)->nullable();
                    
                    
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tbl_member');
    }
}
