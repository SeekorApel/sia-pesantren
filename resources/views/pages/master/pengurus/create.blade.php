@extends('layout.layoutAdmin')

@section('page-title', 'Master Pengurus')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('master.pengurus.index') }}">Pengurus</a>
    </li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">Tambah Data Pengurus</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('master.pengurus.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">
                            Nama Lengkap
                        </label>
                        <input type="text"
                                class="form-control"
                                id="nama_lengkap"
                                name="nama_lengkap"
                                placeholder="Masukkan nama lengkap"
                                required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_panggilan" class="form-label">
                            Nama Panggilan
                        </label>
                        <input type="text"
                                class="form-control"
                                id="nama_panggilan"
                                name="nama_panggilan"
                                placeholder="Masukkan nama panggilan"
                                required>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('master.pengurus.index') }}"
                            class="btn btn-secondary">
                            Kembali
                        </a>

                        <button type="submit"
                                class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
