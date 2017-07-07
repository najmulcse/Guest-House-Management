<?php

use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                    DB::table('roomtypes')->insert(

            [

                ['room_category'=>'small','room_capacity'=>'1'],
                ['room_category'=>'large','room_capacity'=>'3'],
                ['room_category'=>'medium','room_capacity'=>'2'],
                ['room_category'=>'extra_large','room_capacity'=>'4'],
            ]


                                            );

    }
}
