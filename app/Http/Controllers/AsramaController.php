<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asrama = collect();

        for ($i = 1; $i <= 100; $i++) {
            $asrama->push((object) [
                'id' => $i,
                'nama' => "Nama $i",
            ]);
        }
        return view('pages.master.asrama.index', compact('asrama'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.master.asrama.create');
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
        return view('pages.master.asrama.edit');
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
