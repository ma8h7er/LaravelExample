<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();

        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        Role::create($request->all());
        return redirect()->route('admin.role.index')->with([
            'message' => 'You have successfully created the role',
            'errors' => false]);
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();

        $rolePer = $role->getPermissionsIds();

        return view('admin.roles.edit', compact('role', 'permissions', 'rolePer'));
    }

    public function update($id, Request $request)
    {
        $role = Role::find($id);

        $role->update($request->all());
        $permissions =  $request['permissions'];
        foreach ($permissions as $p) {
            $role->permissions()->attach($p);
        }
        return redirect()->route('admin.role.index')->with([
            'message' => 'You have successfully updated the role',
            'errors' => false]);
    }

    public function delete($id)
    {
        $role = Role::find($id);

        $role->users()->detach();
        /*$users = $role->users();
        foreach ($users as $u) {
            $role->detach($u->id);
        }*/
        $role->delete();

        return redirect()->route('admin.role.index')->with([
            'message' => 'You have successfully deleted the role',
            'errors' => false]);
    }
}
