@extends('layouts.app')
@section('extrahead')
    <style>
        #carouselExampleCaptions .carousel-indicators [data-bs-target] {
            background-color: #fff;
        }
    </style>
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hover-shadow:hover {
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
    <style>
        .section-title {
            color: #2c3e50;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .section-description {
            color: #7f8c8d;
            font-size: 1.2rem;
            line-height: 1.8;
        }

        .image-wrapper {
            text-align: center;
        }

        .img-fluid {
            max-height: 350px;
            object-fit: cover;
        }
    </style>
    <style>
        .form-control {
            border: 2px solid #ddecff;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 14px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 5px var(--bs-primary);
            outline: none;
        }

        textarea.form-control {
            resize: none;
        }

        .btn-primary {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            transform: scale(1.02);
            font-weight: bold;
        }

        .contact-form-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        #successMessage {
            color: var(--bs-success);
            font-weight: bold;
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/home/hero1.png') }}" class="d-block w-100"
                    style="object-fit: cover; height: 100vh; filter: brightness(50%)" alt="first_image">
                <div class="carousel-caption d-flex flex-column justify-content-center" style="top: 0%; bottom: 0">
                    <h1 class="text-start text-light text-title mb-2 text-hero fw-semibold"
                        style="font-size: 60px !important; font-weight: 600">Maklon Skincare</h1>
                    <p class="text-start text-hero text-light h2 mb-3">No. #1 di Jateng dan DIY</p>
                    <p class="text-start text-hero text-light h5">
                        Bersama CV. Zweena Adi Nugraha, Anda bukan hanya mendapatkan produk berkualitas, Tetapi juga mitra
                        bisnis yang menguntungkan.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/home/hero2.png') }}" class="d-block w-100"
                    style="object-fit: cover; filter: brightness(50%); height: 100vh;" alt="first_image">
                <div class="carousel-caption d-flex flex-column justify-content-center" style="top: 0%; bottom: 0">
                    <h1 class="text-start text-light text-title mb-2 text-hero fw-semibold"
                        style="font-size: 60px !important; font-weight: 600">Solusi Berkualitas untuk Bisnis Anda</h1>
                    <p class="text-start text-hero text-light h2 mb-3">Skincare Berkualitas untuk Mewujudkan Keunggulan
                        Bisnis Anda.</p>
                    <p class="text-start text-hero text-light h5">
                        CV. Zweena Adi Nugraha telah membantu ratusan perusahaan, baik skala nasional maupun internasional.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/home/hero3.png') }}" class="d-block w-100"
                    style="object-fit: cover; filter: brightness(50%); height: 100vh;" alt="first_image">
                <div class="carousel-caption d-flex flex-column justify-content-center" style="top: 0%; bottom: 0">
                    <h1 class="text-start text-light text-title mb-2 text-hero fw-semibold"
                        style="font-size: 60px !important; font-weight: 600">Pabrik Maklon Skincare Berkualitas</h1>
                    <p class="text-start text-hero text-light h2 mb-3">Solusi Maklon Skincare yang Berkualitas, Tanpa
                        Kompromi!</p>
                    <p class="text-start text-hero text-light h5">Siap untuk memulai bersama kami? Hubungi kami sekarang dan
                        cari tahu bagaimana kami dapat membawa perusahaan Anda ke tingkat selanjutnya.
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="bg-image pb-section pt-section" style="background-image: url({{ asset('assets/img/home/natural.png') }})">
        <div class="container">
            <div class="row px-section">
                <div class="col-12 col-md-12">
                    <div class="home-profile-section">
                        <div class="home-profile-left">
                            <div class="home-profil-wrapper-main">
                                <div class="home-profile-title">PROFIL KAMI</div>
                                <div class="home-profile-body">
                                    <b>CV. Zweena Adi Nugraha</b>, merupakan pabrik kosmetik yang berdedikasi untuk membantu
                                    Anda mewujudkan produk
                                    kosmetik berkualitas tinggi dengan mudah. Sebagai spesialis dalam jasa maklon kosmetik,
                                    CV Zweena Adi Nugraha menghadirkan solusi lengkap mulai dari riset, pengadaan bahan
                                    baku,
                                    tenaga kerja ahli, hingga pengelolaan seluruh proses produksi.<br>
                                    Kami memahami bahwa waktu dan perizinan bisa menjadi kendala bagi Anda. Oleh karena itu,
                                    CV Zweena Adi Nugraha siap
                                    membantu Anda mengurus segala aspek, termasuk Legalitas HKI dan BPOM. Anda hanya perlu
                                    fokus pada proses marketing dan riset pasar.
                                </div>
                                <a href="{{ route('about') }}" class="btn-profil-selengkapnya">Baca Selengkapnya</a>
                            </div>
                            <div class="home-profil-wrapper-second">
                                <div class="profil-wrapper-second-left"
                                    style="background-image: url({{ asset('assets/img/home/profil-left.png') }})"></div>
                                <div class="profil-wrapper-second-right">
                                    <span>9+ Tahun</span><br>
                                    Pengalaman
                                </div>

                            </div>
                        </div>
                        <div class="home-profile-right">
                            <div class="profil-image-second"
                                style="background-image: url({{ asset('assets/img/home/profil-second.png') }})">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-image mb-section" style="backgound-color: #ececec">
        <div class="container">
            <div class="row px-section">
                <div class="col-12 col-md-12">
                    <div class="row">
                        <h2 class="section-title">ALASAN MEMILIH ZWEENA ADI NUGRAHA</h2>
                        <div class="col">
                            <div class="why-profile-left">
                                <div class="why-image-first"
                                    style="background-image: url({{ asset('assets/img/home/hero1.png') }});">
                                </div>
                                <div class="why-image-second"
                                    style="background-image: url({{ asset('assets/img/home/profil-second.png') }})">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="profile-content">
                                <p class="why-description">
                                    Zweena Adi Nugraha adalah pilihan terbaik bagi Anda yang mencari produk berkualitas
                                    tinggi dan layanan terpercaya. Dengan pengalaman bertahun-tahun, kami berkomitmen untuk
                                    menghadirkan inovasi yang mendukung kebutuhan pelanggan dan mitra bisnis.
                                </p>
                                <ul class="why-features">
                                    <li>
                                        <b>Produk Berkualitas Tinggi:</b> Kami menghadirkan produk terbaik yang dirancang
                                        untuk memenuhi standar tertinggi di industri.
                                    </li>
                                    <li>
                                        <b>Layanan Terpercaya:</b> Kepuasan pelanggan adalah prioritas kami, dengan layanan
                                        yang cepat, responsif, dan profesional.
                                    </li>
                                    <li>
                                        <b>Pengalaman Bertahun-tahun:</b>Dengan pengalaman yang matang, kami memahami
                                        kebutuhan pasar dan pelanggan dengan lebih baik.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container py-3">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-3 mb-4">
                                <div class="card shadow-sm h-100 text-center p-4 hover-shadow"
                                    style="border-radius: 20px">
                                    <span id="count-karyawan" class="stat-number d-block font-weight-bold"
                                        style="font-size: 2.5rem;">0</span>
                                    <span class="stat-label d-block" style="font-size: 1rem;">KARYAWAN</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="card shadow-sm h-100 text-center p-4 hover-shadow"
                                    style="border-radius: 20px">
                                    <span id="count-garis-produksi" class="stat-number d-block font-weight-bold"
                                        style="font-size: 2.5rem;">0</span>
                                    <span class="stat-label d-block" style="font-size: 1rem;">GARIS PRODUKSI</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="card shadow-sm h-100 text-center p-4 hover-shadow"
                                    style="border-radius: 20px">
                                    <span id="count-rumus" class="stat-number d-block font-weight-bold"
                                        style="font-size: 2.5rem;">0</span>
                                    <span class="stat-label d-block" style="font-size: 1rem;">RUMUS</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mb-4">
                                <div class="card shadow-sm h-100 text-center p-4 hover-shadow"
                                    style="border-radius: 20px">
                                    <span id="count-produksi" class="stat-number d-block font-weight-bold"
                                        style="font-size: 2.5rem;">0</span>
                                    <span class="stat-label d-block" style="font-size: 1rem;">PRODUKSI TIAP HARI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-secondary py-5">
        <div class="container">
            <div class="row align-items-center">
                <h2 class="section-title" style="font-size: 2.5rem; font-weight: bold; color: #333;">Sekilas Kami</h2>
                <p class="section-description text-center" style="font-size: 1.1rem; line-height: 1.7; color: #555;">
                    Zweena Adi Nugraha adalah perusahaan maklon kosmetik berpengalaman yang melayani pemesanan dalam
                    jumlah kecil maupun besar untuk berbagai kebutuhan, mulai dari klinik kecantikan, spa, hotel, hingga
                    private label cosmetic untuk perseorangan.
                </p>
            </div>
        </div>
    </section>

    <div class="bg-image-fixed mb-section pb-section pt-section"
        style="background-image: linear-gradient(rgb(0 0 0 / 48%), rgb(7 7 7 / 44%)), url({{ asset('assets/img/home/bg-image.png') }});">
        <div class="container-fluid">
            <h2 class="section-title-light">LAYANAN</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-3 gx-md-4 px-section justify-content-center">
                <div class="col d-flex px-lg-3 mb-sm-3" style="align-items: stretch;">
                    <div class="card border-0 py-3 px-3 px-lg-2 px-xxl-3 shadow" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <i class="bx bxs-paint text-primary mb-3" style="font-size: 2rem;"></i>
                            <div class="layanan-custom-title">Formulasi Kustom</div>
                            <p class="layanan-custom-body">Kami mengkhususkan diri dalam pengembangan kosmetik berkualitas
                                tinggi.</p>
                            <a href="{{ route('customformulation') }}" class="btn-layanan-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex px-lg-3 mb-sm-3" style="align-items: stretch">
                    <div class="card border-0 py-3 px-3 px-lg-2 px-xxl-3 shadow" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <i class="bx bxs-package text-primary mb-3" style="font-size: 2rem;"></i>
                            <div class="layanan-custom-title">Kemasan Khusus</div>
                            <p class="layanan-custom-body">Pengemasan komprehensif Kami mengadopsi bahan-bahan paling
                                canggih dan metode produksi terbaik di industri.</p>
                            <a href="{{ route('custompackaging') }}" class="btn-layanan-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex px-lg-3 mb-sm-3" style="align-items: stretch">
                    <div class="card border-0 py-3 px-3 px-lg-2 px-xxl-3 shadow" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <i class="bx bxs-brush text-primary mb-3" style="font-size: 2rem;"></i>
                            <div class="layanan-custom-title">Layanan Desain</div>
                            <p class="layanan-custom-body">Tim spesialis desain kreatif kami akan membantu Anda dalam
                                seluruh proses desain.</p>
                            <a href="{{ route('designservices') }}" class="btn-layanan-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex px-lg-3 mb-sm-3" style="align-items: stretch">
                    <div class="card border-0 py-3 px-3 px-lg-2 px-xxl-3 shadow" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <i class="bx bxs-cube text-primary mb-3" style="font-size: 2rem;"></i>
                            <div class="layanan-custom-title">Sampel</div>
                            <p class="layanan-custom-body">Kami menyediakan sampel produk untuk memastikan kualitas dan
                                kesesuaian dengan kebutuhan Anda.</p>
                            <a href="#" class="btn-layanan-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-3 gx-md-4 px-section justify-content-center">
                <div class="col d-flex px-lg-3 mb-sm-3" style="align-items: stretch">
                    <div class="card border-0 py-3 px-3 px-lg-2 px-xxl-3 shadow" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <i class="bx bxs-smile text-primary mb-3" style="font-size: 2rem;"></i>
                            <div class="layanan-custom-title">Kepuasan Pelanggan</div>
                            <p class="layanan-custom-body">Kami berkomitmen untuk memberikan pelayanan terbaik demi
                                kepuasan pelanggan yang maksimal.</p>
                            <a href="#" class="btn-layanan-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex px-lg-3 mb-sm-3" style="align-items: stretch">
                    <div class="card border-0 py-3 px-3 px-lg-2 px-xxl-3 shadow" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <i class="bx bxs-tag text-primary mb-3" style="font-size: 2rem;"></i>
                            <div class="layanan-custom-title">Pelabelan Pribadi</div>
                            <p class="layanan-custom-body">Kami menawarkan layanan pelabelan pribadi untuk produk kosmetik
                                sesuai dengan merek Anda.</p>
                            <a href="#" class="btn-layanan-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex px-lg-3 mb-sm-3" style="align-items: stretch">
                    <div class="card border-0 py-3 px-3 px-lg-2 px-xxl-3 shadow" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <i class="bx bxs-file text-primary mb-3" style="font-size: 2rem;"></i>
                            <div class="layanan-custom-title">Sertifikat Relevan</div>
                            <p class="layanan-custom-body">Kami memiliki sertifikat relevan yang mendukung kualitas dan
                                standar produksi kosmetik yang kami tawarkan.</p>
                            <a href="#" class="btn-layanan-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex px-lg-3 mb-sm-3" style="align-items: stretch">
                    <div class="card border-0 py-3 px-3 px-lg-2 px-xxl-3 shadow" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <i class="bx bxs-truck text-primary mb-3" style="font-size: 2rem;"></i>
                            <div class="layanan-custom-title">Gudang & Pengiriman</div>
                            <p class="layanan-custom-body">Kami telah bekerja sama dengan beberapa perusahaan ekspedisi
                                jangka panjang untuk memastikan pengiriman yang cepat dan aman.</p>
                            <a href="{{ route('warehousingshipping') }}" class="btn-layanan-selengkapnya">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-3">
        <h2 class="section-title">INOVASI &amp; TEKNOLOGI</h2>
        <p class="section-subtitle px-section mb-section">
            Menggunakan teknologi sebagai pedoman dan terus berkembang. Menggabungkan ide-ide canggih dan manfaatkan
            teknologi
            terbaru untuk menciptakan manfaat baru bagi perawatan kulit yang sehat. Berikan kepada pelanggan produk yang
            sesuai dan berkualitas tinggi.
        </p>
        <div class="d-flex flex-row-reverse flex-wrap">
            <div class="col-12 col-md-6 img-section px-section">
                <img alt="{{ env('APP_NAME') }}" class="img-fluid rounded-3" style="object-fit: cover;"
                    src="{{ asset('assets/img/innovation/1.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 px-md-3 d-flex justify-content-center flex-column mb-4 px-section">
                <h2 class="inovation-number">
                    01
                </h2>
                <h3 class="inovation-title">Tim Riset Profesional</h3>
                <p class="inovation-subtitle">
                    Memiliki tim riset ahli dan profesional di industri kimia untuk membuat produk kosmetik yang inovatif
                    dan akses formula tanpa batas.
                    Menjamin keamanan produk yang dihasilkan dengan uji laboratorium sesuai dengan standart.
                </p>
            </div>
        </div>
        <div class="d-flex flex-wrap">
            <div class="col-12 col-md-6 img-section px-section">
                <img alt="{{ env('APP_NAME') }}" class="img-fluid rounded-3" style="object-fit: cover"
                    src="{{ asset('assets/img/innovation/2.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 px-md-3 d-flex justify-content-center flex-column mb-4 px-section">
                <h2 class="inovation-number">
                    02
                </h2>
                <h3 class="inovation-title">Tim Produksi Profesional</h3>
                <p class="inovation-subtitle">Memiliki tim produksi yang ahli dan profesional yang berpengalaman dalam
                    melaksanakan produksi yang sesuai standar CPKB sehingga produk Anda terjamin kualitasnya.</p>
            </div>
        </div>
        <div class="d-flex flex-row-reverse flex-wrap">
            <div class="col-12 col-md-6 img-section px-section">
                <img alt="{{ env('APP_NAME') }}" class="img-fluid rounded-3" style="object-fit: cover"
                    src="{{ asset('assets/img/innovation/3.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 px-md-3 d-flex justify-content-center flex-column mb-4 px-section">
                <h2 class="inovation-number">
                    03
                </h2>
                <h3 class="inovation-title">Gudang Penyimpanan Khusus</h3>
                <p class="inovation-subtitle">Kami memiliki gudang penyimpanan yang luas dengan penataan khusus disesuaikan
                    dengan tujuan penyimpanan barang. Terdiri dari 3 tatanan khusus yaitu untuk bahan baku, bahan kemas, dan
                    gudang produk jadi</p>
            </div>
        </div>
        <div class="d-flex  flex-wrap">
            <div class="col-12 col-md-6 img-section px-section">
                <img alt="{{ env('APP_NAME') }}" class="img-fluid rounded-3" style="object-fit: cover"
                    src="{{ asset('assets/img/innovation/4.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 px-md-3 d-flex justify-content-center flex-column mb-4 px-section">
                <h2 class="inovation-number">
                    04
                </h2>
                <h3 class="inovation-title">Mesin &amp; Peralatan Canggih</h3>
                <p class="inovation-subtitle">Memilki mesin pengolah yang lengkap dengan teknologi canggih dan
                    terkomputerisasi. Dapat mengolah dalam kapasitas tinggi dan menghasilkan produk yang berkualitas</p>
            </div>
        </div>
    </div>
    <div class="bg-secondary mb-section pb-section pt-section">
        <h2 class="section-title">CARA MEMULAI</h2>
        <div class="container-fluid">
            <div class="row consult gx-4 justify-content-center px-section">
                <div class="box-consult">
                    <div class="consult-up">
                        <div class="image-consult">
                            <img src="{{ asset('assets/img/consult/satu.PNG') }}" alt="" />
                        </div>
                        <div class="arrow-consult">
                            <span class="ac-up"></span>
                            <span class="ac-bottom"></span>
                        </div>
                        <div class="consult-content">
                            <span></span>
                            <div class="consult-number">
                                01
                            </div>
                            <div class="consult-title text-center">
                                KONSULTASI PRODUK
                            </div>
                        </div>
                    </div>
                    <div class="consult-bottom">
                        <div class="image-consult">
                            <img src="{{ asset('assets/img/consult/dua.PNG') }}" alt="" />
                        </div>
                        <div class="arrow-consult">
                            <span class="ac-up"></span>
                            <span class="ac-bottom"></span>
                        </div>
                        <div class="consult-content">
                            <span></span>
                            <div class="consult-number">
                                02
                            </div>
                            <div class="consult-title text-center">
                                SAMPEL PRODUK
                            </div>
                        </div>
                    </div>
                    <div class="consult-up">
                        <div class="image-consult">
                            <img src="{{ asset('assets/img/consult/tiga.PNG') }}" alt="" />
                        </div>
                        <div class="arrow-consult">
                            <span class="ac-up"></span>
                            <span class="ac-bottom"></span>
                        </div>
                        <div class="consult-content">
                            <span></span>
                            <div class="consult-number">
                                03
                            </div>
                            <div class="consult-title text-center">
                                MENGURUS PERIZINAN PRODUK
                            </div>
                        </div>
                    </div>
                    <div class="consult-bottom">
                        <div class="image-consult">
                            <img src="{{ asset('assets/img/consult/empat.PNG') }}" alt="" />
                        </div>
                        <div class="arrow-consult">
                            <span class="ac-up"></span>
                            <span class="ac-bottom"></span>
                        </div>
                        <div class="consult-content">
                            <span></span>
                            <div class="consult-number">
                                04
                            </div>
                            <div class="consult-title text-center">
                                DESAIN KEMASAN
                            </div>
                        </div>
                    </div>
                    <div class="consult-up">
                        <div class="image-consult">
                            <img src="{{ asset('assets/img/consult/lima.PNG') }}" alt="" />
                        </div>
                        <div class="arrow-consult">
                            <span class="ac-up"></span>
                            <span class="ac-bottom"></span>
                        </div>
                        <div class="consult-content">
                            <span></span>
                            <div class="consult-number">
                                05
                            </div>
                            <div class="consult-title text-center">
                                PROSES PRODUKSI
                            </div>
                        </div>
                    </div>

                    <div class="consult-bottom">
                        <div class="image-consult">
                            <img src="{{ asset('assets/img/consult/enam.PNG') }}" alt="" />
                        </div>
                        <div class="arrow-consult">
                            <span class="ac-up"></span>
                            <span class="ac-bottom"></span>
                        </div>
                        <div class="consult-content">
                            <span></span>
                            <div class="consult-number">
                                06
                            </div>
                            <div class="consult-title text-center">
                                QUALITY CONTROL
                            </div>
                        </div>
                    </div>
                    <div class="consult-up">
                        <div class="image-consult">
                            <img src="{{ asset('assets/img/consult/tujuh.PNG') }}" alt="" />
                        </div>
                        <div class="consult-content">
                            <span></span>
                            <div class="consult-number">
                                07
                            </div>
                            <div class="consult-title text-center">
                                PENGIRIMAN PRODUK
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-section">
        <h2 class="section-title">HUBUNGI KAMI</h2>
        <div class="row px-section">
            <div class="col-md-6 col-12">
                <div class="faqs faqs-section no-select">
                    @foreach ($faqs as $f)
                        <div class="faq accordion shadow" style="border: 2px solid #ddecff; border-radius: 10px;">
                            <div class="question-wrapper">
                                <div class="d-flex align-items-center">
                                    <span class="q-mark d-block">
                                        <i class="fa fa-search p-0" style="font-size:14px; color: var(--bs-primary)"></i>
                                    </span>
                                    <p class="question" title="">{{ $f->question }}</p>
                                </div>
                                <i class="fa fa-caret-down" style="color: var(--bs-primary)"></i>
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
            <div class="col-md-6 col-12">
                <div class="card px-md-4 mb-p border-1 mb-4 shadow-lg"
                    style="border-radius: 15px; border: 2px solid #ddecff;">
                    <div class="card-body px-lg-4 pb-5 pt-4">
                        <div class="row">
                            <div class="contact-form-title mb-3">
                                Kirimkan pesan kepada kami
                            </div>

                            <form id="contactform">
                                @csrf
                                <div class="form-group mb-2">
                                    <input class="form-control" id="cname" name="name" type="text" required
                                        placeholder="Nama">
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" id="cname" name="email" type="email" required
                                        placeholder="E-mail">
                                </div>
                                <div class="form-group mb-2">
                                    <input class="form-control" id="cname" name="whatsapp" type="text" required
                                        maxlength="25" placeholder="No Whatsapp">
                                </div>
                                <div class="form-group mb-2">
                                    <textarea class="form-control" id="cmessage" name="message" required cols="30" rows="5"
                                        placeholder="Pesan"></textarea>
                                </div>
                                <button class="btn btn-primary btn-block w-100 rounded-2" id="btnSubmitForm"
                                    type="submit">Kirim</button>
                            </form>
                            <p class="mb-0 mt-2" id="successMessage" style="display: none"> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-wave">
        <img class="wave" src="{{ asset('assets/img/wave-top.png') }}" />
        <div class="bg-secondary">
            <div class="container-xl pb-section">
                <h2 class="section-title pt-3">KATEGORI PRODUK</h2>
                <div class="row justify-content-center mx-1">
                    @foreach ($category as $c)
                        <div class="col-6 col-md-4 col-lg-3 mb-4">
                            <a href="{{ route('kategori', $c->slug) }}">
                                <div class="w-100 ratio ratio-1x1"
                                    style="background-image: url({{ asset('assets/img/category/') . '/' . $c->image }}); background-size: cover; background-position: center;">
                                    <div class="h-100 d-flex w-100" id="category-card">
                                        <h6 class="fw-bold text-title m-auto text-center text-white">{{ $c->name }}
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex w-100 pt-5">
                    <a href="{{ asset('assets/katalog.pdf') }}" target="_blank"
                        class="btn btn-lg btn-primary mx-auto border-0 d-flex align-items-center justify-content-center px-4"
                        style="border-radius: 10px; font-size: 18px; padding: 15px 30px;">
                        <i class="bx bx-download me-2" style="font-size: 24px;"></i> Download Katalog
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-slanted mb-section">
        <img class="slanted" src="{{ asset('assets/img/slanted-top.png') }}" />
        <div class="container">
            <h2 class="section-title text-center mb-4">REVIEWS CLIENT</h2>
            <div class="row g-4">
                @foreach ($reviews as $r)
                    <div class="col-md-4">
                        <div class="card h-100 text-center shadow-sm rounded-3">
                            <img src="{{ $r->photo ?? asset('assets/img/client-reviews/' . $r->image) }}"
                                alt="Profile Picture" class="card-img-top rounded-circle mx-auto mt-3"
                                style="width: 70px; height: 70px; object-fit: cover;">
                            <h5 class="reviews-name mb-1">{{ $r->name }}</h5>
                            <div class="card-body d-flex flex-column">
                                <p class="reviews-body mb-3" style="font-size: 14px;">{!! $r->review !!}</p>
                                @if ($r->company)
                                    <span class="text-muted">{{ $r->company }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <h2 class="section-title">CLIENT KAMI</h2>
        {{-- <p class="section-subtitle mb-0">Brand yang sudah bergabung bersama kami</p> --}}
        <section class="splide px-section" id="splideclient" aria-label="Our Client">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($client as $c)
                        <li class="splide__slide d-flex p-5">
                            <img class="mx-auto" height="190px" style="object-fit: cover"
                                src="{{ asset('assets/img/client/' . $c->value) }}" alt="{{ env('APP_NAME') }}"
                                load="lazy">
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
    @if ($articles->count() > 0)
        <div class="container mb-section">
            <h2 class="section-title text-center mb-5">ARTIKEL TERBARU</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($articles as $a)
                    <div class="col">
                        <div class="card shadow-lg border-0 rounded-3 h-100">
                            <div class="position-relative">
                                <img class="card-img-top rounded-3"
                                    src="{{ asset('assets/img/article/') . '/' . $a->cover }}" alt="{{ $a->title }}"
                                    style="object-fit: cover; height: 220px;">
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span
                                        class="badge bg-primary fs-6">{{ \Carbon\Carbon::parse($a->post_date)->isoFormat('dddd, D MMMM Y') }}</span>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $a->title }}</h5>
                                <p class="card-text text-muted mb-4" style="font-size: 15px;">{!! substr($a->content, 0, 150) . '...' !!}</p>
                                <a href="{{ route('articledetail', $a->slug) }}" class="btn btn-primary mt-auto"
                                    style="border-radius: 5px; margin-top: auto; margin-bottom: 20px;">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="bottom-banner" style="background-image: url({{ asset('assets/img/banner-bawah.png') }})">
        <div class="bg">
            <div class="container">
                <div class="bottom-banner-content">
                    <div class="left-bottom-banner">
                        <div class="bottom-banner-title">
                            Kamu Tidak Perlu Pusing Mikir Produksi
                        </div>
                        <div class="bottom-banner-body">
                            Gratis konsultasikan produk mu bersama tim Zweena Adi Nugraha.
                            Tim kami siap membantu mulai dari konsep hingga produk kamu diluncurkan.
                        </div>
                    </div>
                    <div class="right-bottom-banner">
                        <a href="https://wa.me/+628112800278" target="_blank"
                            class="btn text-dark btn-light w-100 my-5 btn-banner-bottom">Konsultasi Produk Pada <br>
                            Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extrascript')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#splideclient', {
                type: 'loop',
                drag: 'free',
                focus: 'center',
                perPage: 3,
                pauseOnHover: false,
                pauseOnFocus: false,
                autoWidth: true,
                autoplay: true,
                arrows: false
            }).mount();
        });

        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#splidereviews', {
                type: 'loop',
                drag: 'free',
                focus: 'center',
                perPage: 3,
                pauseOnHover: false,
                pauseOnFocus: false,
                autoWidth: true,
                autoplay: true,
                pagination: 'false',
                slideFocus: 'false'
            }).mount();
        });

        $(document).ready(function() {

        })
    </script>
    <script>
        $(document).ready(function() {
            function animateCounter(id, endValue) {
                $({
                    countNum: 0
                }).animate({
                    countNum: endValue
                }, {
                    duration: 3000,
                    easing: "swing",
                    step: function() {
                        $(id).text(Math.floor(this.countNum).toLocaleString() + " +");
                    },
                    complete: function() {
                        $(id).text(this.countNum.toLocaleString() + " +");
                    }
                });
            }

            animateCounter('#count-karyawan', 200);
            animateCounter('#count-garis-produksi', 80);
            animateCounter('#count-rumus', 8000);
            animateCounter('#count-produksi', 180000);
        });
    </script>
@endsection
