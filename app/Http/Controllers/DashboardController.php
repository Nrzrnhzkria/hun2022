<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coupon;
use App\Models\VendorDetails;
use App\Models\Membership;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $totalcoupon = Coupon::all()->count();
        $totalvendor = User::where('role','Vendor')->count();

        $user = User::where('role', 'User')->count();
        $member = User::Where('role', 'Member')->count();
        $totaluser = $user + $member; // User from mobile apps

        $nonmember = User::where('role', 'User')->count();
        $member = User::where('role', 'Member')->count();

        return view('admin.dashboard', compact('totalcoupon', 'totalvendor', 'totaluser', 'member', 'nonmember'));
    }

    public function vendors()
    {
        $vendors = User::orderBy('id', 'desc')->where('role', 'vendor')->paginate(15);
        return view('admin.vendors.view', compact('vendors'));
    }

    public function update_vendor($vendor_id)
    {
        $vendor = User::where('id', $vendor_id)->first();

        return view('admin.vendors.update', compact('vendor'));
    }

    public function edit_vendor($vendor_id, Request $request)
    {
        $vendor = User::where('id', $vendor_id)->first();

        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->password = Hash::make($request['password']);
        $vendor->phone_no = $request->phone_no;
        $vendor->ic_no = $request->ic_no;
        $vendor->role = $request->role;
        $vendor->save();

        return redirect('vendors')->with('updatevendor','Vendor has been updated successfully.'); 
    }

    public function destroy_vendor($vendor_id){
        $vendor = User::where('id', $vendor_id);
        $vendordetails = VendorDetails::where('user_id', $vendor_id);
        $coupon = Coupon::where('vendor_id', $vendor_id);
        $member = Membership::where('payer_id', $vendor_id);
        
        $vendor->delete();
        $vendordetails->delete();
        $coupon->delete();
        $member->delete();

        return redirect('vendors')->with('deletevendor','Vendor has been deleted successfully.');
    }

    public function admins()
    {
        $admins = User::orderBy('id', 'desc')->where('role', 'superadmin')->orWhere('role', 'admin')->orWhere('role', 'advisor')->paginate(10);
        // $totaladmin = User::where('role', 'superadmin')->where('role', 'admin')->where('role', 'advisor')->count();

        return view('admin.admins.view', compact('admins'));
    }
    
    public function create_admin()
    {
        return view('admin.users.create');
    }

    public function store_admin(Request $request)
    {
        User::create([
            'hun_id' => NULL,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_no' => $request->phone_no,
            'ic_no' => $request->ic_no,
            'role' => $request->role,
        ]);

        return redirect('admins')->with('addsuccess','User has been added successfully.');
    }

    public function update_admin($user_id)
    {
        $user = User::where('id', $user_id)->first();

        return view('admin.admins.update', compact('user')); 
    }

    public function edit_admin($user_id, Request $request)
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

    public function destroy_admin($user_id){
        $user = User::where('id', $user_id);
        
        $user->delete();
        return redirect('users')->with('deleteuser','User has been deleted successfully.');
    }

    public function users()
    {
        $users = User::orderBy('id', 'desc')->where('role', 'User')->orwhere('role', 'Member')->paginate(10);
        $totaluser = User::where('role', 'User')->count();
        $member = User::where('role', 'Member')->count();
        $nonmember = User::where('role', 'User')->count();

        return view('admin.users.view', compact('users', 'member','nonmember'));
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
