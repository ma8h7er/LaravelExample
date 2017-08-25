<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        try {
            $request['password'] = bcrypt($request['password']);
            $user = User::create($request->all());

            //attach role
            $roles = $request['role'];
            foreach ($roles as $role) {
                $user->roles()->attach($role);
            }
        }catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'Something wnt wrong '. $e->getMessage(),
                'errors' => true]);
        }

        return redirect()->route('admin.user.index')->with([
            'message' => 'You have successfully created the user account',
            'errors' => false]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);

        $user->name = $request['name'];
        $user->email = $request['email'];
        if($request['password'] != ''){
            $user->password = bcrypt($request['password']);
        }

        $user->save();

        //attach role
        $roles = $request['role'];
        foreach ($roles as $role) {
            $user->roles()->attach($role);
        }

        return redirect()->route('admin.user.index')->with([
            'message' => 'You have successfully updated the user account',
            'errors' => false]);
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect()->route('admin.user.index')->with([
            'message' => 'You have successfully deleted the user account',
            'errors' => false]);
    }
}
