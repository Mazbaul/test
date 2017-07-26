<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;
class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function welcome()
    {
      $product= Product::all();
        return view('home')->withProduct($product);
    }
}
