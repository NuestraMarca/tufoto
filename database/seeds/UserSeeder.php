<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->insert(array (

        	'name'=>'Administrador tufoto.co',
            'username' => 'tufoto',
        	'email'=>'tufoto.co@gmail.com',
        	'password'=>\Hash::make('tufoto')

        ));
    }
}
