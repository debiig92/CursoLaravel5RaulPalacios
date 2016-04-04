<?php

use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('towns')->insert([
            'name' => 'Champerico',
            'state_id' => '1'
        ]);

        DB::table('towns')->insert([
            'name' => 'San Carlos',
            'state_id' => '1'
        ]);

        DB::table('towns')->insert([
            'name' => 'San Sebastian',
            'state_id' => '1'
        ]);

        DB::table('towns')->insert([
            'name' => 'Villa Nueva',
            'state_id' => '2'
        ]);

        DB::table('towns')->insert([
            'name' => 'Momostenango',
            'state_id' => '3'
        ]);

        DB::table('towns')->insert([
            'name' => 'Olintepeque',
            'state_id' => '3'
        ]);

        DB::table('towns')->insert([
            'name' => 'Gualán',
            'state_id' => '4'
        ]);
    }
}
