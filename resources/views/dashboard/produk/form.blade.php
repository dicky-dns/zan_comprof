@extends('layouts.dashboard')

@section('header')
    <link href="{{ asset('assets/backend/css/filepond.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/filepond-plugin-image-preview.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <h6 class="my-4 text-gray-800">
        <a href="#"><i class='bx bx-home me-2'></i></i></a>
        <a href="{{ route('dashboard_produk') }}">Produk</a> /
        {{ isset($data) ? "Edit / $data->title" : 'Buat Baru' }}
    </h6>
    @if (session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header py-3">
            <h5 class="font-weight-bold text-primary m-0">{{ isset($data) ? 'Edit' : 'Tambah' }} Produk</h5>
        </div>
        <div class="card-body">
            <form action="{{ isset($data) ? route('dashboard_produk_update') : route('dashboard_produk_add') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($data))
                    <input type="hidden" name="update_id" value="{{ $data->id }}" />
                @endif
                <div class="form-group row mb-4">
                    <label for="staticName" class="col-sm-2 col-form-label text-end">Nama Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" required name="name" class="form-control" id="staticName"
                            value="{{ isset($data) ? $data?->name : old('name') }}">
                        @error('name')
                            <span class="text-danger text-xs" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="category" class="col-sm-2 col-form-label text-end">Kategori Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select class="form-select" required id="category" name="category_id"></select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="subcategory" class="col-sm-2 col-form-label text-end">Sub-Kategori Produk </label>
                    <div class="col-sm-10">
                        <select class="form-select" id="subcategory" name="subcategory_id"></select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="staticDesc" class="col-sm-2 col-form-label text-end">Spesifikasi <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="specification" required id="editorProductSpec">
                            {!! isset($data) ? $data->specification : old('specification') !!}
                        </textarea>
                    </div>
                </div>

                {{-- <div class="form-group row mb-4">
                    <label for="staticDesc" class="col-sm-2 col-form-label text-end">Deskripsi Produk <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="description" required id="editorProductDesc">
                            {!! isset($data) ? $data->description : old('description') !!}
                        </textarea>
                    </div>
                </div> --}}

                <div class="form-group row mb-4">
                    <label for="staticDesc" class="col-sm-2 col-form-label text-end">Bahan-bahan</label>
                    <div class="col-sm-10">
                        <textarea name="ingredients" id="editorProductIngredients">
                            {!! isset($data) ? $data->ingredients : old('ingredients') !!}
                        </textarea>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="benefits" class="col-sm-2 col-form-label text-end">Manfaat</label>
                    <div class="col-sm-10">
                        <textarea name="benefits" id="editorProductBenefits">
                            {!! isset($data) ? $data->benefits : old('benefits') !!}
                        </textarea>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="effects" class="col-sm-2 col-form-label text-end">Efek</label>
                    <div class="col-sm-10">
                        <textarea name="effects" id="editorProductEffects">
                            {!! isset($data) ? $data->effects : old('effects') !!}
                        </textarea>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="howToUse" class="col-sm-2 col-form-label text-end">Cara Penggunaan</label>
                    <div class="col-sm-10">
                        <textarea name="how_to_use" id="editorProductHowToUse">
                            {!! isset($data) ? $data->how_to_use : old('how_to_use') !!}
                        </textarea>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="" class="col-sm-2 col-form-label text-end">Gambar Produk<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" name="images[]" required class="form-control" id="staticImages" multiple
                            data-allow-reorder="true" data-max-file-size="10MB">
                        <input type="hidden" id="updatestaticImages" name="updateimage" />
                        <span class="text-xs" role="alert"> Rekomendasi aspek rasio 1:1<br>Maksimum 2MB</span>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="is_active" class="col-sm-2 col-form-label text-end">Status</label>
                    <div class="col-sm-10 d-flex align-items-center">
                        <input type="checkbox" name="is_active" id="is_active" value="1"
                            {{ isset($data) && $data->is_active ? 'checked' : '' }} class="form-check-input">
                        <label for="is_active" class="ms-2 form-check-label">Aktif</label>
                    </div>
                    <div class="col-sm-10 offset-sm-2">
                        <small class="text-muted">Centang jika produk aktif</small>
                    </div>
                </div>

                <div class="d-flex mt-4">
                    <a href="{{ route('dashboard_produk') }}" class="btn-sm btn btn-secondary me-3 ms-auto">Batal</a>
                    <button type="submit" class="btn-sm btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('extrascript')
    <script src="{{ asset('assets/backend/js/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('assets/backend/js/filepond-plugin-file-validate-type.js') }}"></script>
    <script src="{{ asset('assets/backend/js/filepond-plugin-file-validate-size.js') }}"></script>
    <script src="{{ asset('assets/backend/js/filepond.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ckeditor.js') }}"></script>

    <script>
        const staticImages = document.querySelector('#staticImages');

        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginFileValidateType
        );

        FilePond.create(staticImages, {
            storeAsFile: true,
            acceptedFileTypes: ['image/*'],
            files: [
                @if (isset($data) && $data->image)
                    @foreach ($data->image as $img)
                        {
                            source: "{!! asset('assets/img/product/' . $img->image) !!}"
                        },
                    @endforeach
                @endif
            ]
        });
    </script>

    <script>
        const config = ClassicEditor.defaultConfig;

        config.simpleUpload = {
            uploadUrl: "{{ route('uploadimage') }}",
            withCredentials: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                Cookie: @json(request()->cookie('laravel_session')),
                Accept: 'Application/Json',
            }
        };

        const editors = [
            '#editorProductDesc',
            '#editorProductSpec',
            '#editorProductIngredients',
            '#editorProductBenefits',
            '#editorProductEffects',
            '#editorProductHowToUse'
        ];

        const editorInstances = {};

        editors.forEach(selector => {
            ClassicEditor
                .create(document.querySelector(selector), config)
                .then(editor => {
                    editorInstances[selector] = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        });

        delete config.simpleUpload;

        const indexImageUpload = config.toolbar?.items.indexOf('imageUpload');
        config.toolbar?.items.splice(indexImageUpload, 1);

        const indexMediaEmbed = config.toolbar?.items.indexOf('mediaEmbed');
        config.toolbar?.items.splice(indexMediaEmbed, 1);

        document.querySelector('form').addEventListener('submit', function(event) {
            Object.keys(editorInstances).forEach(selector => {
                const editor = editorInstances[selector];
                const content = editor.getData();

                if (content.trim() === '' || content.trim() === '<p>&nbsp;</p>') {
                    editor.setData('');
                    document.querySelector(selector).value = '';
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.filepond--action-remove-item').click(function() {
                $(this).closest('#staticBannerImage').next('#updatestaticBannerImage').val(1);
            });

            $('.filepond--action-remove-item').click(function() {
                $(this).closest('#staticCoverImage').next('#updatestaticCoverImage').val(1);
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
            }).on('select2:select', function(event) {
                $('#subcategory').find('option').remove();
            });

            $('#subcategory').select2({
                placeholder: 'Pilih Sub-Kategori',
                ajax: {
                    url: `{!! route('dashboard_produk_selectsubcategory') !!}`,
                    dataType: 'json',
                    delay: 500,
                    type: 'get',
                    data: function(params) {
                        var query = {
                            category: $('#category').val(),
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

            $('#staticImages, .filepond--action-remove-item').click(function() {
                $('#updatestaticImages').val(1);
            });

            @if (isset($data))
                $('#category').append(new Option('{{ $data->category }}', '{{ $data->category_id }}', true,
                true));
                $('#subcategory').append(new Option('{{ $data->subcategory }}', '{{ $data->subcategory_id }}',
                    true, true));
            @endif

        });
    </script>
@endsection
