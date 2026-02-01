@extends('layout')
@section('title', 'E-Commerce Website')
@section('content')

<style>
    .thumbnail_produk {
        height: 220px;
        width: 100%;
        overflow: hidden;
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
        background-color: #f8f9fa;
    }

    .thumbnail_produk img {
        width: 100%;
        height: 100%;
        object-fit: cover; 
        display: block;
    }
</style>

<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1 class="fw-bold mb-3">Belanja Mudah & Cepat</h1>
        <p class="mb-4">Produk berkualitas dengan harga terbaik</p>

        <div class="row justify-content-center">
            <div class="col-md-6">
               <form action="{{ route('home') }}" method="GET">
                <input 
                    type="text" 
                    name="search"
                    value="{{ request('search') }}"
                    class="form-control form-control-lg" 
                    placeholder="Cari produk favoritmu..."
                >
            </form>
            </div>
        </div>
    </div>
</section>

<!-- PRODUK -->
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Produk Populer</h4>
        <a href="#" class="text-decoration-none">Lihat Semua →</a>
    </div>

    <div class="row g-4">
        @foreach ($products as $product)
        <div class="col-md-3">
            <div class="card product-card h-100 position-relative">
                <span class="badge bg-danger position-absolute m-2">Diskon</span>

                <div class="thumbnail_produk">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                </div>

                <div class="card-body">
                    <h6 class="card-title">{{ $product->name }}</h6>
                    <p class="price">Rp{{number_format($product->price, 0, ",", ".")}}</p>
                    <div class="d-grid gap-2">
                        <a href="{{ route('product.click', $product->id) }}" target="_blank" class="btn btn-outline-primary btn-sm">Beli Sekarang</a>
                        {{-- <a href="#" class="btn btn-primary btn-sm">Tambah ke Keranjang</a> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div>
           {{ $products->appends(request()->query())->links() }}
    </div>
    </div>
</div>

@endsection
