@extends('layout')

@section('content')

<!-- Coming Soon Section -->
<section class="coming-soon d-flex align-items-center justify-content-center text-center vh-100 bg-light">
  <div class="container">
    <div class="coming-content p-5 shadow rounded bg-white">
      <h1 class="fw-bold display-4 text-danger mb-3">🚧 Coming Soon</h1>
      <p class="fs-5 text-muted mb-4">
        Our <span class="fw-bold text-danger">Association</span> page is under construction.  
        We are working hard to give you the best experience. Stay tuned!
      </p>



      <!-- Newsletter / Contact -->
      <form class="d-flex justify-content-center">
        <input type="email" class="form-control w-50 me-2" placeholder="Enter your email">
        <button class="btn btn-danger">Notify Me</button>
      </form>

      <!-- Social Links -->
      <div class="social-icons mt-4">
        <a href="#" class="me-3 fs-4 text-danger"><i class="fab fa-facebook"></i></a>
        <a href="#" class="me-3 fs-4 text-danger"><i class="fab fa-instagram"></i></a>
        <a href="#" class="me-3 fs-4 text-danger"><i class="fab fa-x-twitter"></i></a>
        <a href="#" class="fs-4 text-danger"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </div>
</section>

@endsection
