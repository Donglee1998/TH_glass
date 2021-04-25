<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	['name'=>'dong','email'=>'dong@gmail.com','password'=>Hash::make('123456Ad'),'avatar'=>'hinh1.png']
        ]);
    }
}
