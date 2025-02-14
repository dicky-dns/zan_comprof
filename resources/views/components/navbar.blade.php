<div class="fixed-top" id="navbar-container">
    <nav class="navbar-scrolled navbar navbar-expand-lg py-0" id="main_navbar" style="left: 0; right: 0; z-index: 9000;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo.png') }}" srcset="" alt="{{ env('APP_NAME') }}" alt="">
            </a>
            <span class="navbar-toggler ms-auto border-0 py-3" type="button">
                <span class="navbar-toggler-icon"></span>
            </span>
            <div class="navbar-collapse mb-lg-0 collapse my-0 mb-4" id="navbarSupportedContent">
                <ul class="navbar-nav mb-lg-0 main-navbar ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold {{ Route::current()->getName() == 'home' ? 'active border-bottom border-primary border-3' : '' }}"
                            href="{{ route('home') }}" aria-current="page">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown" id="toggleDropdownFactory">
                        <a class="nav-link fw-semibold dropdown-toggle" data-bs-toggle="dropdown" href="#"
                            aria-expanded="false">PABRIK</a>
                        <ul class="dropdown-menu text-lg-start mb-4 text-center shadow" id="dropdownFactory">
                            <li>
                                <a class="dropdown-item" href="{{ route('pabrikan') }}">PABRIKAN</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('rnd') }}">TIM R & D</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('qualitycontrol') }}">QUALITY CONTROL</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('pameranperdagangan') }}">PAMERAN
                                    PERDAGANGAN</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold {{ Route::current()->getName() == 'about' ? 'active border-bottom border-primary border-3' : '' }}"
                            href="{{ route('about') }}" aria-current="page">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item dropdown" id="dropdownProducts">
                        <a class="nav-link fw-semibold dropdown-toggle" id="produkDropdown" data-bs-toggle="dropdown"
                            href="{{ route('produk') }}" aria-expanded="false">PRODUK</a>

                    </li>
                    <li class="nav-item dropdown" id="navTurnkeyService">
                        <a class="nav-link fw-semibold dropdown-toggle" data-bs-toggle="dropdown" href="#"
                            aria-expanded="false">LAYANAN TURNKEY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold {{ Route::current()->getName() == 'artikel' ? 'active border-bottom border-primary border-3' : '' }}"
                            href="{{ route('article') }}" aria-current="page">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold {{ Route::current()->getName() == 'charity' ? 'active border-bottom border-primary border-3' : '' }}"
                            href="{{ route('charity') }}" aria-current="page">SOSIAL</a>
                    </li>
                    <li class="nav-item me-2 px-2">
                        <a class="nav-link fw-semibold {{ Route::current()->getName() == 'contact' ? 'active border-bottom border-primary border-3' : '' }}"
                            href="{{ route('contact') }}" aria-current="page">KONTAK KAMI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-light" id="megaTurnkeyService">
        <div class="container p-3">
            <div class="row">
                <div class="turnkey-link col-2 p-3">
                    <a href="{{ route('customformulation') }}" style="text-decoration: none">
                        <div class="d-flex flex-column p-3">
                            <img class="rounded-circle mx-auto"
                                src="{{ asset('assets/img/turnkey/formulation.webp') }}" alt="{{ env('APP_NAME') }}"
                                alt=""
                                style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                            <p class="text-dark mb-0 pt-3 text-center">
                                Formulasi Kustom
                            </p>
                        </div>
                    </a>
                </div>
                <div class="turnkey-link col-2 p-3">
                    <a href="{{ route('custompackaging') }}" style="text-decoration: none">
                        <div class="d-flex flex-column p-3">
                            <img class="rounded-circle mx-auto" src="{{ asset('assets/img/turnkey/packaging.webp') }}"
                                alt="{{ env('APP_NAME') }}" alt=""
                                style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                            <p class="text-dark mb-0 pt-3 text-center">
                                Kemasan Khusus
                            </p>
                        </div>
                    </a>
                </div>
                <div class="turnkey-link col-2 p-3">
                    <a href="{{ route('designservices') }}" style="text-decoration: none">
                        <div class="d-flex flex-column p-3">
                            <img class="rounded-circle mx-auto" src="{{ asset('assets/img/turnkey/design.webp') }}"
                                alt="{{ env('APP_NAME') }}" alt=""
                                style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                            <p class="text-dark mb-0 pt-3 text-center">
                                Layanan Desain
                            </p>
                        </div>
                    </a>
                </div>
                <div class="turnkey-link col-2 p-3">
                    <a href="{{ route('production') }}" style="text-decoration: none">
                        <div class="d-flex flex-column p-3">
                            <img class="rounded-circle mx-auto"
                                src="{{ asset('assets/img/turnkey/production.webp') }}" alt="{{ env('APP_NAME') }}"
                                alt=""
                                style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                            <p class="text-dark mb-0 pt-3 text-center">
                                Produksi
                            </p>
                        </div>
                    </a>
                </div>
                <div class="turnkey-link col-2 p-3">
                    <a href="{{ route('certificateservices') }}" style="text-decoration: none">
                        <div class="d-flex flex-column p-3">
                            <img class="rounded-circle mx-auto"
                                src="{{ asset('assets/img/turnkey/sertificate.webp') }}" alt="{{ env('APP_NAME') }}"
                                alt=""
                                style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                            <p class="text-dark mb-0 pt-3 text-center">
                                Layanan Sertifikat
                            </p>
                        </div>
                    </a>
                </div>
                <div class="turnkey-link col-2 p-3">
                    <a href="{{ route('warehousingshipping') }}" style="text-decoration: none">
                        <div class="d-flex flex-column p-3">
                            <img class="rounded-circle mx-auto"
                                src="{{ asset('assets/img/turnkey/warehouse.webp') }}" alt="{{ env('APP_NAME') }}"
                                alt=""
                                style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                            <p class="text-dark mb-0 pt-3 text-center">
                                Pergudangan & Logistik
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light produk-navbar" id="productCategory">
        <div class="container p-3">
            <div class="row">
                <div class="product-nav-link">
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(4)->slug) }}">{{ $ctrl->getcategory(4)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(4)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="product-nav-link">
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(8)->slug) }}">{{ $ctrl->getcategory(8)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(8)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(1)->slug) }}">{{ $ctrl->getcategory(1)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(1)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="product-nav-link">
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(6)->slug) }}">{{ $ctrl->getcategory(6)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(6)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(10)->slug) }}">{{ $ctrl->getcategory(10)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(10)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="product-nav-link">
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(7)->slug) }}">{{ $ctrl->getcategory(7)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(7)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(5)->slug) }}">{{ $ctrl->getcategory(5)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(5)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(14)->slug) }}">{{ $ctrl->getcategory(14)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(14)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
                <div class="product-nav-link">
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(15)->slug) }}">{{ $ctrl->getcategory(15)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(15)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(16)->slug) }}">{{ $ctrl->getcategory(16)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(16)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="product-nav-link">
                    <div class="nav-title-category"><a
                            href="{{ route('kategori', $ctrl->getcategory(2)->slug) }}">{{ $ctrl->getcategory(2)->name }}</a>
                    </div>
                    <div class="nav-subtitle-category">
                        <ul>
                            @foreach ($ctrl->getcategory(2)->subcategory as $sc)
                                <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu">
    <div class="header-menu bg-dark">
        <div class="header-menu-left">
            <div class="list-header-menu">
                <a href="{{ route('home') }}">Beranda</a>
            </div>
            <div class="list-header-menu">
                <a href="{{ route('about') }}">Tentang</a>
            </div>
            <div class="list-header-menu">
                <a href="{{ route('article') }}">Artikel</a>
            </div>
            <div class="list-header-menu">
                <a href="{{ route('contact') }}">Kontak</a>
            </div>
        </div>
        <div class="header-menu-right">
            <span class="close-menu no-select">✖</span>
        </div>
    </div>
    <div class="body-menu">
        <div class="menu-mobile-title">Pabrik</div>
        <div class="row mt-3 pb-2 text-center">
            <div class="col-12 mb-1">
                <a class="mobile-pabrik-list" href="{{ route('pabrikan') }}">Pabrikan</a>
            </div>
            <div class="col-12 mb-1">
                <a class="mobile-pabrik-list" href="{{ route('rnd') }}">Tim R & D</a>
            </div>
            <div class="col-12 mb-1">
                <a class="mobile-pabrik-list" href="{{ route('qualitycontrol') }}">Quality Control</a>
            </div>
            <div class="col-12 mb-1">
                <a class="mobile-pabrik-list" href="{{ route('pameranperdagangan') }}">Pameran Perdagangan</a>
            </div>
        </div>
        <div class="menu-mobile-title">Produk</div>
        <div class="row mt-3">
            <div class="product-nav-link">
                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(4)->slug) }}">{{ $ctrl->getcategory(4)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(4)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="product-nav-link">
                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(8)->slug) }}">{{ $ctrl->getcategory(8)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(8)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(1)->slug) }}">{{ $ctrl->getcategory(1)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(1)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="product-nav-link">
                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(6)->slug) }}">{{ $ctrl->getcategory(6)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(6)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(10)->slug) }}">{{ $ctrl->getcategory(10)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(10)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="product-nav-link">
                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(7)->slug) }}">{{ $ctrl->getcategory(7)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(7)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(5)->slug) }}">{{ $ctrl->getcategory(5)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(5)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                {{-- <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(14)->slug) }}">{{ $ctrl->getcategory(14)->name }}</a>
                </div> --}}
                {{-- <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(14)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div> --}}
            </div>
            <div class="product-nav-link">

                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(15)->slug) }}">{{ $ctrl->getcategory(15)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(15)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="nav-title-category"><a
                        href="{{ route('kategori', $ctrl->getcategory(16)->slug) }}">{{ $ctrl->getcategory(16)->name }}</a>
                </div>
                <div class="nav-subtitle-category">
                    <ul>
                        @foreach ($ctrl->getcategory(16)->subcategory as $sc)
                            <li><a href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-mobile-title mb-1">Layanan Turnkey</div>
        <div class="row">
            <div class="turnkey-link col-6 p-3">
                <a href="{{ route('customformulation') }}" style="text-decoration: none">
                    <div class="d-flex flex-column p-3">
                        <img class="rounded-circle mx-auto" src="{{ asset('assets/img/turnkey/formulation.webp') }}"
                            alt="{{ env('APP_NAME') }}" alt=""
                            style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                        <p class="text-dark mb-0 pt-3 text-center">
                            Formulasi Kustom
                        </p>
                    </div>
                </a>
            </div>
            <div class="turnkey-link col-6 p-3">
                <a href="{{ route('custompackaging') }}" style="text-decoration: none">
                    <div class="d-flex flex-column p-3">
                        <img class="rounded-circle mx-auto" src="{{ asset('assets/img/turnkey/packaging.webp') }}"
                            alt="{{ env('APP_NAME') }}" alt=""
                            style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                        <p class="text-dark mb-0 pt-3 text-center">
                            Kemasan Khusus
                        </p>
                    </div>
                </a>
            </div>
            <div class="turnkey-link col-6 p-3">
                <a href="{{ route('designservices') }}" style="text-decoration: none">
                    <div class="d-flex flex-column p-3">
                        <img class="rounded-circle mx-auto" src="{{ asset('assets/img/turnkey/design.webp') }}"
                            alt="{{ env('APP_NAME') }}" alt=""
                            style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                        <p class="text-dark mb-0 pt-3 text-center">
                            Layanan Desain
                        </p>
                    </div>
                </a>
            </div>
            <div class="turnkey-link col-6 p-3">
                <a href="{{ route('production') }}" style="text-decoration: none">
                    <div class="d-flex flex-column p-3">
                        <img class="rounded-circle mx-auto" src="{{ asset('assets/img/turnkey/production.webp') }}"
                            alt="{{ env('APP_NAME') }}" alt=""
                            style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                        <p class="text-dark mb-0 pt-3 text-center">
                            Produksi
                        </p>
                    </div>
                </a>
            </div>
            <div class="turnkey-link col-6 p-3">
                <a href="{{ route('certificateservices') }}" style="text-decoration: none">
                    <div class="d-flex flex-column p-3">
                        <img class="rounded-circle mx-auto" src="{{ asset('assets/img/turnkey/sertificate.webp') }}"
                            alt="{{ env('APP_NAME') }}" alt=""
                            style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                        <p class="text-dark mb-0 pt-3 text-center">
                            Layanan Sertifikat
                        </p>
                    </div>
                </a>
            </div>
            <div class="turnkey-link col-6 p-3">
                <a href="{{ route('warehousingshipping') }}" style="text-decoration: none">
                    <div class="d-flex flex-column p-3">
                        <img class="rounded-circle mx-auto" src="{{ asset('assets/img/turnkey/warehouse.webp') }}"
                            alt="{{ env('APP_NAME') }}" alt=""
                            style="width: 90%; aspect-ratio: 1/1; object-fit: cover; object-position: center">
                        <p class="text-dark mb-0 pt-3 text-center">
                            Pergudangan & Logistik
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('produkDropdown').addEventListener('click', function(event) {
        if (!event.target.classList.contains('show')) {
            window.location.href = "{{ route('produk') }}";
        }
    });
</script>
