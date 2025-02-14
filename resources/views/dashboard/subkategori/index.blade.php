@extends('layouts.dashboard')

@section('content')
    <div id="pageSection">
        <h6 class="my-4 text-gray-800">
            <a href="#"><i class='bx bx-home me-2'></i></i></a>
            Sub-Kategori
        </h6>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-4 border-0">
            <div class="card-header d-flex flex-wrap justify-content-between bg-transparent py-3">
                <h5 class="font-weight-bold text-primary my-sm-auto m-0 mb-2">List Of Sub-Category</h5>
                <a href="#" class="btn btn-primary btn-sm addbtn my-auto text-light"><i class="bx bx-plus"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                <table id="datalist" class="table table-striped " style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal"aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="formdata" enctype="multipart/form-data">
                <div class="modal-content">
                    @csrf
                    <input type="hidden" id="update_id" name="update_id" />
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="labelModal"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label text-end">Pilih Kategory<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select name="category" id="category" required class="form-control"
                                    style="width: 100%"></select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label text-end">Nama Sub-Kategori<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="255" required name="name" id="m_name"
                                    class="form-control" id="title" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="description" class="col-sm-3 col-form-label text-end">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="description" id="m_description" class="form-control" rows="4" placeholder="Masukkan deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="m_image" class="col-sm-3 col-form-label text-end">Upload Gambar</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="m_image" class="form-control" accept="image/*" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" type="button">Simpan</button>
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('extrascript')
    <script>
        $(document).ready(function() {
            var isupdate = 1;
            const dttb = $('#datalist').DataTable({
                processing: true,
                scrollX: true,
                scrollCollapse: true,
                serverSide: true,
                stateSave: true,
                searchDelay: 500,
                ajax: {
                    url: '{!! route('dashboard_subkategori_datatable') !!}',
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
                        data: 'category',
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

            $('body').on('click', '.deletebtn', function(e) {
                e.preventDefault();
                const id = $(this).data('id');
                let url = "{{ route('dashboard_subkategori_delete', ':id') }}";
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

            $('.addbtn').on('click', function(e) {
                isupdate = 0;
                $('#update_id').val('');
                $('#category').find('option').remove();
                $('#m_name').val('');
                $('#m_description').val('');
                $('#labelModal').text('Tambah Sub-Category');
                $('#formModal').modal('show');
            });

            $('body').on('click', '.editbtn', function(e) {
                isupdate = 1;
                const row = dttb.row($(this).closest('tr'));
                const data = row.data();
                $('#update_id').val(data.id);
                $('#category').append(new Option(data.category, data.category_id, true, true));
                $('#m_name').val(data.name);
                $('#m_description').val(data.description);
                $('#labelModal').text('Edit Sub-Category');
                $('#formModal').modal('show');
            });

            $('#formdata').on('submit', function(e) {
                e.preventDefault();
                var url = '';
                if (isupdate == 1) {
                    url = "{{ route('dashboard_subkategori_update') }}";
                } else {
                    url = "{{ route('dashboard_subkategori_add') }}";
                }

                $.ajax({
                        url: url,
                        type: 'post',
                        dataType: 'json',
                        data: new FormData(this),
                        contentType: false,
                        processData: false
                    })
                    .done(function(d) {
                        swal('Success', d, 'success')
                        $('#formModal').modal('hide');
                        dttb.ajax.reload(null, false);
                        $('#loading').hide();
                    })
                    .fail(function(x, h, r) {
                        swal('Warning!', x.responseText, 'warning');
                    })
                    .always(function() {
                        $('#loading').hide();
                    });
            });

            $('#category').select2({
                placeholder: 'Pilih Kategori',
                dropdownParent: $('#formModal .modal-content'),
                ajax: {
                    url: `{!! route('dashboard_subkategori_selectcategory') !!}`,
                    dataType: 'json',
                    delay: 500,
                    type: 'get',
                    data: function(params) {
                        var query = {
                            q: params.term,
                            page: params.page || 1
                        }
                        return query;
                    },
                    processResults: function(data, params) {
                        return {
                            results: $.map(data.data, function(item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            }),
                            pagination: {
                                more: data.to < data.total
                            }
                        };
                    },
                    cache: true
                }
            });
        });
    </script>
@endsection
