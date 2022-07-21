<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Test-One', 'email' => 'test1@gmail.com', 'password' => bcrypt('password')],
            [ 'name' => 'Test-Two', 'email' => 'test2@gmail.com', 'password' => bcrypt('password')],
            [ 'name' => 'Test-Three', 'email' => 'test3@gmail.com', 'password' => bcrypt('password')],
            [ 'name' => 'Test-Four', 'email' => 'test4@gmail.com', 'password' => bcrypt('password')],
        ];
        DB::table('users')->insert($users);
    }
}
