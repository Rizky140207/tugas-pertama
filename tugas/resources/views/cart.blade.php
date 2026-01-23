@extends('layout')
@section('title', 'Keranjang Belanja')
@section('content')

<!-- CONTENT -->
<div class="container my-5">
    <h3 class="fw-bold mb-4">🛒 Keranjang Belanja</h3>

    <div class="row g-4">
        <!-- LIST PRODUK -->
        <div class="col-lg-8">
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="https://via.placeholder.com/300x200" class="cart-img">
                        </div>
                        <div class="col-md-4">
                            <h6 class="mb-1">Headphone Gaming</h6>
                            <small class="text-muted">Elektronik</small>
                        </div>
                        <div class="col-md-2 fw-semibold">
                            Rp 299.000
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control qty-input" value="1" min="1">
                        </div>
                        <div class="col-md-2 text-end">
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="https://via.placeholder.com/300x200" class="cart-img">
                        </div>
                        <div class="col-md-4">
                            <h6 class="mb-1">Keyboard Mechanical</h6>
                            <small class="text-muted">Elektronik</small>
                        </div>
                        <div class="col-md-2 fw-semibold">
                            Rp 450.000
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control qty-input" value="1" min="1">
                        </div>
                        <div class="col-md-2 text-end">
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RINGKASAN -->
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Ringkasan Belanja</h5>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Total Produk</span>
                        <span>2 item</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>Rp 749.000</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Ongkir</span>
                        <span>Rp 20.000</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between fw-bold mb-4">
                        <span>Total</span>
                        <span>Rp 769.000</span>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-primary">Checkout</a>
                        <a href="index.html" class="btn btn-outline-secondary">Belanja Lagi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
