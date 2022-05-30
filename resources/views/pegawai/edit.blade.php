@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('pegawai/'.$model->id) }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        @include('pegawai._form')
    </form>
@endsection