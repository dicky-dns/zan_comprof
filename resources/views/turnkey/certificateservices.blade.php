@extends('layouts.app')

@section('extrahead')
    <link href="{{ asset('assets/frontend/css/timeline2.css') }}" rel="stylesheet">
@endsection

<style>
    .qc-hover-effect {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        border: 2px solid transparent;
    }

    .qc-hover-effect:hover {
        transform: scale(1.05) rotate(1deg);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        border-color: #7B9CC5;
    }

    .qc-hover-effect:hover .card-header {
        background-color: #e8f5e9;
    }

    .card-header img {
        transition: transform 0.3s ease;
    }

    .qc-hover-effect:hover img {
        transform: scale(1.2);
    }

    .certificate-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .certificate-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .accordion-button {
        transition: background-color 0.3s;
    }

    .accordion-button:hover {
        background-color: #f8f9fa;
    }
</style>

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/certificateservice/banner.jpg') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">Layanan
                        Sertifikat</h1>
                    <p class="text-center" style="color: white">Zweena Adi Nugraha memastikan bahwa setiap produk skincare
                        dan kosmetik yang diproduksi
                        memenuhi standar
                        kualitas dan keamanan yang tinggi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <h2 class="section-title text-center mb-5">Sertifikasi Kami</h2>
        <div class="row px-section">
            <div class="col-lg-8 col-md-6">
                <div class="accordion" id="certificateAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingBPOM">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseBPOM" aria-expanded="false" aria-controls="collapseBPOM">
                                <i class="fa fa-check-circle text-success me-2"></i>Sertifikasi BPOM
                            </button>
                        </h2>
                        <div id="collapseBPOM" class="accordion-collapse collapse" aria-labelledby="headingBPOM"
                            data-bs-parent="#certificateAccordion">
                            <div class="accordion-body">
                                Sertifikat dari Badan Pengawas Obat dan Makanan yang memastikan bahwa produk kosmetik dan
                                skincare yang diproduksi telah diuji dan disetujui aman untuk digunakan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingHalal">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseHalal" aria-expanded="false" aria-controls="collapseHalal">
                                <i class="fa fa-check-circle text-success me-2"></i>Sertifikasi Halal
                            </button>
                        </h2>
                        <div id="collapseHalal" class="accordion-collapse collapse" aria-labelledby="headingHalal"
                            data-bs-parent="#certificateAccordion">
                            <div class="accordion-body">
                                Sertifikat halal dari Majelis Ulama Indonesia (MUI), memastikan bahwa produk yang dihasilkan
                                sesuai dengan syariah Islam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCPKB">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseCPKB" aria-expanded="false" aria-controls="collapseCPKB">
                                <i class="fa fa-check-circle text-success me-2"></i>Sertifikasi CPKB
                            </button>
                        </h2>
                        <div id="collapseCPKB" class="accordion-collapse collapse" aria-labelledby="headingCPKB"
                            data-bs-parent="#certificateAccordion">
                            <div class="accordion-body">
                                Sertifikat yang menunjukkan bahwa proses produksi kosmetik mematuhi prinsip Cara Pembuatan
                                Kosmetik yang Baik.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingHKI">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseHKI" aria-expanded="false" aria-controls="collapseHKI">
                                <i class="fa fa-check-circle text-success me-2"></i>Sertifikasi HKI
                            </button>
                        </h2>
                        <div id="collapseHKI" class="accordion-collapse collapse" aria-labelledby="headingHKI"
                            data-bs-parent="#certificateAccordion">
                            <div class="accordion-body">
                                Sertifikat yang menunjukkan bahwa produk dan desain kemasan telah terdaftar dan dilindungi
                                oleh Hak Kekayaan Intelektual.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card certificate-card shadow-sm border-0">
                    <img src="{{ asset('assets/img/certificateservice/sertif.png') }}" class="card-img-top"
                        alt="{{ env('APP_NAME') }}">
                    <div class="card-body">
                        <h5 class="card-title text-center text-primary">Sertifikasi Pabrik</h5>
                        <p class="card-text text-center">DJKI, CPKB, BPOM, Halal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <div class="row px-section">
            <h2 class="section-title text-center mb-5">Pelayanan Sertifikasi</h2>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card qc-hover-effect h-100 text-center" style="border-radius: 15px; overflow: hidden;">
                            <div class="card-header bg-light py-4">
                                <img src="{{ asset('assets/img/number-two/one.png') }}" alt="Icon 1" width="65px">
                            </div>
                            <div class="card-body">
                                <h5 class="title-card-qc">Bantuan Pengurusan Sertifikasi BPOM</h5>
                                <p class="description-card-qc">
                                    Layanan yang membantu klien dalam proses pendaftaran dan pengurusan sertifikat BPOM
                                    (Badan Pengawas Obat dan Makanan) untuk produk skincare dan kosmetik.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card qc-hover-effect h-100 text-center"
                            style="border-radius: 15px; overflow: hidden;">
                            <div class="card-header bg-light py-4">
                                <img src="{{ asset('assets/img/number-two/two.png') }}" alt="Icon 2" width="65px">
                            </div>
                            <div class="card-body">
                                <h5 class="title-card-qc">Bantuan Pengurusan Sertifikasi Halal</h5>
                                <p class="description-card-qc">
                                    Layanan yang membantu klien dalam memperoleh sertifikat halal dari MUI (Majelis Ulama
                                    Indonesia).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card qc-hover-effect h-100 text-center"
                            style="border-radius: 15px; overflow: hidden;">
                            <div class="card-header bg-light py-4">
                                <img src="{{ asset('assets/img/number-two/three.png') }}" alt="Icon 3" width="65px">
                            </div>
                            <div class="card-body">
                                <h5 class="title-card-qc">Bantuan Pengurusan Sertifikasi CPKB (Cara Pembuatan Kosmetik yang
                                    Baik)</h5>
                                <p class="description-card-qc">
                                    Layanan yang membantu klien dalam memastikan bahwa proses produksi mereka memenuhi
                                    standar CPKB.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card qc-hover-effect h-100 text-center"
                            style="border-radius: 15px; overflow: hidden;">
                            <div class="card-header bg-light py-4">
                                <img src="{{ asset('assets/img/number-two/four.png') }}" alt="Icon 4" width="65px">
                            </div>
                            <div class="card-body">
                                <h5 class="title-card-qc">Bantuan Pengurusan Sertifikasi HKI (Hak Kekayaan Intelektual)
                                </h5>
                                <p class="description-card-qc">
                                    Layanan yang membantu klien dalam pendaftaran dan perlindungan hak kekayaan intelektual
                                    untuk produk, merek, dan desain kemasan mereka.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
