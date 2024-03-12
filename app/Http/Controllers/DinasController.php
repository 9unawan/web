<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use Illuminate\Http\Request;

class DinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dinas = Dinas::orderBy("created_at", "desc")->paginate(10);
        return view("admin.helpdesk.dinas.index", compact("dinas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.helpdesk.dinas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "image"     => "required|image|mimes:jpeg,jpg,png,gif,svg|max:2048",
            "title"     => "required",
            "sub_title"     => "required",
            "content"   => "required",
        ]);

        //upload image
        $image = $request->file("image");
        $image->storeAs('public/dinas/', $image->hashName());


        Dinas::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'sub_title' => $request->sub_title,
            'content'   => $request->content,

        ]);
        return redirect()->route('dinas.index')->with('success', 'Data Berhasil Di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $dinas= Dinas::find($id);
        return view('dinas.show', [
            'dinas' => Dinas::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
