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
<<<<<<< HEAD
        Schema::create('spouse_death', function (Blueprint $table) {
=======
        Schema::create('spouseDeath', function (Blueprint $table) {
>>>>>>> 84fe2631cd7475b8e9aa1500e57500035c78d6fe
            $table->string('sex');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('idtype');
            $table->string('spousefname');
            $table->string('spousemname');
            $table->string('spouselname');
            $table->string('deathplace');
            $table->string('lateReg');
            $table->string('purpose');
            $table->string('phone');
            $table->string('status');
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
        Schema::dropIfExists('spouse_death');
    }
};
