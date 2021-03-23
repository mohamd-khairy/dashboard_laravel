<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    const MODEL = Service::class;

    use HelperTrait;
}
