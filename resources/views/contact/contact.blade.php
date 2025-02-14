@extends('layouts.app')

<style>
    .btn-contact {
        margin: 25px 0 0;
        padding: 10px;
        width: 100%;
        background-color: var(--bs-primary);
        color: #fff;
        border: none;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-contact:hover {
        background-color: var(--bs-blue-110);
        opacity: .95;
        color: #fff !important;
        font-weight: bold;
        border: 1px solid var(--bs-primary);
    }

    .section-title {
        margin-top: 50px;
        font-size: 34px;
        padding-bottom: 20px;
        font-weight: bold;
        font-family: var(--font1);
        color: var(--bs-grey-090);
        text-align: center;
    }

    .subtitle {
        font-size: 18px;
        padding-bottom: 20px;
        font-family: var(--font1);
        color: var(--bs-grey-090);
        text-align: center;
    }

    .contact-container {
        margin-top: 40px;
    }

    .list-contact-link {
        margin: 10px 0;
    }

    .list-contact-link a {
        color: var(--bs-primary);
        text-decoration: none;
        font-size: 18px;
        display: flex;
        align-items: center;
    }

    .list-contact-link a:hover {
        color: var(--bs-blue-110);
        text-decoration: underline;
    }

    .contact-item-title {
        font-size: 20px;
        font-weight: bold;
    }
</style>

@section('content')
    <div class="page-hero mb-section"
        style="background-image: url({{ asset('assets/img/about/banner.png') }}); height: 300px; background-size: cover; background-position: center;">
        <div class="page-hero-content d-flex justify-content-center align-items-center">
            <h1 class="page-title text-white text-center">Kontak Kami</h1>
        </div>
    </div>

    <div class="container mb-section">
        <div class="row">
            <div class="col-lg-6 p-4">
                <div class="card shadow p-4" style="border-radius: 10px;">
                    <div class="card-body">
                        <h2 class="section-title">Kirim Pesan</h2>
                        <p class="subtitle">Isi formulir di bawah ini, dan kami akan segera menghubungi Anda!</p>
                        <form id="contactform">
                            @csrf
                            <div class="form-group mb-3">
                                <input class="form-control" name="name" type="text" required
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" name="email" type="email" required
                                    placeholder="Alamat Email">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" name="whatsapp" type="text" required maxlength="25"
                                    placeholder="No Telepon">
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control" name="message" required rows="5" placeholder="Pesan"></textarea>
                            </div>
                            <button class="btn-contact" type="submit">Kirim Pesan</button>
                        </form>
                        <p class="mt-3" id="successMessage" style="display: none; color: green;">Pesan berhasil dikirim!
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-4">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="subtitle">Jangan ragu untuk menghubungi kami melalui kontak berikut:</p>
                <div class="list-contact-link">
                    <a href="https://wa.me/6282134957409" target="_blank">
                        <i class="fa fa-whatsapp me-2"></i>0821 3495 7409
                    </a>
                </div>
                <div class="list-contact-link">
                    <a href="mailto:marketing@zweena.co.id" target="_blank">
                        <i class="fa fa-envelope me-2"></i>marketing@zweena.co.id
                    </a>
                </div>
                <div class="list-contact-link">
                    <a href="https://www.facebook.com/zweena.indonesia/" target="_blank">
                        <i class="fa fa-facebook me-2"></i>Halaman Facebook
                    </a>
                </div>
            </div>
        </div>

        <div class="row contact-container mt-5">
            <h2 class="section-title">Kunjungi Kami</h2>
            <div class="col-md-6">
                <div class="mb-3">
                    <p><i class="fas fa-map-marker-alt me-2"></i><strong>Alamat Pabrik:</strong></p>
                    <p>Dk. Bulurejo, Ds. Krajan, Kec. Gatak, Kab. Sukoharjo, Jawa Tengah (57557)</p>
                </div>
                <div>
                    <p><i class="fas fa-clock me-2"></i><strong>Jam Kerja:</strong></p>
                    <p>Senin - Sabtu, 08:00 - 17:00 WIB</p>
                </div>
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15818.848605360685!2d110.72747178715821!3d-7.606270199999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1564ea3f0fc9%3A0x58084d6e685e75db!2sCV.%20Zweena%20Adi%20Nugraha!5e0!3m2!1sid!2sid!4v1737094866243!5m2!1sid!2sid"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
