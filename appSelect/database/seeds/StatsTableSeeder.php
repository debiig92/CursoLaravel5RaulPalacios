<?php

use Illuminate\Database\Seeder;

class StatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => 'Retalhuleu'
        ]);

        DB::table('states')->insert([
            'name' => 'Guatemala'
        ]);

        DB::table('states')->insert([
            'name' => 'Quetzaltenango'
        ]);

        DB::table('states')->insert([
            'name' => 'Zacapa'
        ]);
    }
}
