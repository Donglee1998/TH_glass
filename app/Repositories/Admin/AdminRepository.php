<?php
namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Admin::class;
    }

    // public function getAdmin()
    // {
    //     return $this->model->select('name')->take(5)->get();
    // }

    public function getAdmin(){
		$admin = DB::table('admins')
				->join('role_admins','admins.id','=','role_admins.admin_id')
				->join('roles','roles.id','=','role_admins.role_id')
				->select('admins.*','roles.*')
				->get();  	
    	return $admin;
    }
}