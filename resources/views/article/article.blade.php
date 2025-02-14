@extends('layouts.app')

<style>
    .card {
        background-color: #fff;
        border: 1px solid #ddecff !important;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 4px 5px rgba(0, 0, 0, 0.3) !important;
        transform: translateY(-10px);
    }

    .btn-primary {
        background-color: var(--bs-primary);
        border-color: var(--bs-primary);
        transition: background-color 0.3s ease, transform 0.2s ease;
        font-size: 16px !important;
    }

    .btn-primary:hover {
        transform: scale(1.02);
        font-weight: bold;
    }
</style>

@section('content')
    <div class="page-hero" style="background-image: url({{ asset('assets/img/about/banner.png') }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center" style="color: white; font-size: 48px; font-weight: bold;">ARTIKEL</h1>
                    <h2 class="subtitle text-center mt-4" style="color: white; font-size: 24px; font-weight: bold;">Berbagai
                        informasi terkini seputar skincare dan kecantikan</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-start gx-4 gy-5 p-5">
        @foreach ($articles as $a)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card position-relative shadow-sm rounded overflow-hidden h-100 cursor-pointer" tabindex="1"
                    onclick="window.location.href='{{ route('articledetail', $a->slug) }}'">
                    <img class="card-img-top img-fluid article-img-cover"
                        src="{{ asset('assets/img/article/') . '/' . $a->cover }}" alt="{{ $a->title }}"
                        style="height: 150px; object-fit: cover;">
                    <div class="card-body d-flex flex-column justify-content-between p-3">
                        <div>
                            <p class="text-muted small mb-2">
                                {{ \Carbon\Carbon::parse($a->post_date)->isoFormat('dddd, D MMMM Y') }}
                            </p>
                            <h5 class="card-title text-truncate mb-3" title="{{ $a->title }}">
                                {{ $a->title }}
                            </h5>
                            <p class="card-text text-muted mb-3" style="font-size: 0.9rem;">
                                {!! Str::limit(strip_tags($a->content), 100, '...') !!}
                            </p>
                        </div>
                        <a href="{{ route('articledetail', $a->slug) }}" class="btn btn-primary btn-sm mt-auto border-0"
                            style="border-radius: 5px; margin-bottom:10px">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pt-4">
        {{ $articles->links('pagination::bootstrap-5') }}
    </div>
@endsection
