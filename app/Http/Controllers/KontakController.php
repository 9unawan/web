<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view("admin.content.kontak.index", compact("kontak"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'heading' => 'required',
            'kontak'      => 'required',
            'alamat'    => 'required',
            'map'    => 'required',

        ]);
        Kontak::create([
            'heading' => $request->heading,
            'kontak'      => $request->kontak,
            'alamat'    => $request->alamat,
            'map'    => $request->map,
        ]);
        return redirect()->route('kontak.index')->with('success', 'Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        return view('admin.content.contact.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak)
    {
        $this->validate($request, [
            'heading' => 'required',
            'kontak'      => 'required',
            'alamat'    => 'required',
            'map'    => 'required',
        ]);
        $kontak::update([
            'heading' => $request->heading,
            'kontak'      => $request->kontak,
            'alamat'    => $request->alamat,
            'map'    => $request->map,
        ]);
        return redirect()->route('kontak.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('kontak.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
