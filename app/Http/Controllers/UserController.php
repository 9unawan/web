<?php

namespace App\Http\Controllers;

use App\Models\Lapor;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $lapor = Lapor::all();
        return view('helpdesk.dashboard', compact('lapor'));
        // echo 'hello word';
    }
}
