<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "GiaHuy",
            'password' => Hash::make('password'),
            'Email' => 'GiaHuy@gmail.com',
            'firstName' => 'Gia',
            'lastName' => 'Huy',
            'birthDay' => '2001/11/10',
            'address'=>"HCM",
            'CMND'=>"251265369",
            'Numberphone'=>'0797842160'
        ]);
        
        DB::table('users')->insert([
            'username' => "ThanhDat",
            'password' => Hash::make('password'),
            'Email' => 'ThanhDat@gmail.com',
            'firstName' => 'Thanh',
            'lastName' => 'Dat',
            'birthDay' => '2001/1/20',
            'address'=>"HCM",
            'CMND'=>"251879369",
            'Numberphone'=>'0791232160'
        ]);  
    }
}
