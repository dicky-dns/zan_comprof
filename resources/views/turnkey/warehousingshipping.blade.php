@extends('layouts.app')

@section('extrahead')
    <link href="{{ asset('assets/frontend/css/timeline2.css') }}" rel="stylesheet">
@endsection

<style>
    .carousel-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: cover;
    }

    .accordion-button {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 10px;
    }

    .accordion-button:hover {
        background-color: #e9ecef;
        cursor: pointer;
    }

    .accordion-button:focus {
        box-shadow: none;
    }

    .accordion-button .fa {
        font-size: 18px;
        color: #007bff;
    }

    .accordion-body {
        font-family: var(--font3);
        font-size: 1rem;
        color: #555;
        padding: 1.5rem;
        background-color: #f9f9f9;
        border-radius: 10px;
    }

    .accordion-item:hover .accordion-button {
        background-color: #e9ecef;
        transition: background-color 0.3s ease;
    }

    .accordion-collapse {
        transition: all 0.3s ease-in-out;
    }
</style>

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/warehouseshipping/banner.jpg') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">
                        PERGUDANGAN & LOGISTIK</h1>
                    <p class="text-center" style="color: white">Dengan fasilitas pergudangan dan logistik yang modern dan
                        efisien, mampu memastikan bahan baku dan produk jadi dikelola dengan baik, mulai dari penerimaan
                        hingga pengiriman akhir.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row px-section">
            <div class="col-12">
                <div class="warehouse-turnkey-title text-center">
                    Pergudangan
                </div>
                <div class="warehouse-turnkey-body">
                    <img src="{{ asset('assets/img/warehouseshipping/image1.jpg') }}" alt="{{ env('APP_NAME') }}" />
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-4">
                <div class="rounded px-3 py-4"
                    style="height: 100%; background-color: #D7E1EE !important; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                    <h4 class="card-warehouse-title">
                        <i class="fas fa-box-open"></i> Menerima
                    </h4>
                    <p class="mb-0">Kami akan membuka kotak dan menghitung jumlah barang, memeriksa manifes, dan mencatat
                        label barang.</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-4">
                <div class="rounded px-3 py-4"
                    style="height: 100%; background-color: #264770 !important; color: #fff !important; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                    <h4 class="card-warehouse-title">
                        <i class="fas fa-shield-alt"></i> Proteksi
                    </h4>
                    <p class="mb-0">Tahan api dan tahan air, dan atur metode penyimpanan yang berbeda secara ketat sesuai
                        dengan atribut produk.</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-4">
                <div class="rounded px-3 py-4"
                    style="height: 100%; background-color: #D7E1EE !important; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                    <h4 class="card-warehouse-title">
                        <i class="fas fa-clipboard-list"></i> Inventaris Reguler
                    </h4>
                    <p class="mb-0">Inventaris rutin setiap bulan, verifikasi yang cermat.</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-4">
                <div class="rounded px-3 py-4"
                    style="height: 100%; background-color: #264770 !important; color: #fff !important; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                    <h4 class="card-warehouse-title">
                        <i class="fas fa-shipping-fast"></i> Pengiriman
                    </h4>
                    <p class="mb-0">Periksa pesanan, tinjau, timbang, bungkus, dan kirim dengan ekspres.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-section pb-section pt-section">
        <div class="container">
            <div class="row px-section">
                <div class="col-12">
                    <div class="warehouse-turnkey-title text-center">
                        <span class="title-with-dashes">Logistik</span>
                    </div>
                    <div class="warehouse-turnkey-body mb-5" style="font-family: var(--font3)">
                        Zweena Adi Nugraha memahami bahwa kecepatan dan ketepatan pengiriman adalah kunci dalam
                        memenuhi
                        kebutuhan dan harapan pelanggan.
                        Untuk itu, kami menyediakan berbagai opsi pengiriman yang fleksibel dan efisien melalui jalur darat,
                        udara,
                        dan laut.
                        Dengan dukungan logistik yang kuat dan jaringan distribusi yang luas, kami memastikan produk Anda
                        sampai di
                        tujuan dengan aman dan tepat waktu,
                        sesuai dengan kebutuhan bisnis Anda. Dengan pendekatan yang menyeluruh dan terintegrasi,
                        Zweena Adi Nugraha berkomitmen untuk memberikan layanan pengiriman yang optimal, mendukung
                        kelancaran
                        operasional dan kepuasan pelanggan
                        di berbagai pasar.
                    </div>
                </div>

                <div class="col-12">
                    <div id="logisticsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="card-image-warehouse img-fluid carousel-image"
                                    src="{{ asset('assets/img/warehouseshipping/card1.jpg') }}"
                                    alt="{{ env('APP_NAME') }}" />
                            </div>
                            <div class="carousel-item">
                                <img class="card-image-warehouse img-fluid carousel-image"
                                    src="{{ asset('assets/img/warehouseshipping/card2.jpg') }}"
                                    alt="{{ env('APP_NAME') }}" />
                            </div>
                            <div class="carousel-item">
                                <img class="card-image-warehouse img-fluid carousel-image"
                                    src="{{ asset('assets/img/warehouseshipping/card3.jpg') }}"
                                    alt="{{ env('APP_NAME') }}" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#logisticsCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#logisticsCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <div class="warehouse-turnkey-bottom">
            <div class="row w-100 row-list flex-row-reverse mx-auto">
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <img src="{{ asset('assets/img/warehouseshipping/list1.jpg') }}" alt="{{ env('APP_NAME') }}"
                        style="width: 100% !important; max-height: 300px; object-fit: cover">
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-center">
                    <h4>Pengiriman Melalui Jalur Darat</h4>
                    <p style="font-family: var(--font3)">Menggunakan jalur darat untuk pengiriman produk memungkinkan akses
                        ke lokasi yang mungkin tidak dapat
                        dijangkau oleh transportasi udara atau laut. Meningkatkan efisiensi pengiriman dengan penjadwalan
                        rute yang
                        optimal, menghemat waktu dan biaya.</p>
                </div>
            </div>
            <div class="row w-100 row-list mx-auto">
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <img src="{{ asset('assets/img/warehouseshipping/list2.png') }}" alt="{{ env('APP_NAME') }}"
                        style="width: 100% !important; max-height: 300px; object-fit: cover;">
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-center">
                    <h4>Pengiriman Melalui Jalur Udara</h4>
                    <p style="font-family: var(--font3)">Ketika perlu mengirimkan produk konsumen ke luar negeri, pengiriman
                        melalui udara menjadi pilihan
                        terbaik
                        untuk memastikan kecepatan dan keandalan. Zweena Adi Nugraha telah bekerja sama dengan beberapa
                        perusahaan ekspedisi udara. Dengan layanan ini, produk skincare dan kosmetik Anda akan tiba tepat
                        waktu dan
                        dalam kondisi terbaik, memenuhi kebutuhan pasar internasional dengan efisiensi maksimal.</p>
                </div>
            </div>
            <div class="row w-100 row-list flex-row-reverse mx-auto">
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <img src="{{ asset('assets/img/warehouseshipping/list3.png') }}" alt="{{ env('APP_NAME') }}"
                        style="width: 100% !important; max-height: 300px; object-fit: cover">
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-center">
                    <h4>Pengiriman Melalui Jalur Laut</h4>
                    <p style="font-family: var(--font3)">Pengiriman melalui laut menjadi pilihan terbaik untuk lokasi beda
                        pulau, ketika Anda membutuhkan
                        solusi
                        pengiriman yang ekonomis untuk jumlah barang yang besar dan tidak memerlukan waktu pengiriman yang
                        mendesak.
                        Zweena Adi Nugraha menyediakan layanan pengiriman laut yang handal dan efisien. Layanan ini
                        sangat cocok
                        digunakan ketika Anda memiliki jadwal pengiriman yang fleksibel dan ingin meminimalkan biaya
                        logistik.</p>
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
                <div class="accordion" id="faqAccordion">
                    @foreach ($faqs as $f)
                        <div class="accordion-item shadow-lg mb-3" style="border-radius: 10px;">
                            <h2 class="accordion-header" id="heading{{ $f->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $f->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $f->id }}" style="border-radius: 10px;">
                                    <i class="fa fa-search p-0 me-2" style="font-size:16px;"></i>
                                    <span class="question">{{ $f->question }}</span>
                                </button>
                            </h2>
                            <div id="collapse{{ $f->id }}" class="accordion-collapse collapse"
                                aria-labelledby="heading{{ $f->id }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="border-radius: 10px;">
                                    {{ $f->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
