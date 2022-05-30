<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark  sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}  text-light" href="admin">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('admin.categories') ? 'active' : '' }}  text-light" href="/admin/categories">
                <span data-feather="file-text"></span>
                Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  {{ Request::is('admin.products') ? 'active' : '' }}  text-light" href="admin.products">
                <span data-feather="shopping-cart"></span>
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  {{ Request::is('admin.payment') ? 'active' : '' }}  text-light" href="/admin/payment">
                <span data-feather="dollar-sign"></span>
                Payment Confirmation
              </a>
            </li>
          </ul>
        </div>
      </nav>