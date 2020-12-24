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
        $attendants = [
            ['name' => 'Justine Estrada',
            'position' => 'Executive Hosekeeper', 'Deputy Housekeeper', 'Assistant Housekeeper', 'Floor Supervisor', 'Unifor Room Supervisor', 
            'Linen Room Supervisor', 'Night Supervisor', 'Public Area Supervisor', 'Store Keeper', 'Guest room Attendants', 'Uniform Room Attendant', 
            'Linen Room Atttendant', 'Nighshift Attendants', 'Public area Attendants', 'Store Attendant',
             'gender' => 'male', 'female'],

        	];

        DB::table('attendants')->insert($attendants);
    }
}
