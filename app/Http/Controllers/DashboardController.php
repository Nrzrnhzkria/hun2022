<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function news()
    {
        return view('admin.news.view');
    }

    public function seminars()
    {
        return view('admin.seminars.view');
    }

    public function vendors()
    {
        return view('admin.vendors.view');
    }

    public function users()
    {
        $users = User::orderBy('id', 'asc')->paginate(15);
        return view('admin.users.view', compact('users'));
    }

    public function update_user($user_id)
    {
        $user = User::where('id', $user_id)->first();

        return view('admin.users.update', compact('user')); 
    }

    public function edit_user($user_id, Request $request)
    {
        $user = User::where('id', $user_id)->first();

        $user->hun_id = $request->hun_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->phone_no = $request->phone_no;
        $user->ic_no = $request->ic_no;
        $user->role = $request->role;
        $user->save();

        return redirect('users')->with('updatesuccess','User has been updated successfully.'); 
    }

}
