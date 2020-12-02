<?php

use Illuminate\Database\Seeder;

class PassengerReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $passenger_reservation = [
        	['date' => '07282019',
        	'destination' => 'South Korea']
        	];

        DB::table('passenger_reservation')->insert($passenger_reservation);
    }
}
