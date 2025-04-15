<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        $validated=request()->validate([
            'name'=>'required|min:4',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:4',
            'psw-repeat'=>'required|same:password',
            ]);
            User::create($validated);

            return redirect()->intended('/login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect('/index');
    }
    
    return back()->with('error', 'Invalid credentials');
}
}
