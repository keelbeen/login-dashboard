@extends('layouts.default')
@include('css.style')

@section('content')
        <title>Edit Banner  </title>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 bg-dark">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-dark my-4 text-light">Edit Banner</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('update1', $slidebar->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="image" class="form-label text-light">Input Image</label>
                                                <img class="img-preview img-fluid">
                                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                                               @error('image')
                                                 <div class="invalid-feedback">
                                                     {{ $message }}
                                                 </div>
                                               @enderror   
                                            </div>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                                <button class="btn btn-primary btn-block" type="submit">Edit Banner</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small mt-2">
                                            <a href=""{{ url('/') }}> 
                                                << Kembali ke halaman utama</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
 
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
@endsection
