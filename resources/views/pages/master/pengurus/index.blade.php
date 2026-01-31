@extends('layout.layoutAdmin')

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
                                <th class="fs-6" style="width:60px; font-size:12px;">No</th>
                                <th class="fs-6">Nama Lengkap</th>
                                <th class="fs-6">Nama Panggilan</th>
                                <th class="text-center fs-6" style="width:160px;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($pengurus as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_lengkap ?? '-' }}</td>
                                    <td>{{ $item->nama_panggilan ?? '-' }}</td>
                                    <td class="text-end">
                                        <div class="d-inline-flex gap-2">
                                            <a href="{{ route('master.pengurus.edit', $item->id) }}"
                                               class="btn btn-sm btn-warning">
                                                Edit
                                            </a>

                                            <form action="{{ route('master.pengurus.destroy', $item->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    Delete
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
