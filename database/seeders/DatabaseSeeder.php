<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'member',
            'email'=>'member@mail.com',
            'password'=> Hash::make('user'),

        ]);
        DB::table('users')->insert([
            'username'=>'admin',
            'email'=>'admin@mail.com',
            'password'=> Hash::make('admin'),
        ]);
    }
}
