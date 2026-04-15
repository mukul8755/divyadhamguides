@extends('layout')

@section('content')

<!-- Hero Section -->
<section class="page-header text-center py-5 bg-light shadow-sm">
  <div class="container">
    <h1 class="fw-bold display-5 text-danger">Our Tour Packages</h1>
    <p class="text-muted fs-5">Choose the perfect stay for your spiritual journey</p>
  </div>
</section>

<!-- Packages -->
<section class="py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold text-dark">✨ Choose Your Divine Journey</h2>
      <p class="text-muted">Curated pilgrimage experiences in Kashi, Ayodhya & Prayagraj</p>
    </div>
    <div class="row g-4">
      
      <!-- Kashi Package -->
      <div class="col-md-4">
        <div class="card package-card h-100 shadow-lg border-0 rounded-3 hover-card">
          <img src="{{ asset('images/assi.webp') }}" class="card-img-top rounded-top" alt="Kashi Package">
          <div class="card-body">
            <h5 class="fw-bold text-danger">Kashi Darshan (2 Days)</h5>
            <p class="text-muted">Includes Ganga Aarti, Kashi Vishwanath Mandir, Assi Ghat, Sankat Mochan and guide support.</p>
            <div class="d-flex gap-2 mt-3">
              <a href="destinations/1" class="btn btn-outline-danger btn-sm">More Details</a>
              <a href="https://wa.me/919109507691" target="_blank" class="btn btn-danger btn-sm">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Ayodhya Package -->
      <div class="col-md-4">
        <div class="card package-card h-100 shadow-lg border-0 rounded-3 hover-card">
          <img src="{{ asset('images/Ayodhya_Ram_Mandir_Inauguration_Day_Picture.jpg') }}" class="card-img-top rounded-top" alt="Ayodhya Package">
          <div class="card-body">
            <h5 class="fw-bold text-danger">Ayodhya Yatra (2 Days)</h5>
            <p class="text-muted">Includes Ram Mandir, Hanuman Garhi, Saryu Aarti, Bharat Kund, Kanak Bhawan and local pickup/drop.</p>
            <div class="d-flex gap-2 mt-3">
              <a href="destinations/ayodhya-ram-mandir-darshan-booking-tour-packages" class="btn btn-outline-danger btn-sm">More Details</a>
              <a href="https://wa.me/919109507691" target="_blank" class="btn btn-danger btn-sm">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Prayagraj Package -->
      <div class="col-md-4">
        <div class="card package-card h-100 shadow-lg border-0 rounded-3 hover-card">
          <img src="{{ asset('images/mahakumbh2.webp') }}" class="card-img-top rounded-top" alt="Prayagraj Package">
          <div class="card-body">
            <h5 class="fw-bold text-danger">Prayagraj Trip (1 Day)</h5>
            <p class="text-muted">Triveni Sangam Snan, Hanuman Mandir, Akshayavat Darshan, Shankar Viman Mandapam, Alopi Devi Mandir visit.</p>
            <div class="d-flex gap-2 mt-3">
              <a href="destinations/3" class="btn btn-outline-danger btn-sm">More Details</a>
              <a href="https://wa.me/919109507691" target="_blank" class="btn btn-danger btn-sm">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Ujjain Package -->
<div class="col-md-4">
  <div class="card package-card h-100 shadow-lg border-0 rounded-3 hover-card">
    <img src="{{ asset('images/ujjain2.jpg') }}" class="card-img-top rounded-top" alt="Ujjain Package">
    <div class="card-body">
      <h5 class="fw-bold text-danger">Ujjain Mahakal Darshan</h5>
      <p class="text-muted">Mahakaleshwar Jyotirlinga Darshan, Bhasma Aarti, Kal Bhairav Temple, Harsiddhi Mata visit.</p>
      <div class="d-flex gap-2 mt-3">
        <a href="destinations/ujjain-mahakal-mandir-booking-tour-packages" class="btn btn-outline-danger btn-sm">More Details</a>
        <a href="https://wa.me/919109507691" target="_blank" class="btn btn-danger btn-sm">Book Now</a>
      </div>
    </div>
  </div>
