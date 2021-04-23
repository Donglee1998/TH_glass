<?php
namespace App\Repositories\RoleAdmin;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class RoleAdminRepository extends BaseRepository
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\RoleAdmin::class;
    }

    
    
}