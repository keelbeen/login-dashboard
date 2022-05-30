@extends('layouts.main')
<title>Home</title>
<link rel="stylesheet" href="dash-css.dash-css">
<section>
<header class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0 shadow py-1">
    <h1><a class="navbar-brand m-3 text-warning" href="#" style="font-size: 80%">BLSTORE</a></h1>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <small style="margin-left: 2rem"><a href="" class="text-dark" 
      style="text-decoration: none">
      Kategori
    </a>
  </small>

            <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search" size="90">
          <h5 class="px-md-2">
            <a href="">
              <i class="bi bi-cart-fill text-dark"></i>
            </a>
          </h5>
          <h5 class="px-md-1">
            <a href="">
              <i class="bi bi-bell-fill text-dark"></i>
            </a>
          </h5>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3 text-dark" href="login" style="font-size: 100%">Daftar | Masuk</a>
        <a class="nav-link" href=""></a>
      </div>
    </div>
  </header>
</section>
<section>
  <div id="carouselExampleControls" class="carousel slide mt-4 col-lg-8 px-md-4" style="width: 100%" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        @foreach ($slidebar as $slidebars)
        <img src="{{asset('storage/' . $slidebars->image)}}" class="d-block w-100" alt="...">
        @endforeach
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
  <main class="px-md-4 mt-3">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2 mt-3">DAFTAR TOKO</h1>
    </div>
  </main>
  <section class="bg-light border rounded-3 mt-2" style="margin-left: 1rem;">
      <img src="pict/ipb.jpg" style="width: 12%; height: 12%; margin-right: 50%" class="m-4 md-4">
      <img src="pict/seed.png_large" style="width: 12%; height: 12%; margin-right: 50%" class="m-5">
      <img src="pict/fits.png" style="width: 15%; height: 15%; margin-right: 50%" class="m-5">
      <img src="pict/serambi.png" style="width: 15%; height: 15%; margin-right: 50%" class="m-4">
      <img src="pict/train.webp" style="width: 12%; height: 12%; margin-right: 50%" class="m-4">
  </div>
</section>
<main class="px-md-4 mt-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 mt-3">PRODUK DISKON 
      <small><a class="text-warning" href="">Lihat Semua</a></small></h1>
  </div>
</main>
<section class="mt-3 border rounded-3 bg-light" style="margin-left: 1rem;">
    <img src="pict/tas.jpg" style="width: 18%; height: 20%; margin-right: 50%" class="m-5">
    <img src="pict/kamera1.jpg" style="width: 18%; height: 20%; margin-right: 50%" class="m-4">
    <img src="pict/hp1.jpeg" style="width: 20%; height: 20%; margin-right: 50%" class="m-5">
    <img src="pict/casan.jpg" style="width: 16%; height: 20%; margin-right: 50%" class="m-5">
  </section>
<main class="px-md-4 mt-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 mt-3">PRODUK TERBARU
      <small><a class="text-warning" href="">Lihat Semua</a></small>
    </h1>
  </div>
</main>
<section class="mt-3 border rounded-3 bg-light" style="margin-left: 1rem;">
  <img src="pict/iphone.webp" style="width: 15%; height: 20%; margin-right: 50%" class="m-5">
  <img src="pict/razer.webp" style="width: 17%; height: 20%; margin-right: 50%" class="m-4">
  <img src="pict/tv.webp" style="width: 25%; height: 20%; margin-right: 50%" class="m-4">
  <img src="pict/kulkas.jpg" style="width: 19%; height: 20%; margin-right: 50%" class="m-4">
</section>
<main class="px-md-4 mt-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 mt-3">PRODUK TERLARIS
      <small><a class="text-warning" href="">Lihat Semua</a></small>
    </h1>
  </div>
</main>
<section class="mt-3 border rounded-3 bg-light" style="margin-left: 1rem;">
  <img src="pict/rog.png" style="width: 26%; height: 20%; margin-right: 50%" class="m-5">
  <img src="pict/kamera1.jpg" style="width: 18%; height: 20%; margin-right: 50%" class="m-4">
  <img src="pict/hp1.jpeg" style="width: 20%; height: 20%; margin-right: 50%" class="m-4">
  <img src="pict/rolex.webp" style="width: 16%; height: 20%; margin-right: 50%" class="m-4">
</section>
<button class="btn btn-light text-dark mt-5" style="margin-left: 40rem">Lihat Lainnya</button>

<section class="bg-light">
<div class="container mt-5">
  <footer class="py-5">
    <div class="row">
      <div class="col-4">
        <h5 class="text-warning">BLSTORE</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tentang Kami</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blog</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Karir</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hubungi Kami</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Daftar Toko</a></li>
        </ul>
      </div>

      <div class="col-4">
        <h5>Bantuan dan Panduan</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cara Pembelian</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Syarat dan Pembelian</a></li>
          <h5>Pengiriman</h5>
          <a href=""><img src="pict/jntex.jpg" alt="" style="width: 20%"></a> 
          <a href="" class="mt-2"><img src="pict/jne.jpg" alt="" style="width: 20%"></a>
        </ul>
      </div>

      <div class="col-4 px-md-4">
        <h5>Kantor</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Jalan Taman Kencana 3.
            Kelurahan Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128</a></li>
          <h5 class="col-8">Ikuti Kami 
            <a href=""><img src="pict/insta.webp" style="width: 12%"></a>
            <a href=""><img src="pict/facebook.png" style="width: 12%"></a></h5>
            <a class="mt-2 ms-sm-auto" href=""><img src="pict/blst.png" style="70%"></a>
        </ul>
      </div>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
</section>