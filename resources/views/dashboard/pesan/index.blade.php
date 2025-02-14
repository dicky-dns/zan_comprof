@extends('layouts.dashboard')

@section('content')
    <div id="pageSection">
        <!-- Page Heading -->
        <h6 class="my-4 text-gray-800">
            <a href="#"><i class='bx bx-home me-2'></i></i></a>
            Pesan
        </h6>

        <div class="card mb-4 border-0">
            <div class="card-header d-flex flex-wrap bg-transparent py-3">
                <h5 class="font-weight-bold text-primary my-sm-auto m-0 mb-2">Contact Message</h5>
            </div>
            <div class="card-body">
                <table id="datalist" class="table table-bordered " style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>E-mail</th>
                            <th>Pesan</th>
                            <th>Dikirim</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div class="modal fade" id="detailMessageModal" tabindex="-1" aria-labelledby="detailMessageLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="detailMessageLabel">Detail Pesan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="fw-semibold text-sm" for="">Nama Pengirim</label>
                        <p id="mnama"></p>
                        <label class="fw-semibold text-sm" for="">Email Pengirim</label>
                        <p id="memail"></p>
                        <label class="fw-semibold text-sm" for="">Pesan</label>
                        <p id="mpesan"></p>
                        <label class="fw-semibold text-sm" for="">Tanggal</label>
                        <p id="mtanggal"></p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" id="btnDelete" type="button">Hapus</button>

                        <button class="btn btn-primary" type="button" id="btnRead"></button>

                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extrascript')
    <script>
        $(document).ready(function() {
            var pesan_id = '';
            const dttb = $('#datalist').DataTable({
                processing: true,
                scrollX: true,
                scrollCollapse: true,
                serverSide: true,
                stateSave: true,
                searchDelay: 500,
                ajax: {
                    url: '{!! route('dashboard_pesan_datatable') !!}',
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
                        data: 'message',
                        orderable: false
                    },
                    {
                        data: 'dikirim',
                        orderable: false
                    },
                    {
                        data: 'action',
                        searchable: false,
                        orderable: false
                    },
                ],
                createdRow: function(row, data, dataIndex) {
                    if (data.read_at == null) {
                        $(row).addClass('table-active');
                    }
                },
                language: {
                    processing: '<div class="loading" style="z-index: 1060">Loading&#8230;</div>'
                },
            });

            $('body').on('click', '.viewbtn', function() {
                const row = dttb.row($(this).closest('tr'));
                const data = row.data();
                const dataid = $(this).data('id');

                pesan_id = dataid;
                if (data.read_at == null) {
                    $('#btnRead').html('Tandai Telah Dibaca').removeClass('btn-outline-primary').addClass(
                        'btn-primary');
                } else {
                    $('#btnRead').html('Tandai Belum Dibaca').removeClass('btn-primary').addClass(
                        'btn-outline-primary');;
                }
                $('#mnama').html(data.name);
                $('#memail').html(data.email);
                $('#mpesan').html(data.message);
                $('#mtanggal').html(data.tanggal);
                $('#detailMessageModal').modal('show');
            });

            $('body').on('click', '#btnDelete', function(e) {
                e.preventDefault();

                let url = "{{ route('dashboard_pesan_delete', ':id') }}";
                url = url.replace(':id', pesan_id);
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
                                        'id': pesan_id,
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

            $('body').on('click', '#btnRead', function(e) {
                e.preventDefault();
                // const id = $(this).data('id');
                let url = "{{ route('dashboard_pesan_update', ':id') }}";
                url = url.replace(':id', pesan_id);

                $.ajax({
                        url: url,
                        type: 'post',
                        dataType: 'json',
                        data: {
                            'id': pesan_id,
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
            });
        });
    </script>
@endsection
