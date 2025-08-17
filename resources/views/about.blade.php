@extends('layout')

@section('title', 'About')

@section('content')

<!-- Page Header -->
<section class="page-header bg-dark text-white py-5">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">About Us</h1>
    <p class="lead">Your Divine Journey with Divya Dham Guide Association</p>
  </div>
</section>

<!-- About Section -->
<section class="about-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="{{ asset('images/sadhu.png') }}" alt="About Image" class="img-fluid rounded shadow-lg">
      </div>
      <!-- Text -->
      <div class="col-md-6">
        <h2 class="fw-bold text-danger">Who We Are</h2>
        <p>
          <b>Divya Dham Guide Association</b> is dedicated to enriching your spiritual journey by offering guided tours to the most sacred destinations of India — 
          <span class="fw-bold">Kashi, Ayodhya, and Prayagraj.</span> 
          We aim to combine devotion, comfort, and culture in one seamless pilgrimage experience.
        </p>
        <p>
          Our mission is to assist every devotee in experiencing the divinity, rituals, and heritage of Sanatan Dharma in an organized and spiritually uplifting manner.
          With well-planned travel arrangements, knowledgeable guides, and quality accommodation, 
          we ensure your spiritual goals are fulfilled with peace and ease.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="about-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-danger">Why Choose Divya Dham?</h2>
    <div class="row text-center">
      
      <!-- Spiritual Expertise -->
      <div class="col-md-4 mb-4">
        <div style="font-size: 3rem;" class="mb-3">🛕</div>
        <h5 class="fw-bold">Spiritual Expertise</h5>
        <p>Our guides are deeply rooted in Sanatan Dharma, offering authentic spiritual insight.</p>
      </div>

      <!-- Comfortable Stays -->
      <div class="col-md-4 mb-4">
        <div style="font-size: 3rem;" class="mb-3">🏨</div>
        <h5 class="fw-bold">Comfortable Stays</h5>
        <p>We ensure hygienic and peaceful accommodation near key temples.</p>
      </div>

      <!-- Safe Travel -->
      <div class="col-md-4 mb-4">
        <div style="font-size: 3rem;" class="mb-3">🚌</div>
        <h5 class="fw-bold">Safe Travel</h5>
        <p>From station pickup to darshan drop, we take care of your travel needs.</p>
      </div>

    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="about-section py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-danger">Gallery of Divine Journeys</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <img src="{{ asset('images/kashi-darshan.png') }}" class="img-fluid rounded shadow-lg" alt="Kashi Tour">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/Ayodhya-Deepotsav.jpeg') }}" class="img-fluid rounded shadow-lg" alt="Ayodhya Darshan">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('images/pryagraj_sahi_snan.webp') }}" class="img-fluid rounded shadow-lg" alt="Prayagraj Snan">
      </div>
    </div>
  </div>
</section>

<!-- Timeline -->
<section class="about-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-danger">Our Journey</h2>
    <ul class="timeline list-unstyled mx-auto" style="max-width: 600px;">
      <li class="mb-4"><strong>2015:</strong> Started with small yatras in Kashi.</li>
      <li class="mb-4"><strong>2017:</strong> Expanded to Ayodhya and Prayagraj.</li>
      <li class="mb-4"><strong>2024:</strong> Online bookings and digital darshan support launched.</li>
      <li class="mb-4"><strong>2025:</strong> Over 10,000 yatris served across India.</li>
    </ul>
  </div>
</section>

@endsection
