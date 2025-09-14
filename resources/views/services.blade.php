@extends('layout')

@section('content')

<!-- Page Header -->
<section class="page-header text-white text-center d-flex align-items-center"
         style="background: url('{{ asset('images/kashi-darshan.png') }}') center/cover no-repeat; height: 300px;">
  <div class="container">
    <h1 class="fw-bold">Our Services</h1>
    <p class="lead">Making your spiritual journey smooth & memorable</p>
  </div>
</section>

<!-- Services Section -->
<section class="service-section py-5">
  <div class="container">
    <div class="row g-4">

      <!-- Service Item -->
      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-3 p-4">
          <i class="fas fa-gopuram fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Temple Darshan</h5>
          <p class="text-muted">Personalized darshan assistance at Kashi Vishwanath, Ram Mandir, Hanuman Garhi, and more.</p>
           <a href="destinations" class="btn btn-outline-danger mt-3">Know More</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-3 p-4">
          <i class="fas fa-bus-alt fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Travel Arrangements</h5>
          <p class="text-muted">Pickup/drop from railway station or airport with private transport for yatras.</p>

          <!-- Know More button -->
          <a href="travel-support" class="btn btn-outline-danger mt-3">Know More</a>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-3 p-4">
          <i class="fas fa-bed fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Comfortable Stays</h5>
          <p class="text-muted">Clean and budget-friendly rooms near temples and ghats.</p>
          
          <!-- Know More button -->
          <a href="/stay" class="btn btn-outline-danger mt-3">Know More</a>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-3 p-4">
          <i class="fas fa-praying-hands fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Rituals & Pooja</h5>
          <p class="text-muted">Organizing Ganga Aarti, Shraddh, Rudrabhishek, and spiritual ceremonies with purohits.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-3 p-4">
          <i class="fas fa-map-marked-alt fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Yatra Planning</h5>
          <p class="text-muted">Complete 3–5 day itinerary planning for Ayodhya, Kashi, Prayagraj, Chitrakoot, etc.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm border-0 rounded-3 p-4">
          <i class="fas fa-globe fa-3x text-danger mb-3"></i>
          <h5 class="fw-bold">Online Booking</h5>
          <p class="text-muted">Book your tour, stay, and rituals in advance via call or WhatsApp.</p>
        </div>
      </div>

    </div>

    <!-- Quote Box -->
    <div class="quote-box bg-light p-4 rounded-3 text-center mt-5 shadow-sm">
      <h4 class="fw-bold text-danger">Get a Quote or Contact Our Team</h4>
      <p class="mb-1 text-dark fs-5">📞 +91 9109507691</p>
      <p class="mb-0 text-dark fs-5">📧 divyadhamguides@gmail.com</p>
    </div>

  </div>
</section>

<!-- Why Choose Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h3 class="text-center fw-bold text-danger mb-4">Why Choose Our Services?</h3>
    <p class="lead text-center mb-4">
      We go beyond just arranging a tour — we ensure peace of mind throughout your sacred journey.
    </p>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="bg-white shadow-sm rounded-3 p-4">
          <p class="text-muted fs-5">
            Whether you're visiting from another city, state, or country, navigating holy cities like Kashi, Ayodhya, and Prayagraj can be overwhelming — especially without local knowledge. That's where we step in.
          </p>
          <p class="text-muted fs-5">
            Our services are designed to be transparent, cost-effective, and deeply respectful of your spiritual goals. From arranging verified local transport and accommodations to assisting with rituals and temple entries — we ensure every element is authentic, safe, and value-driven.
          </p>
          <p class="text-muted fs-5 mb-0">
            By choosing us, you save time, avoid unnecessary expenses, and gain access to genuine local experiences that would otherwise be hidden to outside visitors.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
