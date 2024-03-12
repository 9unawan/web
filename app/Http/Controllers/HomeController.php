<?php

namespace App\Http\Controllers;

use App\Models\rfc;
use App\Models\Kontak;
use App\Models\Artikel;
use App\Models\Beranda;
use App\Models\Layanan;
use App\Models\Page;
use App\Models\Panduan;
use App\Models\profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        $home = Beranda::all();
        $artikel = Artikel::all();
        $page = Page::all();
        $kontak = Kontak::all();
        return view("website.content.home", compact("home", 'artikel', 'page', 'kontak'));
    }

    public function profile()
    {
        $profile = Profile::all();
        $page = Page::all();
        $kontak = Kontak::all();
        return view("website.content.profile", compact('profile', 'page', 'kontak'));
    }

    public function artikel()
    {
        $artikel = Artikel::all();
        $page = Page::all();
        $kontak = Kontak::all();
        return view("website.content.artikel", compact('artikel', 'page', 'kontak'));
    }

    public function rfc()
    {
        $rfc = rfc::all();
        $page = Page::all();
        $kontak = Kontak::all();
        return view("website.content.rfc", compact('rfc', 'page', 'kontak'));
    }

    public function layanan()
    {
        $layanan = Layanan::all();
        $page = Page::all();
        $kontak = Kontak::all();
        return view("website.content.layanan", compact('layanan', 'page', 'kontak'));
    }

    public function panduan()
    {
        $panduan = Panduan::all();
        $page = Page::all();
        $kontak = Kontak::all();
        return view("website.content.panduan", compact('panduan', 'page', 'kontak'));
    }

    public function kontak()
    {
        $kontak = Kontak::all();
        $page = Page::all();
        $kontak = Kontak::all();
        return view("website.content.kontak", compact('kontak', 'page', 'kontak'));
    }
}
