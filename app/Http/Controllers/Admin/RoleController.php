<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.roles.create');
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
        return view('admin.roles.edit', compact('role'));
    }

    public function update($id, Request $request)
    {
        $role = Role::find($id);

        $role->update($request->all());
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
