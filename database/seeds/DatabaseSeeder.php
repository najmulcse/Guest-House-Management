<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        $this->call(UsersTableSeeder::class);
        $this->call(RoomTypesTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(BookingTableSeeder::class);
        $this->call(BookingDetailsSeeder::class);

    

    }
}
