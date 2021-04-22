<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\RoleAdmin;
use App\Models\Role;
use App\Repositories\Admin\AdminRepositoryInterface;

class AdminController extends Controller
{
	protected $adminRepo;

    public function __construct(AdminRepositoryInterface $adminRepo)
    {
        $this->adminRepo = $adminRepo;
    }

    public function getIndex()
    {
        $admin = $this->adminRepo->getAdmin();
        return view('admin.admins.index', ['admin' => $admin]);
    }

    public function getAddAdmin(){
    	return view('admin.admins.add');
    }

    public function postAddAdmin(Request $Request){
    	
    }

  //   public function getIndex(){
		// $admin = DB::table('admins')
		// 		->join('role_admins','admins.id','=','role_admins.admin_id')
		// 		->join('roles','roles.id','=','role_admins.role_id')
		// 		->select('admins.*','roles.*')
		// 		->get();   	
  //   	return view('admin.pages.index',compact('admin'));
  //   }
}
