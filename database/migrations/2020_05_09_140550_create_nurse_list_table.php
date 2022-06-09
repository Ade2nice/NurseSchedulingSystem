<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_list', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->nullable();
            $table->string('surname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->longText('address')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
            $table->string('password');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurse_list');
    }
}
