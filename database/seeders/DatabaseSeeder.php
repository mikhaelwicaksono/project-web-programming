<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'username' => 'member',
        //     'email' => 'member@gmail.com',
        //     'password' => Hash::make('member'),
        //     'status' => 'member'

        // ]);
        // DB::table('users')->insert([
        //     'username' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'status' => 'admin'
        // ]);

        $this->call([
            ProductSeeder::class
        ]);
    }
}