</div>

<!-- Baglamukhi Package -->
<div class="col-md-4">
  <div class="card package-card h-100 shadow-lg border-0 rounded-3 hover-card">
    <img src="{{ asset('images/baglamukhi-banner3.webp') }}" class="card-img-top rounded-top" alt="Baglamukhi Package">
    <div class="card-body">
      <h5 class="fw-bold text-danger">Maa Baglamukhi Darshan & Puja</h5>
      <p class="text-muted">VIP Darshan, Baglamukhi Hawan, Stambhan Puja, Court Case Victory Anushthan at Nalkheda Dham.</p>
      <div class="d-flex gap-2 mt-3">
        <a href="destinations/maa-baglamukhi-nalkheda-dham-darshan-booking-puja-services" class="btn btn-outline-danger btn-sm">More Details</a>
        <a href="https://wa.me/919109507691" target="_blank" class="btn btn-danger btn-sm">Book Now</a>
      </div>
    </div>
  </div>
</div>

<!-- Omkareshwar Package -->
<div class="col-md-4">
  <div class="card package-card h-100 shadow-lg border-0 rounded-3 hover-card">
    <img src="{{ asset('images/omkareshwar.jfif') }}" class="card-img-top rounded-top" alt="Omkareshwar Package">
    <div class="card-body">
      <h5 class="fw-bold text-danger">Omkareshwar Jyotirlinga Darshan</h5>
      <p class="text-muted">Omkareshwar & Mamleshwar Jyotirlinga Darshan, Narmada Aarti, Parikrama and temple visit.</p>
      <div class="d-flex gap-2 mt-3">
        <a href="destinations/omkareshwar-jyotirlinga-darshan-booking-tour-packages" class="btn btn-outline-danger btn-sm">More Details</a>
        <a href="https://wa.me/919109507691" target="_blank" class="btn btn-danger btn-sm">Book Now</a>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</section>

<!-- Detailed Info -->
<section class="package-details py-5 bg-light">
  <div class="container">
    <h3 class="fw-bold text-center mb-4">🌸 Why Choose Our Packages?</h3>
    <p class="text-muted text-center mb-5">
      We offer curated pilgrimage experiences in Kashi, Ayodhya, and Prayagraj — ensuring your spiritual journey is meaningful and worry-free. 
      From transportation and accommodation to rituals and guide support, everything is included in one affordable plan.
    </p>

    <div class="row">
      <div class="col-md-4">
        <h4 class="fw-bold text-danger">📍 Kashi (Varanasi)</h4>
        <p class="text-muted">Morning Ganga Aarti, Kashi Vishwanath Mandir, boat rides on the Ganga, Sankat Mochan, Annapurna Devi, and optional Rudrabhishek Puja. Local guides provide historical insights.</p>
      </div>
      <div class="col-md-4">
        <h4 class="fw-bold text-danger">📍 Ayodhya</h4>
        <p class="text-muted">Ram Mandir Darshan, evening Saryu Aarti, Kanak Bhawan, Hanuman Garhi, and more. Comfortable hotels, local travel and VIP entry options available.</p>
      </div>
      <div class="col-md-4">
        <h4 class="fw-bold text-danger">📍 Prayagraj</h4>
        <p class="text-muted">Triveni Sangam Snan, Hanuman Mandir, Patalpuri Temple, and Fort view. Rituals like Pind Daan, Tarpan, or special pujas arranged by local purohits. Clean boats and safe travel assured.</p>
      </div>
    </div>

    <p class="text-center mt-4 text-dark fw-semibold">
      🧘 All our packages are customizable. No hidden costs or extra charges — just transparency, comfort, and divine blessings throughout your journey.
    </p>
  </div>
</section>

@endsection

@push('styles')
<style>
  .hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .hover-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  }
  .section-title h2 {
    font-size: 2rem;
  }
</style>
@endpush
