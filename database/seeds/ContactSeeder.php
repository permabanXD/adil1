<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            'adresse'=>'place minoetrie 10',
            'numero'=>'04 98 98 98 98',
            'email'=>'molengeek@haha.com',
        ]);
    }
}
