@extends('layouts.app')

<link rel='stylesheet' id='oxygen-cache-709-css'
    href='https://cdn.xiranskincare.com/wp-content/cache/flying-press/56f6d5cc626b.709.css' type='text/css' media="print"
    onload="this.onload=null;this.rel='stylesheet';this.media='all';" />

<style>
    .btn-primary {
        background-color: var(--bs-primary);
        border-color: var(--bs-primary);
        transition: background-color 0.3s ease, transform 0.2s ease;
        font-size: 14px !important;
    }

    .btn-primary:hover {
        transform: scale(1.02);
        font-weight: bold;
    }
</style>

@section('content')
    <section id="section-18-709" class="ct-section">
        <div class="page-hero" style="background-image: url({{ asset('assets/img/about/banner.png') }})">
            <div class="page-hero-content">
                <div class="container">
                    <div class="row px-section">
                        <h1 class="page-title text-center" style="color: white; font-size: 48px; font-weight: bold;">ARTIKEL
                        </h1>
                        <h2 class="subtitle text-center mt-4" style="color: white; font-size: 24px; font-weight: bold;">
                            {{ $article->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-42-709" class="ct-section">
        <div class="ct-section-inner-wrap">
            <div id="div_block-43-709" class="ct-div-block">
                <div class="col-12 col-lg-2 p-3 p-lg-0">
                    <div id="div_block-45-709" class="ct-div-block oxel_toc__container sticky_top mb-3">
                        <div id="code_block-46-709" class="ct-code-block">
                        </div>
                        <div id="div_block-47-709" class="ct-div-block">
                            <div id="text_block-48-709" class="ct-text-block">Table of Contents</div>
                            <div id="fancy_icon-49-709" class="ct-fancy-icon">
                                <svg id="svg-fancy_icon-49-709">
                                    <use xlink:href="#FontAwesomeicon-chevron-up"></use>
                                </svg>
                            </div>
                        </div>
                        <a id="link_text-50-709" class="ct-link-text oxel_toc__template oxel_toc__primaryy" href="#"
                            target="_self" style="text-decoration: none;">{{ $article->title }}</a>
                    </div>
                    <div id="div_block-67-709" class="ct-div-block img-shadow-s sticky_top">
                        <div id="text_block-68-709" class="ct-text-block bg-primary">Kirimkan Pesan kepada Kami Di Bawah Dan
                            Kami Akan Menghubungi Anda Sesegera Mungkin!</div>
                        <div id="shortcode-69-709" class="ct-shortcode">
                            <div class="wpcf7 no-js" id="wpcf7-f19-o1" lang="en-US" dir="ltr" data-wpcf7-id="19">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 p-2">
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
                                                <textarea class="form-control" id="cmessage" name="message" required cols="30" rows="5" placeholder="Pesan"></textarea>
                                            </div>
                                            <button class="btn btn-primary btn-block w-100 rounded-2 mt-2"
                                                id="btnSubmitForm" type="submit"
                                                style="background-color: #00255d">Kirim</button>
                                        </form>
                                        <p class="mb-0 mt-2" id="successMessage" style="display: none"> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div_block-51-709" class="ct-div-block" style="width: 100%;">
                    <div id="-breadcrumb-52-709" class="oxy-breadcrumb oxy-woo-element">
                        <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb">
                            <a href="{{ route('home') }}" style="color: var(--bs-grey-70)">Beranda</a> / <a
                                href="{{ route('article') }}" style="color: var(--bs-grey-70)">Artikel</a> /
                            <span style="color: var(--bs-primary); font-weight: bold;">{{ $article->title }}</span>
                        </nav>
                    </div>
                    <h1 id="headline-53-709" class="ct-headline txt_center pt-2 pb-3">
                        <span id="span-54-709" class="ct-span" style="font-weight: bold; color: #4f4f4f;">
                            {{ $article->title }}
                        </span>
                    </h1>
                    <img class="cover-detail-article" class="w-100 mb-4"
                        src="{{ asset('assets/img/article') . '/' . $article->cover }}" alt="{{ $article->title }}"
                        style="border-radius: 10px">
                    <div id="text_block-57-709" class="ct-text-block">
                        <span id="span-58-709" class="ct-span oxy-stock-content-styles"
                            style="color: #4f4f4f !important;">
                            {!! $article->content !!}
                        </span>
                    </div>
                    <div>
                        <i>Posted at: {{ \Carbon\Carbon::parse($article->post_date)->translatedFormat('l, d F Y') }}</i>
                    </div>
                </div>
                <div class="col-12 col-lg-3 p-3 p-lg-0">
                    <div class="content-side-article">
                        <div class="main-title-side-article">ARTIKEL POPULER</div>
                        @foreach ($populararticle as $pa)
                            <div class="list-side-article"
                                onclick="window.location.href='{{ route('articledetail', $pa->slug) }}'">
                                <div class="left-side-article">
                                    <img src="{{ asset('assets/img/article') . '/' . $pa->cover }}" alt="">
                                </div>
                                <div class="right-side-article">
                                    <div class="article-side-title">{{ $pa->title }}</div>
                                    <div class="article-side-date">
                                        {{ \Carbon\Carbon::parse($pa->post_date)->translatedFormat('l, d F Y') }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
