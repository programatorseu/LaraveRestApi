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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            // zakladamy, ze firma konczy zywot - jej pracownicy tez
            $table->unsignedBigInteger('company_id');
            $table->string('imie', 100);
            $table->string('nazwisko', 100);
            // unique  - czasem pracownicy uzywaja tego samego
            $table->string('email', 150);
            $table->string('numer_telefonu', 100)->nullable();
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
        Schema::dropIfExists('employees');
    }
};
