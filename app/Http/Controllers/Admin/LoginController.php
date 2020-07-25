<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function do_login(Request $request)
    {

        $data = $request->only('email' , 'password');

        if(Auth::attempt($data)){
            return redirect('admin');
        }else{
            return back()->with('errors' , ['some thing wrong']);
        }
    }
}
