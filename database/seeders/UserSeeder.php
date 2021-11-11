<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // inserting dummie user in the db
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('12345678')

        ]);

    }
}
