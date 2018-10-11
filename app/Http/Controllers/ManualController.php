<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Manual;
use App\Product;

class ManualController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manuals.index')->with([
            'manuals' => Manual::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manuals.create')->with([
            'products' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Manual::create([
            'year' => $request->year,
            'model' => $request->model,
            'product_id' => $request->product_id,
            'file' => $request->file('_file')->store('files/manuals')
        ]);
        Session::flash('success', 'Manual guardado');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Manual $manual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Manual $manual)
    {
        return view('manuals.edit')->with([
            'manual' => $manual,
            'products' => Product::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manual $manual)
    {
        $manual->update($request->all());

        if($request->has('_file')) $manual->update([
            'file' => $request->file('_file')->store('files/manuals')
        ]);
        
        Session::flash('success', 'Manual actualizado');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manual $manual)
    {
        $manual->delete();
        Session::flash('success', 'Manual eliminado');
        return redirect()->back();
    }
}
