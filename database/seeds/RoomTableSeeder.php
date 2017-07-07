<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert(
                [
                    ['room_name'=>'Room-120','roomtype_id'=>'1','room_status'=>'empty'],
                    ['room_name'=>'Room-121','roomtype_id'=>'2','room_status'=>'booked'],
                    ['room_name'=>'Room-122','roomtype_id'=>'3','room_status'=>'booked'],
                    ['room_name'=>'Room-123','roomtype_id'=>'4','room_status'=>'empty'],
                ]

          );

    }
}
