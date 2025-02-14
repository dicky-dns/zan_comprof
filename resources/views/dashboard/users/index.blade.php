@extends('layouts.dashboard')

@section('content')
    <div id="pageSection">
        <!-- Page Heading -->
        <h6 class="my-4 text-gray-800">
            <a href="#"><i class='bx bx-home me-2'></i></i></a>
            Pengguna
        </h6>

        <div class="card mb-4 border-0">
            <div class="card-header d-flex flex-wrap justify-content-between bg-transparent py-3">
                <h5 class="font-weight-bold text-primary my-sm-auto m-0 mb-2">User List</h5>
                <a class="btn btn-primary btn-sm addbtn my-auto text-light"><i class="bx bx-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <table id="datalist" class="table table-striped " style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>E-mail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="detailMessageLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formaction">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="update_id" id="update_id" value="">
                            <div class="form-group row mb-4">
                                <label for="staticName" class="col-sm-3 col-form-label text-end">Nama Pengguna <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" required id="staticName"
                                        value="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="staticEmail" class="col-sm-3 col-form-label text-end">Email <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" required id="staticEmail"
                                        value="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="inputPassword" class="col-sm-3 col-form-label text-end">
                                    Password <span class="text-danger add-only" style="display: none">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                    <span class="text-xs edit-only" style="display: none;" role="alert">Kosongkan jika
                                        tidak ingin mengubah password</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extrascript')
    <script>
        $(document).ready(function() {
            var isUpdate = false;
            const dttb = $('#datalist').DataTable({
                processing: true,
                scrollX: true,
                scrollCollapse: true,
                serverSide: true,
                stateSave: true,
                searchDelay: 500,
                ajax: {
                    url: '{!! route('dashboard_users_datatable') !!}',
                    type: 'get',
                    data: function(d) {
                        d._token = $('meta[name=csrf-token]').attr('content');
                    },
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id',
                        searchable: false
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        searchable: false,
                        orderable: false
                    },
                ]
            });

            $('body').on('click', '.editbtn', function() {
                isUpdate = true;
                const row = dttb.row($(this).closest('tr'));
                const data = row.data();
                const dataid = $(this).data('id');

                $('#modalLabel').html('Ubah Data Pengguna - ' + data.name);
                $('#update_id').val(data.id);
                $('#staticName').val(data.name);
                $('#staticEmail').val(data.email);
                $('#inputPassword').val('').removeAttr('required');
                $('.edit-only').show();
                $('.add-only').hide();
                $('#formModal').modal('show');
            });

            $('body').on('click', '.addbtn', function() {
                isUpdate = false;
                $('#modalLabel').html('Tambah Data Pengguna');
                $('#update_id').val('');
                $('#staticName').val('');
                $('#staticEmail').val('');
                $('#inputPassword').val('').attr('required', true);
                $('.edit-only').hide();
                $('.add-only').show();
                $('#formModal').modal('show');
            });

            $('#formaction').on('submit', function(e) {
                e.preventDefault();
                $('#loading').show();
                const url = isUpdate ? '{!! route('dashboard_users_update') !!}' : '{!! route('dashboard_users_add') !!}';
                $.ajax({
                    type: "POST",
                    url,
                    data: new FormData(this),
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: (r) => {
                        swal('Success!', r, 'success');
                        $('#formModal').modal('hide');
                    },
                    error: (x, h, r) => {
                        swal('Warning!', x.responseText, 'warning');
                    },
                    complete: () => {
                        $('#loading').hide();
                        dttb.ajax.reload();
                    }
                });
            });

            $('body').on('click', '.deletebtn', function(e) {
                e.preventDefault();
                const id = $(this).data('id');
                let url = "{{ route('dashboard_users_delete', ':id') }}";
                url = url.replace(':id', id);

                swal({
                        title: 'Apakah kamu yakin?',
                        text: 'Data yang dihapus tidak bisa dikembalikan!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true
                    })
                    .then((v) => {
                        if (v) {
                            $.ajax({
                                    url: url,
                                    type: 'delete',
                                    dataType: 'json',
                                    data: {
                                        '_token': '{{ csrf_token() }}',
                                    },
                                })
                                .done(function(d) {
                                    swal('Success', d, 'success')
                                    $('#detailMessageModal').modal('hide');
                                    dttb.ajax.reload(null, false);
                                    $('#loading').hide();
                                })
                                .fail(function(x, h, r) {
                                    swal('Warning!', x.responseText, 'warning');
                                })
                                .always(function() {
                                    $('#loading').hide();
                                });
                        }
                    });
            });
        });
    </script>
@endsection
