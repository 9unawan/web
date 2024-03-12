<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy("created_at", "desc")->paginate(10);
        // $category = Category::all();
        return view("admin.content.artikel.index", compact("artikel"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.artikel.create');
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
            "image"     => "required|image|mimes:jpeg,jpg,png,gif,svg|max:2048",
            "title"     => "required|min:5",
            "content"   => "required|min:15",
            // "category"   => "required|min:15",
        ]);

        //upload image
        $image = $request->file("image");
        $image->storeAs('public/artikel/', $image->hashName());

        //create berita
        Artikel::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content,
            // 'category'   => $request->category,
        ]);

        return redirect()->route('artikel.index')->with('success', 'Data Berhasil Di simpan');
    }

    /**
     * Display the specified resource.  
     *
     * @param  \App\Models\ArtikelController  $artikelController
     * @return \Illuminate\Http\Response
     */
    public function show(string $id): View
    {
        $artikel = Artikel::findOrFail($id);
        return view("website.content.artikel_show", compact("artikel"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtikelController  $artikelController
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.content.artikel.edit', data: compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArtikelController  $artikelController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        // validasi form
        $this->validate($request, [
            // 'image'     => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'title'      => 'required|min:5',
            'content'    => 'required|min:10',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file("image");
            $image->storeAs('public/artikel/', $image->hashName());
            Storage::delete('public/artikel/' . $artikel->image);

            $artikel->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content,
            ]);
        } else {
            $artikel->update([
                'title'     => $request->title,
                'content'   => $request->content,
            ]);
        }

        return redirect()->route('artikel.index')->with(['success', 'Data Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtikelController  $artikelController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        if ($artikel->image) {
            Storage::delete('public/artikel/' . $artikel->image);
        }
        $artikel->delete();
        return redirect()->route('artikel.index')->with(['success', 'Data Berhasil Di Hapus']);
    }
}
