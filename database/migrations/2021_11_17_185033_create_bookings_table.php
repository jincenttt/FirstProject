<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('surname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('bday')->nullable();
            $table->string('age')->nullable();

            $table->string('streetname')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();

            $table->string('phonenumber')->nullable();
            $table->string('mobilenumber')->nullable();
            $table->string('email')->nullable();

            $table->string('fullname')->nullable();
            $table->string('emergencynumber')->nullable();
            $table->string('relationship')->nullable();


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
        Schema::dropIfExists('bookings');
    }
}
