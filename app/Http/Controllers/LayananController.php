<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::orderBy("created_at", "desc")->paginate(5);
        return view("admin.content.layanan.index", compact("layanan"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.content.layanan.create');
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
            'layanan_utama'      => 'required',
            'layanan_tambahan'      => 'required',
            'prosedur_aduan'      => 'required',

        ]);
        Layanan::create([
            'heading' => $request->heading,
            'layanan_utama'      => $request->layanan_utama,
            'layanan_tambahan'      => $request->layanan_tambahan,
            'prosedur_aduan'      => $request->prosedur_aduan,
        ]);
        return redirect()->route('layanan.index')->with('success', 'Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        return view('admin.content.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $this->validate($request, [
            'heading' => 'required',
            'layanan_utama'      => 'required',
            'layanan_tambahan'      => 'required',
            'prosedur_aduan'      => 'required',
        ]);

        $layanan::update([
            'heading' => $request->heading,
            'layanan_utama'      => $request->layanan_utama,
            'layanan_tambahan'      => $request->layanan_tambahan,
            'prosedur_aduan'      => $request->prosedur_aduan,
        ]);
        return redirect()->route('layanan.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanan.index')->with('success', 'Data berhasil di hapus');
    }
}
