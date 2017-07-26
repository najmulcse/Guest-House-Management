<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 DB::table('bookings')->insert(

            [
                [ 
                  'name'=>'john',
                  'user_id'=>'1',
                  'salaryID'=>'700000',
                  'designation'=>'Teacher',
                  'department'=>'CSE',
                  'email'=>'john@clivern.com',
                  'arriving_date'=>Carbon::createFromDate(2017,11,31),
                  'leaving_date'=>Carbon::createFromDate(2017,12,3),
                  'status'=>'0'
                ]
                  ,

                ['name'=>'mark',
                 'user_id'=>'2',
                 'salaryID'=>'900000',
                 'designation'=>'Teacher',
                 'department'=>'ICE',
                 'email'=>'arafat@clivern.com',
                 'arriving_date'=>Carbon::createFromDate(2017,10,30),
                  'leaving_date'=>Carbon::createFromDate(2017,10,31),
                 'status'=>'empty'],

                ['name'=>'Karl',
                'user_id'=>'3',
                'salaryID'=>'800000',
                'designation'=>'Teacher',
                'department'=>'CSE',
                'email'=>'najmul@clivern.com',
                'arriving_date'=>Carbon::createFromDate(2017,8,31),
                  'leaving_date'=>Carbon::createFromDate(2017,8,31),
                'status'=>'empty'],


            ]

            );

    }
}
