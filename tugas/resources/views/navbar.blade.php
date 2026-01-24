<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">MyStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Keranjang</a></li>
                 @if (Route::has('login'))
                    @auth
                      <li class="nav-item">
                    <a class="btn btn-primary btn-sm ms-3" href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                    @else
                         <li class="nav-item">
                    <a class="btn btn-primary btn-sm ms-3" href="{{ route('login') }}">Log in</a>
                </li>

                        @if (Route::has('register'))
                             <li class="nav-item">
                    <a class="btn btn-primary btn-sm ms-3" href="{{ route('register') }}">Register</a>
                </li>
                        @endif
                    @endauth
            @endif
            </ul>
        </div>
    </div>
</nav>