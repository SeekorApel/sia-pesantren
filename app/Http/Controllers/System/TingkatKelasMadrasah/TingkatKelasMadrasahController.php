<?php

namespace App\Http\Controllers\System\TingkatKelasMadrasah;

use App\Http\Controllers\Controller;
use App\Models\System\JenjangPendidikanMadrasah;
use App\Models\System\TingkatKelasMadrasah;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

class TingkatKelasMadrasahController extends Controller
{
    public function index()
    {
        $jenjangs = JenjangPendidikanMadrasah::pluck('nama', 'id');
        
        return view('pages.master.tingkatMadrasah.index', compact('jenjangs'));
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = TingkatKelasMadrasah::query()->with('jenjangPendidikanMadrasah:id,nama')->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('id_jenjang_pendidikan', fn ($row) => $row->jenjangPendidikanMadrasah->id ?? 'NA')
                ->addColumn('jenjang_pendidikan', fn ($row) => $row->jenjangPendidikanMadrasah->nama ?? 'NA')
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
        try {
            \DB::beginTransaction();

            TingkatKelasMadrasah::create([
                'id_jenjang_pendidikan' => $request->jenjang_pendidikan,
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
        try {
            \DB::beginTransaction();

            $data = TingkatKelasMadrasah::findOrFail($request->edit_id);

            $data->update([
                'id_jenjang_pendidikan' => $request->edit_jenjang_pendidikan,
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
        $id = $request->input('id');

        if (!$id) {
            return back()
                ->withInput()
                ->with('error', $th->getMessage());
        }

        try {
            \DB::beginTransaction();

            $data = TingkatKelasMadrasah::findOrFail($id);
            
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
