<?php

namespace App\Http\Controllers;

use App\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=Galerie::all();
        return view('admin.galerie.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galerie.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galerie= new Galerie();
        $file= Storage::disk('public')->put('',$request->image);
        $galerie->image=$file;
        $galerie->save();
        return redirect()->route('galerie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function show(Galerie $galerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Galerie $galerie)
    {
        return view('admin.galerie.edit',compact('galerie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galerie $galerie)
    {
        if($request->hasFile('image')){
            if(Storage::exists($galerie->image)){
                Storage::disk('public')->delete($galerie->image);
            }
            $file=Storage::disk('public')->put('',$request->image);
            $galerie->image=$file;
        }
        $galerie->save();
        return redirect()->route('galerie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galerie $galerie)
    {
        if(Storage::exists($galerie->image)){
            Storage::disk('public')->delete($galerie->image);
        }
        $galerie->delete();
        return redirect()->back();
    }
}
