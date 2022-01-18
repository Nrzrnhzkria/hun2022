<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $vendors = User::orderBy('id', 'asc')->where('role', 'vendor')->paginate(15);
        return view('admin.vendors.view', compact('vendors'));
    }

    public function users()
    {
        $users = User::orderBy('id', 'asc')->paginate(15);
        return view('admin.users.view', compact('users'));
    }

    public function create_user()
    {
        return view('admin.users.create');
    }

    public function store_user(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_no' => $request->phone_no,
            'ic_no' => $request->ic_no,
            'role' => $request->role,
        ]);

        return redirect('users')->with('addsuccess','User has been added successfully.');
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

    public function destroy_user($user_id){
        $user = User::where('id', $user_id);
        
        $user->delete();
        return redirect('users')->with('deleteuser','User has been deleted successfully.');
    }

}
