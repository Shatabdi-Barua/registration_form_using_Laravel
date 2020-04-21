<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSkypeAndWebAndMobileAndProposerNameAndProposerNoAndSeconderNameAndSeconderNoAndQualificationAndJoinDateAndAssociationToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('skype');
            $table->string('web');
            $table->string('mobile');
            $table->string('proposerName');
            $table->string('proposerNo');
            $table->string('seconderName');
            $table->string('seconderNo');
            $table->string('qualification');
            $table->string('JoinDate');
            $table->mediumText('association');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
