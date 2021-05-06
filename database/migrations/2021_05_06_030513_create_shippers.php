<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippers', function (Blueprint $table) {
            $table->id();
            $table->string('ownername');
            $table->string('dba');
            $table->string('addressline1');
            $table->string('addressline2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('licensenumber');
            $table->string('licensetype');
            $table->string('status');
            $table->date('effectivedate');
            $table->date('expirationdate');
            $table->string('lengthoflicense');
            $table->string('contactname');
            $table->string('emailaddress');
            $table->string('contactphone');
            $table->string('mailingaddressline1');
            $table->string('mailingaddresscity');
            $table->string('mailingaddressstate');
            $table->string('mailingaddresszip');
            $table->date('issuedate');
            $table->date('currentissuedate');
            $table->integer('parent_shipper_id')->nullable();
            $table->string('parent_shipper_name')->nullable();
            $table->enum('processed', array('0','1'))->default('0');
            $table->string('primary_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('street_predirection')->nullable();
            $table->string('street_postdirection')->nullable();
            $table->string('street_suffix')->nullable();
            $table->string('secondary_number')->nullable();
            $table->string('secondary_designator')->nullable();
            $table->string('city_name')->nullable();
            $table->string('default_city_name')->nullable();
            $table->string('state_abbreviation')->nullable();
            $table->string('ss_zipcode')->nullable();
            $table->string('plus4_code')->nullable();
            $table->string('delivery_point')->nullable();
            $table->string('delivery_point_check_digit')->nullable();
            $table->string('record_type')->nullable();
            $table->string('rdi')->nullable();
            $table->mediumText('smartystreet_response')->nullable();
            $table->timestamps();
        });

        DB::statement(
            'ALTER TABLE shippers ADD FULLTEXT fulltext_index(ownername, dba)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippers');
    }
}
