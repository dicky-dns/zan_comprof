@extends('layouts.app')

<style>
    .container-charity {
        max-width: 1330px;
        margin: 0 auto 60px;
    }

    .charity-main-left {
        margin-bottom: 20px;
        font-size: 16px;
        line-height: 1.55;
        color: var(--bs-textbody);
    }
</style>

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/charity/banner.jpg') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">Kegiatan
                        Sosial</h1>
                    <p class="text-center" style="color: white">Kami berkomitmen untuk memberikan bantuan kepada mereka yang
                        membutuhkan di Palestina melalui program "Dapur Umum Palestina" dengan memberikan makanan hangat
                        untuk pengungsi.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-charity">
        <div class="row align-items-center px-section mb-section">
            <div class="col-12 col-lg-6 text-center">
                <img class="design-service-card" src="{{ asset('assets/img/charity/pic.jpg') }}" alt="{{ env('APP_NAME') }}"
                    style="max-height: 400px; border-radius: 10px;" />
            </div>
            <div class="col-lg-6 col-12">
                <div class="charity-main-left" style="font-family: var(--font3)">
                    <div class="section-title">Situasi Terkini di Palestina</div>
                    <p>
                        Rakyat Palestina saat ini tengah menghadapi salah satu krisis kemanusiaan paling parah di dunia.
                        Sejak Oktober 2023, lebih dari 56.850 nyawa telah hilang akibat serangan brutal yang dilakukan oleh
                        Zionis Israel. Kini, banyak dari mereka terpaksa tinggal di kamp-kamp pengungsian yang padat, di
                        mana kebutuhan dasar seperti pangan, air bersih, dan perawatan medis sangat terbatas. Selain itu,
                        mereka juga kesulitan mendapatkan tempat tinggal yang layak.
                    </p>
                    <p>
                        Musim dingin yang semakin mendekat semakin memperburuk kondisi ini, membuat kehidupan para pengungsi
                        semakin berat. Bantuan makanan hangat sangat dibutuhkan untuk meringankan penderitaan mereka. Kami
                        berkomitmen untuk menyediakan makanan yang dapat membantu memenuhi kebutuhan dasar dan memberikan
                        sedikit kelegaan di tengah kondisi yang sangat sulit ini.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-section">
        <div class="row">
            <div class="row text-center">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="display-6 font-weight-bold">Kegiatan: Bantuan Makanan</h2>
                    </div>
                </div>
            </div>
            <div class="warehouse-turnkey-bottom">
                <div class="row w-100 row-list flex-row-reverse mx-auto">
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <img class="card-img-top" src="{{ asset('assets/img/charity/pic1.png') }}"
                            alt="{{ env('APP_NAME') }}" style="max-height: 300px; object-fit: cover; border-radius: 5px;" />
                    </div>
                    <div class="col-md-7 d-flex flex-column justify-content-center">
                        <h4 class="text-center">Distribusi Makanan Hangat untuk Pengungsi Palestina</h4><hr>
                        <p style="font-family: var(--font3)">Kami menyelenggarakan distribusi makanan hangat berupa Nasi
                            Kuning khas Palestina untuk lebih dari 200 Kepala Keluarga
                            yang tinggal di kamp pengungsian Gaza. Tujuan dari kegiatan ini adalah untuk membantu para
                            pengungsi yang menghadapi musim
                            dingin dengan memberikan makanan bergizi yang dapat menghangatkan tubuh mereka.
                        </p>
                    </div>
                </div>
                <div class="row w-100 row-list mx-auto">
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <img class="card-img-top" src="{{ asset('assets/img/charity/pic4.png') }}"
                            alt="{{ env('APP_NAME') }}" style="max-height: 300px; object-fit: cover; border-radius: 5px;" />
                    </div>
                    <div class="col-md-7 d-flex flex-column justify-content-center">
                        <h4 class="text-center">Bantuan untuk Musim Dingin di Gaza</h4><hr>
                        <p style="font-family: var(--font3)">Kegiatan ini dilakukan untuk memberikan dukungan kepada
                            keluarga-keluarga yang menghadapi musim dingin yang ekstrem
                            di Gaza. Bantuan makanan ini diharapkan dapat meringankan beban mereka dan memberikan kehangatan
                            di tengah kondisi sulit.
                        </p>
                    </div>
                </div>
                <div class="row w-100 row-list flex-row-reverse mx-auto">
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <img class="card-img-top" src="{{ asset('assets/img/charity/pic3.png') }}"
                            alt="{{ env('APP_NAME') }}" style="max-height: 300px; object-fit: cover; border-radius: 5px;" />
                    </div>
                    <div class="col-md-7 d-flex flex-column justify-content-center">
                        <h4 class="text-center">Dukungan untuk Pengungsi Palestina</h4><hr>
                        <p style="font-family: var(--font3)">Bantuan ini adalah bagian dari upaya berkelanjutan untuk
                            mendukung pengungsi Palestina di Gaza. Kami berharap setiap
                            kegiatan yang kami lakukan dapat memberikan harapan dan kesejahteraan bagi mereka yang
                            membutuhkan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="section-title text-center">
            <h2 class="display-6 font-weight-bold">Galeri Foto Kegiatan</h2>
        </div>
        <div class="carousel slide" id="galleryCarousel" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/1.png') }}" alt="Kegiatan Amal 1"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/10.png') }}" alt="Kegiatan Amal 2"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/3.png') }}" alt="Kegiatan Amal 3"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/4.png') }}" alt="Kegiatan Amal 4"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/5.png') }}" alt="Kegiatan Amal 5"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/6.png') }}" alt="Kegiatan Amal 6"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/7.png') }}" alt="Kegiatan Amal 7"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/8.png') }}" alt="Kegiatan Amal 8"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img class="d-block w-100" src="{{ asset('assets/img/charity/9.png') }}" alt="Kegiatan Amal 9"
                                style="object-fit: cover; height: 250px; border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#galleryCarousel" data-bs-slide="prev" type="button">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-target="#galleryCarousel" data-bs-slide="next" type="button">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection