<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const MODEL = Category::class;

    use HelperTrait;
}
