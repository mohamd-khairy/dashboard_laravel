<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    const MODEL = Setting::class;

    use HelperTrait;
}
