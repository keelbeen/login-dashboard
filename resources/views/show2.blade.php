@extends('layouts.default')
 
@include('css.style')
@section('content')
<title>Edit products</title>

<section>
    <div class="container col-lg-8 mt-5">
            <h1>Edit products</h1>
            <div class="row">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                    @method('PUT')
                @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-dark">NAMA PRODUK</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Enter Name" value="{{$product->name}}">
                        @error('name')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-dark">FOTO PODUK</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                       @error('image')
                         <div class="invalid-feedback">
                             {{ $message }}
                         </div>
                       @enderror   
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label text-dark">HARGAA PRODUK</label>
                        <input class="form-control @error('price') is-invalid @enderror" type="number" id="price" name="price" placeholder="Enter Price"  value="{{$product->price}}">
                        @error('price')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label text-dark">STOK PRODUK</label>
                        <input class="form-control @error('stock') is-invalid @enderror" type="text" id="stock" name="stock" placeholder="Enter Stock" value="{{$product->stock}}">
                        @error('stock')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label text-dark">BERAT PRODUK</label>
                        <input class="form-control @error('weight') is-invalid @enderror" type="text" id="number" name="weight" placeholder="Enter Weight" value="{{$product->weight}}">
                        @error('weight')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="itemcondition" class="form-label text-dark">KONDISI PRODUK</label>
                        <input class="form-control @error('itemcondition') is-invalid @enderror" type="text" id="itemcondition" name="itemcondition" placeholder="Enter Item Condition" value="{{$product->itemcondition}}">
                        @error('itemcondition')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="minorder" class="form-label text-dark">MINIMAL PEMESANAN</label>
                        <input class="form-control @error('minorder') is-invalid @enderror" type="text" id="minorder" name="minorder" placeholder="Enter Min Order" value="{{$product->minorder}}">
                        @error('minorder')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <form action="{{ route('products.create') }}" method="POST" enctype="multipart/form-data" class="form">
                        @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label text-dark">DESKRIPSI PRODUK</label>
                        <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" placeholder="Enter Description" value="{{$product->description}}">
                        @error('description')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        {{-- <a class="small" href="#">Forgot Password?</a> --}}
                        <button class="btn btn-primary btn-block" type="submit">EDIT</button>
                    </div>
                    <div class="form-group mt-4">
                            <a class="btn btn-dark" href="{{ url('/admin') }}"> 
                                <i class="bi bi-box-arrow-left"></i> Back To Dashboard</a>
                        </div>
            </form>
        </div>
    </div>
</div>
    </div>
    </div>
</section>
@endsection