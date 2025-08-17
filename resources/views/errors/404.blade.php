@extends('layout')

@section('content')

<!-- 404 Page -->
<section class="error-404 d-flex align-items-center justify-content-center text-center vh-100 bg-light">
  <div class="container">
    <div class="p-5 shadow rounded bg-white">
      <h1 class="display-1 fw-bold text-danger">404</h1>
      <h2 class="fw-bold text-dark mb-3">Oops! Page Not Found</h2>
      <p class="text-muted fs-5 mb-4">
        The page you are looking for might have been removed,  
        had its name changed, or is temporarily unavailable.
      </p>

      <!-- Back to Home Button -->
      <a href="{{ url('/') }}" class="btn btn-danger px-4 py-2">
        <i class="fas fa-home me-2"></i> Back to Home
      </a>
    </div>
  </div>
</section>

@endsection
