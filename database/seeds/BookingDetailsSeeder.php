<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BookingDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('bookingdetails')->insert([
        	'booking_id'		=> 1 ,
        	'booking_date' 		=> Carbon::createFromDate(2017,7,24),
        	'roomtype_id' 			=> 1 

       ]);
        DB::table('bookingdetails')->insert([
        	'booking_id'		=> 2 ,
        	'booking_date' 		=> Carbon::createFromDate(2017,7,23),
        	'roomtype_id' 			=> 2 

       ]);
    }
}
