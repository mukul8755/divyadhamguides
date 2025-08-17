@extends('layout')

@section('title', 'Home')

@section('content')

@push('styles')
<style>
  /* Overlay */
  .popup-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.7);
    justify-content: center;
    align-items: center;
    z-index: 1050;
  }

  /* Form Box */
  .popup-form {
    background: #fff;
    padding: 2rem;
    border-radius: 1rem;
    width: 100%;
    max-width: 420px;
    position: relative;
    box-shadow: 0 8px 25px rgba(0,0,0,0.25);
    border-left: 6px solid rgb(255, 221, 0); /* Yellow Side Border */
    animation: fadeIn 0.3s ease;
  }

  /* Close Button */
  .close-popup {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 1.8rem;
    cursor: pointer;
    color: #b91c1c;
    transition: 0.2s;
  }
  .close-popup:hover {
    color: #7f1d1d;
  }

  /* Input + Icons */
  .form-group i {
    font-size: 1.2rem;
    color: #b91c1c;
  }
  .form-control {
    border-radius: 8px;
    border: 1px solid #ddd;
    transition: 0.3s;
  }
  .form-control:focus {
    border-color: rgb(255, 221, 0);
    box-shadow: 0 0 5px rgba(255, 221, 0, 0.6);
  }

  /* Animation */
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>
@endpush
<!-- Popup Overlay -->
<div class="popup-overlay" id="popupOverlay">
  <div class="popup-form">
    <span class="close-popup" id="closePopupBtn">&times;</span>
    <h2 class="mb-3 text-danger">Book a Tour</h2>
    <form id="contactFormPopup">
      @csrf
      <div id="popupMessage" class="alert alert-success d-none"></div>
      <div class="form-group mb-3 d-flex align-items-center">
        <i class="fas fa-user me-2 text-danger"></i>
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
      </div>
      <div class="form-group mb-3 d-flex align-items-center">
        <i class="fas fa-envelope me-2 text-danger"></i>
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
      </div>
      <div class="form-group mb-3 d-flex align-items-center">
        <i class="fas fa-phone me-2 text-danger"></i>
        <input type="tel" name="phone" class="form-control" placeholder="Your Phone" required>
      </div>
      <div class="form-group mb-3 d-flex align-items-start">
        <i class="fas fa-comment me-2 mt-2 text-danger"></i>
        <textarea class="form-control" rows="3" name="message" placeholder="Your Message" required></textarea>
      </div>
      <button type="submit" class="btn btn-danger w-100">Send Message</button>
    </form>
  </div>
</div>

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
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Notiflix -->
<script src="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-aio-3.2.6.min.js"></script>

@push('scripts')
<script>
  const popupOverlay = document.getElementById('popupOverlay');

  // Close on outside click
  popupOverlay.addEventListener('click', (e) => {
    if (e.target === popupOverlay) popupOverlay.style.display = 'none';
  });

  // ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key === "Escape") popupOverlay.style.display = 'none';
  });

  // Auto Open after 2 seconds
  window.onload = () => {
    setTimeout(() => popupOverlay.style.display = 'flex', 2000);
  };


$(document).ready(function () {
    $('#contactFormPopup').on('submit', function (e) {
        e.preventDefault();

        let formData = $(this).serialize();
         Notiflix.Loading.dots('Submitting...'); // show loader
        $.ajax({
            url: "{{ route('contact.store') }}", // Laravel route
            method: "POST",
            data: formData,
            success: function (response) {
            Notiflix.Loading.remove(); // hide loader

                $('#popupMessage')
                  .removeClass('d-none')
                  .text("Your message has been submitted successfully!");

                      // Hide popup after 2 seconds
    setTimeout(() => {
        popupOverlay.style.display = 'none';
        $('#popupMessage').addClass('d-none').text(""); // clear message for next time
    }, 2000);
            },
            error: function (xhr) {
                Notiflix.Loading.remove(); // hide loader
                if(xhr.responseJSON?.errors) {
                    let errors = xhr.responseJSON.errors;
                    Object.values(errors).forEach(err => {
                        Notiflix.Notify.failure(err[0]);
                    });
                } else {
                    Notiflix.Notify.failure("Something went wrong. Please try again.");
                }
            },
            
        });
    });
});

</script>
@endpush

@push('styles')
<style>
  .popup-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1050;
  }
  .popup-form {
    background: #fff;
    padding: 2rem;
    border-radius: 1rem;
    width: 100%;
    max-width: 400px;
    position: relative;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    animation: fadeIn 0.3s ease;
  }
  .close-popup {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 1.5rem;
    cursor: pointer;
    color: #b91c1c;
  }
  @keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
  }
</style>
@endpush
