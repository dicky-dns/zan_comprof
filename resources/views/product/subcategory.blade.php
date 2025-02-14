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
        /* background-color: #f5f3f3; */
        padding: 20px 0;
    }

    .section-title-subcategory {
        font-size: 32px;
        padding-bottom: 20px;
        font-weight: bold;
        font-family: var(--font1);
        color: var(--bs-grey-090);
        text-align: center;
    }

    .trusted-label,
    .factory {
        font-size: 30px;
        font-weight: bold;
        color: var(--bs-grey-100);
        font-family: var(--font1);
    }

    .product-type {
        font-size: 30px;
        font-weight: bold;
        color: var(--bs-primary);
        font-family: var(--font1);
    }

    .description {
        font-family: var(--font3);
        font-size: 15px;
        color: var(--bs-grey-080);
        margin-bottom: 20px;
        margin-top: 25px;
        text-align: justify;
    }

    .btn-see-more {
        margin: 25px 0;
        padding: 10px;
        width: 300px;
        background-color: var(--bs-primary);
        color: #fff;
        text-align: center;
        display: inline-block;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-see-more:hover {
        background-color: var(--bs-blue-110);
        opacity: .95;
        color: #fff !important;
        font-weight: bold;
    }

    .customize-list .customize-item {
        margin-bottom: 5px;
        color: var(--bs-grey-100);
        font-family: var(--font3);
        font-size: 15px;
        color: var(--bs-grey-080);
    }

    .customize-list p {
        margin-bottom: 10px;
    }

    .custom-check {
        font-weight: bold;
        color: var(--bs-grey-080);
        font-size: 1.2em;
    }

    .icon-container {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-top: 20px;
        flex-wrap: wrap;
    }

    .icon-circle {
        width: 100px;
        height: 100px;
        border-radius: 5%;
        background-color: var(--bs-blue-110);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #fff;
        margin: 10px;
        position: relative;
    }

    .icon-text {
        font-size: 12px;
        color: #fff;
        margin-top: 5px;
        text-align: center;
    }

    .img-fluid {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .img-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 5px;
    }

    .img-hover:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .icon-container-manufacture {
        display: flex;
        justify-content: center;
        gap: 25px;
        margin-top: 20px;
        flex-wrap: wrap;
    }

    .icon-manufature {
        margin-bottom: 15px;
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 48px;
    }

    .icon-manufature i {
        color: var(--bs-blue-110);
    }

    .icon-manufacture-text {
        font-size: 14px;
        color: var(--bs-grey-060) !important;
        text-align: center;
        font-family: var(--font3);
        margin-top: 10px;
        width: 120px;
        font-weight: bold;
    }

    /* Responsiveness */
    @media (max-width: 575px) {

        /* Mobile devices */
        .section-title-subcategory {
            font-size: 20px;
            padding-bottom: 10px;
        }

        .trusted-label,
        .factory {
            font-size: 20px;
        }

        .product-type {
            font-size: 20px;
        }

        .description {
            font-size: 14px;
            margin-top: 15px;
        }

        .btn-see-more {
            width: 180px;
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            font-size: 20px;
        }

        .icon-text {
            font-size: 10px;
        }
    }

    @media (min-width: 576px) and (max-width: 991px) {

        /* Tablets */
        .section-title-subcategory {
            font-size: 25px;
        }

        .trusted-label,
        .factory {
            font-size: 25px;
        }

        .product-type {
            font-size: 25px;
        }

        .description {
            font-size: 15px;
        }

        .btn-see-more {
            width: 180px;
        }

        .icon-circle {
            width: 90px;
            height: 90px;
            font-size: 22px;
        }

        .icon-text {
            font-size: 11px;
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

        .trusted-label,
        .product-type,
        .factory {
            text-align: center;
        }
    }

    @media (min-width: 768px) {

        .trusted-label,
        .product-type,
        .factory {
            text-align: left;
        }
    }
</style>

@section('content')

    <body class="page-specific">
        <div class="custom-container custom-section py-5">
            <div class="row align-items-center my-1 mx-2 mx-lg-5">
                <div class="col-md-6 custom-left-margin">
                    <h4 class="trusted-label">Mitra Terpercaya untuk</h4>
                    <h4 class="product-type">{{ $subcategory->name }}</h4>
                    <h4 class="factory">Produsen Berkualitas Tinggi</h4>
                    <p class="description">
                        Kami mempermudah Anda untuk membangun merek Anda dengan menyediakan solusi lengkap untuk produksi
                        label pribadi OEM/ODM.
                    </p>
                </div>
                <div class="col-md-6 mt-1 mb-2 mb-lg-5">
                    <div>
                        <img class="d-block w-100 h-100" src="{{ asset('assets/img/subcategory/' . $subcategory->image) }}"
                            alt="{{ $subcategory->name }}" style="object-fit: cover;" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-container mb-lg-5 py-2" style="background-color: #f3f8ff">
            <div class="row align-items-center my-3 mx-2 mx-lg-5">
                <div class="col-md-4 text-center text-md-start custom-left-margin">
                    <h4 class="trusted-label" style="color: var(--bs-primary)">Label Pribadi</h4>
                    <h4 class="product-type">{{ $subcategory->name }}</h4>
                </div>
                <div class="col-md-8 mt-lg-5 mb-2 mb-lg-5">
                    <p class="description">
                        {!! $category->description !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="custom-container container-product mb-section">
            <div class="row position-relative px-section">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-6 col-lg-3 p-2 p-lg-2">
                                <div class="card product-col px-lg-2 shadow-sm" style="border-radius: 10px">
                                    <a class="thumbnail" href="{{ route('produkdetail', $product->slug) }}">
                                        <img class="card-img-top w-100"
                                            src="{{ asset('assets/img/product/' . $product->image->first()->image) }}"
                                            alt="{{ $product->name }}" style="object-fit: cover; aspect-ratio:1/1;"
                                            loading="lazy">
                                    </a>
                                    <div class="card-body entry-wrapper d-flex flex-column">
                                        <h6 class="card-title entry-title" style="margin-bottom: -50px !important"><a
                                                href="{{ route('produkdetail', $product->slug) }}">{{ $product->name }}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn-see-more" href="{{ route('list-subkategori', ['slug' => $subcategory->slug]) }}">Lihat
                    Lainnya</a>
            </div>
        </div>

        <div class="center-banner mb-section" style="background-image: url({{ asset('assets/img/banner-tengah.jpg') }})">
            <div class="bg py-5">
                <div class="container">
                    <div class="row text-center px-section align-items-center py-5 py-md-3 center-banner-row">
                        <div class="col-md-12 text-center">
                            <p class="left-banner-body">
                                {{ strip_tags($subcategory->description) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-section">
            <h2 class="section-title-subcategory">Sesuaikan Formula {{ $subcategory->name }} Anda</h2>
            <p class="px-section"
                style="font-size: 15px; font-family: var(--font3); color: var(--bs-grey-080); line-height: 24px;">
                Kami menawarkan layanan untuk menciptakan formula unik sesuai kebutuhan Anda, termasuk produk seperti
                {{ $subcategory->name }}. Produk kami hanya menggunakan bahan alami dan organik yang terjamin kualitasnya.
                Kami juga menyediakan layanan desain eksklusif yang meliputi kemasan produk, label, dan kotak warna yang
                disesuaikan dengan merek dan target pasar Anda.
            </p>
            <div class="customize-list" style="margin-left: 26px">
                <p class="customize-item"><i class="fas fa-check me-2"
                        style="font-size: 1.2em; font-weight: bold; color: var(--bs-grey-080)"></i> Ciptakan formula
                    {{ $subcategory->name }} yang alami dan unik yang disesuaikan dengan kebutuhan Anda.</p>
                <p class="customize-item"><i class="fas fa-check me-2"
                        style="font-size: 1.2em; font-weight: bold; color: var(--bs-grey-080)"></i> Menggunakan hanya
                    bahan-bahan alami dan organik 100% terjamin untuk produk {{ $subcategory->name }}.</p>
                <p class="customize-item"><i class="fas fa-check me-2"
                        style="font-size: 1.2em; font-weight: bold; color: var(--bs-grey-080)"></i> Desain produk
                    {{ $subcategory->name }} yang sesuai dengan merek dan basis pelanggan Anda.</p>
            </div>
            <div class="icon-container">
                <div class="icon-circle">
                    <i class="fas fa-flask"></i>
                    <span class="icon-text">Teruji</span>
                </div>
                <div class="icon-circle">
                    <i class="fas fa-times-circle"></i>
                    <span class="icon-text">No Paraben</span>
                </div>
                <div class="icon-circle">
                    <i class="fas fa-leaf"></i>
                    <span class="icon-text">Alami</span>
                </div>
                <div class="icon-circle">
                    <i class="fas fa-seedling"></i>
                    <span class="icon-text">Vegan</span>
                </div>
                <div class="icon-circle">
                    <i class="fas fa-recycle"></i>
                    <span class="icon-text">Berkelanjutan</span>
                </div>
                <div class="icon-circle">
                    <i class="fas fa-water"></i>
                    <span class="icon-text">No Sulfat</span>
                </div>
            </div>
        </div>

        <div class="container mb-section mt-lg-5">
            <h2 class="section-title-subcategory">Perusahaan Produksi {{ $subcategory->name }}</h2>
            <p class="px-section"
                style="font-size: 15px; font-family: var(--font3); color: var(--bs-grey-080); line-height: 24px;">
                Perusahaan kami adalah pabrik dengan sejarah panjang di industri manufaktur. Kami memiliki tim R&D dan tim
                penjualan yang dapat diandalkan, yang dapat menyesuaikan formula unik {{ $subcategory->name }} berkualitas
                tinggi sesuai dengan kebutuhan pelanggan. Kami menyediakan layanan kustomisasi OEM/ODM satu atap untuk label
                pribadi, kemasan, percetakan, dan desain. Kami memiliki banyak pengalaman positif dalam memproduksi
                {{ $subcategory->name }} untuk klien besar, sehingga kami dapat menawarkan ide menarik dan kualitas unik.
                Kami adalah grosir pabrik {{ $subcategory->name }} dengan pengalaman dan kemampuan yang kaya. Pengendalian
                kualitas dan keamanan yang ketat - QC material kemasan, QC bahan baku, QC air yang dimurnikan, QC produk
                setengah jadi, QC produk jadi, QC kemasan.
            </p>
            <div class="icon-container-manufacture">
                <div class="icon-manufature">
                    <img src="{{ asset('assets/img/icon-subcategory/1.png') }}" alt="" width="120px">
                    <span class="icon-manufacture-text">Konsultasi + pengambilan sampel 1-3 hari</span>
                </div>
                <div class="icon-manufature">
                    <img src="{{ asset('assets/img/icon-subcategory/2.png') }}" alt="" width="140px">
                    <span class="icon-manufacture-text">Desain kemasan 1-3 hari</span>
                </div>
                <div class="icon-manufature">
                    <img src="{{ asset('assets/img/icon-subcategory/3.png') }}" alt="" width="120px">
                    <span class="icon-manufacture-text">Produksi kemasan 5-10 hari</span>
                </div>
                <div class="icon-manufature">
                    <img src="{{ asset('assets/img/icon-subcategory/4.png') }}" alt="" width="120px">
                    <span class="icon-manufacture-text">Pengujian formula & pengisian 10-15 hari</span>
                </div>
                <div class="icon-manufature">
                    <img src="{{ asset('assets/img/icon-subcategory/5.png') }}" alt="" width="120px">
                    <span class="icon-manufacture-text">Kemasan akhir 3-5 hari</span>
                </div>
                <div class="icon-manufature">
                    <img src="{{ asset('assets/img/icon-subcategory/6.png') }}" alt="" width="120px">
                    <span class="icon-manufacture-text">Inspeksi akhir 1-3 hari</span>
                </div>
                <div class="icon-manufature">
                    <img src="{{ asset('assets/img/icon-subcategory/7.png') }}" alt="" width="120px">
                    <span class="icon-manufacture-text">Pengiriman segera</span>
                </div>
            </div>
        </div>

        <div class="container pb-section">
            <h2 class="section-title-subcategory mb-lg-3">Pertanyaan yang Sering Ditanyakan</h2>
            <div class="row px-section">
                <div class="col-md-6 col-12">
                    <div class="card px-md-4 mb-p border-1 mb-4 shadow-lg" style="border-radius: 15px;">
                        <div class="card-body px-lg-4 pb-5 pt-4">
                            <div class="row">
                                <div class="col-md-12 p-4">
                                    <div class="contact-form-title mb-3">
                                        Kirimkan Pesan kepada Kami
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
                                        <button class="btn btn-primary btn-block w-100" id="btnSubmitForm"
                                            type="submit">Kirim</button>
                                    </form>
                                    <p class="mb-0 mt-2" id="successMessage" style="display: none"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="faqs faqs-section no-select">
                        @foreach ($faqs as $f)
                            <div class="faq accordion shadow" style="border-radius: 10px">
                                <div class="question-wrapper">
                                    <div class="d-flex align-items-center"><span class="q-mark d-block"><i
                                                class="fa fa-search p-0"
                                                style="font-size:14px; color: #1e497d "></i></span>
                                        <p class="question" title=""> {{ $f->question }} </p>
                                    </div><i class="fa fa-caret-down" style="color: #1e497d"></i>
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

        <div class="container mb-section mt-lg-5">
            <h2 class="section-title-subcategory">Kekuatan Pabrik</h2>
            <div class="row">
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{ asset('assets/img/factory/1.png') }}" class="img-fluid img-hover"
                        alt="Factory Image 1">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{ asset('assets/img/factory/2.png') }}" class="img-fluid img-hover"
                        alt="Factory Image 2">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{ asset('assets/img/factory/3.png') }}" class="img-fluid img-hover"
                        alt="Factory Image 3">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{ asset('assets/img/factory/4.png') }}" class="img-fluid img-hover"
                        alt="Factory Image 4">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{ asset('assets/img/factory/5.png') }}" class="img-fluid img-hover"
                        alt="Factory Image 5">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{ asset('assets/img/factory/6.png') }}" class="img-fluid img-hover"
                        alt="Factory Image 6">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{ asset('assets/img/factory/7.png') }}" class="img-fluid img-hover"
                        alt="Factory Image 7">
                </div>
                <div class="col-6 col-lg-3 mb-4">
                    <img src="{{ asset('assets/img/factory/8.png') }}" class="img-fluid img-hover"
                        alt="Factory Image 8">
                </div>
            </div>
        </div>
    </body>
@endsection

@section('extrascript')
    <script>
        $(document).ready(function() {
            $(".category-list").on({
                mouseenter: function() {
                    $(this).find('.subcategory-list').addClass('show');
                    $(this).find('.fa').removeClass('fa-caret-right').addClass('fa-caret-left');
                },
                mouseleave: function() {
                    $(this).find('.subcategory-list').removeClass('show');
                    $(this).find('.fa').removeClass('fa-caret-left').addClass('fa-caret-right');
                }
            });
        });
    </script>
@endsection
