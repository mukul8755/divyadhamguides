
@extends('layout')

@section('title', 'Ayodhya Ram Mandir Darshan Booking & Tour Packages | Divya Dham Guides')
@section('meta_description', 'Book Ayodhya Ram Mandir Darshan online with Divya Dham Guides. VIP, Sugam & regular darshan tickets, tour package and Ayodhya–Varanasi trips available.')


@section('content')

  <style>
    :root {
      --primary: #b30000;
      --gold: #FFD700;
      --green: #28a745;
      --accent: #ff9933;
      --text: #111;
      --bg: #ffffff;
    }

    body {
      font-family: "poppins", sans-serif;
      background: #fff;
      color: #111;
    }

    h2, h3, p {
      text-align: center;
    }


    /* HERO */
    .hero {
      padding: 80px 20px 40px;
      text-align: center;
      background: linear-gradient(0deg, rgba(255,215,0,0.08), rgba(179,0,0,0.05));
      height: auto !important;
    }

    .hero h1 {
      font-family: "Playfair Display", serif;
      color: var(--primary);
      font-size: 2.4rem;
      font-weight: 700;
    }

    .hero p {
      color: #333;
      max-width: 850px;
      margin: 10px auto;
      font-size: 1.05rem;
    }

    /* BUTTONS */
    .btn-gold {
      background: linear-gradient(90deg, #ffcf33, #ffd84d);
      color: #000;
      border: none;
      font-weight: 700;
      padding: 10px 22px;
      border-radius: 30px;
      transition: all .3s ease;
      box-shadow: 0 6px 15px rgba(255,200,0,0.25);
    }
    .btn-gold:hover {
      background: linear-gradient(90deg, #ffb300, #ffe45c);
      transform: translateY(-3px);
    }

    .btn-outline-red {
      background: transparent;
      border: 2px solid var(--primary);
      color: var(--primary);
      padding: 10px 22px;
      border-radius: 30px;
      font-weight: 700;
      transition: all .3s ease;
    }
    .btn-outline-red:hover {
      background: var(--primary);
      color: #fff;
      transform: translateY(-3px);
    }

    .btn-call {
      background: var(--green);
      color: #fff;
      font-weight: 700;
      border: none;
      border-radius: 30px;
      padding: 10px 20px;
      transition: all .3s ease;
    }
    .btn-call:hover {
      background: #1f7a34;
      transform: translateY(-3px);
    }

    /* SECTIONS */
    .section-head {
      text-align: center;
      margin-bottom: 15px;
    }
    .section-head h2 {
      color: var(--primary);
      font-family: "Playfair Display", serif;
      font-weight: 700;
    }
    .section-head p {
      color: #555;
      font-size: 0.98rem;
    }

    /* SERVICES */
    .feature-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-top: 30px;
    }
    .feature-card {
      background: #fff8e6;
      border: 2px solid rgba(255,215,0,0.4);
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      transition: transform .3s ease, box-shadow .3s ease;
    }
    .feature-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .feature-card i {
      color: var(--primary);
      font-size: 2rem;
      margin-bottom: 10px;
    }
    .feature-card h5 {
      color: var(--primary);
      font-weight: 700;
    }
    .feature-card p {
      color: #333;
      font-size: 0.95rem;
    }

    /* PACKAGES */
.packages-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 30px;
}

