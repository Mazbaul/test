<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $product= Product::all();
        return view('home')->withProduct($product);
    }
    public function welcome()
    {
      $product= Product::all();
        return view('home')->withProduct($product);
    }
}
