@extends('layouts.dashboard')

@section('content')
    <div id="pageSection">
        <h6 class="my-4 text-gray-800">
            <a href="#"><i class='bx bx-home me-2'></i></i></a>
            Artikel
        </h6>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-4 border-0">
            <div class="card-header d-flex flex-wrap justify-content-between bg-transparent py-3">
                <h5 class="font-weight-bold text-primary my-sm-auto m-0 mb-2">List Of Article</h5>
                <a href="{{ route('dashboard_artikel_tambah') }}"
                    class="btn btn-primary btn-sm addbtn my-auto text-light"><i class="bx bx-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <table id="datalist" class="table table-striped " style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Dibuat Oleh</th>
                            <th>Terahir Diubah Oleh</th>
                            <th>Action</th>
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
                    url: '{!! route('dashboard_artikel_datatable') !!}',
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
                        data: 'judul'
                    },
                    {
                        data: 'post_date',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'user',
                        orderable: false
                    },
                    {
                        data: 'updater',
                        orderable: false
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
                let url = "{{ route('dashboard_artikel_delete', ':id') }}";
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
        });
    </script>
@endsection
