<?php

use Illuminate\Database\Seeder;

class GalerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeries')->insert([
            'image'=>'big1.png'
        ]);
    }
}
