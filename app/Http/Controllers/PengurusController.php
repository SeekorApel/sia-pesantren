<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengurus = collect();

        for ($i = 1; $i <= 100; $i++) {
            $pengurus->push((object) [
                'id' => $i,
                'nama_lengkap' => "Pengurus $i",
                'nama_panggilan' => "P$i"
            ]);
        }
        return view('pages.master.pengurus.index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.master.pengurus.create');
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
        return view('pages.master.pengurus.edit');
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
