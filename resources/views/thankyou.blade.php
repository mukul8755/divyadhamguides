@extends('layout')

@section('title', 'Thank You – Divya Dham Guide Association')
@section('meta_description', 'Thank you for your booking request with Divya Dham Guide Association. Our team will contact you shortly for your pilgrimage journey.')

@section('content')
@push('styles')
<style>
    .thankyou-section {
  min-height: 85vh;
  background: linear-gradient(135deg, #fff7f0, #ffffff);
}

.thankyou-card {
  background: #ffffff;
  border-radius: 22px;
  padding: 40px 32px;
  border-top: 6px solid #e5610e;
}

.thankyou-icon {
  font-size: 3.2rem;
  margin-bottom: 12px;
}

.thankyou-title {
  font-family: 'Playfair Display', serif;
  font-size: 2.4rem;
  color: #1f2937;
  margin-bottom: 6px;
}

.thankyou-subtitle {
  color: #e5610e;
  font-weight: 600;
  margin-bottom: 14px;
}

.divider {
  width: 60px;
  height: 3px;
  background: #e5610e;
  margin: 0 auto 20px;
  border-radius: 3px;
}

.thankyou-text {
  color: #4b5563;
  line-height: 1.8;
  margin-bottom: 28px;
}

.thankyou-actions {
  display: flex;
  gap: 14px;
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: 26px;
}

.thankyou-actions .btn {
  padding: 12px 26px;
  font-weight: 600;
}

.trust-section {
  display: flex;
  justify-content: center;
  gap: 18px;
  font-weight: 600;
  color: #374151;
  margin-bottom: 22px;
}

.thankyou-note {
  font-size: 13px;
  color: #6b7280;
  line-height: 1.6;
}
</style>
@endpush
<section class="thankyou-section py-5 d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">

        <div class="thankyou-card text-center shadow-lg">

          <!-- Icon -->
          <div class="thankyou-icon">🙏</div>

          <!-- Title -->
          <h1 class="thankyou-title">Thank You</h1>
          <p class="thankyou-subtitle">
            Your pilgrimage request has been received
          </p>

          <!-- Divider -->
          <div class="divider"></div>

          <!-- Message -->
          <p class="thankyou-text">
            We appreciate your trust in <b>Divya Dham Guide Association</b>.<br>
            Our team will reach out to you shortly to guide you through the
            next steps of your spiritual journey.
          </p>

          <!-- Actions -->
          <div class="thankyou-actions">
            <a href="https://wa.me/919109507691" target="_blank" class="btn btn-success btn-lg rounded-pill">
              <i class="fa-brands fa-whatsapp me-2"></i> Chat on WhatsApp
            </a>

            <a href="tel:+919109507691" class="btn btn-outline-primary btn-lg rounded-pill">
              <i class="fa-solid fa-phone me-2"></i> Call Our Team
            </a>
          </div>


          <!-- Note -->
          <p class="thankyou-note">
            Divya Dham Guide Association is a private spiritual tour & pilgrimage
            assistance service offering trusted guidance and on-ground support.
          </p>

        </div>

      </div>
    </div>
  </div>
</section>

@endsection
