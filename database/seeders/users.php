<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Db::table('users')->insert([
            'name'=>'pyassi',
            'email'=>'rosni@gmail.com',
            'password'=>Hash::make('pyassi')
        ]);
    }
}
