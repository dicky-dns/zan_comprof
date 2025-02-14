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
</style>

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/qc/banner.png') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">Quality
                        Control</h1>
                    <p class="text-center" style="color: white">Komitmen kami untuk menyediakan produk yang paling aman dan
                        efektif kini mencakup kontrol kualitas kosmetik untuk memastikan keunggulan dalam setiap produk.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row px-section">
            <div class="col-12 col-lg-12">
                <div class="rnd-content-top" style="font-family: var(--font3)">
                    Pabrik kami memiliki kontrol kualitas kosmetik sepenuhnya mulai dari bahan mentah, pengemasan, setiap
                    proses produksi hingga barang jadi, mulai dari penampilan, fungsi, hingga aspek fisik dan kimia, mulai
                    dari penyimpanan, produksi, dan lingkungan pribadi untuk memastikan kualitas produk.
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="w-100 row justify-content-center mx-auto flex-wrap py-3">
            <div class="col-12 col-lg-4 d-flex px-section">
                <div class="card qc-shadow" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center h2 pt-4">
                            <img src="{{ asset('assets/img/number/number-1.png') }} " width="65px">
                        </div>
                        <h5 class="text-center title-card-qc">BAHAN BAKU</h5>
                        <p class="text-center description-card-qc">
                            Uji indikator masing-masing bahan sesuai standar, dan bahan baku tersebut memenuhi syarat dan
                            dimasukkan ke dalam produksi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex px-section">
                <div class="card qc-shadow" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center h2 pt-4">
                            <img src="{{ asset('assets/img/number/number-2.png') }} " width="65px">
                        </div>
                        <h5 class="text-center title-card-qc">BAHAN KEMASAN</h5>
                        <p class="text-center description-card-qc">
                            Pengujian kesesuaian kemasan dilakukan sebelum pembelian, dan bahan kemasan juga diperiksa
                            penampilan dan kapasitasnya, pengujian kebocoran, dan pengujian kerusakan, serta bahan kemasan
                            dibersihkan dan disterilkan setelah lulus pengujian.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex px-section">
                <div class="card qc-shadow" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center h2 pt-4">
                            <img src="{{ asset('assets/img/number/number-3.png') }} " width="65px">
                        </div>
                        <h5 class="text-center title-card-qc">PRODUK SETENGAH JADI</h5>
                        <p class="text-center description-card-qc">
                            Uji fisika dan kimia (termasuk uji sensorik, nilai PH, ketahanan panas dan dingin, dll) dan uji
                            mikroba-iologi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 row justify-content-center mx-auto flex-wrap py-3">
            <div class="col-12 col-lg-4 d-flex px-section">
                <div class="card qc-shadow" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center h2 pt-4">
                            <img src="{{ asset('assets/img/number/number-4.png') }} " width="65px">
                        </div>
                        <h5 class="text-center title-card-qc">PENGISIAN & PENGEMASAN</h5>
                        <p class="text-center description-card-qc">
                            Kami akan memeriksa dan memastikan volume, isi dan bahan kemasan produk sesuai standar, dan
                            mengisinya setelah dipastikan benar.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex px-section">
                <div class="card qc-shadow" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center h2 pt-4">
                            <img src="{{ asset('assets/img/number/number-5.png') }} " width="65px">
                        </div>
                        <h5 class="text-center title-card-qc">BARANG JADI</h5>
                        <p class="text-center description-card-qc">
                            Uji mikrobiologi dan uji fisika-kimia dilakukan sesuai standar sebelum pengiriman. Setelah
                            barang dikirim, kami akan menyediakan COA dan MSDS untuk klien kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section mt-section">
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
                            <img class="d-block w-100" src="{{ asset('assets/img/qc/' . $item->value) }}" alt="..."
                                style="max-height: 400px; object-fit: cover; object-position: center">
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
                    <h4 class="mb-3"><strong>Metode Pengujian Kosmetik</strong></h4>
                    <p class="mb-3" style="font-family: var(--font3)">Produk kami tidak hanya diuji selama tahap
                        pengembangan dan produksi, tetapi juga diuji sebelum pengiriman untuk memastikan konsistensi dan
                        stabilitas. Kami menguji produk secara teratur.</p>
                    <ul style="font-family: var(--font3)">
                        <li>Uji Berat Jenis (sg).</li>
                        <li>Tes Bau</li>
                        <li>Tes Keseimbangan Ph</li>
                        <li>Uji Viskositas</li>
                        <li>Tes Penampilan (Estetika).</li>
                        <li>Uji Mikrobiologi</li>
                        <li>Uji Stabilitas</li>
                        <li>Periksa Bakteri pada Bahan Mentah, Bahan Setengah Mentah, dan Produk Jadi</li>
                        <li>Pengujian Logam Selektif</li>
                    </ul>
                    <p class="mt-3" style="font-family: var(--font3)">Realisasi pengenalan kode batang dan pengelolaan
                        bahan baku, pengumpanan, pemakaian dan pengelolaan proses Kunci untuk menghilangkan kesalahan buatan
                        manusia untuk meningkatkan efisiensi dan kualitas.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
