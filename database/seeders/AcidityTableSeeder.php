<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcidityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('acidity')->insert([
        'id' => '1',
        'acidity' => '弱い',
        ]);

        \DB::table('acidity')->insert([
        'id' => '2',
        'acidity' => '普通',
        ]);

        \DB::table('acidity')->insert([
        'id' => '3',
        'acidity' => '強い',
        ]);

    }
}
