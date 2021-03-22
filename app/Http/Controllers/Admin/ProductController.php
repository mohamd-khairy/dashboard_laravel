<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const MODEL = Product::class;

    use HelperTrait;
}
