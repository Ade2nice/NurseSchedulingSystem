<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
class nurse_tableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nurse_list')->insert([
            
            'email'=> 'nurse10@gmail.com',
            'password'=> Hash::make('password'),
            'gender'=>'FeMale',
             'surname'=>'Johnson',
             'firstName'=>'Cameron',
               'address'=>'NO. 50 Alesa',
            'phone'=>'08028416289',




        ]);
    }
}
