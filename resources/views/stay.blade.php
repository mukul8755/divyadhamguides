@extends('layout')

@section('content')

<!-- Page Header -->
<section class="page-header text-center py-5 bg-light">
  <div class="container">
    <h1 class="fw-bold">Stay Options</h1>
    <p class="text-muted">Choose the perfect stay for your spiritual journey</p>
  </div>
</section>

<!-- Stay Cards -->
<section class="stay-section py-5">
  <div class="container">
    <div class="row g-4">
      
      <!-- Comfort Stay -->
      <div class="col-md-4">
        <div class="card stay-card shadow-sm h-100">
          <img src="{{ asset('images/Comfort Stay.png') }}" class="card-img-top" alt="Comfort Stay">
          <div class="card-body text-center">
            <h5 class="card-title fw-bold">Comfort Stay</h5>
            <p class="card-text">Well-furnished rooms near temples with 24x7 support and peaceful surroundings.</p>
          </div>
        </div>
      </div>

      <!-- Heritage Stay -->
      <div class="col-md-4">
        <div class="card stay-card shadow-sm h-100">
          <img src="{{ asset('images/Heritage Guesthouse.png') }}" class="card-img-top" alt="Heritage Stay">
          <div class="card-body text-center">
            <h5 class="card-title fw-bold">Heritage Guesthouse</h5>
            <p class="card-text">Live like locals with traditional stays near ghats and sacred locations.</p>
          </div>
        </div>
      </div>

      <!-- Budget Friendly -->
      <div class="col-md-4">
        <div class="card stay-card shadow-sm h-100">
          <img src="{{ asset('images/Budget Friendly.png') }}" class="card-img-top" alt="Budget Stay">
          <div class="card-body text-center">
            <h5 class="card-title fw-bold">Budget Friendly</h5>
            <p class="card-text">Affordable and clean rooms for solo pilgrims and spiritual groups.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Extra Info Section -->
<section class="info-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Why Choose Us for Your Stay?</h2>
    <p class="text-center mb-4">
      Whether you are traveling alone or with family, from a metro city or small town, we understand that local knowledge can be limited for outsiders. That’s where our team supports you with:
    </p>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item">✅ Trusted and Verified Stay Options near spiritual locations.</li>
          <li class="list-group-item">✅ Pre-negotiated affordable prices – no local commission agents involved.</li>
          <li class="list-group-item">✅ Clean, safe and peaceful environments ideal for pilgrims.</li>
          <li class="list-group-item">✅ Local guides to help you understand surroundings better.</li>
          <li class="list-group-item">✅ Packages that combine stay, temple darshan and transport.</li>
        </ul>
        <p class="mb-4">
          Tourists often get overcharged when they try to book rooms directly through unknown agents. But with <strong>Divya Dham Guide Association</strong>, you get transparent pricing, local support, and peace of mind.
        </p>
        <h2 class="fw-bold text-center mb-3">Booking Made Easy</h2>
        <p class="text-center">
          You can book your stay in advance via call or WhatsApp. Let us know your travel dates, budget, and preferences — and we’ll take care of the rest!
        </p>
      </div>
    </div>
  </div>
</section>

@endsection
