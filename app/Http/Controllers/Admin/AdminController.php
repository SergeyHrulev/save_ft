<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    //
    /*
     * Return main dashboard list
     */
    public function index(){
        return view('dashboard.main');
    }

    public function getUsersWithRoles(){
        $users = User::with('roles')->get();
        return $users;
    }

    public function getRolesPermissions(){
        $roles = Role::with('permissions')->get();
        return $roles;
    }

    public function setPermission(Request $request){
        $role = Role::findOrFail($request->input('role'));
        $permission = Permission::create(['name' => $request->input('permission')]);
        $role->givePermissionTo($permission);
        $this->getRolesPermissions();
    }
}
