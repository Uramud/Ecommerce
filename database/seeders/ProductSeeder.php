<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Db::table('products')->insert([
            'name'=>'Nokia',
            'price'=>'100',
            'description'=>'old one',
            'category'=>'mobile',
            'gallery'=>'https://i1.wp.com/nokiamob.net/wp-content/uploads/2020/05/Nokia_150_21.jpg?resize=640%2C640&ssl=1',
        ]);
    }
}
