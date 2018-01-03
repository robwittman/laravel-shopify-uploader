<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Redirect;

class SettingsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.settings', array(
            'user' => $user
        ));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
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
        return Redirect::to('/admin/settings');
    }
}
