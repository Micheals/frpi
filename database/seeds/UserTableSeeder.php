<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::create([
//            'email'=>'admin@frpi.com',
//            'password'=>Hash::make('admin123456')
//        ]);
        User::create([
            'email'=>'jepoy@frpi.com',
            'password'=>Hash::make('pecsonjeff')
        ]);
        User::create([
            'email'=>'juevora@frpi.com',
            'password'=>Hash::make('ginger8888')
        ]);
        User::create([
            'email'=>'srgarcia@frpi.com',
            'password'=>Hash::make('susiegarcia')
        ]);
    }
}
