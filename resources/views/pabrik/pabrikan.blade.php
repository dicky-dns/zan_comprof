@extends('layouts.app')

<link href="{{ asset('assets/frontend/css/pabrikan.css' . '?v=' . time()) }}" rel="stylesheet">
<style>
    .section-title-pabrikan {
        font-family: var(--font2);
        letter-spacing: .5px;
        padding-top: 0;
        padding-bottom: 35px;
        font-size: 38px;
        text-align: center;
        font-weight: bold;
        color: var(--bs-primary);
        position: relative;
        z-index: 1;
    }

    #section-2-101,
    #section-296-101 {
        margin: 0;
        padding: 0;
    }

    #section-2-101 .page-hero {
        margin: 0;
    }

    #section-2-101 .page-title,
    #section-2-101 .ct-text-block {
        margin-bottom: 0;
    }

    #section-296-101 {
        margin-top: 0;
    }

    #section-296-101 .py-4 {
        margin-top: 0;
        padding-top: 0;
    }

    h1,
    p,
    div {
        margin: 0;
        padding: 0;
    }

    #section-14-101 {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .custom-ct-section-inner-wrap {
        max-width: 1200px;
        margin: 0 auto;
        padding-top: 0;
        padding-bottom: 30px;
    }

    .custom-row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .custom-col {
        flex: 1 1 30%;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease-in-out;
    }

    .custom-col:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .custom-col img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .custom-h4 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .custom-p {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .custom-col {
            flex: 1 1 100%;
            margin-bottom: 20px;
        }
    }

    .carousel-container {
        position: relative;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        overflow: hidden;
    }

    .carousel-images {
        display: flex;
        animation: slide 12s infinite;
    }

    .carousel-slide {
        flex: 0 0 100%;
    }

    .carousel-image {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    @keyframes slide {
        0% {
            transform: translateX(0%);
        }

        33% {
            transform: translateX(-100%);
        }

        66% {
            transform: translateX(-200%);
        }

        100% {
            transform: translateX(0%);
        }
    }
</style>
<style>
    .center-banner {
        background-size: cover;
        background-position: center;
        height: 300px;
    }

    .center-banner .bg {
        background-color: rgba(0, 0, 0, 0.5);
        height: 100%;
    }

    .center-banner-row {
        height: 100%;
    }

    .left-banner-body {
        font-size: 1.2rem;
        color: white;
    }
</style>
<style>
    #section-440-101 {
        position: relative;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }

    .ct-section-inner-wrap {
        position: relative;
        z-index: 2;
    }
</style>

