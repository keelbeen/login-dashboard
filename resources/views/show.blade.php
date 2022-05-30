@extends('layouts.default')
@include('css.stul')

@section('content')
        <title>Edit User Level</title>
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
                                        <h3 class="text-center font-weight-dark my-4 text-light">Add Level</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('/update/'. $data->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">    
                                                <label class="small mb-1 text-light" for="level">Level</label>
                                                
                                                <select class="form-select" aria-label="Default select example" name="level">
                                                    <option selected>Choose Level</option>
                                                    <option value="1">Level 1->Only Admin</option>
                                                    <option value="2">Level 2->User can build store in their account</option>
                                                    <option value="3">Level 3->User can't build store in their account</option>
                                                  </select>
                                                    @error ('level')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                      </div>
                                                    @enderror              
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
