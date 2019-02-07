<?php

namespace App\Http\Controllers\Admin;

use App\Chapter;
use App\Glossary;
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

    public function users(){
        return view('dashboard.pages.users');
    }

    public function roles(){
        return view('dashboard.pages.roles');
    }

    public function articles(){
        return view('dashboard.pages.articles');
    }

    public function showChapters(){
        $chapters = Chapter::all();
        $glossaries = Glossary::all();
        return view('dashboard.pages.chapters', [
            'chapters' => $chapters,
            'glossaries' => $glossaries
        ]);
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

    public function setRole(Request $request){
        $role = Role::create(['name' => $request->input('role')]);
        $this->getRolesPermissions();
    }
}
