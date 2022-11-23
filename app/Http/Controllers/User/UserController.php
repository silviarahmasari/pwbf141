<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:15',
            'cpassword' => 'required|same:password',
            'role' => 'required',
        ], [
            'cpassword.required' => 'The confirm password is required',
            'cpassword.same' => 'The confirm password does not match'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $data = $user->save();
        if($data) {
            return redirect()->back()->with('success', 'Registration success');
        } else {
            return redirect()->back()->with('error', 'Registration failed');
        }
    }

    public function doLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:15',
        ]);
        $check = $request->only('email', 'password');
        if(Auth::guard('web')->attempt($check)) {
            if(Auth::guard('web')->user()->role = 'user') {
                return redirect()->route('user');
            } elseif(Auth::guard('web')->user()->role = 'admin') {
                return redirect()->route('admin');
            }
        } else {
            return redirect()->back()->with('error', 'Login failed');
        }
    }

    public function logout() {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
