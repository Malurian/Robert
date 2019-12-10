<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
        $user->username = '@ad';
        $user->website = 'admin.com';
        $user->country = 'South Africa';
        $user->mobile = '948237239';
        $user->about = 'Simple Bio';
        $user->avatar = '15746837252.jpeg';
        $user->password = Hash::make('secret');
        $user->date = Carbon::now()->format('Y-m-d H:i:s');
        $user->wallet = 5000;
        $user->is_admin = true;
        $user->save();

        $user = new User;
        $user->name = 'User One';
        $user->email = 'userone@gmail.com';
        $user->username = '@user';
        $user->website = 'user.com';
        $user->country = 'South Africa';
        $user->mobile = '948237239';
        $user->about = 'Simple Bio';
        $user->avatar = '15746837252.jpeg';
        $user->password = Hash::make('secret');
        $user->date = Carbon::now()->format('Y-m-d H:i:s');
        $user->wallet = 10000;
        $user->save();
    }
}
