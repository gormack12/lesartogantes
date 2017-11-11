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
        DB::table('users')->insert([
        	'firstname' => 'Hugues',
        	'lastname' => 'Tchouala',
        	'username' => 'gormack',
        	'email' => 'hugues.tchouala25@gmail.com',
        	'password' => bcrypt('secret'),
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime(),
        ]);

        DB::table('users')->insert([
        	'firstname' => 'Camille',
        	'lastname' => 'de Sancy',
        	'username' => 'camleloup',
        	'email' => 'camleloup@gmail.com',
        	'password' => bcrypt('secret'),
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime(),
        ]);
    }
}
