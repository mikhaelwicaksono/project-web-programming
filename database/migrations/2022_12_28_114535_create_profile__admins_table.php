<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile__admins', function (Blueprint $table) {
            $table->id('profile_id');
            $table->string('username');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('address');
            $table->string('password');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile__admins');
    }
};
