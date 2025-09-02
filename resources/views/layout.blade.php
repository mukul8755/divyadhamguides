<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Divya Dham Guide Association - @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-3.2.6.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

  <style>
    /* Floating Buttons */
    .floating-buttons {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      z-index: 1055;
    }

    .floating-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 12px 16px;
      border-radius: 50px;
      color: #fff;
      font-weight: bold;
      text-decoration: none;
      box-shadow: 0 4px 6px rgba(0,0,0,0.2);
      transition: transform 0.2s;
    }

    .floating-btn:hover { transform: scale(1.1); }
    .btn-whatsapp { background-color: #25D366; }
    .btn-phone { background-color: #007bff; }
    .floating-btn i { margin-right: 8px; }
  </style>

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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars text-danger"></i>
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
      <p>&copy; 2025 Divya Dham Guides Association. All rights reserved.</p>
      <p>
        <i class="fab fa-facebook-f me-2"></i>
        <i class="fab fa-instagram me-2"></i>
        <i class="fab fa-x-twitter me-2"></i>
        <i class="fab fa-linkedin-in me-2"></i>
        <i class="fab fa-youtube"></i>
      </p>
    </div>
  </footer>

  <!-- Floating Buttons -->
  <div class="floating-buttons">
    <a href="https://wa.me/+919109507691" target="_blank" class="floating-btn btn-whatsapp">
      <i class="fab fa-whatsapp"></i> Free Tour Guide
    </a>
    <a href="tel:+919109507691" class="floating-btn btn-phone">
      <i class="fas fa-phone-alt"></i> +91 9109507691
    </a>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-aio-3.2.6.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  @stack('scripts')

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.querySelector('.navbar-toggler');
    const togglerIcon = toggler.querySelector('i');
    const navbarCollapse = document.getElementById('navbarNav');

    if (navbarCollapse && togglerIcon) {
      // Create collapse instance but prevent auto toggle
      const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });

      // Click on toggler → only open menu if closed (cross does not close)
      toggler.addEventListener('click', (e) => {
        if (!navbarCollapse.classList.contains('show')) {
          bsCollapse.show();
        }
        e.preventDefault(); // prevent default toggle
      });

      // Icon changes
      navbarCollapse.addEventListener('show.bs.collapse', () => {
        togglerIcon.classList.remove('fa-bars');
        togglerIcon.classList.add('fa-xmark');
      });
      navbarCollapse.addEventListener('hide.bs.collapse', () => {
        togglerIcon.classList.remove('fa-xmark');
        togglerIcon.classList.add('fa-bars');
         if (navbarCollapse.classList.contains('show')) {
            bsCollapse.hide();
          }
      });

      // Close menu on nav-link click
      document.querySelectorAll('#navbarNav .nav-link').forEach(link => {
        link.addEventListener('click', () => {
          if (navbarCollapse.classList.contains('show')) {
            bsCollapse.hide();
          }
        });
      });
    }
  });
  </script>

</body>
</html>
