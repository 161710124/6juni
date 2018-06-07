<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\boking;
use App\mobil;
use App\customer;

class BokingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = boking::all();
        return view('boking.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = boking::all();
        $mobil = mobil::all();
        $custom = customer::all();
        return view('boking.create',compact('book','mobil','custom'));
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
        'tanggal_boking' => 'required',
        'id_customer' => 'required',
        'id_mobil' => 'required'
        ]);
        $book = boking::create($request->all());
        return redirect()->route('bk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = boking::findOrFail($id);
        return view('boking.show',compact('book'));
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
        $book = boking::findOrFail($id);
        $mobil = mobil::all();
        $custom = galeri::all();
        $selectedMobil = boking::findOrFail($id)->id_mobil;
        $selectedCustomer = boking::findOrFail($id)->id_customer;
        return view('boking.edit',compact('book','mobil','custom','selectedMobil','selectedCustomer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = boking::findOrFail($id);
        $book->delete();
        return redirect()->route('bk.index');
    }
}
