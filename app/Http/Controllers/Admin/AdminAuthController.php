<?php

namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            "email"=>["required","email"],
            "password"=>["required"],
        ]);

        $check=$request->all();

        $data=[
            "email"=>$check["email"],
            "password"=>$check["password"]
        ];

        if(Auth::guard('admin')->attempt($data)){
            return redirect()->route('admin_dashboard')->with("success","Login is successful");
        }else{
            return redirect()->route('admin_login')->with("error","The information you entered is incorrect! Please try again!");
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success', 'Logout is successful!');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function forget_password()
    {
        return view('admin.forget-password');
    }

    public function reset_password()
    {
        return view('admin.reset-password');
    }
}
