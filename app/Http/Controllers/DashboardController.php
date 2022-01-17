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

    public function edit_user($user_id)
    {
        $users = User::where('id', $user_id)->first();

        $users->hun_id = $request->hun_id;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request['password']);
        $users->phone_no = $request->phone_no;
        $users->ic_no = $request->ic_no;
        $users->role = $request->role;
        $users->save();

        return redirect('users')->with('updatesuccess','User has been updated successfully.'); 
    }

}
