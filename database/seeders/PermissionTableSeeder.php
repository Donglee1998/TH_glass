<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
        	['permission_name' => 'admin-list', 'display_name' => 'Danh sách admin'],
        	['permission_name' => 'delete-admin', 'display_name' => 'Xóa tài khoản admin'],
        	['permission_name' => 'add-admin', 'display_name' => 'Thêm tài khoản admin'],
        	['permission_name' => 'edit-permission', 'display_name' => 'Chỉnh sửa quyền permission'],
        	['permission_name' => 'export-list', 'display_name' => 'Xuất file danh sách users'],
        	['permission_name' => 'user-list', 'display_name' => 'Danh sách user'],
        	['permission_name' => 'edit-avatar', 'display_name' => 'Upload hình ảnh avatar cho user'],
        	['permission_name' => 'banner-list', 'display_name' => 'Danh sách banner'],
        	['permission_name' => 'add-banner', 'display_name' => 'Thêm hình ảnh banner'],
        	['permission_name' => 'delete-banner', 'display_name' => 'Xóa hình ảnh banner'],
        	['permission_name' => 'event-list', 'display_name' => 'Danh sách event'],
        	['permission_name' => 'add-event', 'display_name' => 'Thêm event'],
        	['permission_name' => 'delete-event', 'display_name' => 'Xóa event'],
        	['permission_name' => 'admin-list-csv', 'display_name' => 'Thêm event bằng csv'],
        	['permission_name' => 'user', 'display_name' => 'Chỉ là account user']
        ]);
    }
}
