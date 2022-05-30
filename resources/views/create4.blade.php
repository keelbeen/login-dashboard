@extends('layouts.default')
 
@include('css.style')
@section('content')
<title>Add More Banner</title>
    <section>
        <div class="container col-lg-8 mt-5">
                <h1>Add More Banner</h1>
                <div class="row">
                    <form action="{{url('/store1')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label text-light">Input Image</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                           @error('image')
                             <div class="invalid-feedback">
                                 {{ $message }}
                             </div>
                           @enderror   
                        </div>
                        <div
                            class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            {{-- <a class="small" href="#">Forgot Password?</a> --}}
                            <button class="btn btn-primary btn-block" type="submit">Add Banner</button>
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