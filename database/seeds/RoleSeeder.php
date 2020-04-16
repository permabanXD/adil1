<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

            'role'=>'Admin',
            'special'=> true,
            
        ]);

        DB::table('roles')->insert([

            'role'=>'Clochard',
            'special'=> false,
            
        ]);
    }
}
