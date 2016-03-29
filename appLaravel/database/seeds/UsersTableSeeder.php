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
            'name' => 'Pablo Méndez',
            'email' => 'pfmata01@gmail.com',
            'password' => \Hash::make('secret'),
        ]);
    }
}
