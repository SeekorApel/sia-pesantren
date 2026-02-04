@extends('layout.layoutAdmin')

@section('page-title', content: 'Master Data')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('tingkatMadrasah.index') }}">Tingkat Kelas Madrasah</a>
    </li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card stretch stretch-full">
            <div class="card-header d-flex">
                <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addModal">
                    + Tambah Data
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table striped-table mb-0" id="datatables">
                        <thead>
                            <tr>
                                <th style="width:60px; font-size:14px">No</th>
                                <th class="d-none" style="font-size:14px">ID</th>
                                <th class="d-none" style="font-size:14px">ID Jenjang Pendidikan</th>
                                <th style="font-size:14px">Jenjang Pendidikan</th>
                                <th style="font-size:14px">Tingkat Kelas</th>
                                <th class="text-center" style="font-size:14px">Aksi</th>
                            </tr>
                        </thead>

                        <tbody></tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="addForm">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="jenjang_pendidikan" class="form-label">Jenjang Pendidikan<span style="color:red">*</span></label>
                        <select type="text" class="form-control" id="jenjang_pendidikan" name="jenjang_pendidikan" required>
                            <option value=""></option>
                            @foreach($jenjangs as $id => $nama)
                                <option value="{{ $id }}">{{ $nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Tingkat Kelas<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan tingkat kelas" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" form="addForm" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="editForm">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 d-none">
                        <label for="edit_id" class="form-label">ID<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="edit_id" name="edit_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_jenjang_pendidikan" class="form-label">Jenjang Pendidikan<span style="color:red">*</span></label>
                        <select type="text" class="form-control" id="edit_jenjang_pendidikan" name="edit_jenjang_pendidikan" required>
                            @foreach($jenjangs as $id => $nama)
                                <option value="{{ $id }}">{{ $nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tingkat Kelas<span style="color:red">*</span></label>
                        <input type="text" class="form-control" id="edit_nama" name="edit_nama" placeholder="Masukkan tingkat kelas" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" form="editForm" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('#addModal').on('shown.bs.modal', function () {
        $('#jenjang_pendidikan').select2({
            placeholder: 'Pilih...',
            dropdownParent: $('#addModal'),
            width: '100%' 
        });
    });
    
    $('#editModal').on('shown.bs.modal', function () {
        $('#edit_jenjang_pendidikan').select2({
            placeholder: 'Pilih...',
            dropdownParent: $('#editModal'),
            width: '100%' 
        });
    });

    function toggleSubmitButton(button, isLoading) {
        const spinner = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>';
        const originalText = button.data('original-text') || button.text();

        if (isLoading) {
            button.prop('disabled', true);
            button.data('original-text', originalText);
            button.html(spinner + 'Memuat...');
        } else {
            button.prop('disabled', false);
            button.html(originalText);
        }
    }

    const _URL = "{{ route('tingkatMadrasah.getData') }}";

    $(document).ready(function () {
        $('.page-loading').fadeIn();
        setTimeout(function () {
            $('.page-loading').fadeOut();
        }, 1000);

        let DT = $("#datatables").DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            responsive: true,
            ajax: {
                url: _URL,
            },
            columns: [
                { data: "DT_RowIndex" },
                { data: "id", visible: false, searchable: false },
                { data: "id_jenjang_pendidikan", visible: false, searchable: false },
                { data: "jenjang_pendidikan" },
                { data: "nama" },
                { data: "action", orderable: false, searchable: false }
            ],
            columnDefs: [
                { targets: 0, width: "60px", render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1 },
            ],
        });

        $('#search_dt').on('keyup', function () {
            DT.search(this.value).draw();
        });

        $('#addForm').on('submit', function(e) {
            e.preventDefault();

            const submitButton = $(this).find('button[type="submit"]');
            toggleSubmitButton(submitButton, true);

            $.ajax({
                url: "{{ route('tingkatMadrasah.store') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        title: 'Berhasil',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        $("#datatables").DataTable().ajax.reload(null, false);
                        $('#addModal').modal('hide');
                        toggleSubmitButton(submitButton, false);
                    });
                },
                error: function(xhr) {
                    Swal.fire("Error!", xhr.responseJSON.message, "error");
                    toggleSubmitButton(submitButton, false);
                }
            });
        });

        $('#editForm').on('submit', function(e) {
            e.preventDefault();

            const submitButton = $(this).find('button[type="submit"]');
            toggleSubmitButton(submitButton, true);

            $.ajax({
                url: "{{ route('tingkatMadrasah.update') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        title: 'Berhasil',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        $("#datatables").DataTable().ajax.reload(null, false);
                        $('#editModal').modal('hide');
                        toggleSubmitButton(submitButton, false);
                    });
                },
                error: function(xhr) {
                    Swal.fire("Error!", xhr.responseJSON.message, "error");
                    toggleSubmitButton(submitButton, false);
                }
            });
        });
    });

    function editData(button) {
        var row = $(button).closest('tr');
        var data = $('#datatables').DataTable().row(row).data();

        $('#edit_id').val(data.id);
        $('#edit_jenjang_pendidikan').val(data.id_jenjang_pendidikan);
        $('#edit_nama').val(data.nama);
        
        $('#editModal').modal('show');
    }

    function deleteData(button) {
        Swal.fire({
            title: "Hapus data?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Hapus data",
            cancelButtonText: "Batal",
        }).then(function (result) {
            var row = $(button).closest('tr');
            var data = $('#datatables').DataTable().row(row).data();
            if (result.value) {
                $.ajax({
                    url: "{{ route('tingkatMadrasah.destroy') }}",
                    type: "POST",
                    data: {
                        id: data.id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        Swal.fire({
                            title: 'Berhasil',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(function() {
                            $("#datatables").DataTable().ajax.reload(null, false);
                        });
                    },
                    error: function (xhr) {
                        Swal.fire("Error!", xhr.responseJSON.message, "error");
                    },
                });
            } else if (result.dismiss === "cancel") {
                Swal.fire("Dibatalkan", "Data tidak dihapus", "error");
            }
        });
    }
</script>
@endpush