@section('content')
    <div id="inner_content-3-137" class="ct-inner-content">
        <section id="section-2-101" class="ct-section"
            data-lazy-style="background-image:linear-gradient(rgba(0,15,7,0.6), rgba(0,15,7,0.6)), url({{ asset('assets/img/pabrikan/banner.png') }});background-size:auto, cover;"
            data-lazy-method="viewport" data-lazy-attributes="style">
            <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/pabrikan/banner.png') }})">
                <div class="page-hero-content">
                    <div class="container">
                        <div class="row px-section">
                            <h1 class="page-title text-center mb-5"
                                style="color: white; font-size: 48px; font-weight: bold;">Pabrikan</h1>
                            <p class="text-center" style="color: white">Kami adalah manufaktur kontrak kosmetik layanan
                                lengkap bersertifikat yang berbasis di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-296-101" class="ct-section" style="background-color: var(--bs-primary)">
            <div class="container">
                <p class="py-4 text-center">
                    Manufaktur Kontrak Kosmetik yang Profesional, Dapat Dilacak, Berfokus pada Keberlanjutan, dan
                    Berkualitas Tinggi
                </p>
            </div>
        </section>

        <div class="row">
            <section id="section-4-101" class="ct-section gap--m">
                <div class="ct-section-inner-wrap text-center py-5; padding: 2rem;">
                    <h2 id="headline-9-101" class="ct-headline mb-4"
                        style="font-weight: bold; color: var(--bs-primary); font-size: 28px;">
                        TENTANG ZWEENA ADI NUGRAHA
                    </h2>
                    <p id="text_block-299-101" class="ct-text-block mx-auto"
                        style="font-family: var(--font3); max-width: 700px; color: var(--bs-grey-90); font-size: 16px; line-height: 1.6;">
                        Kami adalah produsen kosmetik label pribadi yang mengkhususkan diri dalam pembuatan formula
                        kosmetik, penyesuaian kosmetik, desain branding, dan pengemasan. Semua kosmetik label pribadi kami
                        dibuat sendiri, di Tiongkok, menjaga lini produk kosmetik Anda tetap konsisten.
                    </p>
                    <div class="container mt-5">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <img id="image-305-101" alt="produsen perawatan kulit"
                                    src="{{ asset('assets/img/pabrikan/card.png') }}" class="img-fluid shadow-lg rounded"
                                    loading="lazy" fetchpriority="low">
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4">
                                <h6 id="headline-8-101" class="ct-headline"
                                    style="color: var(--bs-primary); font-weight: bold;">
                                    PERAWATAN KULIT ZWEENA ADI NUGRAHA
                                </h6>
                                <div id="_rich_text-304-101" class="oxy-rich-text mt-3"
                                    style="font-family: var(--font3); text-align: left;">
                                    <p style="font-family: var(--font1); font-weight: bold; color: var(--bs-grey-90);">
                                        APA ITU ZWEENA ADI NUGRAHA?
                                    </p>
                                    <p>
                                        Zweena Adi Nugraha adalah perusahaan besar di bidang kosmetik. Kami tidak hanya
                                        menawarkan produk kami tetapi kami dapat mendesain produk Anda sesuai dengan
                                        kebutuhan Anda. Kami adalah produsen perawatan kulit kontrak layanan lengkap
                                        bersertifikat.
                                    </p>
                                    <p class="mt-3">
                                        Anda mencari kualitas, harga bersaing, dan produk eksklusif? Tim Zweena Adi Nugraha
                                        bekerja untuk kesuksesan Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card shadow-sm h-100 rounded-2">
                                    <div class="card-body">
                                        <h5 class="card-title"
                                            style="font-family: var(--font1); font-weight: bold; color: var(--bs-primary);">
                                            Produk
                                        </h5>
                                        <p class="card-text" style="font-family: var(--font3); color: var(--bs-grey-90);">
                                            Perawatan Kulit, Perawatan Tubuh, Perawatan Rambut, Perawatan Bayi, Produk
                                            Perawatan Bersalin.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow-sm h-100 rounded-2">
                                    <div class="card-body">
                                        <h5 class="card-title"
                                            style="font-family: var(--font1); font-weight: bold; color: var(--bs-primary);">
                                            Sertifikasi
                                        </h5>
                                        <p class="card-text" style="font-family: var(--font3); color: var(--bs-grey-90);">
                                            GMPC, ISO 22716, BSCI, FDA, MSDS. Kami juga dapat membantu Anda mendapatkan
                                            CPNP, CPSR, sertifikat PIF, Sertifikat Penjualan Gratis, Surat Keterangan Asal,
                                            dll.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="section-14-101" class="ct-section">
            <div id="new_columns-19-101" class="ct-new-columns">
                <div id="div_block-20-101" class="ct-div-block">
                    <div id="div_block-24-101" class="ct-div-block oxel_number_counter">
                        <div id="fancy_icon-48-101" class="ct-fancy-icon counter__icon">
                            <i class="fas fa-home" style="font-size: 48px; color: var(--bs-primary);"></i>
                        </div>
                        <div id="div_block-56-101" class="ct-div-block">
                            <div id="text_block-26-101" class="ct-text-block oxel_number_counter__number" number="9">9
                            </div>
                            <div id="text_block-59-101" class="ct-text-block counter__unit"
                                style="color: var(--bs-grey-090);">
                                + Tahun<br>
                            </div>
                        </div>
                        <div id="text_block-27-101" class="ct-text-block oxel_number_counter__label">
                            Pengalaman manufaktur<br>
                        </div>
                    </div>
                </div>
                <div id="div_block-21-101" class="ct-div-block">
                    <div id="div_block-37-101" class="ct-div-block oxel_number_counter">
                        <div id="fancy_icon-46-101" class="ct-fancy-icon counter__icon">
                            <i class="fas fa-flask" style="font-size: 48px; color: var(--bs-primary);"></i>
                        </div>
                        <div id="div_block-64-101" class="ct-div-block">
                            <div id="text_block-39-101" class="ct-text-block oxel_number_counter__number" number="10000">
                                10,000<br></div>
                            <div id="text_block-62-101" class="ct-text-block counter__unit"
                                style="color: var(--bs-grey-090);">
                                +<br>
                            </div>
                        </div>
                        <div id="text_block-40-101" class="ct-text-block oxel_number_counter__label">
                            Formula Dewasa<br>
                        </div>
                    </div>
                </div>
                <div id="div_block-22-101" class="ct-div-block">
                    <div id="div_block-29-101" class="ct-div-block oxel_number_counter">
                        <div id="fancy_icon-49-101" class="ct-fancy-icon counter__icon">
                            <i class="fas fa-cogs" style="font-size: 48px; color: var(--bs-primary);"></i>
                        </div>
                        <div id="div_block-71-101" class="ct-div-block">
                            <div id="text_block-31-101" class="ct-text-block oxel_number_counter__number"
                                number="100000">100,000</div>
                            <div id="text_block-68-101" class="ct-text-block counter__unit"
                                style="color: var(--bs-grey-090);">
                                Tingkat<br>
                            </div>
                        </div>
                        <div id="text_block-32-101" class="ct-text-block oxel_number_counter__label">
                            Lini Produksi GMPC<br>
                        </div>
                    </div>
                </div>
                <div id="div_block-23-101" class="ct-div-block">
                    <div id="div_block-33-101" class="ct-div-block oxel_number_counter">
                        <div id="fancy_icon-50-101" class="ct-fancy-icon counter__icon">
                            <i class="fas fa-users" style="font-size: 48px; color: var(--bs-primary);"></i>
                        </div>
                        <div id="div_block-73-101" class="ct-div-block">
                            <div id="text_block-35-101" class="ct-text-block oxel_number_counter__number" number="300">
                                300</div>
                            <div id="text_block-67-101" class="ct-text-block counter__unit"
                                style="color: var(--bs-grey-090);">
                                +<br>
                            </div>
                        </div>
                        <div id="text_block-36-101" class="ct-text-block oxel_number_counter__label">
                            Pekerja Khusus<br>
                        </div>
                    </div>
                </div>
                <div id="div_block-148-101" class="ct-div-block">
                    <div id="div_block-149-101" class="ct-div-block oxel_number_counter">
                        <div id="fancy_icon-150-101" class="ct-fancy-icon counter__icon">
                            <i class="fas fa-warehouse" style="font-size: 48px; color: var(--bs-primary);"></i>
                        </div>
                        <div id="div_block-151-101" class="ct-div-block">
                            <div id="text_block-152-101" class="ct-text-block oxel_number_counter__number"
                                number="600000">600,000</div>
                            <div id="text_block-153-101" class="ct-text-block counter__unit"
                                style="color: var(--bs-grey-090);">
                                +<br>
                            </div>
                        </div>
                        <div id="text_block-154-101" class="ct-text-block oxel_number_counter__label">
                            Kapasitas Harian (Unit)<br>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="ct-section-inner-wrap">
                <h2 class="section-title-pabrikan">SESUAIKAN PRODUK/MEREK/BISNIS ANDA</h2>
                <div class="custom-ct-section-inner-wrap">
                    <div class="custom-row">
                        <div class="custom-col">
                            <div>
                                <img src="{{ asset('assets/img/pabrikan/1.png') }}" alt="produsen perawatan kulit">
                            </div>
                            <h4 class="custom-h4">Sesuaikan untuk Anda</h4>
                            <div>
                                <p class="custom-p">
                                    Kami membuat dan menyesuaikan produk kosmetik persis seperti yang Anda inginkan. Tidak
                                    menyukai bahan tertentu? vegetarian? Bahan alami? Ekstrak buah? Tidak masalah, ayo kita
                                    mulai!
                                </p>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div>
                                <img src="{{ asset('assets/img/pabrikan/2.png') }}" alt="produsen perawatan kulit">
                            </div>
                            <h4 class="custom-h4">Sesuaikan dengan merek Anda</h4>
                            <div>
                                <p class="custom-p">
                                    Dengan menyesuaikan produk kosmetik Anda agar sesuai dengan solusi yang ingin Anda
                                    berikan kepada pelanggan, jadikan produk Anda menonjol.
                                </p>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div>
                                <img src="{{ asset('assets/img/pabrikan/3.png') }}" alt="produsen perawatan kulit">
                            </div>
                            <h4 class="custom-h4">Sesuaikan dengan bisnis Anda</h4>
                            <div>
                                <p class="custom-p">
                                    Tidak peduli apakah produk Anda diperuntukkan bagi Merek/Spa Ternama, Pengecer Online
                                    Perawatan Kulit Profesional Salon, atau Pengecer Dan Distributor/Permulaan Perawatan
                                    Kulit, kami akan menjaganya tetap konsisten saat disentuh dan sesuai dengan identitas
                                    merek Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="center-banner"
                style="background-image: url({{ asset('assets/img/pabrikan/banner.png') }}); background-size: cover; background-position: center center;">
                <div class="bg">
                    <div class="container">
                        <div class="row text-center px-section align-items-center py-md-3 center-banner-row">
                            <div class="col-md-2 text-left">
                                <div class="center-banner-title">
                                    <i class="fas fa-thumbs-up" style="font-size: 48px; color: white;"></i>
                                </div>
                            </div>
                            <div class="col-md-10 text-left">
                                <div class="left-banner-body">
                                    Kami dikombinasikan dengan tim pengembangan yang terhormat bekerja secara kolaboratif
                                    dengan klien kami untuk memproduksi formulasi stok atau untuk menciptakan kosmetik yang
                                    memuaskan pelanggan dan memajukan keunggulan kompetitif.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="ct-section-inner-wrap">
                <h2 class="section-title-pabrikan"> LANGKAH KOSMETIK CUSTOM</h2>
                <div id="div_block-384-101" class="ct-div-block">
                    <div id="div_block-385-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-386-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-387-101" class="ct-text-block home_cus_num">01.</div>
                            <div id="text_block-388-101" class="ct-text-block home_cus_heading">
                                Private Label<br>
                            </div>
                        </div>
                        <div id="text_block-389-101" class="ct-text-block home_cus_txt">Mulailah dengan cepat dengan label
                            pribadi. Kami memiliki serangkaian formula saham yang dapat Anda pilih. Cukup tambahkan logo
                            Anda, beri label, dan pilih kotak khusus.</div>
                    </div>
                    <div id="div_block-390-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-391-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-392-101" class="ct-text-block home_cus_num">02.</div>
                            <div id="text_block-393-101" class="ct-text-block home_cus_heading">
                                Formulasi Kustom<br>
                            </div>
                        </div>
                        <div id="text_block-394-101" class="ct-text-block home_cus_txt">
                            Buat formulasi yang paling sesuai dengan konsep merek Anda, kelompok pelanggan Anda, dan tren
                            pasar.<br>
                        </div>
                    </div>
                    <div id="div_block-395-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-396-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-397-101" class="ct-text-block home_cus_num">03.</div>
                            <div id="text_block-398-101" class="ct-text-block home_cus_heading">
                                Pengemasan<br>
                            </div>
                        </div>
                        <div id="text_block-399-101" class="ct-text-block home_cus_txt">
                            Pilih dari beragam desain botol, tutup, tabung, tutup, dan kotak.<br>
                            Kami memiliki semua yang Anda butuhkan terkait kemasan perawatan kulit untuk merek Anda.<br>
                        </div>
                    </div>
                    <div id="div_block-400-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-401-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-402-101" class="ct-text-block home_cus_num">04.</div>
                            <div id="text_block-403-101" class="ct-text-block home_cus_heading">
                                Sampel & Desain Gratis<br>
                            </div>
                        </div>
                        <div id="text_block-404-101" class="ct-text-block home_cus_txt">
                            Program sampel unik kami memungkinkan Anda membuat sampel formulasi dan kemasan khusus untuk
                            diuji.<br>
                            Menyediakan desain kemasan dan desain gambar yang kreatif.<br>
                        </div>
                    </div>
                    <div id="div_block-405-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-406-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-407-101" class="ct-text-block home_cus_num">05.</div>
                            <div id="text_block-408-101" class="ct-text-block home_cus_heading">
                                Produksi massal<br>
                            </div>
                        </div>
                        <div id="text_block-409-101" class="ct-text-block home_cus_txt">Sistem produksi pemesanan yang
                            fleksibel dan sistem produksi respon cepat untuk memastikan pesanan Anda efisien dan pengiriman
                            tepat waktu.</div>
                    </div>
                    <div id="div_block-410-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-411-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-412-101" class="ct-text-block home_cus_num">06.</div>
                            <div id="text_block-413-101" class="ct-text-block home_cus_heading">
                                Quality Control<br>
                            </div>
                        </div>
                        <div id="text_block-414-101" class="ct-text-block home_cus_txt">
                            Lebih dari 10 prosedur pengendalian kualitas dan sistem penelusuran kualitas untuk memastikan
                            produk Anda dari bahan mentah hingga kesempurnaan produk jadi dan persetujuan pasar.<br>
                        </div>
                    </div>
                    <div id="div_block-415-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-416-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-417-101" class="ct-text-block home_cus_num">07.</div>
                            <div id="text_block-418-101" class="ct-text-block home_cus_heading">
                                Logistik & Pengiriman<br>
                            </div>
                        </div>
                        <div id="text_block-419-101" class="ct-text-block home_cus_txt">
                            Kami memiliki hubungan panjang dengan berbagai operator. Tersedia skema pengiriman ke seluruh
                            dunia, Anda dapat memilih melalui laut, kereta api atau udara dengan biaya yang kompetitif. Pada
                            saat yang sama, jika Anda memiliki operator kerjasama jangka panjang tetap, kami dapat bekerja
                            sama dengan mereka dengan sangat baik.<br>
                        </div>
                    </div>
                    <div id="div_block-420-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-421-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-422-101" class="ct-text-block home_cus_num">08.</div>
                            <div id="text_block-423-101" class="ct-text-block home_cus_heading">
                                Berikan Sertifikat yang Relevan<br>
                            </div>
                        </div>
                        <div id="text_block-424-101" class="ct-text-block home_cus_txt">
                            GMPC, ISO 22716, BSCI, FDA, MSDS, COA, juga dapat membantu untuk melakukan CPNP, CPSR,
                            sertifikat PIF, Sertifikat Penjualan Gratis, Surat Keterangan Asal, Sertifikat Halal, SASO, dll.
                            Dapat menyediakan dokumen yang diperlukan untuk mengimpor kosmetik di Anda negara untuk membantu
                            Anda mengimpor dan menjual produk tanpa hambatan apa pun. <br>
                        </div>
                    </div>
                    <div id="div_block-425-101" class="ct-div-block home_custmozition_div">
                        <div id="div_block-426-101" class="ct-div-block home_cus_heading_div">
                            <div id="text_block-427-101" class="ct-text-block home_cus_num">09.</div>
                            <div id="text_block-428-101" class="ct-text-block home_cus_heading">
                                Layanan VIP<br>
                            </div>
                        </div>
                        <div id="text_block-429-101" class="ct-text-block home_cus_txt">
                            Setidaknya 2 rekan kerja pada saat yang sama untuk menindaklanjuti proyek produk Anda, melakukan
                            layanan pra-penjualan, penjualan, dan purna jual yang sempurna. <br>
                            Kami juga dapat memberikan layanan bernilai tambah seperti laporan riset pasar, laporan
                            rekomendasi produk terbaru, dan sebagainya.<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <section id="section-440-101" class="ct-section"
                style="position: relative; background-image: url({{ asset('assets/img/customformulation/banner.png') }});">
                <div class="overlay"></div>
                <div class="ct-section-inner-wrap">
                    <h2 id="headline-445-101" class="ct-headline mb-lg-3" style="font-weight: bold">Kategori Produk
                        Kosmetik</h2>
                    <div id="text_block-443-101" class="ct-text-block txt_center mt-lg-3 py-2"
                        style="font-family: var(--font3); font-size: 18px;">Kami dapat memproduksi produk kosmetik apa pun
                        yang Anda dapat hasilkan.</div>
                    <div id="div_block-448-101" class="ct-div-block">
                        <a id="link_text-449-101" class="ct-link-text product-cat-links"
                            href="{{ route('kategori', ['slug' => 'face-care']) }}" target="_self">Perawatan Wajah</a>
                        <a id="link_text-450-101" class="ct-link-text product-cat-links"
                            href="{{ route('kategori', ['slug' => 'eye-care']) }}" target="_self">Perawatan Mata</a>
                        <a id="link_text-451-101" class="ct-link-text product-cat-links"
                            href="{{ route('kategori', ['slug' => 'body-care']) }}" target="_self">Perawatan Tubuh</a>
                        <a id="link_text-452-101" class="ct-link-text product-cat-links"
                            href="{{ route('kategori', ['slug' => 'body-care']) }}" target="_self">Perawatan Rambut</a>
                    </div>
                </div>
            </section>
        </div>

        <div class="row">
            <div class="bg-slanted mb-section mt-section">
                <div class="container">
                    <h2 class="section-title">GALERI PABRIK</h2>
                    <div class="carousel-container">
                        <div class="carousel-images gap-4">
                            <div class="carousel-slide">
                                <img src="{{ asset('assets/img/pabrik/1.png') }}" class="carousel-image"
                                    style="border-radius: 15px; max-height: 400px;">
                            </div>
                            <div class="carousel-slide">
                                <img src="{{ asset('assets/img/pabrik/2.png') }}" class="carousel-image"
                                    style="border-radius: 15px; max-height: 400px;">
                            </div>
                            <div class="carousel-slide">
                                <img src="{{ asset('assets/img/pabrik/3.png') }}" class="carousel-image"
                                    style="border-radius: 15px; max-height: 400px;">
                            </div>
                            <div class="carousel-slide">
                                <img src="{{ asset('assets/img/pabrik/4.png') }}" class="carousel-image"
                                    style="border-radius: 15px; max-height: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                    <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                    $(id).text(Math.floor(this.countNum).toLocaleString());
                },
                complete: function() {
                    $(id).text(this.countNum.toLocaleString());
                }
            });
        }

        animateCounter('#text_block-26-101', 9);
        animateCounter('#text_block-39-101', 10000);
        animateCounter('#text_block-31-101', 100000);
        animateCounter('#text_block-35-101', 300);
        animateCounter('#text_block-152-101', 600000);
    });
</script>
