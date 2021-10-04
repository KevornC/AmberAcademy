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
            $table->id();
            $table->string('role')->default(0);
            $table->string('Firstname');
            $table->string('lastname');
            $table->string('dob');
            $table->string('gender');
            $table->string('trn');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->default('not updated');
            $table->rememberToken();
            $table->timestamps();
//            $table->timestamp('email_verified_at')->nullable();
//            $table->foreignId('current_team_id')->nullable();
            // $table->string('profile_photo_path', 2048)->nullable();
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
