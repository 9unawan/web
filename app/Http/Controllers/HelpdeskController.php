<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use Illuminate\Http\Request;

class HelpdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function helpdesk()
    {
        $dinas = Dinas::all();
        return view("helpdesk.helpdesk", compact("dinas"));
    }
    public function userdash()
    {
        $dinas = Dinas::all();
        return view("helpdesk.dashboard", compact("dinas"));
    }

    public function tiket()
    {
        $dinas = Dinas::all();
        return view("helpdesk.tiket.tiket", compact("dinas"));
    }
    public function tiketku()
    {
        $dinas = Dinas::all();
        return view("helpdesk.tiket.tiketku", compact("dinas"));
    }
    public function lapor()
    {
        // return view("helpdesk.tiket.lapor.lapor");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dinas = Dinas::all();
        return view("helpdesk.tiket.lapor.create", compact('dinas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
