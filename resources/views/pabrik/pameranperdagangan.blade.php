@extends('layouts.app')

<style>
    .page-specific .navbar-brand img {
        filter: none !important;
    }

    .navbar .nav-link {
        font-size: 16px;
        font-family: var(--font1);
        color: #495057 !important;
    }

    .custom-section {
        padding: 20px 0;
    }

    .section-title-pameran {
        font-size: 32px;
        padding-bottom: 20px;
        font-weight: bold;
        font-family: var(--font1);
        color: var(--bs-grey-090);
        text-align: center;
    }

    .pameran-label {
        font-size: 30px;
        font-weight: bold;
        color: var(--bs-grey-100);
        font-family: var(--font1);
    }

    .description {
        font-family: var(--font3);
        font-size: 18px;
        color: var(--bs-grey-080);
        margin-bottom: 20px;
        margin-top: 25px;
    }

    .btn-lihat-detail {
        background-color: var(--bs-blue-110);
        color: #fff;
        transition: background-color 0.3s, color 0.3s;
        border-radius: 5px !important;
        font-family: var(--font3);
        font-size: 14px;
        padding: 8px 32px;
    }

    .btn-lihat-detail:hover {
        background-color: var(--bs-primary);
        color: #fff !important;
        font-size: 14px;
        padding: 8px 32px;
        border: none;
    }

    /* Responsiveness */
    @media (max-width: 575px) {

        /* Mobile devices */
        .section-title-pameran {
            font-size: 20px;
            padding-bottom: 10px;
        }

        .pameran-label {
            font-size: 20px;
        }

        .description {
            font-size: 14px;
            margin-top: 15px;
        }
    }

    @media (min-width: 576px) and (max-width: 991px) {

        /* Tablets */
        .section-title-pameran {
            font-size: 25px;
        }

        .pameran-label,
        .factory {
            font-size: 25px;
        }

        .description {
            font-size: 15px;
        }
    }

    @media (min-width: 992px) {
        .custom-container {
            padding-left: 120px;
            padding-right: 120px;
        }

        .description {
            padding-right: 120px;
        }
    }

    @media (max-width: 768px) {
        .pameran-label {
            text-align: center;
        }
    }

    @media (min-width: 768px) {
        .pameran-label {
            text-align: left;
        }
    }

    .row {
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
    }

    .col-12.col-lg-3 {
        padding: 15px;
        flex: 1;
    }

    .pabrikan-featured {
        min-height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .pabrikan-featured h3 {
        font-size: 28px;
        font-weight: 700;
        font-family: var(--font1);
        margin-bottom: 15px;
    }

    .pabrikan-featured p {
        font-size: 20px;
        margin: 0;
    }

    .pabrikan-featured:hover {
        background-color: #f8f9fa;
        transition: background-color 0.3s ease;
    }

    .pabrikan-featured i {
        font-size: 50px;
        color: var(--bs-grey-90);
    }

    .icon-box {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background-color: var(--bs-primary);
        padding: 5px;
    }

    @media (max-width: 768px) {
        .icon-box {
            width: 3rem;
            height: 3rem;
            padding: 0.4rem;
        }

        .icon-box i {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .icon-box {
            width: 2.5rem;
            height: 2.5rem;
            padding: 0.3rem;
        }

        .icon-box i {
            font-size: 1.2rem;
        }
    }

    .bg-image-overlay {
        position: relative;
        background-image: url('/assets/img/pameran/banner3.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .bg-image-overlay::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .bg-image-overlay .container {
        position: relative;
        z-index: 2;
    }

    .about-second-left img {
        max-width: 100%;
        width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }
</style>

@section('content')

    <body class="page-specific">
        <div class="page-specific custom-container custom-section">
            <div class="row align-items-center py-5 mx-2 mx-lg-5">
                <div class="col-md-6 custom-left-margin">
                    <h4 class="pameran-label">Pameran Dagang Zweena Adi Nugraha</h4>
                    <p class="description">
                        Kami siap mempersembahkan berbagai inovasi terbaru dan produk unggulan kami di industri kosmetik dan
                        perawatan kecantikan.
                    </p>
                </div>
                <div class="col-md-6 mt-5 mb-2 mb-lg-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <img class="d-block w-100" src="{{ asset('assets/img/pameran/pic1.png') }}" alt=""
                                style="object-fit: cover" height="400px" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row px-section">
                <div class="col-12 col-lg-12">
                    <div class="pameran-content-title">
                        Pameran Dagang Kami
                    </div>
                    <div class="pameran-content-top">
                        Zweena Adi Nugraha berharap dapat bertemu dengan Anda setiap pameran dan berbagi berbagai inovasi
                        dan
                        keunggulan produk kami.
                        Untuk informasi lebih lanjut, silakan kunjungi sosial media resmi atau hubungi tim layanan.
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-section">
            <div class="row px-section">
                <div class="col-12 col-lg-12">
                    @foreach ($tradeshows as $card)
                        <div class="card mb-4 w-100" style="border-radius: 10px">
                            <div class="card-body">
                                <div class="row flex-wrap">
                                    <div class="d-flex justify-content-center flex-column col-md-4">
                                        <img class="image-tradeshow"
                                            src="{{ asset('assets/img/pameran/' . $card->poster) }}" alt=""
                                            loading="lazy">
                                    </div>
                                    <div class="d-flex justify-content-center flex-column col-md-8 p-4">
                                        <h6 class="h4"><strong>{{ $card->title }}</strong></h6>
                                        <hr>
                                        <ul
                                            style="list-style-type: none; padding-left: 0; margin-left: -30; font-family: var(--font3)">
                                            <ol style="margin-bottom: 5px;">Booth : {{ $card->booth }}</ol>
                                            <ol style="margin-bottom: 5px;">Tempat : {{ $card->location }}</ol>
                                            <ol style="margin-bottom: 5px;">
                                                Acara dimulai :
                                                {{ \Carbon\Carbon::parse($card->start_date)->isoFormat('dddd, D MMMM Y') }}
                                            </ol>
                                            <ol style="margin-bottom: 5px;">
                                                Acara berakhir :
                                                {{ \Carbon\Carbon::parse($card->end_date)->isoFormat('dddd, D MMMM Y') }}
                                            </ol>
                                        </ul>
                                        <a class="btn btn-tradeshow-detail me-auto" href="{{ $card->link }}"
                                            target="_blank">Baca Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="center-banner mb-section" style="background-image: url({{ asset('assets/img/pameran/banner2.jpg') }})">
            <div class="bg">
                <div class="container py-5">
                    <div class="row px-section">
                        <div class="center-banner-content">
                            <div class="center-banner-title text-center mb-5"> Apa yang Kami Lakukan & Siapa Kami</div>
                            <div class="center-banner-body">
                                <div>
                                    <p>CV Zweena Adi Nugraha adalah produsen kosmetik dengan layanan lengkap. Layanan kami
                                        mencakup formulasi dan manufaktur untuk spektrum produk yang lengkap termasuk untuk
                                        wajah, mata, bibir, tubuh, dan lainnya. Inilah yang kami tawarkan:</p>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li>Pengembangan Produk</li>
                                            <li>Pembuatan Kontrak</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>Formulasi Penelitian dan Pengembangan</li>
                                            <li>Pengisian & Perakitan</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>Dukungan Pemasaran</li>
                                            <li>Peracikan/Produksi Massal</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>Bantuan Regulasi</li>
                                            <li>Quality Control</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-section">
            <div class="row px-section d-flex align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about-second-left text-center">
                        <img src="{{ asset('assets/img/pameran/profile.png') }}" alt="{{ env('APP_NAME') }}"
                            style="max-width: 100%; height: auto;">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-second-right">
                        <div class="section-title">
                            CV Zweena Adi Nugraha
                        </div>
                        <div class="body-second" style="font-family: var(--font3)">
                            CV Zweena Adi Nugraha, berdiri sejak tahun 2015, telah membangun reputasi sebagai pemimpin di
                            industri dengan memiliki lebih dari 500 tenaga ahli yang berpengalaman di bidangnya. Seiring
                            berjalannya waktu, Zweena Adi Nugraha telah dipercaya oleh berbagai brand ternama untuk
                            memproduksi berbagai produk unggulan mereka. Saat ini, CV Zweena Adi Nugraha terus tumbuh dan
                            berkembang, menghasilkan produk berkualitas dan pelayanan yang lebih baik, serta berkomitmen
                            untuk memenuhi kebutuhan dan kepuasan konsumen.
                        </div>
                        <div class="text-center">
                            <a class="btn btn-tradeshow-detail me-auto mt-3" href="{{ route('about') }}">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-section">
            <h2 class="pameran-title-main-card text-center px-section">
                Selamat datang di Booth Zweena Adi Nugraha
            </h2>

            <div class="row justify-content-center flex-wrap px-section">
                <div class="col-12 col-lg-4 mb-3 p-3 d-flex">
                    <div class="card card-pameran shadow" style="border-radius: 10px">
                        <img class="w-100" src="{{ asset('assets/img/pameran/1.jpg') }}" alt=""
                            style="object-fit: cover; aspect-ratio: 4/3; border-top-left-radius: 10px; border-top-right-radius: 10px;"
                            loading="lazy">
                        <div class="card-body">
                            <h6 class="h4 py-3 text-center">Inovasi Terbaru Kami</h6>
                            <p class="text-center">Lihat produk terbaru dan solusi inovatif kami untuk pertama kalinya.
                                Saksikan inovasi yang belum pernah ada sebelumnya!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 p-3 d-flex">
                    <div class="card card-pameran shadow" style="border-radius: 10px">
                        <img class="w-100" src="{{ asset('assets/img/pameran/card2.jpg') }}" alt=""
                            style="object-fit: cover; aspect-ratio: 4/3; border-top-left-radius: 10px; border-top-right-radius: 10px;"
                            loading="lazy">
                        <div class="card-body">
                            <h6 class="h4 py-3 text-center">Konsultasi Ahli</h6>
                            <p class="text-center">Tim profesional kami yang berdedikasi siap melayani Anda untuk memberikan
                                panduan ahli. Kami di sini untuk membantu Anda menemukan solusi sempurna untuk kebutuhan
                                spesifik Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 p-3 d-flex">
                    <div class="card card-pameran shadow" style="border-radius: 10px">
                        <img class="w-100" src="{{ asset('assets/img/pameran/card3.jpg') }}" alt=""
                            style="object-fit: cover; aspect-ratio: 4/3; border-top-left-radius: 10px; border-top-right-radius: 10px;"
                            loading="lazy">
                        <div class="card-body">
                            <h6 class="h4 py-3 text-center">Penawaran Khusus</h6>
                            <p class="text-center">Selama pertunjukan saja, kami akan memberikan diskon dan penawaran
                                khusus untuk memungkinkan Anda menghemat biaya.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center flex-wrap px-section">
                <div class="col-12 col-lg-4 mb-3 p-3 d-flex">
                    <div class="card card-pameran shadow" style="border-radius: 10px">
                        <img class="w-100" src="{{ asset('assets/img/pameran/card1.jpg') }}" alt=""
                            style="object-fit: cover; aspect-ratio: 4/3; border-top-left-radius: 10px; border-top-right-radius: 10px;"
                            loading="lazy">
                        <div class="card-body">
                            <h6 class="h4 py-3 text-center">Formula Khusus Gratis</h6>
                            <p class="text-center">Jangan lewatkan kesempatan untuk menerima formula kosmetik khusus
                                gratis! Pakar berpengalaman kami akan berkolaborasi dengan Anda untuk membuat formula khusus
                                yang selaras dengan kebutuhan dan preferensi Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 p-3 d-flex">
                    <div class="card card-pameran shadow" style="border-radius: 10px">
                        <img class="w-100" src="{{ asset('assets/img/pameran/2.jpg') }}" alt=""
                            style="object-fit: cover; aspect-ratio: 4/3; border-top-left-radius: 10px; border-top-right-radius: 10px;"
                            loading="lazy">
                        <div class="card-body">
                            <h6 class="h4 py-3 text-center">Desain Kemasan Gratis</h6>
                            <p class="text-center">Tingkatkan produk kosmetik Anda dengan desain kemasan yang menarik -
                                Nikmati manfaat unik dari desain kemasan gratis di stan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 p-3 d-flex">
                    <div class="card card-pameran shadow" style="border-radius: 10px">
                        <img class="w-100" src="{{ asset('assets/img/pameran/3.jpg') }}" alt=""
                            style="object-fit: cover; aspect-ratio: 4/3; border-top-left-radius: 10px; border-top-right-radius: 10px;"
                            loading="lazy">
                        <div class="card-body">
                            <h6 class="h4 py-3 text-center">Hadiah dan Sampel</h6>
                            <p class="text-center">Sebagai tanda penghargaan kami, kami telah menyiapkan hadiah dan sampel
                                menarik agar Anda dapat merasakan langsung kualitas produk kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-image-fixed mb-section"
            style="background-image: linear-gradient(rgb(0 15 7 / .2), rgb(0 15 7 / .07)), url({{ asset('assets/img/pameran/banner4.jpg') }});">
            <div class="container-fluid">
                <div class="row justify-content-center flex-wrap pb-section pt-section px-section">
                    <div class="col-12 col-lg-3 d-flex flex-column p-3">
                        <div class="bg-light pabrikan-featured d-flex flex-column py-5" style="--bs-bg-opacity: .7">
                            <div class="mx-auto">
                                <i class="bx bx-timer bx-lg"></i>
                            </div>
                            <h3 class="mt-4 text-center">9+ Tahun</h3>
                            <p class="text-center">Pengalaman Produksi</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column p-3">
                        <div class="bg-light pabrikan-featured d-flex flex-column py-5" style="--bs-bg-opacity: .7">
                            <div class="mx-auto">
                                <i class="bx bx-check-shield bx-lg"></i>
                            </div>
                            <h3 class="mt-4 text-center">10.000+</h3>
                            <p class="text-center">Formula Terbaik</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column p-3">
                        <div class="bg-light pabrikan-featured d-flex flex-column py-5" style="--bs-bg-opacity: .7">
                            <div class="mx-auto">
                                <i class="bx bx-buildings bx-lg"></i>
                            </div>
                            <h3 class="mt-4 text-center">100.000 Tingkat</h3>
                            <p class="text-center">Lini Produksi GMPC</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column p-3">
                        <div class="bg-light pabrikan-featured d-flex flex-column py-5" style="--bs-bg-opacity: .7">
                            <div class="mx-auto">
                                <i class="bx bx-group bx-lg"></i>
                            </div>
                            <h3 class="mt-4 text-center">300+</h3>
                            <p class="text-center">Pekerja Khusus</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column p-3">
                        <div class="bg-light pabrikan-featured d-flex flex-column py-5" style="--bs-bg-opacity: .7">
                            <div class="mx-auto">
                                <i class="bx bx-package bx-lg"></i>
                            </div>
                            <h3 class="mt-4 text-center">600.000+</h3>
                            <p class="text-center">Kapasitas Harian (Unit)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-section">
            <h2 class="section-title">Produk Populer</h2>
            <div class="row gx-4 px-section justify-content-center flex-wrap">
                @foreach ($popularproduct as $product)
                    <div class="col-6 col-md-4 py-3 d-flex">
                        <div class="card pameran-produk shadow rounded-3">
                            <a class="thumbnail" href="{{ route('produkdetail', $product->slug) }}">
                                <img class="w-100"
                                    src="{{ asset('assets/img/product/' . $product->image->first()->image) }}"
                                    alt="{{ $product->name }}" loading="lazy" style="border-radius: 10px">
                            </a>
                            <div class="card-body">
                                <div class="entry-wrapper d-flex flex-column p-2">
                                    <h6 class="entry-title mb-3 text-center">
                                        <a href="{{ route('produkdetail', $product->slug) }}"
                                            style="text-decoration: none">
                                            {{ $product->name }}
                                        </a>
                                    </h6>
                                    <a class="btn-lihat-detail mx-auto"
                                        href="{{ route('produkdetail', $product->slug) }}"
                                        style="text-decoration: none">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="mb-section container text-center align-items-center">
                <h2 class="pameran-title-main-card text-center px-section">
                    Sertifikat
                </h2>
                <p class="text-center px-section mb-0">
                    Perusahaan manufaktur skincare & kosmetik yang telah mengantongi berbagai sertifikasi penting, menjamin
                    bahwa
                    produk
                    yang dihasilkan aman dan berkualitas tinggi.
                </p>

                <section class="splide" id="sertif-splide" aria-label="Our Certificates" style="padding: 0 60px">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide d-flex p-5">
                                <img class="w-100 mx-auto" src="{{ asset('assets/img/pameran/halal.png') }}"
                                    alt="{{ env('APP_NAME') }}" style="object-fit: cover" height="190px"
                                    load="lazy">
                            </li>
                            <li class="splide__slide d-flex p-5">
                                <img class="w-100 mx-auto" src="{{ asset('assets/img/pameran/bpom.png') }}"
                                    alt="{{ env('APP_NAME') }}" style="object-fit: cover" height="190px"
                                    load="lazy">
                            </li>
                            <li class="splide__slide d-flex p-5">
                                <img class="w-100 mx-auto" src="{{ asset('assets/img/pameran/cpk.png') }}"
                                    alt="{{ env('APP_NAME') }}" style="object-fit: cover" height="190px"
                                    load="lazy">
                            </li>
                            <li class="splide__slide d-flex p-5">
                                <img class="w-100 mx-auto" src="{{ asset('assets/img/pameran/djki.png') }}"
                                    alt="{{ env('APP_NAME') }}" style="object-fit: cover" height="190px"
                                    load="lazy">
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="bg-image-overlay mb-section pb-section pt-section">
            <div class="container">
                <div class="row">
                    <div class="card col-lg-6 p-3 border-0 shadow ms-auto mx-2 px-4 rounded-3">
                        <p style="color: var(--bs-primary)">Hubungi Kami</p>
                        <p style="font-size: 18px; margin-bottom: 0;"><strong>Kami sangat menantikan partisipasi
                                Anda</strong></p>
                        <p style="margin-top: 0; font-family: var(--font3)">Dapatkan informasi lebih lanjut</p>
                        <div class="d-flex align-items-center">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                                <i class="bx bx-map" style="color: white; font-size: 28px;"></i>
                            </div>
                            <div class="col-md-10">
                                <p style="margin-left: 20px; margin-bottom: 0; font-size: 18px"><strong>Lokasi</strong></p>
                                <p style="margin-left: 20px; font-size: 15px; font-family: var(--font3)">Dk. Bulurejo, Ds.
                                    Krajan, Kec. Gatak, Kab. Sukoharjo, Jawa Tengah (57557)</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                                <i class="bx bx-envelope" style="color: white; font-size: 28px;"></i>
                            </div>
                            <div class="col-md-10">
                                <p style="margin-left: 20px; margin-bottom: 0; font-size: 18px"><strong>Email</strong></p>
                                <p style="margin-left: 20px; font-size: 15px; font-family: var(--font3)">
                                    marketing@zweena.co.id</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                                <i class="bx bx-phone" style="color: white; font-size: 28px;"></i>
                            </div>
                            <div class="col-md-10">
                                <p style="margin-left: 20px; margin-bottom: 0; font-size: 18px"><strong>Phone</strong></p>
                                <p style="margin-left: 20px; font-size: 15px; font-family: var(--font3)">0821 3495 7409</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box d-flex justify-content-center align-items-center">
                                <i class="bx bx-time" style="color: white; font-size: 28px;"></i>
                            </div>
                            <div class="col-md-10">
                                <p style="margin-left: 20px; margin-bottom: 0; font-size: 18px"><strong>Jam Kerja</strong>
                                </p>
                                <p style="margin-left: 20px; font-size: 15px; font-family: var(--font3)">Senin - Sabtu
                                    (Pukul 08.00 - 17.00 WIB)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-5 p-3 border-0 shadow rounded-3">
                        <p style="color: var(--bs-primary)">Mengirim Pesan</p>
                        <p style="font-size: 18px; margin-bottom: 0;"><strong>Kirimkan pesan kepada kami</strong></p>
                        <p style="margin-top: 0; font-family: var(--font3)">Informasi Anda akan dijaga kerahasiaannya.</p>

                        <form id="contactform">
                            @csrf
                            <div class="form-group mb-2">
                                <input class="form-control" id="cname" name="name" type="text" required
                                    placeholder="Nama" style="font-family: var(--font3)">
                            </div>
                            <div class="form-group mb-2">
                                <input class="form-control" id="cname" name="email" type="email" required
                                    placeholder="E-mail" style="font-family: var(--font3)">
                            </div>
                            <div class="form-group mb-2">
                                <input class="form-control" id="cname" name="whatsapp" type="text" required
                                    maxlength="25" placeholder="No Whatsapp" style="font-family: var(--font3)">
                            </div>
                            <div class="form-group mb-2">
                                <textarea class="form-control" id="cmessage" name="message" required cols="30" rows="5"
                                    placeholder="Pesan" style="font-family: var(--font3)"></textarea>
                            </div>
                            <button class="btn btn-tradeshow-detail btn-block w-100" id="btnSubmitForm"
                                type="submit">Kirim</button>
                        </form>
                        <p class="mb-0 mt-2" id="successMessage" style="display: none"> </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <h2 class="pameran-title-main-card text-center px-section">
                Tanya Jawab Umum (FAQ)
            </h2>

            <div class="row px-section">
                <div class="col-md-12 col-12">
                    <div class="faqs faqs-section no-select">
                        @foreach ($faqs as $f)
                            <div class="faq accordion shadow mb-3">
                                <div class="question-wrapper">
                                    <div class="d-flex align-items-center"><span class="q-mark d-block"><i
                                                class="fa fa-search p-0" style="font-size:14px"></i></span>
                                        <p class="question" title=""> {{ $f->question }} </p>
                                    </div><i class="fa fa-caret-down"></i>
                                </div>
                                <div class="answer-wrapper">
                                    <p class="answer">
                                        {{ $f->answer }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@section('extrascript')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#sertif-splide', {
                type: 'loop',
                drag: 'free',
                focus: 'center',
                perPage: 3,
                pauseOnHover: false,
                pauseOnFocus: false,
                autoWidth: true,
                autoplay: true
            }).mount();
        });
    </script>
@endsection
