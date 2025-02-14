@extends('layouts.app')

<style>
    .process-card {
        border: 1px solid #f1f1f1;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 30px;
        text-align: center;
        height: 100%;
    }

    .process-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .process-card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .process-card .card-title {
        font-size: 1.6rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        margin-top: 15px;
    }

    .process-card .card-text {
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
        padding: 0 15px;
        margin-bottom: 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .col-12 {
        display: flex;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .process-card {
            margin-bottom: 20px;
        }

        .process-card img {
            width: 100%;
        }
    }
</style>

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/designservices/banner2.jpg') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">Layanan
                        Desain</h1>
                    <p class="text-center" style="color: white">Kami memiliki tim spesialis desain kreatif yang akan membantu
                        Anda dalam keseluruhan proses desain.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-6 text-center">
                <img class="design-service-card img-fluid rounded shadow-sm" style="max-height: 300px; object-fit: cover;"
                    src="{{ asset('assets/img/designservices/card1.jpg') }}" alt="{{ env('APP_NAME') }}" />
            </div>
            <div class="col-12 col-lg-6">
                <div class="design-service-top text-lg-start text-center">
                    <h2 class="design-service-top-title fw-bold mb-3">
                        Departemen Kreatif
                    </h2>
                    <p class="design-service-top-body text-muted">
                        Kami memiliki tim spesialis desain kreatif yang akan membantu Anda dalam keseluruhan proses desain.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light mb-section pb-3 pt-4">
        <div class="container">
            <div class="row design-service-category justify-content-center px-section">
                <h2 class="section-title">Jasa Desain <span>Tersedia</span></h2>
                <div class="container">
                    <div class="row align-items-center mb-4 pb-4 border-bottom">
                        <div class="col-md-6 order-md-2 text-center">
                            <img class="rounded-circle design_ser_image mx-auto d-block"
                                src="{{ asset('assets/img/designservices/pic1.png') }}" alt="{{ env('APP_NAME') }}"
                                style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-md-6 order-md-1">
                            <h5 class="design-service-category-title">Kebutuhan Desain</h5>
                            <p style="font-family: var(--font3); font-size: 15px">
                                Tim desain berpengalaman memberi Anda berbagai gaya desain kotak warna kemasan, gaya logo,
                                gaya wadah, ukuran wadah, dan elemen produk yang cocok. Pelajari pasar pelanggan Anda,
                                desain dapat mewakili merek Anda yang unik dan desain produk yang menarik.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4 pb-4 border-bottom">
                        <div class="col-md-6 text-center">
                            <img class="rounded-circle design_ser_image mx-auto d-block"
                                src="{{ asset('assets/img/designservices/pic2.jpg') }}" alt="{{ env('APP_NAME') }}"
                                style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-md-6">
                            <h5 class="design-service-category-title">Warna Kustom</h5>
                            <p style="font-family: var(--font3); font-size: 15px">
                                Tim desain akan mencocokkan warna sesuai dengan gaya merek Anda. Anda juga dapat mengirimkan
                                nomor warna Pantone yang Anda butuhkan, kemudian kami akan menyesuaikannya sesuai kebutuhan
                                Anda.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4 pb-4 border-bottom">
                        <div class="col-md-6 order-md-2 text-center">
                            <img class="rounded-circle design_ser_image mx-auto d-block"
                                src="{{ asset('assets/img/designservices/cat3.png') }}" alt="{{ env('APP_NAME') }}"
                                style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-md-6 order-md-1">
                            <h5 class="design-service-category-title">Desain Label</h5>
                            <p style="font-family: var(--font3); font-size: 15px">
                                Tim desain profesional mampu menyesuaikan desain sesuai keinginan. Desain label adalah
                                visual untuk
                                menyampaikan detail produk yang dirancang dengan cermat memberikan informasi hukum tentang
                                produk,
                                seperti Exp date, ingredients, cara pakai, dll., dengan indah dan tepat.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4 pb-4 border-bottom">
                        <div class="col-md-6 text-center">
                            <img class="rounded-circle design_ser_image mx-auto d-block"
                                src="{{ asset('assets/img/designservices/pic4.jpg') }}" alt="{{ env('APP_NAME') }}"
                                style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-md-6">
                            <h5 class="design-service-category-title">Bahan Label atau Packaging</h5>
                            <p style="font-family: var(--font3); font-size: 15px">
                                Ada banyak pilihan label dan beragam macam packaging. Tim desain akan merekomendasikan bahan
                                dan
                                packaging kemasan yang berbeda sesuai dengan gaya merek Anda.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-md-6 order-md-2 text-center">
                            <img class="rounded-circle design_ser_image mx-auto d-block"
                                src="{{ asset('assets/img/designservices/cat5.png') }}" alt="{{ env('APP_NAME') }}"
                                style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="col-md-6 order-md-1">
                            <h5 class="design-service-category-title">Proses Percetakan Khusus</h5>
                            <p style="font-family: var(--font3); font-size: 15px">
                                Kami menyediakan jasa percetakan kemasan berkualitas tinggi untuk berbagai keperluan Anda.
                                Layanan kami mencakup pembuatan stiker dan printing dengan berbagai pilihan bahan dan
                                finishing
                                yang dapat disesuaikan dengan kebutuhan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <h2 class="h1 mb-5 text-center text-primary" style="font-weight: bold">Proses Perancangan</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="process-card">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('assets/img/designservices/proses1.png') }}" alt="{{ env('APP_NAME') }}">
                    </div>
                    <h4 class="card-title">Komunikasi Konsep</h4>
                    <p class="card-text">Kami meminta Anda mengirimkan referensi yang Anda sukai, yang membantu kami
                        memahami apa yang Anda cari. Konsep merek Anda, seperti tampilan mewah atau sederhana, akan sangat
                        membantu kami menafsirkan visi Anda lebih baik.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="process-card">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('assets/img/designservices/proses2.png') }}" alt="{{ env('APP_NAME') }}">
                    </div>
                    <h4 class="card-title">Mock-up Penyelesaian Desain</h4>
                    <p class="card-text">Kami akan memberikan desain mock-up untuk Anda tinjau. Setelah memberikan masukan,
                        kami akan melakukan revisi, jika diperlukan, untuk memastikan desain sesuai dengan keinginan Anda.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="process-card">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('assets/img/designservices/proses3.png') }}" alt="{{ env('APP_NAME') }}">
                    </div>
                    <h4 class="card-title">Sampling</h4>
                    <p class="card-text">Setelah desain selesai, kami akan mencetak desain pada produk nyata untuk melihat
                        hasil akhirnya. Anda dapat melihat dan memverifikasi tampilan produk tersebut sebelum diproduksi
                        lebih lanjut.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
