@include('css.style')
<body>
<div class="row clearfix">
    <div class="col-md-6">Product Name</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="nama" value="{{ $model->nama }}"> 
        @foreach($errors->get('nama') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Purchase Date</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_lahir" value="{{ $model->tanggal_lahir }}">
        @foreach($errors->get('tanggal_lahir') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Product Price</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="gelar" value="{{ $model->gelar }}">
        @foreach($errors->get('gelar') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Product Stock</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="nip"  value="{{ $model->nip }}">
        @foreach($errors->get('nip') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>


<div class="row clearfix">
    <div class="col-md-6">Product Picture</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="file" name="foto_profile">
        @foreach($errors->get('foto_profile') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
        @if(strlen($model->foto_profile)>0)
            <img src="{{ asset('foto/'.$model->foto_profile) }}">
        @endif
    </div>
</div>

<button type="submit" class="btn btn-primary">SAVE</button>
</body>