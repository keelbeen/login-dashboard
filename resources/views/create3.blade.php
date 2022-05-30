@extends('layouts.default')
 
@include('css.style')
@section('content')
    <section>
        <div class="container col-lg-8 mt-5">
                <h1>Add More Users</h1>
                <div class="row">
                    <form action="{{url('/store3')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label class="small mb-1 text-light" for="inputEmailAddress">Username</label>
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
                            <button class="btn btn-primary btn-block" type="submit">Add Users</button>
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