<?php

namespace App\Http\Controllers;

use App\Product;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::take(10)->inRandomOrder()->get();
        $fproducts = Product::where('featured', true)->take(10)->inRandomOrder()->get();

        return view('landing-page')->with(
            [
                'products' => $products,
                'fproducts' => $fproducts,
            ]
        );
    }
}
