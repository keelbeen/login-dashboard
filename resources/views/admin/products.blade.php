<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-dark" href="#" style="widht: 10%"><i class="bi bi-person-check"></i>  {{ auth()->user()->username }}</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap"> 
      <form action="/logout" method="get">
        @csrf
        <button type="submit" class="nav-link px-3 bg-light border-0 text-dark" >Logout <i class="bi bi-box-arrow-right"></i></button>
    </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark  sidebar collapse" style="widht: 10%">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('admin') ? 'active' : '' }}  text-light" href="admin">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin.slidebars') ? 'active' : '' }}  text-light" href="admin.slidebars">
              <span data-feather="file-text"></span>
              Slider Front
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('admin.product') ? 'active' : '' }}  text-light" href="admin.product">
              <span data-feather="shopping-cart"></span>
              Product
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('pegawai') ? 'active' : '' }}  text-light" href="pegawai">
              <span data-feather="dollar-sign"></span>
              Payment Confirmation
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product</h1>
        <a href="/" style="text-decoration: none;"  class="text-dark">Look in Home <i class="bi bi-eye-fill"></i></a>
        <a href="{{ url('create2') }}" class="btn btn-dark" style="width: 15%">Add Products <i class="bi bi-file-earmark-diff"></i></a>
      </div>
      </main>
      <div class="justify-content-center ms-sm-auto" style="width: 83%;">
            <div class="card-head er">
              <i class="bi bi-clipboard-data"></i> Product progres
            </div>
              <table class="table">
                <thead class="mt-3">
                  <tr class="mt-3">
                    
                  
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Item Condition</th>
                    <th scope="col">Min Order</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="mt-5">
                @foreach ($product as $products)
                  <tr class="mt-3">
                    
                    <td class="mt-5">{{ $products->name }}</td>
                    <td class="mt-5"><img height="100px" src="{{asset('storage/'. $products->image)}}" ></td>
                    <td class="mt-5">{{ $products->stock }}</td>
                    <td class="mt-5"> {{ $products->price }}</td>
                    <td class="mt-5">{{ $products->weight }}</td>
                    <td class="mt-5">{{ $products->itemcondition }}</td>
                    <td class="mt-5">{{ $products->minorder }}</td>
                    <td class="mt-5">{{ $products->description }}</td>
                    <td class="mt-5" style="margin-right: 10rem">

                      <a class="btn btn-warning mt-1" href="{{ route('products.show', $products->id) }}"><i class="bi bi-pencil-square"></i></a>
                      <form action="{{ route('products.delete', $products->id) }}" 
                      class="form-delete" 
                      method="POST" 
                      onsubmit="return confirm('Apakah anda yakin menghapus data ini?')">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger mt-3" href="{{ url('/delete/'.$products->id) }}"><i class="bi bi-trash"></i></a>
                      </form>
                      

                  </tr>
                </tbody>
                @endforeach
                <div class="card-footer text-muted mt-3"></div>
              </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </body>
</html>
