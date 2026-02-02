@extends('layout.layoutAdmin')

@section('page-title', 'Master Asrama')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('master.asrama.index') }}">Asrama</a>
    </li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">Edit Data Asrama</h5>
            </div>
            <div class="card-body">
                <form action=""
                        method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label">
                            Nama
                        </label>
                        <input type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                value=""
                                required>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('master.asrama.index') }}"
                            class="btn btn-secondary">
                            Kembali
                        </a>

                        <button type="submit"
                                class="btn btn-primary">
                            Update Data
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection