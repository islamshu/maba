<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:read-slider'])->only('index');
        $this->middleware(['permission:create-slider'])->only('create');
        $this->middleware(['permission:update-slider'])->only('edit');
        $this->middleware(['permission:delete-slider'])->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.sliders')->with('sliders', Slider::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.addSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'text'=> 'required',
            'image' => 'required'
        ]);
        $request_data = $request->except(['image']);
        $path = $request->image->store('sliders');
        $request_data['image']=$path;
        Slider::create($request_data);
        return redirect('admin/sliders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view ('admin.EditSlider')->with('slider',$slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'text'=> 'required',
            'image' => 'required'
        ]);
        $request_data = $request->except(['image']);
        if($request->image !=null)
        {
            $path = $request->image->store('sliders');
            $slider->image =$path;
        }
        $request_data['image']=$path;
        $slider->update($request_data);
        return redirect('admin/sliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Slider::destroy($id);
        return redirect('/admin/sliders');
    }
}
