<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SweetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('sweet')->insert([
        'id' => '1',
        'sweet' => '弱い',
        ]);

        \DB::table('sweet')->insert([
        'id' => '2',
        'sweet' => '普通',
        ]);

        \DB::table('sweet')->insert([
        'id' => '3',
        'sweet' => '強い',
        ]);
    }
}
