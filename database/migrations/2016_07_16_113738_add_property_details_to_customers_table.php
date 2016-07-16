<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertyDetailsToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            //make cols nullable
            $table->string('passport_number')->nullable()->change();
            $table->string('date_of_birth')->nullable()->change();
            $table->string('mobile_number')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->string('nationality')->nullable()->change();
            $table->string('emirates_id')->nullable()->change();
            $table->string('first_name')->nullable()->change();
            $table->string('last_name')->nullable()->change();
            $table->string('occupation')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('gender')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('name')->nullable()->change();
            $table->string('dob')->nullable()->change();
            //create other cols
            $table->string('apartment_number')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('contract_date')->nullable();
            $table->string('email_address')->nullable();
            $table->string('address_one')->nullable();
            $table->string('address_two')->nullable();
            $table->string('area_sq_ft')->nullable();
            $table->string('tower_name')->nullable();
            $table->string('city')->nullable();

            $table->string('passport_attachment')->nullable();
            $table->string('contract_attachment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //drop cols
            $table->dropColumn('apartment_number');
            $table->dropColumn('postal_address');
            $table->dropColumn('contract_date');
            $table->dropColumn('email_address');
            $table->dropColumn('address_one');
            $table->dropColumn('address_two');
            $table->dropColumn('area_sq_ft');
            $table->dropColumn('tower_name');
            $table->dropColumn('city');

            $table->dropColumn('passport_attachment');
            $table->dropColumn('contract_attachment');

        });
    }
}
