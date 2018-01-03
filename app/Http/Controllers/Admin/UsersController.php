<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Session;
use Redirect;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', array(
            'users' => $users
        ));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password ?? $this->generatePassword();
        $user->save();
        Session::flash('message', 'User created successfully');
        return Redirect::to('admin/users');
    }

    public function show(User $user)
    {
        return view('admin.users.show', array(
            'user' => $user
        ));
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            if ($request->password !== $request->confirm) {
                // throw an exception due to invalid passwords
            }
            $user->password = $request->password;
        }
        $user->save();
        Session::flash('message', "Settings updated sucessfully");
        return Redirect::to('/admin/users/'.$user->id);
    }

    protected function generatePassword()
    {
        return str_random(10);
    }
}
