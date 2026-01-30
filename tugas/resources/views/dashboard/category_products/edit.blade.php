<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kategori Produk') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Edit Kategori Baru</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('product-category.update', $category->id) }}" method="post">
                        @method('PUT') @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control" 
                                value="{{ $category->name }}"
                                required
                            >
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-secondary me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>