<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
        'name' => 'テストユーザー',
        'email' => Str::random(10).'1@gmail.com',
        'password' => Hash::make('password')
        ],[
        'name' => 'テストユーザー2',
        'email' => Str::random(10).'2@gmail.com',
        'password' => Hash::make('password')
        ]
      ]);
    }
}
