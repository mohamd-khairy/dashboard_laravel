<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Sponser;
use Illuminate\Http\Request;

class SponserController extends Controller
{
    const MODEL = Sponser::class;

    use HelperTrait;
}
