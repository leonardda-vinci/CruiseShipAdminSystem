<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenityBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenity_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('pasenger_name');
            $table->string('total_passenger_reserved');
            $table->string('amenitiy_name');
            $table->date('date_reserved');
            $table->decimal('total_payment', 10, 2);
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
        Schema::dropIfExists('amenity_bookings');
    }
}
