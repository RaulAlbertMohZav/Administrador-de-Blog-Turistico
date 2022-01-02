<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile', ['user' => auth()->user()]);
    }

    public function change_password(Request $request){
        $data = $request->validate([
            'current_password' => 'required|password',
            'new_password' => 'required|min:8|max:80|confirmed',
            'new_password_confirmation' => 'required'
        ]);

        $user = auth()->user();

        $user->password = Hash::make($data["new_password"]);
        $user->save();

        return redirect()->back()->with(['status_change_password' => 'your password has been changed successfully']);
    }
}
