<?php

namespace App\Http\Controllers\System\JenjangPendidikanMadrasah;

use App\Http\Controllers\Controller;
use App\Models\System\JenjangPendidikanMadrasah;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

class JenjangPendidikanMadrasahController extends Controller
{
    public function index()
    {
        return view('pages.master.jenjangPendidikanMadrasah.index');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = JenjangPendidikanMadrasah::query()->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-warning btn-sm" title="Edit" onclick="editData(this)">
                                    <i class="bi bi-pencil-square fs-5"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" title="Hapus" onclick="deleteData(this)">
                                    <i class="bi bi-trash fs-5"></i>
                                </button>
                            </div>';
                })
                ->rawColumns([
                    'action'
                ])
                ->make(true);
        }
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama' => ['required', 'string', 'max:255'],
            ],
            [
                'nama.required' => 'Jenjang pendidikan harus diisi',
                'nama.string' => 'Jenjang pendidikan harus berupa teks',
                'nama.max' => 'Panjang karakter tidak bisa melebihi 255',
            ]
        );

        try {
            \DB::beginTransaction();

            JenjangPendidikanMadrasah::create([
                'nama' => $request->nama,
            ]);

            \DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil ditambahkan',
            ]);
        } catch (\Throwable $th) {
            \DB::rollBack();

            return back()
                ->withInput()
                ->with('error', $th->getMessage());
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate(
            [
                'edit_id' => ['required', 'uuid'],
                'edit_nama' => ['required', 'string', 'max:255'],
            ],
            [
                'edit_id.required' => 'Id tidak ditemukan',
                'edit_id.uuid' => 'Format id tidak valid',
                
                'edit_nama.required' => 'Jenjang pendidikan harus diisi',
                'edit_nama.string' => 'Jenjang pendidikan harus berupa teks',
                'edit_nama.max' => 'Panjang karakter tidak bisa melebihi 255',
            ]
        );

        try {
            \DB::beginTransaction();

            $data = JenjangPendidikanMadrasah::findOrFail($request->edit_id);

            $data->update([
                'nama' => $request->edit_nama,
            ]);

            \DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diperbarui',
            ]);
        } catch (\Throwable $th) {
            \DB::rollBack();

            return back()
                ->withInput()
                ->with('error', $th->getMessage());
        }
    }

    public function destroy(Request $request)
    {
        $validated = $request->validate(
            [
                'id' => ['required', 'uuid'],
            ],
            [
                'id.required' => 'Id tidak ditemukan',
                'id.uuid' => 'Format id tidak valid',
            ]
        );

        $id = $request->input('id');

        if (!$id) {
            return back()
                ->withInput()
                ->with('error', $th->getMessage());
        }

        try {
            \DB::beginTransaction();

            $data = JenjangPendidikanMadrasah::findOrFail($id);
            
            $data->delete();

            \DB::commit();
            
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus',
            ]);
        } catch (\Throwable $th) {
            \DB::rollBack();

            return back()
                ->withInput()
                ->with('error', $th->getMessage());
        }
    }
}
