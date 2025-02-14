@extends('layouts.dashboard')

@section('content')
    <div id="pageSection">
        <h6 class="my-4 text-gray-800">
            <a href="#"><i class='bx bx-home me-2'></i></i></a>
            Produk
        </h6>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-4 border-0">
            <div class="card-header d-flex flex-wrap justify-content-between bg-transparent py-3">
                <h5 class="font-weight-bold text-primary my-sm-auto m-0 mb-2">List Of Product</h5>
                <div class="card-tools">
                    <a href="{{ route('export_template_produk') }}" class="btn btn-success my-auto text-light me-2">
                        <i class="bx bx-download"></i> Export Template
                    </a>
                    <button class="btn btn-warning text-light" data-bs-toggle="modal" data-bs-target="#importModal">
                        <i class="bx bx-upload"></i> Import File
                    </button>
                    <a href="{{ route('dashboard_produk_tambah') }}" class="btn btn-primary addbtn my-auto text-light"><i
                            class="bx bx-plus"></i> Tambah</a>
                </div>
            </div>
            <!-- Modal untuk Import File -->
            <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="importModalLabel">Import Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('import_produk') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="file" class="form-label">Pilih File</label>
                                    <input type="file" class="form-control" name="file" id="file"
                                        accept=".csv, .xlsx, .xls" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row-filter mt-4 mb-1 px-3 align-items-center">
                    <div class="label-filter">
                        Filter
                    </div>
                    <div class="form-filter">
                        <select id="category" class="select2 form-control" style="width: 100%"></select>
                    </div>
                    <div class="reset-filter">
                        <a class="btn btn-primary text-light" id="btnreset">Reset</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datalist" class="table table-striped " style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Kategori</th>
                            <th>Sub-Kategori</th>
                            <th>Action</th>
                            <th>Preview</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('extrascript')
    <script>
        $(document).ready(function() {
            const dttb = $('#datalist').DataTable({
                processing: true,
                scrollX: true,
                scrollCollapse: true,
                serverSide: true,
                stateSave: true,
                searchDelay: 500,
                ajax: {
                    url: '{!! route('dashboard_produk_datatable') !!}',
                    type: 'get',
                    data: function(d) {
                        d.category = $('#category').val();
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
                        data: 'is_active',
                        createdCell: function(td, cellData, rowData, row, col) {
                            $(td).addClass('text-center');
                            if (cellData) {
                                $(td).html('<span class="badge bg-success">Aktif</span>');
                            } else {
                                $(td).html('<span class="badge bg-danger">Tidak Aktif</span>');
                            }
                        }
                    },
                    {
                        data: 'category',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'subcategory',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'view',
                        searchable: false,
                        orderable: false
                    },
                ]
            });

            $('body').on('click', '.deletebtn', function(e) {
                e.preventDefault();
                const id = $(this).data('id');
                let url = "{{ route('dashboard_produk_delete', ':id') }}";
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
            setTimeout(function() {
                $(".alert").alert('close');
            }, 2000);

            $('#category').select2({
                placeholder: 'Pilih Kategori',
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
            }).on('select2:select', function(e) {
                try {
                    const data = e.params.data;
                    sessionStorage.setItem('@product_category.id', data.id);
                    sessionStorage.setItem('@product_category.name', data.text);
                } catch (err) {
                    //
                }
                dttb.ajax.reload(null, false);
            });

            let selected_category_id = sessionStorage.getItem('@product_category.id');
            let selected_category_name = sessionStorage.getItem('@product_category.name');

            if (selected_category_id && selected_category_name) {
                $('#category').find('option').remove();
                $('#category').append(new Option(selected_category_name, selected_category_id, true, true));
                $('#category').trigger('select2:select');
            }

            $('#btnreset').on('click', function(e) {
                sessionStorage.setItem('@product_category.id', '');
                sessionStorage.setItem('@product_category.name', '');
                $('#category').find('option').remove();
                dttb.ajax.reload(null, false);
            });
        });
    </script>
@endsection
