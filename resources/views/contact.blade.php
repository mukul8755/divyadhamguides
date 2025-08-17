@extends('layout')

@section('content')

<!-- Hero Section -->
<section class="page-header text-center py-5 bg-light shadow-sm">
  <div class="container">
    <h1 class="fw-bold display-5 text-danger">📞 Contact Us</h1>
    <p class="text-muted fs-5">We’d love to help you plan your spiritual journey</p>
  </div>
</section>

<!-- Contact Section -->
<section class="contact-section py-5">
  <div class="container">
    <div class="row g-4 align-items-stretch">

      <!-- Contact Form -->
      <div class="col-lg-6">
        <div class="card shadow-lg border-0 p-4 h-100">
          <h2 class="fw-bold mb-4 text-danger">Book a Tour</h2>
          <form>
            <div class="mb-3 input-group">
              <span class="input-group-text bg-danger text-white"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="mb-3 input-group">
              <span class="input-group-text bg-danger text-white"><i class="fas fa-envelope"></i></span>
              <input type="email" class="form-control" placeholder="Email Address" required>
            </div>
            <div class="mb-3 input-group">
              <span class="input-group-text bg-danger text-white"><i class="fas fa-phone"></i></span>
              <input type="tel" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="mb-3 input-group">
              <span class="input-group-text bg-danger text-white"><i class="fas fa-comment-dots"></i></span>
              <textarea class="form-control" rows="4" placeholder="Your Location & Message"></textarea>
            </div>
            <button type="submit" class="btn btn-danger w-100 fw-bold">
              Submit <i class="fab fa-telegram-plane ms-2"></i>
            </button>
          </form>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-6">
        <div class="card shadow-lg border-0 p-4 h-100 bg-light">
          <h3 class="fw-bold text-danger">Get in Touch</h3>
          <p class="text-muted mt-3">
            <strong>Divya Dham Guide Association</strong><br>
            A part of the Leisure and Hospitality sector of the Vacation Planner Group.  
            We offer quality family holidays primarily through vacation ownership memberships and bring values like reliability, trust, and customer satisfaction.
          </p>
          
          <div class="mt-4">
            <h6 class="fw-bold">📍 Office Address:</h6>
            <p class="text-muted">123 Spiritual Road, Ayodhya, Uttar Pradesh</p>
            
            <h6 class="fw-bold">📞 Call Us:</h6>
            <p class="text-muted">+91 99999 99999</p>

            <h6 class="fw-bold">✉️ Email:</h6>
            <p class="text-muted">info@divyadhamguide.com</p>
          </div>

          <div class="social-icons mt-4 d-flex gap-3">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-x-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection

@push('styles')
<style>
  .contact-section .card {
    border-radius: 1rem;
  }
  .input-group-text {
    border-radius: 0.5rem 0 0 0.5rem;
  }
  .form-control {
    border-radius: 0 0.5rem 0.5rem 0;
  }
  .social-icon {
    width: 40px; 
    height: 40px; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    border-radius: 50%; 
    background: #dc3545; 
    color: #fff; 
    font-size: 1.2rem;
    transition: 0.3s;
  }
  .social-icon:hover {
    background: #b02a37;
    transform: translateY(-4px);
  }
</style>
@endpush
