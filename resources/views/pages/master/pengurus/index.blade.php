@extends('layout.layoutAdmin')


@section('page-title', 'Master Pengurus')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('master.pengurus.index') }}">Pengurus</a>
    </li>
    <li class="breadcrumb-item active">View</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card stretch stretch-full">
            <div class="card-body">
                <button type="button"
                    class="btn btn-primary ms-3"
                    onclick="window.location.href='{{ route('master.pengurus.create') }}'">
                        + Tambah Data
                </button>
                <div class="table-responsive">
                    <table class="table striped-table mb-0" id="pengurusTable">
                        <thead>
                            <tr>
                                <th style="width:60px; font-size:14px;">No</th>
                                <th style="font-size:14px;">Nama Lengkap</th>
                                <th style="font-size:14px;">Nama Panggilan</th>
                                <th class="text-center" style="width:160px; font-size:14px">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($pengurus as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_lengkap ?? '-' }}</td>
                                    <td>{{ $item->nama_panggilan ?? '-' }}</td>
                                    <td class="text-center align-middle">
                                        <div class="d-inline-flex gap-2">
                                            <a href="{{ route('master.pengurus.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning"
                                            title="Edit">
                                                <i class="bi bi-pencil-square fs-6"></i>
                                            </a>

                                            <form action="{{ route('master.pengurus.destroy', $item->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin hapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-sm btn-danger"
                                                        title="Delete">
                                                    <i class="bi bi-trash fs-6"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">
                                        Belum ada data pengurus
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#pengurusTable').DataTable({
            pageLength: 10,
            lengthMenu: [10, 20, 50, 100, 200, 500],
            columnDefs: [
                { orderable: false, targets: 3 } // kolom aksi jangan ikut sorting
            ]
        });
    });
</script>
@endpush
