@extends('layout.layoutAdmin')

@section('page-title', 'Master Kamar')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('master.kamar.index') }}">Kamar</a>
    </li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">Tambah Data Kamar</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('master.kamar.store') }}" method="POST">
                    @csrf
                      <div class="form-group mb-4">
                          <label class="fs-12 text-muted mb-2">Project Info</label>
                          <select class="form-control" data-select2-selector="status">
                              <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                              <option value="secondary" data-bg="bg-secondary">Pending</option>
                              <option value="success" data-bg="bg-success">Completed</option>
                              <option value="danger" data-bg="bg-danger">Rejected</option>
                              <option value="warning" data-bg="bg-warning">Upcoming</option>
                          </select>
                      </div>
                    <div class="mb-3">
                        <label for="id_pengurus" class="form-label">Nama Pengurus</label>
                        <select class="form-control" data-select2-selector="status"
                                id="id_pengurus"
                                name="id_pengurus"
                                required>
                            <option value="">-- Pilih Pengurus --</option>
                            @foreach ($pengurusList as $pengurus)
                                <option value="{{ $pengurus['id'] }}"
                                    {{ old('id_pengurus') == $pengurus['id'] ? 'selected' : '' }}>
                                    {{ $pengurus['nama'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_asrama" class="form-label">Nama Asrama</label>
                        <select class="form-control select2"
                                id="id_asrama"
                                name="id_asrama"
                                required>
                            <option value="">-- Pilih Asrama --</option>
                            @foreach ($asramaList as $asrama)
                                <option value="{{ $asrama['id'] }}"
                                    {{ old('id_asrama') == $asrama['id'] ? 'selected' : '' }}>
                                    {{ $asrama['nama'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama_kamar" class="form-label">
                            Nama Kamar
                        </label>
                        <input type="text"
                                class="form-control"
                                id="nama_kamar"
                                name="nama_kamar"
                                placeholder="Masukkan nama kamar"
                                required>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('master.kamar.index') }}"
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

@push('scripts')
<script>
    $(document).ready(function () {
        $('.select2').select2({
            placeholder: 'Pilih data...',
            allowClear: true,
            width: '100%'
        });
    });
</script>
@endpush