<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('users')->insert(

        [
             ['name'=>'john','email'=>'john@clivern.com','password'=>'john'],
             ['name'=>'mark','email'=>'mark@clivern.com','password'=>'mark'],
             ['name'=>'Karl','email'=>'karl@clivern.com','password'=>'karl'],
             ['name'=>'marl','email'=>'marl@clivern.com','password'=>'marl'],
             ['name'=>'mary','email'=>'mary@clivern.com','password'=>'mary'],
             ['name'=>'sels','email'=>'sels@clivern.com','password'=>'sels'],
             ['name'=>'taylor','email'=>'taylor@clivern.com','password'=>'taylor'],

        ]

            );



    }
}
