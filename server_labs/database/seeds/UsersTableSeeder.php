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
        //
        $user1 = [
            'name' => 'swimly',
            'email' => '979741120@qq.com',
            'password' => Hash::make('password'),
        ];
        User::create($user1);
    }
}
