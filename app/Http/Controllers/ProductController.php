<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use PDF;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:read-products'])->only('index');
        $this->middleware(['permission:create-products'])->only('create');
        $this->middleware(['permission:update-products'])->only('edit');
        $this->middleware(['permission:delete-products'])->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Products')->with('products',Product::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->imageURL->store('products');
        $product = new Product();
        $product->name = $request->name;
        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->imageURL = $path;
        $product->save();
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.editProduct')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);

        if($request->image !=null)
        {
            $path= $request->images->store('products');
            $product->image =$path;
        }
        $product->name = $request->name;
        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/admin/products');
    }
    public function generatePDF(){

        $pdf = PDF::loadView('PDF.products', ['products'=> Product::get()]);
        return $pdf->download('pdf.pdf');
    }
}
