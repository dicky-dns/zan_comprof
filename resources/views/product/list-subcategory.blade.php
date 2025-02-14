@extends('layouts.app')

@section('content')
    <div class="page-hero"
        style="background-image: url({{ asset('assets/img/category/' . ($subcategory->category->image->where('type', 'banner')->first()->image ?? 'default-banner.jpg')) }})">
        <div class="page-hero-content">
            <div class="container">
                <div class="row px-section">
                    <h1 class="page-title text-center text-light">{{ $subcategory->name }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row px-section product-category">
        <div class="col-12 col-lg-7">
            <div class="carousel slide" id="carouselCategory">
                @if (($subcategory->category->image->where('type', 'card')->count() ?? 0) > 1)
                    <button class="carousel-control-prev" data-bs-target="#carouselCategory" data-bs-slide="prev"
                        type="button">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" data-bs-target="#carouselCategory" data-bs-slide="next"
                        type="button">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>
        </div>
    </div>

    <div class="row px-section">
        <div class="col-lg-3 d-none d-lg-block" style="background-color: #f5f3f3">
            <div class="sticky-top px-4" style="top:90px; z-index: 20;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pt-0">
                        <h5 class="category-title">Kategori Produk</h5>
                    </li>
                    @foreach ($kategoriall as $item)
                        <div class="list-group-item category-list list-group-item-action {{ $item->slug === ($category->slug ?? $subcategory->slug) ? 'active' : '' }}"
                            onclick="window.location.href='{{ route('kategori', $item->slug) }}'">{{ $item->name }}
                            <i class="fa fa-caret-right"></i>
                            <div class="subcategory-list">
                                @foreach ($item->subcategory as $sc)
                                    <a class="list-group-item list-group-item-action {{ $sc->slug === ($subcategory->slug ?? '') ? 'active' : '' }}"
                                        href="{{ route('subkategori', $sc->slug) }}">{{ $sc->name }} </a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-9 mt-4">
            <div class="row mb-3">
                <div class="col-8">
                    <p>Showing 1–{{ $products->count() }} of {{ $products->total() }} results</p>
                </div>
                <div class="col-4 text-end">
                    <select class="form-select" id="sortProducts" onchange="sortProducts()">
                        <option value="default">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="latest">Sort by latest</option>
                        <option value="price_low_high">Sort by price: low to high</option>
                        <option value="price_high_low">Sort by price: high to low</option>
                    </select>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-6 col-lg-3 p-2">
                        <div class="card product-col px-lg-2 shadow-sm" style="border-radius: 10px">
                            <a class="thumbnail" href="{{ route('produkdetail', $product->slug) }}">
                                <img class="card-img-top w-100"
                                    src="{{ asset('assets/img/product/' . $product->image->first()->image) }}"
                                    alt="{{ $product->name }}" style="object-fit: cover; aspect-ratio:1/1;" loading="lazy">
                            </a>
                            <div class="card-body entry-wrapper d-flex flex-column">
                                <h6 class="card-title entry-title"><a
                                        href="{{ route('produkdetail', $product->slug) }}">{{ $product->name }}</a>
                                </h6>
                                <button class="btn-lihat-detail mx-auto"
                                    onclick="window.location.href = '{{ route('produkdetail', $product->slug) }}'">Lihat
                                    Detail</button>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center pt-5 bottom-paginate">
                    {{ $products->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
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

        function sortProducts() {
            var sortValue = document.getElementById('sortProducts').value;
            var url = new URL(window.location.href);
            url.searchParams.set('sort', sortValue);
            window.location.href = url.toString();
        }
    </script>
@endsection
