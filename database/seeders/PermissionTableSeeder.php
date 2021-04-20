<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
        	['name' => 'admin-list', 'display_name' => 'Danh sách admin'],
        	['name' => 'delete-admin', 'display_name' => 'Xóa tài khoản admin'],
        	['name' => 'add-admin', 'display_name' => 'Thêm tài khoản admin'],
        	['name' => 'edit-permission', 'display_name' => 'Chỉnh sửa quyền permission'],
        	['name' => 'export-list', 'display_name' => 'Xuất file danh sách users'],
        	['name' => 'user-list', 'display_name' => 'Danh sách user'],
        	['name' => 'edit-avatar', 'display_name' => 'Upload hình ảnh avatar cho user'],
        	['name' => 'banner-list', 'display_name' => 'Danh sách banner'],
        	['name' => 'add-banner', 'display_name' => 'Thêm hình ảnh banner'],
        	['name' => 'delete-banner', 'display_name' => 'Xóa hình ảnh banner'],
        	['name' => 'event-list', 'display_name' => 'Danh sách event'],
        	['name' => 'add-event', 'display_name' => 'Thêm event'],
        	['name' => 'delete-event', 'display_name' => 'Xóa event'],
        	['name' => 'admin-list-csv', 'display_name' => 'Thêm event bằng csv'],
        	['name' => 'user', 'display_name' => 'Chỉ là account user']
        ]);
    }
}
