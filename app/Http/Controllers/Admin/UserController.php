<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        //roles
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request['password'] = bcrypt($request['password']);
        $user = User::create($request->all());

        //attach role
        return redirect()->route('admin.user.index')->with([
            'message' => 'You have successfully created the user account',
            'errors' => false]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
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
