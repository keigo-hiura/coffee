<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RichTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('rich')->insert([
        'id' => '1',
        'rich' => '弱い',
        ]);

        \DB::table('rich')->insert([
        'id' => '2',
        'rich' => '普通',
        ]);

        \DB::table('rich')->insert([
        'id' => '3',
        'rich' => '強い',
        ]);
    }
}
