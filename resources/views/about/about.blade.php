@extends('layouts.app')

<style>
    .box-about-why {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .box-about-why:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .card.box-about-why:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .icon-about-why {
        font-size: 2.5rem;
        color: var(--bs-blue-110);
        margin-bottom: 15px;
    }

    .icon-about-why i {
        display: inline-block;
    }

    .title-about-why {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .body-about-why {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .title-about-why {
            font-size: 1.25rem;
        }

        .body-about-why {
            font-size: 0.95rem;
        }
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

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/about/banner.png') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">TENTANG
                        KAMI</h1>
                    <p class="text-center" style="color: white">Menjaga kualitas adalah prioritas dan bentuk integrasi kami
                        terhadap kepuasan pelanggan</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-section">
        <div class="row px-section">
            <div class="col-12 col-lg-7">
                <div class="company-name d-flex justify-content-between me-lg-4">
                    <h3 class="about-main-title">Zweena Adi Nugraha</h3>
                </div>
                <div class="company-video position-relative me-lg-4">
                    <video class="about-video" poster="{{ asset('assets/img/about/cover.png') }}" controls>
                        <source src="{{ asset('assets/img/about/comprof.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="company-wrap bg-secondary">
                    <ul class="list-unstyled">
                        <li>
                            <h3>
                                Profil Perusahaan
                            </h3>
                            <p>
                                CV. Zweena Adi Nugraha merupakan perusahaan yang bergerak di bidang jasa maklon kosmetik.
                                Yang beroperasi sejak tahun 2015.
                                Didukung oleh tenaga ahli sesuai bidangnya. Kami merupakan perusahaan maklon kosmetik yang
                                sudah berpengalaman bertahun - tahun
                                dan melayani pemesanan kosmetik dalam jumlah sedikit maupun besar. Zweena terbiasa melayani
                                kebutuhan kosmetik dan personal care
                                mulai dari klinik kecantikan, spa, hotel, pusat hiburan hingga untuk kebutuhan bisnis
                                sendiri (private label cosmetic) untuk perseorangan.
                            </p>
                            <p>
                                Saat ini CV. Zweena Adi Nugraha tumbuh dan berkembang membangun produk yang berkualitas dan
                                pelayanan yang lebih baik, serta selalu berusaha
                                memenuhi kebutuhan dan kepuasan konsumen. Di usia yang masih muda, CV. Zweena Adi Nugraha
                                selalu berusaha untuk selalu mengembangkan produk-produk
                                mengikuti tren masa kini dengan menciptakan berbagai macam produk kosmetik yang berkualitas
                                dan unggulan di pasaran dengan menggunakan bahan yang
                                berkualitas dan aman.
                            </p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-section">
        <div class="container">
            <div class="pt-5 pb-3 text-center">
                <h2 class="about-main-title">Mengapa Memilih Kami?</h2>
            </div>
            <div class="row row-why px-md-1 py-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card box-about-why shadow"
                        style="min-height: 420px; border-radius: 12px; transition: transform 0.3s ease-in-out; overflow: hidden;">
                        <div class="card-body text-center">
                            <div class="icon-about-why mb-3">
                                <i class="fas fa-seedling" style="font-size: 40px; color: #28a745;"></i>
                            </div>
                            <h3 class="title-about-why">Bahan Baku Berkualitas Tinggi</h3>
                            <p class="body-about-why mt-3">
                                Kami hanya menggunakan bahan baku terbaik yang aman dan efektif untuk memastikan produk Anda
                                memenuhi standar kualitas tertinggi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card box-about-why shadow"
                        style="min-height: 420px; border-radius: 12px; transition: transform 0.3s ease-in-out; overflow: hidden;">
                        <div class="card-body text-center">
                            <div class="icon-about-why mb-3">
                                <i class="fas fa-industry" style="font-size: 40px; color: #007bff;"></i>
                            </div>
                            <h3 class="title-about-why">Proses Produksi Berstandar Internasional</h3>
                            <p class="body-about-why mt-3">
                                Fasilitas kami dilengkapi dengan teknologi modern dan proses produksi yang memenuhi standar
                                internasional untuk menjamin keamanan dan efektifitas produk.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card box-about-why shadow"
                        style="min-height: 420px; border-radius: 12px; transition: transform 0.3s ease-in-out; overflow: hidden;">
                        <div class="card-body text-center">
                            <div class="icon-about-why mb-3">
                                <i class="fas fa-user-tie" style="font-size: 40px; color: #ffc107;"></i>
                            </div>
                            <h3 class="title-about-why">Tim Ahli Dan Berpengalaman</h3>
                            <p class="body-about-why mt-3">
                                Tim kami terdiri dari ahli formulasi, teknisi, dan konsultan bisnis yang siap membantu Anda
                                dari
                                konsep hingga produk jadi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card box-about-why shadow"
                        style="min-height: 420px; border-radius: 12px; transition: transform 0.3s ease-in-out; overflow: hidden;">
                        <div class="card-body text-center">
                            <div class="icon-about-why mb-3">
                                <i class="fas fa-hands-helping" style="font-size: 40px; color: #17a2b8;"></i>
                            </div>
                            <h3 class="title-about-why">Layanan One Stop Solution</h3>
                            <p class="body-about-why mt-3">
                                Mulai dari riset dan pengembangan, formulasi, desain kemasan, hingga produksi dan
                                pengiriman,
                                kami menyediakan solusi lengkap untuk kebutuhan bisnis kecantikan Anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card box-about-why shadow"
                        style="min-height: 420px; border-radius: 12px; transition: transform 0.3s ease-in-out; overflow: hidden;">
                        <div class="card-body text-center">
                            <div class="icon-about-why mb-3">
                                <i class="fas fa-balance-scale" style="font-size: 40px; color: #fd7e14;"></i>
                            </div>
                            <h3 class="title-about-why">Harga Terbaik</h3>
                            <p class="body-about-why mt-3">
                                Anda dapat mendapatkan produk berkualitas tinggi dengan biaya yang kompetitif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mb-section pb-lg-5">
        <h2 class="section-title">Standard & Kualitas</h2>
        <div class="row about-sq px-section">
            <div class="col-12 col-lg-5">
                <div class="img-about-sq">
                    <img src="{{ asset('assets/img/about/sq1.webp') }}" loading="lazy" alt="{{ env('APP_NAME') }}">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="content-sq">
                    <div class="content-sq-body">
                        <h2>Sertifikasi CPKB</h2>
                        <p>CV. Zweena Adi Nugraha telah mendapatkan Sertiﬁkasi CPKB (Cara Pembuatan Kosmetik dengan Benar)
                            dalam pembuatan kosmetik dan personal care.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about-sq flex-row-reverse px-section">
            <div class="col-12 col-lg-5">
                <div class="img-about-sq">
                    <img src="{{ asset('assets/img/about/sq2.webp') }}" loading="lazy" alt="{{ env('APP_NAME') }}">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="content-sq">
                    <div class="content-sq-body">
                        <h2>Pengawasan ketat oleh QC</h2>
                        <p>QC atau Quality Control kami berperan sebagai pengawas kualitas produk dimulai dari penimbangan
                            bahan baku, produksi hingga produk jadi sampai
                            ke tangan konsumen. Semua benar-benar melewati proses pengecekan dan pengawasan yang ketat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about-sq mb-0 px-section">
            <div class="col-12 col-lg-5">
                <div class="img-about-sq">
                    <img src="{{ asset('assets/img/about/sq3.webp') }}" loading="lazy" alt="{{ env('APP_NAME') }}">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="content-sq">
                    <div class="content-sq-body">
                        <h2>Pengujian lab bahan baku yang akan digunakan</h2>
                        <p>Pengujian bahan baku oleh ahli RnD (Riset and Development) yang kompeten dan handal untuk
                            memastikan bahan baku yang digunakan aman dan teruji kualitasnya.
                            Tak jarang kami melibatkan pihak ke-3 untuk melakukan pengujian lab secara lebih lanjut.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <h2 class="section-title">Sertifikasi</h2>
        <div class="row px-section">
            <div class="col-12 col-lg-4">
                <div class="card border-0">
                    <div class="card-body d-flex flex-column">
                        <img class="mx-auto" src="{{ asset('assets/img/about/halal.png') }}" alt="{{ env('APP_NAME') }}"
                            height="150px">
                        <p class="text-center mt-3 mb-0">
                            Telah memenuhi uji standar halal dari Majelis Ulama Indonesia
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card border-0">
                    <div class="card-body d-flex flex-column">
                        <img class="mx-auto" src="{{ asset('assets/img/about/bpom.png') }}" alt="{{ env('APP_NAME') }}"
                            height="150px">
                        <p class="text-center mt-3 mb-0">
                            Telah memenuhi ijin edar dari Badan Pengawasan Obat dan Makanan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card border-0">
                    <div class="card-body d-flex flex-column">
                        <img class="mx-auto" src="{{ asset('assets/img/about/cpkb.png') }}" alt="{{ env('APP_NAME') }}"
                            height="150px">
                        <p class="text-center mt-3 mb-0">
                            Telah memenuhi persyaratan Cara Pembuatan Kosmetik yang Baik
                        </p>
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
                    style="border-radius: 10px; border: 2px solid #ddecff;">
                    <div class="card-body px-lg-4 pb-3 pt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-form-title mb-3">
                                    Kirimkan pesan kepada kami
                                </div>

                                <form id="contactform">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <input class="form-control" id="cname" name="name" type="text"
                                            required placeholder="Nama">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input class="form-control" id="cname" name="email" type="email"
                                            required placeholder="E-mail">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input class="form-control" id="cname" name="whatsapp" type="text"
                                            required maxlength="25" placeholder="No Whatsapp">
                                    </div>
                                    <div class="form-group mb-2">
                                        <textarea class="form-control" id="cmessage" name="message" required cols="30" rows="5"
                                            placeholder="Pesan"></textarea>
                                    </div>
                                    <!-- Mengurangi margin bawah tombol -->
                                    <button class="btn btn-primary btn-block w-100 rounded-2 mt-3" id="btnSubmitForm"
                                        type="submit">Kirim</button>
                                </form>
                                <p class="mb-0 mt-2" id="successMessage" style="display: none"> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
