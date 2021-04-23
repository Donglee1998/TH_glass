<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\Admin\AdminRepository;
use App\Repositories\RoleAdmin\RoleAdminRepository;

class AdminController extends Controller
{
    protected $adminRepo;
    protected $roleadminRepo;

    public function __construct(AdminRepository $adminRepo, RoleAdminRepository $roleadminRepo)
    {
        $this->adminRepo = $adminRepo;
        $this->roleadminRepo = $roleadminRepo;
    }

    public function getIndex()
    {
        $admin = $this->adminRepo->getAdmin();
        return view('admin.admins.index', ['admin' => $admin]);
    }

    public function getAddAdmin(){
        return view('admin.admins.add');
    }

    public function postAddAdmin(Request $request){
        $data = $request->all();
        $this->validate($request,
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                'name' => 'required',
                're-password' => 'required|same:password'
            ],
            [
                'email.required' => 'Vui long nhap email',
                'email.email' => 'Nhap khong dung dinh dang email',
                'email.unique' => 'Email da co nguoi su dung',
                'password.required' => 'Vui long nhap mat khau',
                're-password.same' => 'Mat khau khong giong nhau',
                'password.min' =>"Mat khau it nhat 6 ky tu",
                'password.max' => "Mat khau toi da 20 ky tu"
            ]
        );
        
        $admin = $this->adminRepo->create($data);
        $a = $this->adminRepo->findId($data['email']);
        $data1 = array('admin_id'=>$a,'role_id'=>$data['role']);
        $roleadmin = $this->roleadminRepo->create($data1);
        return redirect()->route('admin_index');


    }

    public function getViewPermission(){
        $admin = $this->adminRepo->getPermission();
        return view('admin.admins.permission',['admin' => $admin]);
    }

    

  //   public function getIndex(){
        // $admin = DB::table('admins')
        //      ->join('role_admins','admins.id','=','role_admins.admin_id')
        //      ->join('roles','roles.id','=','role_admins.role_id')
        //      ->select('admins.*','roles.*')
        //      ->get();    
  //    return view('admin.pages.index',compact('admin'));
  //   }
}