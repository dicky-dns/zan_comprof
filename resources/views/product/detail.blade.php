@extends('layouts.app')

@section('extrahead')
    <link href="/css/splide-default.min.css" rel="stylesheet">

    <style>
        .page-specific .navbar-brand img {
            filter: none !important;
        }

        .navbar .nav-link {
            font-size: 16px;
            font-family: var(--font1);
            color: #495057 !important;
        }

        .thumbnails {
            display: flex;
            margin: 1rem 0;
            padding: 0;
            justify-content: center;
            gap: 5px;
            overflow-x: hidden;
        }

        .list-thumbnail {
            max-width: 90px;
            list-style: none;
            margin: 0 0.2rem;
            cursor: pointer;
            opacity: 0.5;
        }

        .list-thumbnail.is-active {
            opacity: 1;
            border: 1px solid var(--bs-grey-070);
            border-radius: 5px;
        }

        .list-thumbnail img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .modal-title {
            font-size: 19px;
            font-weight: 700;
            font-family: var(--font1);
            margin: 4px 0
        }

        .btn-close {
            font-size: 14px
        }

        .modal-body {
            padding: 10px 20px
        }

        .modal-content {
            max-width: 400px;
        }

        .form-control {
            padding: 10px 12px;
            font-size: 15px;
        }

        #btnSubmitForm {
            background-color: var(--bs-primary);
            color: #fff;
            padding: 12px;
            border-radius: 4px;
            outline: none;
            border: 0;
            width: 100%;
            margin: 20px 0;
        }

        @media (min-width: 992px) {
            .margin-left-lg {
                margin-left: 20px;
            }
        }
    </style>
@endsection

