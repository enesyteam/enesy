<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // add two column ZIP_CODE, ADDRESS in to tbl_users
       // DB::statement('ALTER TABLE tbl_users ADD ZIP_CODE VARCHAR(45) AFTER JOB');
       // DB::statement('ALTER TABLE tbl_users ADD ADDRESS VARCHAR(100) AFTER ZIP_CODE');
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
