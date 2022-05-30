<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-dark" href="#" style="width: 14%"><i class="bi bi-person-check"></i>  {{ auth()->user()->username }}</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap"> 
      <form action="/logout" method="get">
        @csrf
        <button type="submit" class="nav-link px-5 bg-light border-0 text-dark" >Logout <i class="bi bi-box-arrow-right"></i></button>
    </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" style="width: 14%">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}  text-light" href="admin">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-2 {{ Request::is('admin.slidebars') ? 'active' : '' }}  text-light" href="admin.slidebars">
              <span data-feather="file-text"></span>
              Slider Front
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-2 {{ Request::is('admin.products') ? 'active' : '' }}  text-light" href="admin.products">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-2 {{ Request::is('pegawai') ? 'active' : '' }}  text-light" href="pegawai">
              <span data-feather="dollar-sign"></span>
              Payment Confirmation
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <a href="{{ url('create') }}" class="btn btn-dark" style="width: 15%">Add Users <i class="bi bi-person-plus" style="margin-left: 5%"></i></a>
      </div>
      </main>
        <div class="justify-content-center ms-sm-auto" style="width: 86%;">
            <div class="card-header">
              <i class="bi bi-clipboard-data"></i> Status Progress
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $dataUser)
                  <tr>
                    <td>{{ $dataUser->name }}</td>
                    <td>{{ $dataUser->username }}</td>
                    <td>{{ $dataUser->email }}</td>
                    <td>{{ $dataUser->level }}</td>
                    <td>{{ $dataUser->phone }}</td>
                    <td>{{ $dataUser->dateofbirth }}</td>
                    <td>
                      <a class="btn btn-warning" href="{{ url('/show/'.$dataUser->id) }}"><i class="bi bi-pencil-square"></i></a><td><a class="btn btn-danger" href="{{ url('/destroy/'.$dataUser->id) }}"><i class="bi bi-trash"></i></a></td></td>
                  </tr>
                </tbody>
                @endforeach
                <div class="card-footer text-muted"></div>
              </table>
              <p class="card-text"></p>
            </div>
          </div>
      </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
  </body>
</html>
 