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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name','50');
            $table->string('second_name');
            $table->string('email','50')->unique();
            $table->integer('phone_number')->unique();
            $table->string('telegram');
            $table->string('course','50');
            $table->string('days','40');
            $table->string('time','40');
            $table->boolean('watched');
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
        Schema::dropIfExists('registrations');
    }
};
