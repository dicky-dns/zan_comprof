@extends('layouts.app')

<style>
    .turnkey-packaging-content-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
        letter-spacing: 1px;
    }

    .turnkey-packaging-content-body {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 20px;
        line-height: 1.8;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .card-packaging {
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: all 0.4s ease;
        display: flex;
        flex-direction: column;
        background: transparent;
        border: none;
    }

    .card-packaging:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .image-container {
        position: relative;
        overflow: hidden;
        /* border-bottom: 5px solid #ccc; */
        border-radius: 12px 12px 0 0;
    }

    .card-body {
        padding: 20px;
        background: #fff;
        border-radius: 0 0 12px 12px;
    }

    .card-body h5 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .card-body p {
        font-size: 1rem;
        color: #777;
        line-height: 1.5;
        text-align: justify;
    }

    .card-packaging img {
        width: 100%;
        height: auto;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .card-packaging:hover img {
        transform: scale(1.1);
    }

    @media (max-width: 768px) {
        .turnkey-packaging-content-title {
            font-size: 2rem;
        }

        .card-body p {
            font-size: 0.95rem;
        }

        .card-body h5 {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 576px) {
        .turnkey-packaging-content-body {
            padding: 0 15px;
        }
    }

    .container.mb-section {
        padding-top: 80px;
        padding-bottom: 80px;
        max-width: 90%;
    }
</style>
<style>
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
        letter-spacing: 1px;
    }

    .process-card {
        width: 100%;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .process-card:hover {
        transform: translateY(-5px);
    }

    .process-card-img {
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f8f8;
        overflow: hidden;
    }

    .process-card-img img {
        max-height: 100%;
        width: auto;
        object-fit: cover;
    }

    .process-card-body {
        padding: 15px;
        background-color: #fff;
    }

    .process-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
        margin-top: 10px;
    }

    @media (max-width: 768px) {
        .process-title {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .process-card {
            margin-bottom: 20px;
        }
    }
</style>
<style>
    .desain-label-title {
        font-family: var(--font1);
        letter-spacing: .5px;
        padding-top: 0;
        padding-bottom: 35px;
        font-size: 38px;
        text-align: center;
        font-weight: 700;
        color: var(--bs-primary);
        position: relative;
        z-index: 1;
    }

    .custom-section {
        background-color: #282828;
        padding: 60px 0;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 600;
        color: #fff;
        margin-bottom: 20px;
    }

    .section-content {
        font-family: 'Arial', sans-serif;
        font-size: 1.1rem;
        line-height: 1.6;
        color: #d0d0d0;
    }

    .text-column {
        padding-right: 30px;
    }

    .image-column {
        position: relative;
        padding-bottom: 0;
    }

    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 0;
    }

    .custom-image {
        width: 100%;
        border-radius: 8px;
        transition: transform 0.4s ease;
        display: block;
        margin: 0;
        padding: 0;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .image-container:hover .overlay {
        opacity: 1;
    }

    .image-container:hover .custom-image {
        transform: scale(1);
    }

    @media (max-width: 767px) {
        .section-title {
            font-size: 2rem;
        }

        .section-content {
            font-size: 1rem;
        }
    }
</style>

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/custompackaging/banner.png') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">Kemasan
                        Khusus</h1>
                    <p class="text-center" style="color: white">Kami memahami bahwa pengemasan yang baik sama pentingnya
                        dengan produk itu sendiri. Oleh karena itu, kami telah melakukan upaya khusus untuk menawarkan
                        banyak kemasan bergaya yang akan menonjol dan membedakan produk Anda dari pesaing.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <div class="row justify-content-center gx-5 px-section">
            <div class="col-12 text-center">
                <h3 class="section-title">Desain Kemasan Produk</h3>
                <p class="turnkey-packaging-content-body">
                    Temukan kemasan produk yang unik dan penuh gaya! Pilih desain yang sesuai dengan visi brand Anda, atau
                    buat desain yang benar-benar berbeda.
                </p>
            </div>
            <div class="col-12">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">
                    <div class="col">
                        <div class="card card-packaging artist-card rounded-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/custompackaging/minimalis.png') }}" alt="Kemasan Botol"
                                    class="img-fluid rounded-start">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kemasan Botol</h5>
                                <p class="card-text">Desain minimalis dengan sentuhan modern. Ideal untuk produk kecantikan
                                    dan perawatan tubuh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-packaging artist-card rounded-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/custompackaging/artistik.png') }}" alt="Kemasan Jar"
                                    class="img-fluid rounded-start">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kemasan Jar</h5>
                                <p class="card-text">Jar artistik dengan bentuk elegan, cocok untuk produk premium dan
                                    luxury.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-packaging artist-card rounded-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/custompackaging/ramahlingkungan.png') }}" alt="Kemasan Tube"
                                    class="img-fluid rounded-start">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kemasan Tube</h5>
                                <p class="card-text">Kemasan tube dengan desain ramah lingkungan yang sangat praktis untuk
                                    produk cair.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-packaging artist-card rounded-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/custompackaging/transparan.png') }}" alt="Kemasan Roll On"
                                    class="img-fluid rounded-start">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kemasan Roll On</h5>
                                <p class="card-text">Kemasan roll-on yang berfokus pada kepraktisan dan desain yang
                                    fungsional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-packaging artist-card rounded-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/custompackaging/ramahlingkungan.png') }}"
                                    alt="Kemasan Sachet" class="img-fluid rounded-start">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kemasan Sachet</h5>
                                <p class="card-text">Kemasan sachet yang ringkas dan praktis, cocok untuk produk sekali
                                    pakai.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-packaging artist-card rounded-4">
                            <div class="image-container">
                                <img src="{{ asset('assets/img/custompackaging/transparan.png') }}" alt="Kemasan Fungsional"
                                    class="img-fluid rounded-start">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kemasan Fungsional</h5>
                                <p class="card-text">Desain fungsional yang mengutamakan kegunaan tanpa mengurangi estetika.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-section" style="background-color: #1e497d; padding: 60px 0;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="text-column">
                        <h2 class="desain-label-title text-white">Desain Label Pada Wadah Kosmetik</h2>
                        <div class="section-content text-white">
                            <p>Kami memiliki banyak template desain label & kotak untuk semua produk formula stok kami.</p>
                            <p>Anda dapat menggunakan gaya desain label & kotak kami, desainer kami dapat mengubah logo
                                Anda.</p>
                            <p>Sebagai produsen perawatan kulit private label, kami telah bekerja sama dengan banyak pabrik
                                pengemasan selama bertahun-tahun. Kualitasnya terjamin, koordinasinya sempurna, dan waktu
                                produksinya sangat cepat, sangat menghemat waktu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="image-column">
                        <div class="image-container">
                            <img src="{{ asset('assets/img/custompackaging/bottom.png') }}" alt="Packaging Image"
                                class="img-fluid custom-image">
                            <div class="overlay">
                                <img src="{{ asset('assets/img/custompackaging/bottom-hover.png') }}" alt="Hovered Image"
                                    class="img-fluid overlay-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section mt-5">
        <h2 class="section-title text-center">Proses Pengemasan</h2>
        <div class="row px-section justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-center justify-content-center mb-4">
                <div class="process-card">
                    <div class="process-card-img">
                        <img src="{{ asset('assets/img/custompackaging/no1.png') }}" alt="Gambar 1" class="img-fluid">
                    </div>
                    <div class="process-card-body">
                        <p class="process-title">Electroplating</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-center justify-content-center mb-4">
                <div class="process-card">
                    <div class="process-card-img">
                        <img src="{{ asset('assets/img/custompackaging/no2.png') }}" alt="Gambar 2" class="img-fluid">
                    </div>
                    <div class="process-card-body">
                        <p class="process-title">Stempel Panas</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-center justify-content-center mb-4">
                <div class="process-card">
                    <div class="process-card-img">
                        <img src="{{ asset('assets/img/custompackaging/no3.png') }}" alt="Gambar 3" class="img-fluid">
                    </div>
                    <div class="process-card-body">
                        <p class="process-title">Matte</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-center justify-content-center mb-4">
                <div class="process-card">
                    <div class="process-card-img">
                        <img src="{{ asset('assets/img/custompackaging/no4.png') }}" alt="Gambar 4" class="img-fluid">
                    </div>
                    <div class="process-card-body">
                        <p class="process-title">Screen Printing</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex align-items-center justify-content-center mb-4">
                <div class="process-card">
                    <div class="process-card-img">
                        <img src="{{ asset('assets/img/custompackaging/no5.png') }}" alt="Gambar 5" class="img-fluid">
                    </div>
                    <div class="process-card-body">
                        <p class="process-title">Penyemprotan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extrascript')
    <script>
        $(document).ready(function() {
            $('.custom-packaging-column-right').hover(function() {
                $('.custom-packaging-image-hover').toggleClass('visible');
            })
        });
    </script>
@endsection
