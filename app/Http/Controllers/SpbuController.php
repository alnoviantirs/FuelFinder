<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spbu;

class SpbuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spbus = Spbu::all();
        
        return view ('spbus.index' , [
        'spbus' => $spbus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spbus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spbu = new Spbu;
        $spbu->namaspbu = $request->namaspbu;
        $spbu->alamat = $request->alamat;
        $spbu->jam_operasional = $request->jam_operasional;
        $spbu->jenis_bahan_bakar = $request->jenis_bahan_bakar;
        $spbu->telepon = $request->telepon;
        $spbu->fasilitas = $request->fasilitas;
        $spbu->longitude = $request->longitude;
        $spbu->latitude = $request->latitude;
        $spbu -> save();

        return redirect()->route('spbus.index')
        -> with('success_message', 'Berhasil menambah data baru');

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
        $spbu = Spbu::find($id);
    return view('spbus.edit', compact('spbu'));
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
        $spbu = Spbu::find($id);
        $spbu->namaspbu = $request->namaspbu;
        $spbu->alamat = $request->alamat;
        $spbu->jam_operasional = $request->jam_operasional;
        $spbu->jenis_bahan_bakar = $request->jenis_bahan_bakar;
        $spbu->telepon = $request->telepon;
        $spbu->fasilitas = $request->fasilitas;
        $spbu->longitude = $request->longitude;
        $spbu->latitude = $request->latitude;
        $spbu->save();

        return redirect()->route('spbus.index')->with('success_message', 'SPBU updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    Spbu::find($id)->delete();

    return redirect()->route('spbus.index')->with('success_message', 'Spbu deleted successfully!');
    }
}
