<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->bigIncrements('ID')->unsigned();
            $table->bigInteger('FACILITY_ID')->nullable()->unsigned();
            $table->string('EMAIL', 100)->nullable();
            $table->string('PASSWORD', 60)->nullable();
            $table->string('REMEMBER_TOKEN', 255)->nullable();
            $table->string('FIRST_NAME', 100)->nullable();
            $table->string('LAST_NAME', 100)->nullable();
            $table->string('NAME', 100)->nullable();
            $table->string('NAME_KANA', 100)->nullable();
            $table->tinyInteger('TYPE_ROLE')->unsigned()->nullable()->default(0)->comment = '1:Supper admin\n2:Admin base\n3:Receiver\n0:User Common -> booker';
            $table->string('STAFF_ID', 100)->nullable();
            $table->string('JOB', 100)->nullable();
            $table->tinyInteger('ENABLED')->unsigned()->nullable()->default(1)->comment = '1->enable/ 0->disanable';
            $table->timestamp('DELETED_AT')->nullable();
            $table->bigInteger('CREATED_BY')->unsigned()->nullable();
            $table->timestamp('CREATED_AT')->nullable();
            $table->bigInteger('UPDATED_BY')->unsigned()->nullable();
            $table->timestamp('UPDATED_AT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user');
    }
}
