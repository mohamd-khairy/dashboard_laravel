<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Error;
use App\Models\Product;
use App\Models\Service;
use App\Models\Sponser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function home()
    {
        $data = [
            'cars' => Car::count(),
            'errors_data' => Error::count(),
            // 'services' => Service::count(),
            // 'category' => Category::count(),
            // 'sponsers' => Sponser::count(),
            // 'contact' => Contact::count()
        ];

        return view('admin.index', compact('data'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function do_login(Request $request)
    {

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect('/');
        } else {
            return back()->with('errors', ['some thing wrong']);
        }
    }

    public function do_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
