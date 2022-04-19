@extends('layouts.default')
@include('css.style')

@section('content')
        <title>Edit User  </title>
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
                                        <h3 class="text-center font-weight-dark my-4 text-light">Edit User</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('/update/'. $data->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="small mb-1 text-light" for="name">Username</label>
                                                <input
                                                    class="form-control py-4  border-0"
                                                    name="name"
                                                    type="text"
                                                    placeholder="Enter Username"/>
                                                @if($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                                <button class="btn btn-primary btn-block" type="submit">Edit User</button>
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
