@extends('layouts.default')
 
@include('css.style')
@section('content')
<title>Add Products</title>

<section>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 bg-dark">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-dark my-4 text-light">Add Products</h3>
                                </div>
                                <div class="card-body">
            <div class="form-group">
                <form action="{{ route('products.create') }}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Product Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Enter Name">
                        @error('name')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label  text-light">Product Image</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                       @error('image')
                         <div class="invalid-feedback">
                             {{ $message }}
                         </div>
                       @enderror   
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label  text-light">Product Price</label>
                        <input class="form-control @error('price') is-invalid @enderror" type="number" id="price" name="price" placeholder="Enter Price">
                        @error('price')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label  text-light">Product Stock</label>
                        <input class="form-control @error('stock') is-invalid @enderror" type="text" id="stock" name="stock" placeholder="Enter Stock">
                        @error('stock')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <label class="small mb-1 text-light" for="weight"></label>
                                                <div class="form-group">
                                                    <div class="mb-3">
                                                        <label for="weight" class="form-label  text-light">Product weight</label>
                                                        <input class="form-control @error('weight') is-invalid @enderror" type="text" id="weight" name="weight" placeholder="Enter weight">
                                                        @error('weight')
                                                        <small class="error">{{ $message }}</small>
                                                        @enderror
                                                    </div>       
                                                </div>       
                    <div class="mb-3">
                        <label for="itemcondition" class="form-label  text-light">Item Condition</label>
                        <input class="form-control @error('itemcondition') is-invalid @enderror" type="text" id="itemcondition" name="itemcondition" placeholder="Enter Item Condition">
                        @error('itemcondition')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="minorder" class="form-label  text-light">Min Order</label>
                        <input class="form-control @error('minorder') is-invalid @enderror" type="text" id="minorder" name="minorder" placeholder="Enter Min Order">
                        @error('minorder')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <form action="{{ route('products.create') }}" method="POST" enctype="multipart/form-data" class="form">
                        @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label  text-light">Description</label>
                        <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" placeholder="Enter Description">
                        @error('description')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div
                        class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        {{-- <a class="small" href="#">Forgot Password?</a> --}}
                        <button class="btn btn-primary btn-block" type="submit">Add Products</button>
                    </div>
                    <div class="form-group mt-4">
                            <a class="text-light" href="{{ url('/admin') }}"> 
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