<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PanduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panduan = Panduan::all();
        return view("admin.content.panduan.index", compact("panduan"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.panduan.create');
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
            "file"     => "required",
            "name" => "required",
            "size"     => "required",
        ]);

        //upload image
        $file = $request->file("file");
        $file->storeAs('public/panduan/', $file->hashName());

        //create berita
        Panduan::create([
            'file'     => $file->hashName(),
            'name' => $request->name,
            'size'     => $request->size,
        ]);

        return redirect()->route('panduan.index')->with('success', 'Data Berhasil Di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function show(Panduan $panduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Panduan $panduan)
    {
        return view('admin.content.panduan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panduan $panduan)
    {
        $this->validate($request, [
            'file'      => 'required',
            'size'    => 'required',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file("file");
            $file->storeAs('public/panduan/', $file->hashName());
            Storage::delete('public/panduan/' . $panduan->file);

            $panduan->update([
                'file'     => $file->hashName(),
                'size'     => $request->size,
            ]);
        } else {
            $panduan->update([
                'size'     => $request->size,
            ]);
        }
        return redirect()->route('panduan.index')->with('success', 'Data Berhasil Di simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panduan $panduan)
    {
        Storage::delete('public/panduan/' . $panduan->file);
        $panduan->delete();
        return redirect()->route('panduan.index')->with('success', 'Data berhasil di hapus');
    }
}
