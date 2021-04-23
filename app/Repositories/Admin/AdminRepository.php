<?php
namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class AdminRepository extends BaseRepository
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
		$admin = $this->model
				->join('role_admins','admins.id','=','role_admins.admin_id')
				->join('roles','roles.id','=','role_admins.role_id')
				->select('admins.*','roles.*')
				->get();  	
    	return $admin;
    }

    public function findId($email){
        $admin = $this->model->where('email', $email)->get();
        foreach ($admin as $key) {
            return $key['id'];  
        }
    }

    public function getPermission(){
        $admin = $this->model
                ->join('role_admins','admins.id','=','role_admins.admin_id')
                ->join('roles','roles.id','=','role_admins.role_id')
                ->join('role_permissions','roles.id','=','role_permissions.role_id')
                ->join('permissions','permissions.id','=','role_permissions.permission_id')
                ->select ('admins.email','roles.role_name','permissions.permission_name')
                ->orderby('admins.id')
                ->get();

        return $admin;
    }

    
}