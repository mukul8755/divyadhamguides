@extends('layout')

@section('content')

<!-- Hero Section -->
<section class="page-header text-center py-5 bg-danger text-white shadow-sm">
  <div class="container">
    <h1 class="fw-bold display-5">{{ $destination['title'] }}</h1>
    <p class="lead">Plan your perfect spiritual journey with us ✨</p>
  </div>
</section>

<!-- Intro Section -->
<section class="intro py-5">
  <div class="container text-center">
    <img src="{{ asset($destination['image']) }}" 
         class="img-fluid rounded-3 shadow-lg mb-4 w-75" 
         alt="{{ $destination['title'] }}">
    <p class="fs-5 text-muted">{!! $destination['intro'] !!}</p>
  </div>
</section>

<!-- Attractions -->
<section class="attractions py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-danger text-center mb-5">🛕 Major Attractions</h2>
    <div class="row g-4">
      @foreach($destination['attractions'] as $attr)
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-lg h-100 hover-card">
          <img src="{{ asset($attr['img']) }}" 
               class="card-img-top rounded-top" 
               alt="{{ $attr['title'] }}">
          <div class="card-body text-center">
            <h5 class="fw-bold text-danger">{{ $attr['title'] }}</h5>
            <p class="text-muted small">{{ $attr['desc'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Packages -->
<section class="package py-5">
  <div class="container text-center">
    <h2 class="fw-bold text-danger mb-4">📦 Package Options</h2>
    <p class="mb-4 fs-5 text-muted">{{ $destination['packages'] }}</p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="{{ route('contact') }}" class="btn btn-danger btn-lg rounded-pill px-4">Basic Package</a>
      <a href="{{ route('contact') }}" class="btn btn-warning btn-lg rounded-pill px-4">VIP Package</a>
      <a href="https://wa.me/918934991582" target="_blank" class="btn btn-success btn-lg rounded-pill px-4">
        <i class="fab fa-whatsapp"></i> WhatsApp Us
      </a>
    </div>
  </div>
</section>

<!-- Activities -->
<section class="activities py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-danger text-center mb-4">🧘 Activities You Can Experience</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <ul class="list-group list-group-flush shadow-sm rounded">
          @foreach($destination['activities'] as $activity)
            <li class="list-group-item fs-5">
              <i class="fas fa-check-circle text-danger me-2"></i>{{ $activity }}
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Back Button -->
<div class="container text-center py-5">
  <a href="{{ route('destinations.index') }}" 
     class="btn btn-outline-danger btn-lg rounded-pill px-4">
    ⬅ Back to Destinations
  </a>
</div>

@endsection
