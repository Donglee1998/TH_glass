<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	['name' => 'admin', 'display_name' => 'Chức năng là ông nội có tất cả các quyền'],
        	['name' => 'manager', 'display_name' => 'Quản lý 1 các trang danh sách user, và banner'],
        	['name' => 'normal', 'display_name' => 'Chả có tác dụng gì ngoài xem xem'],
        	['name' => 'user', 'display_name' => 'Chỉ có quyền user']
        ]);
    }
}