@section('content')

    <body class="page-specific">
        <div class="container mt-fixed">
            <div class="row px-section">
                <div class="col-12 col-lg-6 mb-4">
                    <section class="splide" id="main-carousel" aria-label="My Awesome Gallery">
                        <div class="splide__track position-relative">
                            <ul class="splide__list w-100">
                                @foreach ($product->image as $image)
                                    <li class="splide__slide w-100">
                                        <div class="zoom-container">
                                            <img class="zoom-image" src="{{ asset('assets/img/product/' . $image->image) }}"
                                                alt="{{ $product->name }}"
                                                style="object-fit: cover; width: 100%; aspect-ratio: 1/1;">
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                    @if ($product->image->count() > 1)
                        <ul class="thumbnails d-flex justify-content-center mt-3" id="thumbnails">
                            @foreach ($product->image as $image)
                                <li class="list-thumbnail {{ $loop->index == 0 ? 'is-active' : '' }} mx-1">
                                    <img class="thumbnail-image" src="{{ asset('assets/img/product/' . $image->image) }}"
                                        alt="{{ $product->name }}" style="object-fit: cover;">
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="col-12 col-lg-6 px-lg-4 mb-4 product-detail">
                    <div class="entry-wrapper">
                        <div style="font-family: var(--font3)">
                            <p>
                                <strong>Kategori:</strong>
                                <a href="{{ route('kategori', $product->category->slug) }}"
                                    style="color: var(--bs-yellow-080); text-decoration: none;">
                                    {{ $product->category->name }}
                                </a>
                                @if (isset($product->subcategory))
                                    <a href="{{ route('subkategori', $product->subcategory->slug) }}"
                                        style="color: var(--bs-yellow-080); text-decoration: none;">
                                        , {{ $product->subcategory->name }}
                                    </a>
                                @endif
                            </p>
                        </div>
                        <h3 class="entry-title">{{ $product->name }}</h3>
                        <div class="ck-content">
                            {!! $product->specification !!}
                        </div>
                    </div>

                    <a class="btn btn-detail-penawaran mt-5">Dapatkan Penawaran</a>

                    <div class="breadcrumb-product">
                        <a href="{{ route('home') }}">Beranda</a>
                        / <a href="{{ route('kategori', $product->category->slug) }}">{{ $product->category->name }}</a>
                        @if (isset($product->subcategory))
                            / <a
                                href="{{ route('subkategori', $product->subcategory->slug) }}">{{ $product->subcategory->name }}</a>
                        @endif
                        / <span style="font-weight: bold; color: var(--bs-yellow-090)">{{ $product->name }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-section">
            <div class="row px-section">
                <div class="title-detail-product mt-5">
                    <h4>{{ $product->name }}</h4>
                </div>
                <div class="col-12">
                    <ul class="nav nav-tabs" id="productTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description"
                                role="tab" aria-controls="description" aria-selected="true"
                                style="color: var(--bs-grey-090) !important">Deskripsi</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        @php $layoutIndex = 0; @endphp
                        @foreach ($productDetails as $detail)
                            @if (!empty($detail['content']))
                                <div class="row mt-3">
                                    @if ($layoutIndex % 2 == 0)
                                        {{-- Gambar di kanan, teks di kiri --}}
                                        <div class="col-md-6 d-flex align-items-center">
                                            <div>
                                                <div
                                                    style="font-family: var(--font1); font-weight: bold; line-height: 26px;">
                                                    <h4>{{ $detail['title'] }}</h4>
                                                </div>
                                                <div style="font-family: var(--font3);">
                                                    <p>{!! $detail['content'] !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center">
                                            @if (isset($product->image[$imageIndex]))
                                                <div>
                                                    <img src="{{ asset('assets/img/product/' . $product->image[$imageIndex]->image) }}"
                                                        alt="{{ $product->name }}"
                                                        style="object-fit: cover; width: 100%; aspect-ratio: 1/1;">
                                                </div>
                                                @php $imageIndex++; @endphp
                                            @endif
                                        </div>
                                    @else
                                        {{-- Gambar di kiri, teks di kanan --}}
                                        <div class="col-md-6 d-flex align-items-center">
                                            @if (isset($product->image[$imageIndex]))
                                                <div>
                                                    <img src="{{ asset('assets/img/product/' . $product->image[$imageIndex]->image) }}"
                                                        alt="{{ $product->name }}"
                                                        style="object-fit: cover; width: 100%; aspect-ratio: 1/1;">
                                                </div>
                                                @php $imageIndex++; @endphp
                                            @endif
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center">
                                            <div>
                                                <div
                                                    style="font-family: var(--font1); font-weight: bold; line-height: 26px;">
                                                    <h4>{{ $detail['title'] }}</h4>
                                                </div>
                                                <div style="font-family: var(--font3);">
                                                    <p>{!! $detail['content'] !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                @php $layoutIndex++; @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <hr>
            <h3 class="section-title-product-recommendation">Produk Rekomendasi</h3>
            <div class="row px-section">
                @foreach ($recommendations as $r)
                    <div class="col-6 col-lg-3 p-2">
                        <div class="card product-col px-lg-2 shadow-sm" style="border-radius: 10px">
                            <a class="thumbnail" href="{{ route('produkdetail', $r->slug) }}">
                                <img class="card-img-top w-100"
                                    src="{{ asset('assets/img/product/' . $r->image->first()->image) }}"
                                    alt="{{ $r->name }}" style="object-fit: cover; aspect-ratio:1/1;" loading="lazy">
                            </a>
                            <div class="card-body entry-wrapper d-flex flex-column text-center">
                                <h6 class="card-title entry-title">
                                    <a href="{{ route('produkdetail', $r->slug) }}">{{ $r->name }}</a>
                                </h6>
                                <button class="btn-lihat-detail mx-auto"
                                    onclick="window.location.href = '{{ route('produkdetail', $r->slug) }}'">Lihat
                                    Detail</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="modal fade" id="modalenquiry" aria-labelledby="modalenquiry" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Dapatkan Penawaran Menarik</h1>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>

                    <div class="row modal-body">
                        <p class="text-center mt-3" id="successMessageEnquiry" style="display: none"></p>
                        <div class="container mt-4">
                            <form class="form" id="enquiryForm">
                                @csrf
                                <input name="product_id" type="hidden" value="{{ $product->id }}">
                                <div class="form-group row mb-3">
                                    <div class="col-sm-12">
                                        <input class="form-control" name="name" type="text" placeholder="Nama"
                                            maxlength="255" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-sm-12">
                                        <input class="form-control" name="email" type="email" required
                                            max="255" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-sm-12">
                                        <input class="form-control" name="phone" type="text" required
                                            max-length="20" placeholder="No Telepon / Whatsapp">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="message" required placeholder="Pesan" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-sm-12">
                                        <button id="btnSubmitForm" type="submit">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@section('extrascript')
    <script>
        const elms = document.getElementById('main-carousel');
        const thumbnails = document.getElementsByClassName('list-thumbnail');

        const splide = new Splide(elms, {
            type: thumbnails.length > 1 ? 'loop' : '',
            focus: 'center',
            pauseOnHover: false,
            pauseOnFocus: false,
            autoplay: true,
            gap: 1,
            pagination: false,
            arrows: false,
        }).mount();

        for (var i = 0; i < thumbnails.length; i++) {
            initThumbnail(thumbnails[i], i);
        }

        function initThumbnail(thumbnail, index) {
            thumbnail.addEventListener('click', function() {
                splide.go(index);
            });
        }

        let current = thumbnails[0];

        splide.on('move', function() {
            if (current) {
                current.classList.remove('is-active');
            }

            let thumbnail = thumbnails[splide.index];

            if (thumbnail) {
                thumbnail.classList.add('is-active');
                current = thumbnail;
            }
        });

        $(document).ready(function() {
            // $("#main_navbar").addClass('bg-dark');

            $('.btn-detail-penawaran').click(function() {
                $('#modalenquiry').modal('show')
            });

            $('#enquiryForm').on('submit', function(event) {
                event.preventDefault();
                $('#btnSubmitForm').attr('disabled');
                $('#btnSubmitForm').html('Mengirim...');
                const ths = $(this);
                $.ajax({
                    url: "{{ route('addenquiry') }}",
                    type: 'POST',
                    data: new FormData(this),
                    datatype: "json",
                    processData: false,
                    contentType: false,
                }).done(function(r) {
                    ths[0].reset();
                    $('#successMessageEnquiry').html(r).fadeIn(500)
                        .delay(2000)
                        .fadeOut(500);
                }).fail(function(e) {
                    console.log(e);
                }).always(function() {
                    $('#btnSubmitForm').removeAttr('disabled');
                    $('#btnSubmitForm').html('Kirim');
                });
            });
        });
    </script>
@endsection
