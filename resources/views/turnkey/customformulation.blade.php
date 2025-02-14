@extends('layouts.app')

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/customformulation/banner.png') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center" style="color: white; font-size: 48px; font-weight: bold;">FORMULASI
                        KOSMETIK KUSTOM</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <div class="section-title">Formulasi Khusus</div>
        <div class="row gx-5 px-section align-items-center">
            <div class="col-12 col-lg-6">
                <div class="img-custom-formulation text-center">
                    <img src="{{ asset('assets/img/customformulation/lab.jpg') }}" alt="{{ env('APP_NAME') }}"
                        class="img-fluid rounded shadow" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="turnkey-packaging-content">
                    <p class="turnkey-packaging-content-body">
                        Ahli kimia kami memiliki pengalaman bertahun-tahun dalam penelitian dan pengembangan formula. Kami
                        juga bekerja sama dengan ahli kimia dari Korea, Perancis, dan negara lainnya untuk menyediakan
                        formula yang lebih aman, stabil, alami, efektif, dan inovatif.
                    </p>
                    <p class="turnkey-packaging-content-body">
                        Kami mengkhususkan diri dalam pengembangan kosmetik berkualitas tinggi berbasis alami. Jangan ragu
                        untuk mendiskusikan persyaratan label pribadi khusus Anda dengan kami.
                    </p>
                    <p class="turnkey-packaging-content-body">
                        Ide-ide Anda akan dijaga kerahasiaannya. Kami bertujuan membantu Anda sukses dalam memulai bisnis
                        perawatan kulit dengan program formula kosmetik yang kami kembangkan.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-4 text-center mb-4">
                <i class="fas fa-flask" style="font-size: 48px; color: var(--bs-primary)"></i>
                <h5 class="mt-3" style="font-weight: bold">Bahan</h5>
                <p class="small">Sesuaikan menurut bahan yang ingin Anda tambahkan atau efek dan tekstur yang Anda
                    inginkan.</p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <i class="fas fa-vials" style="font-size: 48px; color: var(--bs-primary)"></i>
                <h5 class="mt-3" style="font-weight: bold">Contoh ke Kenyataan</h5>
                <p class="small">Salin rumus sesuai sampel yang Anda berikan.</p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <i class="fas fa-lightbulb" style="font-size: 48px; color: var(--bs-primary)"></i>
                <h5 class="mt-3" style="font-weight: bold">Konsep ke Realitas</h5>
                <p class="small">Kami dapat menyesuaikan formula unik Anda berdasarkan kebutuhan Anda.</p>
            </div>
        </div>
    </div>
    <div class="row py-5" style="background-color: #f6faff">
        <div class="container mb-section">
            <div class="text-center mb-4">
                <h2 class="section-title">Rumus Saham</h2>
                <p style="font-family: var(--font3); font-size: 16px; line-height: 1.8;">
                    Kami memiliki lebih dari 10000+ formula stok yang tersedia untuk kebutuhan label pribadi Anda,
                    menampilkan produk yang terbuat dari bahan-bahan berkualitas tinggi.
                </p>
                <p style="font-family: var(--font3); font-size: 16px;">Keuntungan menggunakan rumus saham adalah:</p>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 text-center">
                    <i class="fas fa-tachometer-alt" style="font-size: 48px; color: var(--bs-primary)"></i>
                    <h5 class="mt-2" style="font-weight: bold">Produksi Cepat</h5>
                    <p style="font-size: 14px; font-family: var(--font3);">Pengenalan produksi cepat, menghemat banyak
                        waktu.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-dollar-sign" style="font-size: 48px; color: var(--bs-primary)"></i>
                    <h5 class="mt-2" style="font-weight: bold">Penghematan Biaya</h5>
                    <p style="font-size: 14px; font-family: var(--font3);">Tidak ada biaya pengembangan produk.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-check-circle" style="font-size: 48px; color: var(--bs-primary)"></i>
                    <h5 class="mt-2" style="font-weight: bold">Stabil</h5>
                    <p style="font-size: 14px; font-family: var(--font3);">Formulanya stabil, teruji pasar.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="turnkey-packaging-content-body">
                        <p>
                            Tim R&D kami menyediakan formulasi kosmetik khusus untuk memenuhi kebutuhan dan spesifikasi
                            kosmetik berkualitas tinggi Anda. Formula stok kami mengandung bahan-bahan paling modern dan
                            dapat dipasarkan, bersumber dari seluruh dunia, termasuk Perancis, Korea, Swiss, dll.
                        </p>
                        <p>
                            Anda akan menemukan bahwa kosmetik siap jual kami sangat cocok untuk bisnis Anda, membantu Anda
                            dengan cepat menduduki pasar.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <img src="{{ asset('assets/img/customformulation/saham.jpg') }}" alt="{{ env('APP_NAME') }}"
                        class="img-fluid rounded shadow" />
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="turnkey-packaging-content-body text-center">
                        <p>
                            Dengan formula stok perawatan kulit private label kami, Anda dapat fokus pada manajemen bisnis,
                            pemasaran, dan penjualan – aspek yang sangat kreatif dan menyenangkan dari menjadi perusahaan
                            perawatan kulit Indie.
                        </p>
                        <p>
                            Ini dapat menghemat biaya dan waktu pengujian pasar, dan membantu Anda dengan cepat menduduki
                            pasar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
