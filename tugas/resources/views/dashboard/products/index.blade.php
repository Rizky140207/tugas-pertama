<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0">Product</h4>
                <a href="{{ route('products-tambah') }}" class="btn btn-primary">
                    + Tambah Product
                </a>
            </div>

            <!-- Tabel -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->stock}}</td>
                            <td>Rp{{number_format($product->price, 0, ",", ".")}}</td>
                            <td><img src="{{$product->image}}" alt="Product A" class="img-fluid" style="max-height:150px"></td>
                            <td>
                                <a href="{{ route('products-edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
            </div>

        </div>
    </div>
</div>
</x-app-layout>