.pkg-card {
  background: #fff;
  border: 2px solid var(--gold);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pkg-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.pkg-body {
  padding: 18px;
}

.pkg-title {
  color: var(--primary);
  font-weight: 700;
  font-family: "Playfair Display", serif;
  margin-bottom: 10px;
}

/* Duration and Rating aligned on same line */
.pkg-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.pkg-duration {
  font-weight: 600;
  color: #444;
}

.pkg-rating {
  color: var(--gold);
  font-size: 1.1rem;
}

.pkg-list {
  font-size: 0.95rem;
  margin-bottom: 12px;
  color: #444;
  padding-left: 18px;
}

.pkg-price {
  color: var(--primary);
  font-weight: 700;
}

.pkg-cta {
  display: flex;
  gap: 10px;
  margin-top: 12px;
}

/* Responsive */
@media (max-width: 992px) {
  .packages-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 576px) {
  .packages-grid {
    grid-template-columns: 1fr;
  }
}


    /* ========== NOTE SECTION ========== */
.note-section {
  background: #fffaf3;
  border-top: 3px solid var(--accent);
  border-bottom: 3px solid var(--accent);
  padding: 60px 0;
}

.note-section h2 {
  color: var(--primary);
  font-family: "Playfair Display", serif;
  font-weight: 700;
  margin-bottom: 15px;
}

.note-section p {
  color: var(--text);
  font-size: 1.05rem;
  max-width: 850px;
  margin: 0 auto;
  line-height: 1.8;
}

.note-highlight {
  background: #fff1da;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  border: 2px dashed var(--accent);
  border-radius: 12px;
  padding: 12px 25px;
  color: var(--primary);
  font-weight: 700;
  margin-top: 25px;
  transition: all 0.3s ease;
}

.note-highlight:hover {
  background: #ffe5b4;
  transform: translateY(-3px);
}

/* ======= POINTS DESIGN ======= */
.note-points {
  margin-top: 40px;
}

.note-point {
  background: #fff;
  border: 2px solid var(--accent);
  border-radius: 12px;
  padding: 20px;
  display: flex;
  align-items: flex-start;
  gap: 12px;
  text-align: left;
  box-shadow: 0 6px 15px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
}

.note-point i {
  color: var(--accent);
  font-size: 1.5rem;
  flex-shrink: 0;
}

.note-point p {
  margin: 0;
  color: #333;
  font-size: 1rem;
  line-height: 1.6;
}

.note-point:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  background: #fff9ef;
}

