<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(1);
        return view('admin.admin-profile-view', compact('adminData'));
    }
    public function AdminProfileEdit(){
        $editData = Admin::find(1);
        return view('admin.admin-profile-edit', compact('editData'));
    }
    public function AdminProfileStore(Request $request){
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;
        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/admin-images/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin-images'),$filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();
        return redirect()->route('admin.profile');
    }
    public function AdminChangePassword(){
        return view('admin.admin-change-password');
    }
    public function AdminUpdateChangePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashedPassword = Admin::find(1)->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();
            return redirect()->route('admin.logout');
        }else{
            return redirect()->back();
        }
    }
}
