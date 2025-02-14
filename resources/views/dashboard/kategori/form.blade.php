@extends('layouts.dashboard')

@section('header')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endsection

@section('content')
    <h6 class="my-4 text-gray-800">
        <a href="#"><i class='bx bx-home me-2'></i></i></a>
        <a href="{{ route('dashboard_artikel') }}">Kategori</a> /
        {{ isset($data) ? "Edit / $data->title" : 'Buat Baru' }}
    </h6>
    @if (session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card mb-5 pb-5">
        <div class="card-header py-3">
            <h5 class="font-weight-bold text-primary m-0">{{ isset($data) ? 'Edit' : 'Tambah' }} Kategori</h5>
        </div>
        <div class="card-body">
            <form action="{{ isset($data) ? route('dashboard_kategori_update') : route('dashboard_kategori_add') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($data))
                    <input type="hidden" name="update_id" value="{{ $data->id }}" />
                @endif
                <div class="form-group row mb-4">
                    <label for="staticName" class="col-sm-2 col-form-label text-end">Nama Kategori <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" required name="name"
                            class="form-control @error('name') is-invalid @enderror" id="staticName"
                            value="{{ isset($data) ? $data?->name : old('name') }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="staticBannerImage" class="col-sm-2 col-form-label text-end">Hero Image<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" required name="banner_img" class="form-control" data-max-file-size="4MB"
                            id="staticBannerImage" accept="image/*">
                        <input type="hidden" id="updatestaticBannerImage" name="updatebanner" />
                        <span class="text-xs" role="alert"> Rekomendasi aspek rasio 4,3:1 (1907x448)<br>Maksimum
                            4MB</span>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="staticCoverImage" class="col-sm-2 col-form-label text-end">Cover <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" required name="cover_img" class="form-control" id="staticCoverImage"
                            accept="image/*" data-max-file-size="4MB">

                        <input type="hidden" id="updatestaticCoverImage" name="updatecover" />
                        <span class="text-xs" role="alert"> Rekomendasi aspek rasio 1:1<br>Maksimum 4MB</span>
                    </div>
                </div>

                {{-- <div class="form-group row mb-4">
                    <label for="staticCardImages" class="col-sm-2 col-form-label text-end">Card Image <span
                            class="text-danger @if (isset($data)) opacity-0 @endif">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" required name="card_img[]" class="form-control"
                            data-max-file-size="4MB" id="staticCardImages" multiple data-allow-reorder="true">
                            <input type="hidden" id="updatestaticCardImages" name="updatecard"/>
                            <span class="text-xs" role="alert"> Rekomendasi aspek rasio 1,8:1<br>Maksimum 4MB</span>
                    </div>
                </div> --}}

                <div class="form-group row mb-4">
                    <label for="staticDesc" class="col-sm-2 col-form-label text-end">Deskripsi <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="description" id="editor">
                            {!! isset($data) ? $data->description : old('description') !!}
                        </textarea>

                        @error('description')
                            <span class="text-danger text-xs" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex mt-4">
                    <a href="{{ route('dashboard_kategori') }}" class="btn-sm btn btn-secondary me-3 ms-auto">Batal</a>
                    <button type="submit" class="btn-sm btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('extrascript')
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="{{ asset('assets/frontend/js/ckeditor.js') }}"></script>
    <script>
        const staticCoverImage = document.querySelector('#staticCoverImage');
        const staticCardImages = document.querySelector('#staticCardImages');

        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginFileValidateType,
            FilePondPluginFileValidateSize,
        );

        FilePond.create(staticBannerImage, {
            storeAsFile: true,
            acceptedFileTypes: ['image/*'],
            files: [
                @if (isset($data))
                    {
                        source: "{!! asset('assets/img/category/' . $data->image->where('type', 'banner')->first()->image) !!}"
                    }
                @endif
            ]
        });

        FilePond.create(staticCoverImage, {
            storeAsFile: true,
            acceptedFileTypes: ['image/*'],
            files: [
                @if (isset($data))
                    {
                        source: "{!! asset('assets/img/category/' . $data->image->where('type', 'cover')->first()->image) !!}"
                    }
                @endif
            ]
        });

        FilePond.create(staticCardImages, {
            storeAsFile: true,
            acceptedFileTypes: ['image/*'],
            files: [
                @if (isset($data->image))
                    @foreach ($data->image->where('type', 'card') as $img)
                        {
                            source: "{{ asset('assets/img/category/' . $img->image) }}"
                        },
                    @endforeach
                @endif
            ]
        });
    </script>


    <script>
        const config = ClassicEditor.defaultConfig;

        const indexImageUpload = config.toolbar?.items.indexOf('imageUpload');

        config.toolbar?.items.splice(indexImageUpload, 1);

        const indexMediaEmbed = config.toolbar?.items.indexOf('mediaEmbed');

        config.toolbar?.items.splice(indexMediaEmbed, 1);

        ClassicEditor
            .create(document.querySelector('#editor'), config)
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        function autoFixSlug(element) {
            let slug = element.value;
            slug = slug.toLowerCase().replace(/[^a-z0-9_]/g, '-');
            element.value = slug;
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.filepond--action-remove-item').click(function() {
                $(this).closest('#staticBannerImage').next('#updatestaticBannerImage').val(1);
            });

            $('.filepond--action-remove-item').click(function() {
                $(this).closest('#staticCoverImage').next('#updatestaticCoverImage').val(1);
            });

            $('#staticCardImages').click(function() {
                $(this).next('#updatestaticCardImages').val(1);
            });

            setTimeout(function() {
                $(".alert").alert('close');
            }, 2000);
        });
    </script>
@endsection
