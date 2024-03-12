<?php

namespace App\Http\Controllers;

use App\Models\Lapor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke()
    {
        $lapor = Lapor::all();
        return view('admin.dashboard', compact('lapor'));
    }
}
