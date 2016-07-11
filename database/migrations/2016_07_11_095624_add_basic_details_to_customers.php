<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBasicDetailsToCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('customers', function($table) {
        $table->string('passport_number');
        $table->string('date_of_birth');
        $table->string('nationality');
        $table->string('emirates_id');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('mobile');
        $table->string('phone');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('customers', function($table) {
        $table->dropColumn('passport_number');
        $table->dropColumn('date_of_birth');
        $table->dropColumn('nationality');
        $table->dropColumn('emirates_id');
        $table->dropColumn('first_name');
        $table->dropColumn('last_name');
        $table->dropColumn('mobile');
        $table->dropColumn('phone');
      });
    }
}
