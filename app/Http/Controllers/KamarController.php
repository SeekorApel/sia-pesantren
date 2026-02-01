<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = collect();

        for ($i = 1; $i <= 100; $i++) {
            $kamar->push((object) [
                'id' => $i,
                'nama_pengurus' => "Pengurus $i",
                'nama_asrama' => "Asrama $i",
                'nama_kamar' => "Kamar $i"
            ]);
        }
        return view('pages.master.kamar.index', compact('kamar'));
        return view("pages.master.kamar.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // data dummy / temporary
        $pengurusList = [
            ['id' => 1, 'nama' => 'Dicky Muzakki'],
            ['id' => 2, 'nama' => 'Ahmad Fikri'],
            ['id' => 3, 'nama' => 'Siti Aisyah'],
        ];

        $asramaList = [
            ['id' => 101, 'nama' => 'Asrama Putra'],
            ['id' => 102, 'nama' => 'Asrama Putri'],
            ['id' => 103, 'nama' => 'Asrama Tahfidz'],
        ];

        return view('pages.master.kamar.create', compact('pengurusList', 'asramaList'));
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
