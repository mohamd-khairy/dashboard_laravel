<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Error;
use App\Models\Sponser;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    const MODEL = Error::class;

    use HelperTrait;
}
