<?php

namespace App\Http\Controllers;

use App\Models\rfc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RfcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rfc =  rfc::orderBy("created_at", "desc")->paginate(10);
        return view("admin.content.rfc.index", compact("rfc"));
        // dd($rfc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.rfc.create');
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
            "heading"     => "required",
            "file"   => "required",
        ]);

        //upload file
        $file = $request->file("file");
        $file->storeAs('public/rfc/', $file->hashName());

        //create rfc
        rfc::create([
            'heading'     => $request->heading,
            'file'   => $file->hashName(),
        ]);
        return redirect()->route('rfc.index')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function show(rfc $rfc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function edit(rfc $rfc)
    {
        return view('admin.content.rfc.edit', compact('rfc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rfc $rfc)
    {
        $this->validate($request, [
            "heading"     => "required",
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file("file");
            $file->storeAs('public/rfc/', $file->hashName());
            Storage::delete('public/rfc/' . $rfc->file);

            $rfc->update([
                'heading'     => $request->heading,
                'file'     => $file->hashName(),
            ]);
        } else {
            $rfc->update([
                'heading'     => $request->heading,
            ]);
        }
        return redirect()->route('rfc.index')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function destroy(rfc $rfc)
    {
        if ($rfc->file) {
            Storage::delete('public/rfc/' . $rfc->file);
        }
        // Storage::delete('public/rfc' . $rfc->file);
        $rfc->delete();
        return redirect()->route('rfc.index')->with('success', 'Data berhasil di hapus');
    }
}
