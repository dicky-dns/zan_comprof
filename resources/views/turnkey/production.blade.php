@extends('layouts.app')

@section('extrahead')
    <link href="{{ asset('assets/frontend/css/timeline3.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="page-hero mb-section" style="background-image: url({{ asset('assets/img/production/banner.png') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center mb-5" style="color: white; font-size: 48px; font-weight: bold;">Produksi
                        Produk Perawatan Kulit</h1>
                    <p class="text-center" style="color: white">Ruang produksi pembuatan skincare dan kosmetik di Zweena Adi
                        Nugraha dirancang untuk memenuhi standar kualitas dan keamanan tertinggi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <h2 class="turnkey-main-title text-center mb-5">Fasilitas Produksi Zweena Adi Nugraha</h2>
        <hr class="mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                <img class="img-fluid rounded shadow" src="{{ asset('assets/img/production/step1.png') }}"
                    alt="Mesin Canggih dan Otomatisasi" loading="lazy">
            </div>
            <div class="col-md-6 text-md-start text-center">
                <div class="position-relative mb-3" style="padding-left: 2rem;">
                    <span class="badge bg-primary text-white position-absolute"
                        style="font-size: 3rem; top: -3rem; left: 0.1rem;">01</span>
                </div>
                <h3 class="fw-bold" style="margin-top: 3rem;">Mesin Canggih dan Otomatisasi</h3>
                <p class="text-muted">
                    Kami menggunakan mesin-mesin canggih seperti mixer homogenizer, filling machines,
                    dan sealing machines yang dilengkapi dengan sistem otomatisasi. Mesin-mesin ini
                    memungkinkan proses produksi yang lebih cepat, efisien, dan konsisten.
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <img class="img-fluid rounded shadow" src="{{ asset('assets/img/production/step2.png') }}"
                    alt="Sistem Pengawasan dan Pengendalian Mutu" loading="lazy">
            </div>
            <div class="col-md-6 text-md-start text-center">
                <div class="position-relative mb-3" style="padding-left: 2rem;">
                    <span class="badge bg-primary text-white position-absolute"
                        style="font-size: 3rem; top: -3rem; left: 0.1rem;">02</span>
                </div>
                <h3 class="fw-bold" style="margin-top: 3rem;">Sistem Pengawasan dan Pengendalian Mutu</h3>
                <p class="text-muted">
                    Setiap tahap produksi diawasi secara ketat oleh tim kontrol mutu (Quality Control) kami.
                    Kami melakukan pengujian berkala terhadap bahan baku, produk setengah jadi, dan produk jadi
                    untuk memastikan mereka memenuhi standar kualitas yang ketat.
                </p>
            </div>
        </div>
    </div>

    <div class="container mb-section">
        <h2 class="turnkey-main-title text-center mb-5">Langkah Produksi Zweena Adi Nugraha</h2>
        <hr class="mb-5">
        <section id="section-119-3855" class=" ct-section">
            <div class="ct-section-inner-wrap">
                <div id="new_columns-133-3855" class="ct-new-columns">
                    <div id="div_block-134-3855" class="ct-div-block">
                        <img id="image-176-3855" alt="Ruang penyimpanan bahan baku"
                            src="{{ asset('assets/img/production/pic5.jpg') }}" class="ct-image" loading="lazy"
                            fetchpriority="low">
                    </div>
                    <div id="div_block-135-3855" class="ct-div-block atomic-content-31-middle-column">
                        <div id="div_block-173-3855" class="ct-div-block atomic-content-31-icon">
                            <div id="text_block-174-3855" class="ct-text-block">LANGKAH 1</div>
                        </div>
                        <div id="div_block-137-3855" class="ct-div-block atomic-content-31-line"></div>
                    </div>
                    <div id="div_block-138-3855" class="ct-div-block atomic-content-31-text-column">
                        <div id="div_block-139-3855" class="ct-div-block production-step-text">
                            <h4 id="headline-140-3855" class="ct-headline atomic-content-31-title">Penyimpanan Bahan Baku
                            </h4>
                            <div id="text_block-142-3855" class="ct-text-block atomic-content-31-text">
                                Ruangan yang dirancang khusus untuk menyimpan bahan baku dengan kondisi yang terkontrol
                                (suhu, kelembaban, dan kebersihan). Menjaga kestabilan dan kualitas bahan baku hingga siap
                                digunakan dalam proses produksi.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="new_columns-192-3855" class="ct-new-columns">
                    <div id="div_block-200-3855" class="ct-div-block atomic-content-31-text-column">
                        <div id="div_block-201-3855" class="ct-div-block production-step-text">
                            <h4 id="headline-202-3855" class="ct-headline atomic-content-31-title">Area Penimbangan</h4>
                            <div id="text_block-204-3855" class="ct-text-block atomic-content-31-text">Ruang dengan
                                peralatan penimbangan yang presisi untuk menimbang bahan baku sesuai dengan formulasi yang
                                telah ditentukan. Menjamin akurasi dan konsistensi formulasi produk.</div>
                        </div>
                    </div>
                    <div id="div_block-195-3855" class="ct-div-block atomic-content-31-middle-column">
                        <div id="div_block-196-3855" class="ct-div-block atomic-content-31-icon">
                            <div id="text_block-197-3855" class="ct-text-block">LANGKAH 2</div>
                        </div>
                        <div id="div_block-199-3855" class="ct-div-block atomic-content-31-line"></div>
                    </div>
                    <div id="div_block-193-3855" class="ct-div-block">
                        <img id="image-194-3855" alt="bengkel produksi" src="{{ asset('assets/img/production/pic6.jpg') }}"
                            class="ct-image" loading="lazy" fetchpriority="low">
                    </div>
                </div>
                <div id="new_columns-207-3855" class="ct-new-columns">
                    <div id="div_block-208-3855" class="ct-div-block">
                        <img id="image-209-3855" alt="Garis pengemasan"
                            src="{{ asset('assets/img/production/pic1.jpg') }}" class="ct-image" loading="lazy"
                            fetchpriority="low">
                    </div>
                    <div id="div_block-210-3855" class="ct-div-block atomic-content-31-middle-column">
                        <div id="div_block-211-3855" class="ct-div-block atomic-content-31-icon">
                            <div id="text_block-212-3855" class="ct-text-block">LANGKAH 3</div>
                        </div>
                        <div id="div_block-214-3855" class="ct-div-block atomic-content-31-line"></div>
                    </div>
                    <div id="div_block-215-3855" class="ct-div-block atomic-content-31-text-column">
                        <div id="div_block-216-3855" class="ct-div-block atomic-content-31-wrapper">
                            <h4 id="headline-217-3855" class="ct-headline atomic-content-31-title">Area Produksi dan
                                Pengolahan</h4>
                            <div id="text_block-219-3855" class="ct-text-block atomic-content-31-text">Ruangan di mana
                                bahan baku dicampur, diolah, dan diproses menjadi produk jadi. Dilengkapi dengan berbagai
                                mesin dan peralatan seperti mixer, homogenizer, dan reaktor. Mengolah bahan baku menjadi
                                produk skincare dan kosmetik melalui proses pencampuran, pemanasan, pendinginan, an
                                homogenisasi sesuai dengan standar Cara Pembuatan Kosmetik yang Baik (CPKB).</div>
                        </div>
                    </div>
                </div>
                <div id="new_columns-220-3855" class="ct-new-columns">
                    <div id="div_block-228-3855" class="ct-div-block atomic-content-31-text-column">
                        <div id="div_block-229-3855" class="ct-div-block atomic-content-31-wrapper">
                            <h4 id="headline-230-3855" class="ct-headline atomic-content-31-title">Area Filling dan
                                Packaging</h4>
                            <div id="text_block-232-3855" class="ct-text-block atomic-content-31-text">Ruang untuk mengisi
                                produk jadi ke dalam kemasan akhir seperti botol, tube, atau jar, dan kemudian menyegelnya.
                                Memastikan produk diisi ke dalam kemasan dengan tepat dan higienis, serta memastikan kemasan
                                tertutup rapat untuk menjaga kualitas produk.</div>
                        </div>
                    </div>
                    <div id="div_block-223-3855" class="ct-div-block atomic-content-31-middle-column">
                        <div id="div_block-224-3855" class="ct-div-block atomic-content-31-icon">
                            <div id="text_block-225-3855" class="ct-text-block">LANGKAH 4</div>
                        </div>
                        <div id="div_block-227-3855" class="ct-div-block atomic-content-31-line"></div>
                    </div>
                    <div id="div_block-221-3855" class="ct-div-block">
                        <img id="image-222-3855" alt="Kontrol kualitas produk perawatan kulit"
                            src="{{ asset('assets/img/production/pic7.jpg') }}" class="ct-image" loading="lazy"
                            fetchpriority="low">
                    </div>
                </div>
                <div id="new_columns-234-3855" class="ct-new-columns">
                    <div id="div_block-235-3855" class="ct-div-block">
                        <img id="image-236-3855" alt="Pengiriman produk perawatan kulit"
                            src="{{ asset('assets/img/production/pic3.jpg') }}" class="ct-image" loading="lazy"
                            fetchpriority="low">
                    </div>
                    <div id="div_block-237-3855" class="ct-div-block atomic-content-31-middle-column">
                        <div id="div_block-238-3855" class="ct-div-block atomic-content-31-icon">
                            <div id="text_block-239-3855" class="ct-text-block">LANGKAH 5</div>
                        </div>
                        <div id="div_block-241-3855" class="ct-div-block atomic-content-31-line"></div>
                    </div>
                    <div id="div_block-242-3855" class="ct-div-block atomic-content-31-text-column">
                        <div id="div_block-243-3855" class="ct-div-block atomic-content-31-wrapper">
                            <h4 id="headline-244-3855" class="ct-headline atomic-content-31-title">Area Penyimpanan Produk
                                Jadi</h4>
                            <div id="text_block-246-3855" class="ct-text-block atomic-content-31-text">Ruangan dengan
                                kondisi terkontrol untuk menyimpan produk jadi sebelum didistribusikan. Menjaga kualitas
                                produk jadi dan memastikan ketersediaan stok untuk pengiriman</div>
                        </div>
                    </div>
                </div>
                <div id="new_columns-220-3855" class="ct-new-columns">
                    <div id="div_block-228-3855" class="ct-div-block atomic-content-31-text-column">
                        <div id="div_block-229-3855" class="ct-div-block atomic-content-31-wrapper">
                            <h4 id="headline-230-3855" class="ct-headline atomic-content-31-title">Area Gowning (Ruang
                                Ganti)</h4>
                            <div id="text_block-232-3855" class="ct-text-block atomic-content-31-text">Area di mana
                                karyawan mengenakan pakaian khusus produksi seperti baju steril, masker, dan sarung tangan
                                sebelum masuk ke area produksi. Menjaga kebersihan dan mencegah kontaminasi dari lingkungan
                                luar.</div>
                        </div>
                    </div>
                    <div id="div_block-223-3855" class="ct-div-block atomic-content-31-middle-column">
                        <div id="div_block-224-3855" class="ct-div-block atomic-content-31-icon">
                            <div id="text_block-225-3855" class="ct-text-block">LANGKAH 6</div>
                        </div>
                        <div id="div_block-227-3855" class="ct-div-block atomic-content-31-line"></div>
                    </div>
                    <div id="div_block-221-3855" class="ct-div-block">
                        <img id="image-222-3855" alt="Kontrol kualitas produk perawatan kulit"
                            src="{{ asset('assets/img/production/pic2.jpg') }}" class="ct-image" loading="lazy"
                            fetchpriority="low">
                    </div>
                </div>
                <div id="new_columns-234-3855" class="ct-new-columns">
                    <div id="div_block-235-3855" class="ct-div-block">
                        <img id="image-236-3855" alt="Pengiriman produk perawatan kulit"
                            src="{{ asset('assets/img/production/pic9.jpg') }}" class="ct-image" loading="lazy"
                            fetchpriority="low">
                    </div>
                    <div id="div_block-237-3855" class="ct-div-block atomic-content-31-middle-column">
                        <div id="div_block-238-3855" class="ct-div-block atomic-content-31-icon">
                            <div id="text_block-239-3855" class="ct-text-block">LANGKAH 7</div>
                        </div>
                        <div id="div_block-241-3855" class="ct-div-block atomic-content-31-line"></div>
                    </div>
                    <div id="div_block-242-3855" class="ct-div-block atomic-content-31-text-column">
                        <div id="div_block-243-3855" class="ct-div-block atomic-content-31-wrapper">
                            <h4 id="headline-244-3855" class="ct-headline atomic-content-31-title">Area Document Control
                            </h4>
                            <div id="text_block-246-3855" class="ct-text-block atomic-content-31-text">Ruang untuk
                                menyimpan semua dokumentasi terkait produksi, seperti formula, prosedur operasional standar
                                (SOP), dan catatan batch. Memastikan semua proses produksi terdokumentasi dengan baik dan
                                mematuhi regulasi serta standar industri.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
