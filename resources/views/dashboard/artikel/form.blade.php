@extends('layouts.dashboard')

@section('header')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endsection

@section('content')
    <!-- Page Heading -->
    <h6 class="my-4 text-gray-800">
        <a href="#"><i class='bx bx-home me-2'></i></i></a>
        <a href="{{ route('dashboard_artikel') }}">Artikel</a> /
        {{ isset($data) ? "Edit / $data->title" : 'Buat Baru' }}
    </h6>
    @if (session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header py-3">
            <h5 class="font-weight-bold text-primary m-0">{{ isset($data) ? 'Edit' : 'Buat' }} Artikel</h5>
        </div>
        <div class="card-body">
            @php
                if (isset($data)) {
                    $url = route('dashboard_artikel_update');
                } else {
                    $url = route('dashboard_artikel_add');
                }
            @endphp
            <form id="form-data" type="post" action="{{ $url }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($data))
                    <input type="hidden" name="update_id" value="{{ $data->id }}" />
                @endif
                <div class="form-group row mb-4">
                    <label for="" class="col-sm-2 col-form-label text-end">Cover<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" required name="cover"
                            class="form-control @error('cover') is-invalid @enderror" id="staticCover"
                            data-max-file-size="2MB">
                        <input type="hidden" id="updatestaticCover" name="updatecover" />
                        <span class="text-xs" role="alert">Maksimum 2MB.</span>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="title" class="col-sm-2 col-form-label text-end">Judul <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" maxlength="255" required name="title" class="form-control" id="title"
                            rows="3" value="{{ isset($data) ? $data->title : old('title') }}" />
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="slug" class="col-sm-2 col-form-label text-end">Slug <span class="text-danger"
                            style="opacity: 0">*</span></label>
                    <div class="col-sm-10">
                        <input maxlength="255" type="text" required name="slug"
                            class="form-control @error('slug') is-invalid @enderror" onchange="autoFixSlug(this)"
                            oninput="autoFixSlug(this)" pattern="[a-z0-9_-]+" id="slug"
                            value="{{ !isset($data) ? old('slug') : $data?->slug }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="post_date" class="col-sm-2 col-form-label text-end">Tanggal <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="date" required name="post_date"
                            class="form-control @error('post_date') is-invalid @enderror" id="post_date"
                            value="{{ isset($data) ? $data?->post_date : old('post_date') }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="" class="col-sm-2 col-form-label text-end">Status <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="form-check me-3">
                                <input class="form-check-input" required type="radio" value="1" name="published"
                                    id="published1" @checked(isset($data) ? $data->published : old('published') == 1)>
                                <label class="form-check-label" for="published1">
                                    Publish
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="0" name="published"
                                    id="published2" @checked(isset($data) ? !$data->published : old('published') == 0)>
                                <label class="form-check-label" for="published2">
                                    Draft
                                </label>
                            </div>
                        </div>
                        @error('published')
                            <span class="text-danger text-xs" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="editor" class="col-sm-2 col-form-label text-end">Konten <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="content" required id="editor">
                            {!! isset($data) ? $data->content : old('content') !!}
                        </textarea>

                        @error('content')
                            <span class="text-danger text-xs" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex mt-4">
                    <a href="{{ route('dashboard_artikel') }}" class="btn-sm btn btn-secondary me-3 ms-auto">Batal</a>
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
        const staticCover = document.querySelector('#staticCover');

        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginFileValidateType,
            FilePondPluginFileValidateSize,
        );

        FilePond.create(staticCover, {
            storeAsFile: true,
            acceptedFileTypes: ['image/*'],
            files: [
                @if (isset($data) && $data->cover)
                    {
                        source: "{!! asset('assets/img/article/' . $data->cover) !!}"
                    }
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
        }

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
                $(this).closest('#staticCover').next('#updatestaticCover').val(1);
            });

            setTimeout(function() {
                $(".alert").alert('close');
            }, 2000);
        });
    </script>
@endsection
