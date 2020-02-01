<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $product = Product::when($request->search, function ($q) use ($request) {
            return $q->where('name','like', '%' . $request->search . '%')->
            orWhere('title','like', '%' . $request->search . '%');

        }) ->latest()->paginate(5);

        return view('products')->with('products' , $product);
    }
    public function show($id){
        return view('product')->with('product' , Product::find($id));
      }
      public function about(){
        return view('about');
      }
}
