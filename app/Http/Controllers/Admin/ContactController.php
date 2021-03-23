<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\HelperTrait;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    const MODEL = Contact::class;

    use HelperTrait;
}
