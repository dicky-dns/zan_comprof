@extends('layouts.app')

<style>
    .carousel-item {
        transition: transform 1s ease-in-out, opacity 1s ease-in-out !important;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        background-size: 70%;
    }

    .carousel-indicators button {
        background-color: #ffffff !important;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin: 5px;
        opacity: 0.7;
    }

    .carousel-indicators .active {
        background-color: #ffffff;
        opacity: 1;
    }

    .carousel-inner img {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .carousel-inner img {
            max-height: 400px;
        }
    }

    .img-rounded-shadow {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .img-rounded-shadow:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        transform: scale(1.05);
    }
</style>
<style>
    <style>.rnd-content-top-image img {
        width: 100%;
        height: auto;
        max-width: 100%;
    }

    .img-rounded-shadow {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
</style>

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/pabrikan/banner.png') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">Research
                        & Development</h1>
                    <p class="text-center" style="color: white">Kami dapat menemukan solusi formulasi yang paling inovatif,
                        unik dan bernilai untuk solusi permasalahan kulit</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row px-section">
            <div class="col-12 col-lg-12">
                <div class="rnd-content-top" style="font-family: var(--font3)">
                    <h4 class="mb-3"><strong>Tim Research and Development Zweena Adi Nugraha</strong></h4>
                    <p>
                        Zweena Adi Nugraha memiliki Tim Research and Development yang Professional dan berpengalaman.
                        Kami menggunakan teknologi tinggi untuk menghasilkan produk yang berkualitas. Selain itu, Kami
                        memastikan
                        bahwa setiap produk sepenuhnya aman digunakan.
                        Tim Research and development Zweena Adi Nugraha memiliki pengetahuan yang komprehensif dan
                        up-to-date
                        di bidang kosmetik juga perawatan kulit sehingga kami terus mengikuti perkembangan pasar untuk tahu
                        apa
                        saja
                        produk yang sedang tren saat ini. Disamping itu, Lab RnD yang ada telah memiliki alat-alat sesuai
                        standar
                        berkualitas baik yang dapat menunjang tim kami dalam melakukan riset dan pengembangan produk
                        customer.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rnd-content-top-image">
                    <img class="img-rounded-shadow img-fluid" src="{{ asset('assets/img/rnd/image1.png') }}" />
                    <p class="mt-3 text-center" style="font-family: var(--font3)">Kelompok Pengembangan & Penelitian Formula
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rnd-content-top-image">
                    <img class="img-rounded-shadow img-fluid" src="{{ asset('assets/img/rnd/image2.png') }}" />
                    <p class="mt-3 text-center" style="font-family: var(--font3)">Kelompok Uji Formulasi Pra Produksi Massal
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section py-5 mt-5">
        <div class="w-100 row justify-content-center mx-auto flex-wrap px-section">
            <div class="col-6 col-md-3 d-flex flex-column">
                <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/rnd/pic5.png') }}" alt=""
                    style="object-fit: cover; aspect-ratio: 1/1; object-position: center; width: 80px; height: 80px;">
                <p class="card-rnd-desc text-center" style="font-family: var(--font3)">Analisis Jenis Kulit</p>
            </div>
            <div class="col-6 col-md-3 d-flex flex-column">
                <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/rnd/pic2.png') }}" alt=""
                    style="object-fit: cover; aspect-ratio: 1/1; object-position: center; width: 80px; height: 80px;">
                <p class="card-rnd-desc text-center" style="font-family: var(--font3)">Analisis Pengambilan Sampel</p>
            </div>
            <div class="col-6 col-md-3 d-flex flex-column">
                <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/rnd/pic3.png') }}" alt=""
                    style="object-fit: cover; aspect-ratio: 1/1; object-position: center; width: 80px; height: 80px;">
                <p class="card-rnd-desc text-center" style="font-family: var(--font3)">Permohonan Paten Fungsional</p>
            </div>
            <div class="col-6 col-md-3 d-flex flex-column">
                <img class="img-fluid mx-auto mb-4" src="{{ asset('assets/img/rnd/pic4.png') }}" alt=""
                    style="object-fit: cover; aspect-ratio: 1/1; object-position: center; width: 80px; height: 80px;">
                <p class="card-rnd-desc text-center" style="font-family: var(--font3)">Kerjasama Teknis</p>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <div class="row px-section">
            <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    @foreach ($setting as $item)
                        <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}"
                            type="button" aria-label="Slide {{ $loop->iteration }}" {!! $loop->index == 0 ? 'class="active" aria-current="true"' : '' !!}></button>
                    @endforeach
                </div>
                <div class="carousel-inner" style="border-radius: 15px">
                    @foreach ($setting as $item)
                        <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{ asset('assets/img/rnd/' . $item->value) }}" alt="..."
                                style="max-height: 600px; object-fit: cover; object-position: center">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"
                    type="button">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"
                    type="button">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="row px-section">
            <div class="col-12 col-lg-12">
                <div class="rnd-content-top">
                    <h4 class="mb-3"><strong>Tes Penuh untuk Memastikan Kualitas Produk</strong></h4>
                    <ul style="font-family: var(--font3)">
                        <li>Uji Stabilitas Formulasi</li>
                        <li>Uji Penyalahgunaan Termal Formulasi</li>
                        <li>Memberikan Laporan Pengujian In-House</li>
                        <li>Kelompok Keilmuan Proses dan Teknologi Manufaktur</li>
                        <li>Membuat SOP Solusi Proses Manufaktur yang Efektif</li>
                        <li>Membuat Formulasi Fungsi dan Keamanan Tinggi</li>
                        <li>Memastikan Kualitas Bahan Baku Manufaktur, Bahan Setengah Mentah, Bahan Pengepakan, Produk Jadi
                        </li>
                        <li>Periksa Bakteri pada Bahan Mentah, Bahan Setengah Mentah, dan Produk Jadi</li>
                        <li>Periksa Kualitas Bahan Mentah & Produk Akhir Produk</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
