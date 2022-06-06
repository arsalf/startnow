<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        for($i=0; $i<5; $i++){
            User::create([
                'username' => Str::random(10),
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'noktp' => strval(mt_rand(1000000000000000, 9999999999999999)),
                'birthday' => date("Y/m/d"),
                'filektp' => Str::random(10).'.png'                

            ]);
        }        
    }
}
