<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    const MODEL = Header::class;

    use HelperTrait;
}
