<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Sponser;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $data = [
            'header'   => Header::first() ?? null,
            'sponser'  => Sponser::inRandomOrder()->take(6)->get() ?? null,
            'about'    => About::inRandomOrder()->take(2)->get() ?? null,
            'service'  => Service::inRandomOrder()->take(4)->get() ?? null,
            'category' => Category::take(10)->get() ?? null,
            'product'  => Product::inRandomOrder()->take(12)->get() ?? null,
        ];
        return view('shamort.index', compact('data'));
    }

    public function services(Request $request)
    {
        return view('shamort.services')->with('services', Service::paginate(30));
    }

    public function products(Request $request)
    {
        return view('shamort.products')->with('products', Product::paginate(30));
    }

    public function about()
    {
        return view('shamort.about')->with('abouts', About::all());
    }

    public function contact()
    {
        return view('shamort.contact');
    }

    public function do_contact(Request $request)
    {
        $request->validate(Contact::rules_create);
        Contact::create($request->all());
        return  'OK';
    }

    public function product_details($id)
    {
        return view('shamort.product_details')->with('product', Product::find($id))
            ->with('products', Product::where('id', '!=', $id)->inRandomOrder()->take(4)->get());
    }

    public function service_details($id)
    {
        return view('shamort.service_details')->with('service', Service::find($id))
            ->with('services', Service::where('id', '!=', $id)->inRandomOrder()->take(4)->get());
    }
}
