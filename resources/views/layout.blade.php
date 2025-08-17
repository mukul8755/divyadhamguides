<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Divya Dham Guide Association - @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Divya Dham Guide Association</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-3.2.6.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

  @stack('styles')
</head>

<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" id="mainNavbar">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="/">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo" style="height:50px;">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active text-danger fw-bold' : '' }}" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active text-danger fw-bold' : '' }}" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('services') ? 'active text-danger fw-bold' : '' }}" href="/services">Services</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('stay') ? 'active text-danger fw-bold' : '' }}" href="/stay">Stay</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('packages') ? 'active text-danger fw-bold' : '' }}" href="/packages">Packages</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('destinations') ? 'active text-danger fw-bold' : '' }}" href="/destinations">Destinations</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('blogs') ? 'active text-danger fw-bold' : '' }}" href="/blogs">Blogs</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('association') ? 'active text-danger fw-bold' : '' }}" href="/association">Association</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active text-danger fw-bold' : '' }}" href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="footer bg-dark text-white text-center py-3">
    <div class="container">
      <p>&copy; 2025 Divya Dham Guide Association. All rights reserved.</p>
      <p>
        <i class="fab fa-facebook-f me-2"></i>
        <i class="fab fa-instagram me-2"></i>
        <i class="fab fa-x-twitter me-2"></i>
        <i class="fab fa-linkedin-in me-2"></i>
        <i class="fab fa-youtube"></i>
      </p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-aio-3.2.6.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  @stack('scripts')
</body>
</html>
