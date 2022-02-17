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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('registration_id')->nullable();
            $table->bigInteger('membership_id')->nullable();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('dob');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('spouse')->nullable();
            $table->integer('sons')->nullable();
            $table->integer('daughters')->nullable();
            $table->text('mailing_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('ocupation')->nullable();
            $table->text('designation')->nullable();
            $table->text('organization')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('signature_path', 2048)->nullable();
            $table->string('academic_file_path', 2048)->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('users');
    }
};
