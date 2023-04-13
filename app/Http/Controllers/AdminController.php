<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        
        return view('admin.dashboard');

    }
    public function index()
    {
        
        return view('admin.login');

    }
     public function login(request $request)
    {
        
       if(\Auth::attempt($request->only('email','password'))){
        return redirect("/adminDash");
    }else{
        return redirect("/login")->withError('login details are not matched');
    }

    }
    public function logout()
    {
        
        \Session::flush();
        \Auth::logout();
        return redirect("/login");
    }
    public function profile()
    {
        $userId = Auth::id();
        $data = User::where('id',$userId)->first();
        
        return view("admin.profile",['user' => $data]);
    }
    public function save_profile(Request $request)
    {
        $request->validate([
            'name' => 'required|min:10',
            'email' => 'required',
           
            'password' => 'same:c_password'
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->save();

        return redirect()->route('profile')
                  ->with('success', 'updated successfully');
    }
}
