<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Register now!  </title>
        @include('css.style')
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
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
                                        <h3 class="text-center font-weight-dark my-4 text-light">Register</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{url('store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">    
                                                    <label class="small mb-1 text-light" for="name">Name</label>
                                                    <input
                                                        class="form-control py-4  border-0 @error('firstname') is-invalid @enderror" id="name" required value="{{ old('name') }}"
                                                        id="name"
                                                        type="text"
                                                        name="name"
                                                        placeholder="Enter Name"/>
                                                        @error ('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                          </div>
                                                        @enderror              
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1 text-light" for="username">Username</label>
                                                <input
                                                    class="form-control py-4  border-0 @error('firstname') is-invalid @enderror" id="username" required value="{{ old('username') }}"
                                                    id="username"
                                                    type="text"
                                                    name="username"
                                                    placeholder="Enter Username"/>
                                                    @error ('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                      </div>
                                                    @enderror                      
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1 text-light" for="email">Email Address</label>
                                                <input
                                                    class="form-control py-4  border-0 @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}"
                                                    id="email"
                                                    name="email"
                                                    type="text"
                                                    placeholder="Enter Email"/>
                                                    @error ('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                      </div>
                                                    @enderror       
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1 text-light" for="password">Password</label>
                                                <input
                                                    class="form-control py-4  border-0  @error('email') is-invalid @enderror" id="password" required value="{{ old('password') }}"
                                                    id="password"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Enter password"/>
                                                    @error ('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                      </div>
                                                    @enderror              
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <small class="d-block text-center mt-3 text-light">Alredy registered? <a href="/login">Login Now!</a></small>
                                                </div>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
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
</html>