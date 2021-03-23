<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    const MODEL = About::class;

    use HelperTrait;
}
