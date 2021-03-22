<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('shamort.index');
    }

    public function contact()
    {
        return view('shamort.contact');
    }

}
