<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //use HasFactory;
	protected $table = 'roles';
    public function RoleAdmin(){
    	return $this->hasMany("App\Models\RoleAdmin");
    }
    public function RolePermission(){
    	return $this->hasMany("App\Models\RolePermission");
    }
}
