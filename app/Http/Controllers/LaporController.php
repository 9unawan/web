<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use App\Models\Lapor;
use Illuminate\Http\Request;

class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $lapor = Lapor::orderBy("created_at", "desc");
    //     return view('helpdesk.tiket.lapor', compact("lapor"));
    // }
    public function index()
    {
        $lapor = Lapor::orderBy("created_at", "desc")->paginate(10);
        $dinas = Dinas::all();
        return view("helpdesk.tiket.tiket", compact("lapor", "dinas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('helpdesk.tiket.lapor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "layanan" => 'required',
            "title"     => "required",
            // "category"   => "required",
            "content"   => "required",
        ]);

        Lapor::create([
            'layanan'     => $request->layanan,
            'title'     => $request->title,
            // 'category'   => $request->category,
            'content'   => $request->content,
        ]);

        return redirect()->route('tiketku')->with('success', 'Data Berhasil Di simpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
