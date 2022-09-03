<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('product')->insert([
        'id' => '1',
        'name' => 'モカ',
        'bitter_id' => '1',
        'sweet_id' => '2',
        'rich_id' => '2',
        'acidity_id' => '3',
        ]);

        \DB::table('product')->insert([
        'id' => '2',
        'name' => 'キリマンジャロ',
        'bitter_id' => '3',
        'sweet_id' => '1',
        'rich_id' => '1',
        'acidity_id' => '3',
        ]);

        \DB::table('product')->insert([
        'id' => '3',
        'name' => 'コロンビア',
        'bitter_id' => '1',
        'sweet_id' => '3',
        'rich_id' => '2',
        'acidity_id' => '2',
        ]);
    }
}
