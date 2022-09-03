<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BitterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('bitter')->insert([
        'id' => '1',
        'bitter' => '弱い',
        ]);

        \DB::table('bitter')->insert([
        'id' => '2',
        'bitter' => '普通',
        ]);

        \DB::table('bitter')->insert([
        'id' => '3',
        'bitter' => '強い',
        ]);
    }
}
