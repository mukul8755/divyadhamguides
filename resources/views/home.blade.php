@extends('layout')

@section('title', 'Home')

@section('content')

<!-- Hero Section with Video Background -->
<section class="hero position-relative d-flex justify-content-center align-items-center text-center vh-100">
  <video autoplay muted loop playsinline class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover">
    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
  </video>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.55;"></div>
  <div class="container position-relative text-white">
    <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">
      Experience Divine Darshan
    </h1>
    <p class="lead mt-3 animate__animated animate__fadeInUp">
      Guided spiritual journeys in Kashi, Ayodhya & Prayagraj
    </p>
    <a href="#packages" class="btn btn-lg btn-danger mt-4 shadow-lg px-5 py-3 rounded-pill animate__animated animate__fadeInUp">
      Explore Packages
    </a>
  </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold text-danger mb-4">About Us</h2>
    <p class="lead text-muted mx-auto" style="max-width: 700px;">
      We specialize in organizing <span class="fw-bold text-dark">spiritual tours</span> 
      across India’s most sacred cities. Our mission is to help devotees connect deeply with 
      their faith through guided darshans, comfortable stays, and reliable travel support.
    </p>
  </div>
</section>

<!-- Services Section -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold text-danger mb-5">Our Services</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="service-box p-4 shadow-sm h-100 rounded-4 bg-white">
          <i class="fas fa-gopuram fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Temple Guidance</h5>
          <p class="text-muted">Visit ancient temples with experienced spiritual guides.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box p-4 shadow-sm h-100 rounded-4 bg-white">
          <i class="fas fa-hotel fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Accommodation</h5>
          <p class="text-muted">Clean and affordable stays for pilgrims and families.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-box p-4 shadow-sm h-100 rounded-4 bg-white">
          <i class="fas fa-bus fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Travel Support</h5>
          <p class="text-muted">Safe & comfortable transport to all destinations.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Darshan Packages -->
<section id="packages" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold text-danger mb-5">Darshan Packages</h2>
    <div class="row g-4">
      @foreach($destinations as $id => $destination)
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm border-0 rounded-4 h-100 package-card">
          <img src="{{ asset($destination['image']) }}" 
               class="card-img-top rounded-top-4" 
               alt="{{ $destination['title'] }}">
          <div class="card-body text-start">
            <h5 class="fw-bold text-danger">{{ $destination['title'] }}</h5>
            <p class="text-muted">{{ Str::limit(strip_tags($destination['intro']), 100) }}</p>
            <a href="{{ route('destinations.show', $id) }}" class="btn btn-outline-danger btn-sm rounded-pill px-3">
              Explore More
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #b91c1c, #7f1d1d);">
  <div class="container text-center">
    <h2 class="fw-bold mb-3">Plan Your Spiritual Journey Today</h2>
    <p class="lead mb-4">Join thousands of devotees who experienced peace, devotion, and comfort with us.</p>
    <a href="/contact" class="btn btn-light btn-lg px-5 py-3 rounded-pill shadow">Get in Touch</a>
  </div>
</section>

@endsection
