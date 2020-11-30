<?php

use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenity = [
        	['name' => 'Bathroom Tray',
        	'code' => '3964']
        	];

        DB::table('amenities')->insert($amenity);
    }
}
