<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategori Produk') }}
        </h2>
    </x-slot>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0">Kategori Produk</h4>
                <a href="{{ route('category-products-tambah') }}" class="btn btn-primary">
                    + Tambah Kategori
                </a>
            </div>

            <!-- Tabel -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Jumlah Produk</th>
                            <th>Aksi</th>
                        </tr>
                       
                    </thead>
                    <tbody>
                            @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->product_count}}</td>
                            <td>
                                <a href="{{ route('category-products-edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>

        </div>
    </div>
</div>
</x-app-layout>
