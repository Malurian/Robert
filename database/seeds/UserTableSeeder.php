<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('secret');
        $user->wallet = 5000;
        $user->is_admin = true;
        $user->save();

        $user = new User;
        $user->name = 'User One';
        $user->email = 'userone@gmail.com';
        $user->password = Hash::make('secret');
        $user->wallet = 10000;
        $user->save();
    }
}
