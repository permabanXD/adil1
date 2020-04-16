<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([

            'nom'=>'Admin',
            'text'=> 'lorem',
            'image'=> 'big1.png',
            'role_id'=> 1,
          
        ]);

        DB::table('teams')->insert([

            'nom'=>'Jean',
            'text'=> 'lorem',
            'image'=> 'big1.png',
            'role_id'=> 2,
          
        ]);

        DB::table('teams')->insert([

            'nom'=>'Martin',
            'text'=> 'lorem',
            'image'=> 'big1.png',
            'role_id'=> 1,
          
        ]);

        DB::table('teams')->insert([

            'nom'=>'Nazam',
            'text'=> 'lorem',
            'image'=> 'big1.png',
            'role_id'=> 2,
          
        ]);

        
    }
}
