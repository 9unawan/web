<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = Page::orderBy("created_at", "desc")->paginate(5);
        return view("admin.content.page.index", compact("page"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'favicon'      => 'required|image|mimes:jpeg,jpg,png,gif,svg',
            'web_name'  => 'required',
            'logo'    => 'required|image|mimes:jpeg,jpg,png,gif,svg',
            'map'    => 'required',
            'article_category'    => 'required',
            'latest_article'    => 'required',
            'contact' => 'required',
        ]);
        //upload image
        $image = $request->file("favicon", "logo");
        $image->storeAs('public/page/favicon', $image->hashName());
        // $image = $request->file("logo");
        $image->storeAs('public/page/logo', $image->hashName());


        Page::create([
            'favicon'      =>  $image->hashName(),
            'web_name'  =>  $request->web_name,
            'logo'    =>  $image->hashName(),
            'map'    =>  $request->map,
            'article_category'    =>  $request->article_category,
            'latest_article'    =>  $request->latest_article,
            'contact' =>  $request->contact,
        ]);
        return redirect()->route('page.index')->with('success', 'Data Berhasil Di Simpan');
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
        return view('admin.content.page.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        $this->validate($request, [
            // 'favicon'      => 'required',
            'web_name'  => 'required',
            // 'logo'    => 'required',
            'map'    => 'required',
            'article_category'    => 'required',
            'latest_article'    => 'required',
            'contact' => 'required',
        ]);
        if ($request->hasFile('favicon')) {
            $image = $request->file("favicon");
            $image->storeAs('public/page/', $image->hashName());
            Storage::delete('public/page/', $page->favicon);

            $page->update([
                'favicon'     => $image->hashName(),
                'web_name'     => $request->web_name,
                'logo'     => $image->hashName(),
                'map'     => $request->map,
                'article_category'   => $request->article_category,
                'latest_article'    => $request->latest_article,
                'contact' => $request->contact,
            ]);
        }
        if ($request->hasFile('logo')) {
            $image = $request->file("logoe");
            $image->storeAs('public/page/', $image->hashName());
            Storage::delete('public/page/', $page->logo);

            $page->update([
                'favicon'     => $image->hashName(),
                'web_name'     => $request->web_name,
                'logo'     => $image->hashName(),
                'map'     => $request->map,
                'article_category'   => $request->article_category,
                'latest_article'    => $request->latest_article,
                'contact' => $request->contact,
            ]);
        } else {
            $page->update([
                'web_name'     => $request->web_name,
                'map'     => $request->map,
                'article_category'   => $request->article_category,
                'latest_article'    => $request->latest_article,
                'contact' => $request->conta
            ]);
        }
        return redirect()->route('page.index')->with('success', 'Data Berhasil Di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {

        if ($page->image) {
            Storage::delete('public/page/favicon/' . $page->favicon);
            Storage::delete('public/page/logo/' . $page->logo);
        }
        $page->delete();
        return redirect()->route('page.index')->with(['success', 'Data Berhasil Di Hapus']);
    }
}
