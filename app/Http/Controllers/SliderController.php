<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider=Slider::all();

        return view('admin.slider.create',compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,[
            'url'      =>'required',
            'image'     =>'required|mimes:png,jpg,jpeg',
        ]);

            $image=$request->file('image');
            $image->storeAs('public/slider', $image->hashName());

        Slider::create([
            'url'=>$request->url,
            'image'=>$image->hashName()
        ]);


       return redirect()->route ('slider.index')->with([
        Alert::success('Succes','Berhasil diupdate')
    ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider =Slider::findOrFail($id);

        return view('admin.slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider= Slider::findOrFail($id);

        return view('admin.slider.edit', compact(
            'slider'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'url'=>'unique:sliders,url,' .$slider->id
        ]);

        $slider = Santri::findOrFail($slider->id);
        $slider->update([
            'image' => $request->image,
            'url' => $request->url,

        ]);

        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider =Slider::findOrFail($id);

        $slider->delete();
        return redirect()->route('slider.index');
    }
}
