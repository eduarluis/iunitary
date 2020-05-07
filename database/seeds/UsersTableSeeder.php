<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Eduardo',
            'email' => 'eduarluis96@gmail.com',
            'email_verified_at' => NOW(),
            'password' => Hash::make('123456'),
        ]);

        App\User::create([
            'name' => 'Angie',
            'email' => 'angieCastellano@gmail.com',
            'email_verified_at' => NOW(),
            'password' => Hash::make('123456'),
        ]);

        App\User::create([
            'name' => 'Albert',
            'email' => 'albert.dm09@gmail.com',
            'email_verified_at' => NOW(),
            'password' => Hash::make('123456'),
        ]);

        App\User::create([
            'name' => 'Jose Mesa',
            'email' => 'jmesa121@gmail.com',
            'email_verified_at' => NOW(),
            'password' => Hash::make('123456'),
        ]);
    }
}
