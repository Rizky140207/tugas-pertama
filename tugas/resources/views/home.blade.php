@extends('layout')
@section('title', 'E-Commerce Website')
@section('content')
<!-- HERO -->
<section class="hero text-center">
    <div class="container">
        <h1 class="fw-bold mb-3">Belanja Mudah & Cepat</h1>
        <p class="mb-4">Produk berkualitas dengan harga terbaik</p>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <input type="text" class="form-control form-control-lg" placeholder="Cari produk favoritmu...">
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

        <!-- PRODUK -->
        <div class="col-md-3">
            <div class="card product-card h-100">
                <span class="badge bg-danger position-absolute m-2">Diskon</span>
                <img src="https://via.placeholder.com/300x220" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Headphone Gaming</h6>
                    <div class="mb-2">⭐⭐⭐⭐☆</div>
                    <p class="old-price">Rp 350.000</p>
                    <p class="price">Rp 299.000</p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="#" class="btn btn-primary btn-sm">Tambah ke Keranjang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card product-card h-100">
                <img src="https://via.placeholder.com/300x220" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Keyboard Mechanical</h6>
                    <div class="mb-2">⭐⭐⭐⭐⭐</div>
                    <p class="price">Rp 450.000</p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="#" class="btn btn-primary btn-sm">Tambah ke Keranjang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card product-card h-100">
                <span class="badge bg-success position-absolute m-2">New</span>
                <img src="https://via.placeholder.com/300x220" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Mouse Wireless</h6>
                    <div class="mb-2">⭐⭐⭐⭐☆</div>
                    <p class="price">Rp 180.000</p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="#" class="btn btn-primary btn-sm">Tambah ke Keranjang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card product-card h-100">
                <img src="https://via.placeholder.com/300x220" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Monitor 24 Inch</h6>
                    <div class="mb-2">⭐⭐⭐⭐⭐</div>
                    <p class="price">Rp 2.100.000</p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="#" class="btn btn-primary btn-sm">Tambah ke Keranjang</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection