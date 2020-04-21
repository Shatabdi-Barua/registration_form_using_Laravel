<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('membType');
            $table->string('businessNature');
            $table->mediumText('specNature');
            $table->string('repBy');
            $table->string('memberName');
           
            $table->string('ComName');
            $table->string('Desg');
            $table->string('StrNo1');
            $table->string('Zipcode1');
            $table->string('city1');
            $table->string('country1');
            $table->string('StrNo2');
            $table->string('Zipcode2');
            $table->string('city2');
            $table->string('country2');
            $table->string('PhnOffice');
            $table->string('PhnRes');
            $table->string('fax');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
