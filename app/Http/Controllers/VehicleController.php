<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vehicle;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vehicles=Vehicle::all();
        
        return view('index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicles = new Vehicle();
        $vehicles->tahun = $request->tahun;
        $vehicles->angkot = $request->angkot;
        $vehicles->bis = $request->bis;
        $vehicles->truk = $request->truk;
        $vehicles->spdmtr = $request->spdmtr;
        $vehicles->save();
        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicles = Vehicle::findOrFail($id);
        return view('edit', compact('vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicles = Vehicle::findOrFail($id);
        $vehicles->tahun = $request->tahun;
        $vehicles->angkot = $request->angkot;
        $vehicles->bis = $request->bis;
        $vehicles->truk = $request->truk;
        $vehicles->spdmtr = $request->spdmtr;
        $vehicles->save();
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicles = Vehicle::findOrFail($id);
        $vehicles->delete();
        return redirect()->route('home.index');
    }
}
