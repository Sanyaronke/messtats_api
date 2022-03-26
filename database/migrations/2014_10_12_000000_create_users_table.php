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
//            $table->foreignId('team_id');
            $table->string('name')->unique();
            $table->string('team_name')->unique();
            $table->string('matricule')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->string('post')->nullable();
            $table->string('num_short')->nullable();
            $table->boolean('sexe');
            $table->date('birthday');
            $table->integer('size')->nullable();
            $table->string('email')->unique();
//            $table->boolean('is_direct_member')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
};