/* Responsive */
@media (max-width: 768px) {
  .note-point {
    flex-direction: row;
    text-align: left;
    padding: 15px;
  }
}


    /* ========== FREE CALL SECTION ========== */
    .free-call-section {
      background: linear-gradient(90deg, var(--primary), var(--accent));
      color: #fff;
      padding: 70px 20px;
      text-align: center;
    }

    .free-call-section h2 {
      font-family: "Playfair Display", serif;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .free-call-section p {
      color: #fff;
      font-size: 1.05rem;
      max-width: 850px;
      margin: 0 auto 25px;
      line-height: 1.7;
    }

    .btn-call-now {
      background: #fff;
      color: var(--primary);
      border-radius: 12px;
      padding: 14px 35px;
      font-weight: 700;
      font-size: 1rem;
      text-decoration: none;
      display: inline-block;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
      text-align: center;
    }

    .btn-call-now:hover {
      background: var(--accent);
      color: #fff;
      transform: scale(1.03);
    }

    .btn-call-now i {
      margin-right: 8px;
    }

    .btn-call-now span {
      display: block;
      font-size: 0.9rem;
      color: #555;
    }

    .btn-call-now:hover span {
      color: #fff;
    }

    /* ========== OVERVIEW SECTION ========== */
    .overview-section {
      background: #fff;
      padding: 70px 0;
    }

    .overview-heading {
      font-size: 2.2rem;
      font-weight: 700;
      color: var(--primary);
      position: relative;
      margin-bottom: 40px;
    }

    .overview-heading::after {
      content: "";
      width: 80px;
      height: 3px;
      background: var(--accent);
      display: block;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    .overview-box {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      padding: 40px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .overview-intro {
      font-size: 1rem;
      color: var(--text);
      line-height: 1.8;
      margin-bottom: 30px;
      text-align: center;
    }

    .day-plan {
      margin-bottom: 30px;
      text-align: center;
    }

    .day-plan h4 {
      color: var(--accent);
      font-weight: 600;
      font-size: 1.2rem;
      margin-bottom: 15px;
    }

    .day-plan ul {
      list-style-type: none;
      padding-left: 0;
      display: inline-block;
      text-align: left;
    }

    .day-plan ul li {
      position: relative;
      margin-bottom: 8px;
      font-size: 0.95rem;
      color: #444;
      padding-left: 25px;
    }

    .day-plan ul li::before {
      content: "✔";
      position: absolute;
      left: 0;
      top: 0;
      color: var(--accent);
      font-weight: bold;
    }

    .overview-footer {
      background: #fff4e3;
      border-left: 4px solid var(--accent);
      padding: 15px 20px;
      border-radius: 10px;
      font-size: 0.95rem;
      color: #333;
      text-align: center;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 768px) {
      .overview-heading {
        font-size: 1.8rem;
      }
      .overview-box {
        padding: 25px;
      }
      .day-plan h4 {
        font-size: 1.1rem;
      }
      .overview-intro {
        font-size: 0.95rem;
      }
      .btn-call-now {
        width: 100%;
      }
      .note-highlight {
        flex-direction: column;
        text-align: center;
      }
    }

    /* NEW SECTIONS */
    .highlight-section {
      background: #fff8f8;
      padding: 60px 20px;
      text-align: center;
    }
    .highlight-section h2 {
      color: var(--primary);
      font-family: "Playfair Display", serif;
      font-weight: 700;
      margin-bottom: 15px;
    }
    .highlight-section p {
      color: #333;
      max-width: 850px;
      margin: 0 auto;
      font-size: 1.05rem;  
    }

    .choose-section {
      background: linear-gradient(0deg, rgba(255,215,0,0.15), #fff);
      padding: 60px 20px;
    }
    .choose-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      margin-top: 30px;
    }
    .choose-item {
      background: #fff;
      border-left: 5px solid var(--primary);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: transform .3s ease;
    }
    .choose-item:hover {
      transform: translateY(-5px);
    }
    .choose-item i {
      color: var(--primary);
      margin-right: 10px;
    }

    /* -------- */
    /* ========== AYODHYA PLACES SECTION ========== */
.ayodhya-places {
  background-color: #fdf6f0;
  padding: 60px 0;
}

.ayodhya-places h2 {
  color: #6b0000;
  font-family: "Playfair Display", serif;
  font-weight: 700;
  margin-bottom: 40px;
}

.timeline-card {
  background: #fff;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  padding: 40px 30px;
  max-width: 600px;
}

.timeline {
  position: relative;
  margin-left: 30px;
}

.timeline::before {
  content: "";
  position: absolute;
  top: 0;
  left: 18px;
  width: 3px;
  height: 100%;
  background-color: #8b0000;
}

.timeline-item {
  position: relative;
  margin-bottom: 25px;
}

.timeline-number {
  position: absolute;
  left: -8px;
  background-color: #fff;
  color: #8b0000;
  border: 3px solid #8b0000;
  border-radius: 50%;
  width: 34px;
  height: 34px;
  text-align: center;
  line-height: 28px;
  font-weight: bold;
  font-size: 16px;
  z-index: 1;
}

.timeline-content {
  background: #8b0000;
  color: #fffbe9;
  padding: 15px 20px;
  border-radius: 10px;
  margin-left: 50px;
  transition: all 0.3s ease;
}

.timeline-content h5 {
  margin: 0;
  font-size: 1rem;
  font-weight: 600;
}

.timeline-content p {
  margin-top: 8px;
  font-size: 0.9rem;
  color: #fff5d6;
  line-height: 1.5;
}

.timeline-content:hover {
  background: #a60000;
  transform: translateY(-4px);
}

/* Responsive */
@media (max-width: 768px) {
  .timeline-card {
    padding: 25px 20px;
  }

  .timeline::before {
    left: 15px;
  }

  .timeline-number {
    left: -10px;
    width: 30px;
    height: 30px;
    line-height: 25px;
    font-size: 14px;
  }

  .timeline-content {
    margin-left: 45px;
    padding: 12px 15px;
  }

  .timeline-content h5 {
    font-size: 0.95rem;
  }
}


    .cta-section {
      background: var(--primary);
      color: #fff;
      text-align: center;
      padding: 60px 20px;
    }
    .cta-section h3 {
      font-family: "Playfair Display", serif;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .faq-section {
      padding: 60px 20px;
      background: #fffdf4;
    }
    .accordion-button {
      color: var(--primary);
      font-weight: 600;
    }
    .accordion-button:not(.collapsed) {
      background: rgba(255,215,0,0.2);
    }

    /* RESPONSIVE */
    @media(max-width:991px) {
      .feature-grid { grid-template-columns: repeat(2, 1fr); }
      .packages-grid { grid-template-columns: repeat(2, 1fr); }
      .choose-grid { grid-template-columns: 1fr; }
    }
    @media(max-width:767px) {
      .feature-grid, .packages-grid { grid-template-columns: 1fr; }
      .pkg-cta { flex-direction: column; }
      .btn-call, .btn-gold, .btn-outline-red { width: 100%; }
    }
  </style>
  
  <!-- HERO -->
  <section class="hero">
    <h1>Ayodhya Ram Mandir Darshan & Tour Packages</h1>
    <p>Experience divine blessings in Ayodhya with our comfortable and spiritual tour packages — VIP Darshan, stay, transport & certified guides.</p>
    <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
      <a href="/contact" class="btn btn-gold">Book Ayodhya Package</a>
      <a href="/contact" class="btn btn-outline-red">Enquiry Now</a>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="container my-5">
    <div class="section-head">
      <h2>Our Services</h2>
      <p>Complete support for your spiritual journey — darshan, stay, transport & guidance.</p>
    </div>

    <div class="feature-grid">
      <div class="feature-card">
        <i class="fa-solid fa-gopuram"></i>
        <h5>Temple Guidance</h5>
        <p>Guided tours to Ram Janmabhoomi, Hanuman Garhi, Kanak Bhawan & more.</p>
      </div>
      <div class="feature-card">
        <i class="fa-solid fa-hotel"></i>
        <h5>Accommodation</h5>
        <p>Clean, affordable and nearby hotels for families and groups.</p>
      </div>
      <div class="feature-card">
        <i class="fa-solid fa-bus"></i>
        <h5>Travel Support</h5>
        <p>Pickup, cab services & comfortable transfers from major cities.</p>
      </div>
    </div>
  </section>

  <!-- PACKAGES -->
<section id="packages" class="container my-5">
  <div class="section-head text-center mb-4">
    <h2>Ayodhya Tour Packages</h2>
    <p>Book your preferred darshan and travel package with ease.</p>
  </div>

  <div class="packages-grid">
    <!-- Package 1 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Ayodhya Local Sightseeing</div>
        <div class="pkg-duration">Duration: 1N / 2D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>Ram Janmabhoomi Mandir, Hanuman Garhi, Saryu Aarti, Kanak Bhawan & More</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot.</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>

    <!-- Package 2 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Ayodhya VIP Darshan</div>
            <div class="pkg-duration">Duration: 1N / 2D</div>
            <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>VIP entry at Ram Mandir, No long queues</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot     </li>
          <li>Private transport & stay</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>

    <!-- Package 3 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Ayodhya – Varanasi – Prayagraj</div>
        <div class="pkg-duration">Duration: 3N / 4D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>Ram Mandir, Ganga Aarti & Triveni Sangam</li>
          <li>Hotels, cab & guides</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot.</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>

    <!-- Package 4 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Ayodhya – Prayagraj Pilgrimage</div>
        <div class="pkg-duration">Duration: 1N / 2D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>Ram Janmabhoomi & Triveni Sangam</li>
          <li>Guided temple visits</li>
          <li>Hotel & cab included</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot.</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>

    <!-- Package 5 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Varanasi Ganga Aarti Tour</div>
        <div class="pkg-duration">Duration: 1N / 2D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>Kashi Vishwanath Mandir</li>
          <li>Evening Ganga Aarti experience</li>
          <li>Stay & local cab</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot.</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>

    <!-- Package 6 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Kashi – Ayodhya Express</div>
        <div class="pkg-duration">Duration: 2N / 3D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>Ram Mandir & Kashi Vishwanath</li>
          <li>Saryu Aarti & Ganga Aarti</li>
          <li>Hotels & cab included</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot.</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>

    <!-- Package 7 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Ayodhya – Prayagraj Special</div>
        <div class="pkg-duration">Duration: 2N / 2D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>Triveni Sangam visit, Bade HanumanJi</li>
          <li>Ram Mandir darshan</li>
          <li>Hotels & cab service</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot.</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>

    <!-- Package 8 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Kashi – Ayodhya – Prayagraj Pilgrimage</div>
        <div class="pkg-duration">Duration: 3N / 4D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>Ram Mandir, Kashi Vishwanath & Triveni Sangam</li>
          <li>Hanuman Garhi, Saryu Aarti, Ganga Aarti, Bade HanumanJi</li>
          <li>Hotels & cab service</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot.</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>

    <!-- Package 9 -->
    <div class="pkg-card">
      <div class="pkg-body">
        <div class="pkg-title">Ayodhya Festival/Deepotstav Special Tour</div>
        <div class="pkg-duration">Duration: 1N / 2D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>We offer Customized Package for Deepotsav & Other Festivals</li>
          <li>Darshan at Ram Janmabhoomi & Hanuman Garhi</li>
          <li>Evening Aarti & Light Show at Saryu Ghat</li>
          <li>Hotels & cab service included</li>
          <li>We covers all pilgrimage religious sites, ensuring you don't miss any sacred spot.</li>
          <li>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</li>
        </ul>   
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- NOTE SECTION -->
<section class="note-section py-5">
  <div class="container text-center">
    <h2>Note (For Multiple Travellers / Group Bookings)</h2>
    <p>
      Planning to visit Ayodhya with your family or group? 
      <strong>The more members you bring, the lower your package cost per person becomes!</strong><br>
      We offer exclusive group discounts for 3 or more travellers — enjoy VIP darshan, guided tours, 
      and premium stays at special rates.
    </p>

    <div class="note-highlight mx-auto mt-4">
      <i class="fa-solid fa-users"></i>
      <span>Group Packages = Bigger Savings 💰</span>
    </div>

    <div class="note-points mt-5">
      <div class="row g-4 justify-content-center">
        <div class="col-md-5 col-sm-12">
          <div class="note-point">
            <i class="fa-solid fa-check-circle"></i>
            <p>We cover all pilgrimage religious sites, ensuring you don't miss any sacred spot.</p>
          </div>
        </div>

        <div class="col-md-5 col-sm-12">
          <div class="note-point">
            <i class="fa-solid fa-check-circle"></i>
            <p>If time allows, our guide will show you local hidden gems, shopping spots, and delicious food options.</p>
          </div>
        </div>

        <div class="col-md-5 col-sm-12">
          <div class="note-point">
            <i class="fa-solid fa-check-circle"></i>
            <p>All Puja-related arrangements can be made as per your needs — we’ll handle everything so you just attend peacefully.</p>
          </div>
        </div>

        <div class="col-md-5 col-sm-12">
          <div class="note-point">
            <i class="fa-solid fa-check-circle"></i>
            <p>We offer the most cost-effective packages with complete transparency and satisfaction.</p>
          </div>
        </div>

        <div class="col-md-5 col-sm-12">
          <div class="note-point">
            <i class="fa-solid fa-check-circle"></i>
            <p>We fulfil every customer's requirement — your comfort and devotion are our priority.</p>
          </div>
        </div>

        <div class="col-md-5 col-sm-12">
          <div class="note-point">
            <i class="fa-solid fa-check-circle"></i>
            <p>Our team ensures your entire journey is covered — and we customize it fully as per your preferences.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- FREE CALL SECTION -->
  <section class="free-call-section">
    <div class="container text-center">
      <h2>Need More Details? Talk to Us for Free!</h2>
      <p>
        Still confused which package suits you best? Don’t worry — our experts will brief you with complete 
        package details, darshan options, and travel info <strong>in just a 2–3 minute call!</strong>
      </p>
      <a href="tel:+919109507691" class="btn-call-now">
        <i class="fa-solid fa-phone-volume"></i> Call Now for Free Consultation
        <span>📞 +91 9109507691</span>
      </a>
    </div>
  </section>

  <!-- OVERVIEW SECTION -->
  <section class="overview-section">
    <div class="container">
      <h2 class="overview-heading text-center">Overview</h2>

      <div class="overview-box">
        <p class="overview-intro">
          Experience the divine beauty of <strong>Ayodhya Deepotsav</strong> with our specially curated
          <strong>1 Night / 2 Days</strong> package — from <strong>Ram Lalla Darshan</strong> to the
          mesmerizing <strong>Saryu Aarti</strong>. Enjoy comfortable stays, local transfers, and
          delicious breakfast while you immerse yourself in this sacred celebration.
        </p>

        <div class="day-plan">
          <h4>🕉️ Day 1: Arrival & Spiritual Exploration</h4>
          <ul>
            <li>Arrival at Ayodhya – warm welcome by our representative.</li>
            <li>Check-in at the hotel & relax with a refreshing welcome drink.</li>
            <li>Visit <strong>Ram Janmabhoomi Temple</strong> and <strong>Hanuman Garhi</strong>.</li>
            <li>Attend the divine <strong>Deepotsav celebrations</strong> in the evening.</li>
            <li>Dinner & Overnight stay at the hotel.</li>
          </ul>
        </div>

        <div class="day-plan">
          <h4>🌅 Day 2: Saryu Aarti & Departure</h4>
          <ul>
            <li>Evening <strong>Saryu River Aarti (6:00 PM – 8:00 PM)</strong> & divine light view.</li>
            <li>Return to hotel for breakfast.</li>
            <li>Relax & checkout from the hotel.</li>
            <li><strong>Hassle-free transfer</strong> to Ayodhya Railway Station / Airport.</li>
            <li>Your spiritually enriching journey ends here with divine blessings!</li>
          </ul>
        </div>

        <div class="overview-footer mt-3">
          <p>
            ✅ <strong>Includes:</strong> Accommodation, Transfers, Breakfast, Darshan Assistance.<br>
            ❌ <strong>Excludes:</strong> Personal expenses, Additional meals, Entry fees (if any).
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- VARANASI–AYODHYA–PRAYAGRAJ SECTION -->
  <section class="highlight-section">
    <h2>Varanasi – Ayodhya – Prayagraj Pilgrimage Tours</h2>
    <p>Combine all three sacred destinations into one seamless spiritual journey.</p>
    <p class="mt-3"><strong>Why combine?</strong> Visit Kashi Vishwanath, Ram Janmabhoomi and Triveni Sangam in one carefully planned itinerary. Saves travel time and gives spiritual continuity.</p>
  </section>

<section id="packages" class="container my-5">
  <div class="section-head text-center mb-4">
    <h2>Additional Ayodhya Packages (Makhoda Dham)</h2>
    <p>The "Makhoda Dham - Sacred Origin Experience" is an optional, spiritual and historical excursion package. Customers are welcome to visit this location at their discretion. An additional charge applies for this exclusive visit, which covers transportation, a dedicated guide, and access arrangements. Please confirm the final cost and scheduling before adding this to your package.</p>
  </div>

  <div class="packages-grid">
    <!-- Package 1 -->
    <div class="pkg-card" style="width: 100%;">
      <div class="pkg-body">
        <div class="pkg-title">Makhoda Dham - Sacred Origin Experience (Additional Package)</div>
        <div class="pkg-duration">Duration: 1N / 2D</div>
        <div class="pkg-rating">★★★★★</div>
        <ul class="pkg-list">
          <li>Guided Yagna Site Visit: See the holy spot where King Dasharatha performed the Putrakameshti Yagna for Lord Ram's birth.</li>
          <li>Serene Riverside Reflection: Exclusive time for meditation on the peaceful banks of the River Manorama.</li>
          <li>Ramayana Origin Story: Learn the in-depth historical significance as the spiritual starting point of the Ramayana.</li>
          <li>Festive Ritual Access: If available, special arrangements to experience the vibrant Ram Navami fair and rituals.</li>
        </ul>
        <div class="pkg-price">Custom Pricing</div>
        <div class="pkg-cta">
          <a href="/contact" class="btn btn-gold btn-sm">Book Now</a>
          <a href="tel:+919109507691" class="btn btn-call btn-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
        </div>
      </div>
    </div>
  </div>
</section>



  <!-- WHY CHOOSE SECTION -->
  <section class="choose-section">
    <div class="container">
      <div class="section-head">
        <h2>Why Choose Divya Dham Guides</h2>
      </div>
      <div class="choose-grid">
        <div class="choose-item"><i class="fa-solid fa-headset"></i> 24×7 Support for devotees</div>
        <div class="choose-item"><i class="fa-solid fa-ticket"></i> Hassle-free online darshan booking (VIP / Sugam / Regular)</div>
        <div class="choose-item"><i class="fa-solid fa-user-tie"></i> Experienced certified local tour guides</div>
        <div class="choose-item"><i class="fa-solid fa-hotel"></i> Clean, affordable hotels & AC/non-AC vehicle options</div>
        <div class="choose-item"><i class="fa-solid fa-route"></i> Customised pilgrimage packages (from major cities)</div>
      </div>
    </div>
  </section>


  <!-- FAQ SECTION -->
<section class="faq-section py-5 bg-light">
  <div class="container">
    <div class="section-head text-center mb-4">
      <h2 class="fw-bold text-dark">Frequently Asked Questions</h2>
      <p class="text-muted">Quick answers to common queries about Ayodhya Darshan & Tour Packages.</p>
    </div>

    <div class="accordion" id="faqAccordion">
      <!-- FAQ 1 -->
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="faqHeading1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            1. How do I book Ram Mandir Darshan?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            You can book through Divya Dham Guides’ website or contact our team. Choose VIP, Sugam, or Regular slots — we handle ticketing and local assistance.
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="faqHeading2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            2. What is Sugam Darshan?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Sugam Darshan provides easier access for senior citizens and those requiring assisted movement. We arrange the necessary permissions and support.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="faqHeading3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            3. Do you provide pickup from nearby cities?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes — we offer pickup from Lucknow, Varanasi, and Prayagraj. Custom transfers from other cities can also be arranged on request.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="faqHeading4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            4. What is included in 1N/2D Ayodhya Tour Packages?
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The 1N/2D Ayodhya package includes accommodation, guided Ram Mandir Darshan, visits to Hanuman Garhi and Kanak Bhawan, Saryu Aarti experience, breakfast, and hassle-free transfers.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="faqHeading5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
            5. Is the Saryu Aarti included in the tour?
          </button>
        </h2>
        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, the Saryu Aarti at the sacred riverfront is part of our Ayodhya itinerary. Guests can participate or simply witness the beautiful divine ceremony.
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="faqHeading6">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
            6. Can I customize the tour itinerary?
          </button>
        </h2>
        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Absolutely! You can customize your itinerary based on preferences — add temple visits, extend stay duration, or include nearby destinations like Prayagraj or Varanasi.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AYODHYA PLACES SECTION -->
<section class="ayodhya-places py-5">
  <div class="container">
    <h2 class="text-center mb-4">Ayodhya Darshan Places</h2>

    <div class="timeline-card mx-auto">
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-number">1</div>
          <div class="timeline-content">
            <h5>Sri Ram Mandir Darshan (Ram Janm Bhumi) Darshan & Aarti</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">2</div>
          <div class="timeline-content">
            <h5>Hanuman Garhi Darshan</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">3</div>
          <div class="timeline-content">
            <h5>Dashrath Mehel</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">4</div>
          <div class="timeline-content">
            <h5>Kanak Bhawan</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">5</div>
          <div class="timeline-content">
            <h5>Ram ki Paidi</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">6</div>
          <div class="timeline-content">
            <h5>Nageshwar Nath Temple (Jal Arpan)</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">7</div>
          <div class="timeline-content">
            <h5>Saryu Maiya Ghat</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">8</div>
          <div class="timeline-content">
            <h5>Lata Mangeshkar Chowk</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">9</div>
          <div class="timeline-content">
            <h5>Suraj Kund</h5>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-number">10</div>
          <div class="timeline-content">
            <h5>Raj Shadan</h5>
            <p> It is the royal residence of Ayodhya’s King, where he currently lives — a must-visit spot symbolizing Ayodhya’s royal heritage.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- CTA SECTION -->
  <section class="cta-section">
    <h3>Ready to plan your Ayodhya pilgrimage?</h3>
    <p>VIP darshan, Sugam access for elderly & full pilgrimage packages available.</p>
    <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
      <a href="/contact" class="btn btn-gold">Plan Your Trip</a>
      <a href="tel:+919109507691" class="btn btn-outline-light">Call for Assistance</a>
    </div>
  </section>
  
@endsection
