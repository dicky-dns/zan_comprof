<footer class="text-light pt-4 pb-0">
    <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col-12 col-md-12 px-4 py-2">
                <div class="footer-title ">CV. ZWEENA ADI NUGRAHA</div>
            </div>
        </div>
        <div class="row footer-atas">
            <div class="col-12 col-md-5 px-4 py-2">
                <div class="footer-content-atas">
                    <div class="d-flex">
                        <div class="logo-footer-content-atas">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="title-footer-content-atas">
                            Alamat Pabrik
                        </div>
                    </div>
                    <div class="body-footer-content-atas">
                        Dk. Bulurejo, Ds. Krajan, Kec. Gatak, Kab. Sukoharjo, Jawa Tengah (57557)
                    </div>
                </div>
                <div class="footer-content-atas">
                    <div class="d-flex">
                        <div class="logo-footer-content-atas">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="title-footer-content-atas">
                            Kantor Pemasaran
                        </div>
                    </div>
                    <div class="body-footer-content-atas">
                        Jl.Empu Tantular No.1 Gentan, Baki, Sukoharjo, Jawa Tengah, (57556) Telp (0271) 7470508
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 px-4 py-2">
                <div class="footer-content-atas">
                    <div class="d-flex">
                        <div class="logo-footer-content-atas">
                            <i class="fa fa-whatsapp"></i>
                        </div>
                        <div class="title-footer-content-atas">
                            Customer Service
                        </div>
                    </div>
                    <div class="body-footer-content-atas">
                        <a class="contact-us-footer" target="_blank"
                            href="https://api.whatsapp.com/send?phone=6282134957409&text=halo%20Kak%20Raras%2C%20Saya%20mau%20konsultasi%20terkait%20maklon.">CS
                            1 : 0821 3495 7409</a>
                        <a class="contact-us-footer" target="_blank"
                            href="https://api.whatsapp.com/send?phone=6281227362270&text=Halo%20kak%20Lely..%20Saya%20mau%20konsultasi%20terkait%20maklon%20kak.%20Mohon%20dibantu%20ya%20kak..%20%F0%9F%99%8F%F0%9F%99%82">CS
                            3 : 0812 2736 2270</a><br>
                        <a class="contact-us-footer" target="_blank"
                            href="https://api.whatsapp.com/send?phone=6282255006664&text=Halo%20kak%20Mayza%2C%20saya%20mau%20konsultasi%20terkait%20maklon.">CS
                            2 : 0822 5500 6664</a>
                        <a class="contact-us-footer" target="_blank"
                            href="https://api.whatsapp.com/send?phone=628112677704&text=Halo%20kak%20Sarah%2C%20saya%20mau%20konsultasi%20terkait%20maklon.">CS
                            4 : 0811 2677 704</a>
                    </div>
                </div>

                <div class="footer-content-atas">
                    <div class="d-flex">
                        <div class="logo-footer-content-atas">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="title-footer-content-atas">
                            E-mail
                        </div>
                    </div>
                    <div class="body-footer-content-atas">
                        <a target="_blank" href="mailto:marketing@zweena.co.id">marketing@zweena.co.id</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 px-4 py-2">
                <div class="footer-content-atas">
                    <div class="d-flex">
                        <div class="title-footer-content-atas">
                            Follow Us
                        </div>
                    </div>
                    <div class="body-footer-content-atas p-0">
                        <a href="https://www.instagram.com/zweena.indonesia" target="_blank"><i
                                class="fa fa-instagram"></i></a>
                        {{-- <a href="https://www.facebook.com/2nagakosmetindo" target="_blank"><i class="fa fa-facebook"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="line-footer"></div>
        <div class="row footer-bawah">
            <div class="col-12 col-md-5 px-4 py-2">
                <div class="footer-content-bawah">
                    <div class="title-footer-content-bawah">
                        TENTANG KAMI
                    </div>
                    <div class="body-footer-content-bawah">
                        CV. Zweena Adi Nugraha merupakan perusahaan yang bergerak di bidang jasa maklon kosmetik. Yang
                        beroperasi sejak tahun 2015.
                        Didukung oleh tenaga ahli sesuai bidangnya.<br>
                        Saat ini CV. Zweena Adi Nugraha tumbuh dan berkembang membangun produk yang berkualitas dan
                        pelayanan yang lebih baik.
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="row category-row-footer">
                    <div class="col-12 col-md-6 py-2">
                        <div class="footer-content-bawah">
                            <div class="title-footer-content-bawah">
                                KATEGORI POPULER
                            </div>
                            @foreach ($selectedkategori as $sk)
                                <div class="footer-list">
                                    <a>{{ $sk->name }}</a>
                                </div>
                            @endforeach
                            <div class="footer-list lainnya">
                                <a>Lainnya</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-4 py-2">
                        <div class="footer-content-bawah">
                            <div class="title-footer-content-bawah">
                                PABRIK
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('pabrikan')}}">Pabrikan</a>
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('rnd')}}">Tim R & D</a>
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('qualitycontrol')}}">Quality Control</a>
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('pameranperdagangan')}}">Pameran Perdagangan</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12 col-md-6 py-2">
                        <div class="footer-content-bawah">
                            <div class="title-footer-content-bawah">
                                LAYANAN
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('customformulation') }}">Formulasi Kustom </a>
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('custompackaging') }}">Kemasan Khusus</a>
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('designservices') }}">Layanan Desain</a>
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('production') }}">Produksi</a>
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('certificateservices') }}">Layanan Sertifikat</a>
                            </div>
                            <div class="footer-list">
                                <a href="{{ route('warehousingshipping') }}">Pergudangan & Logistik</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="footer-copyright">
        <div class="container text-center">
            Copyright © {{ \Carbon\Carbon::now()->format('Y') }} <b>{{ env('APP_NAME') }}.</b> All Rights Reserved
        </div>
    </div>
</footer>
