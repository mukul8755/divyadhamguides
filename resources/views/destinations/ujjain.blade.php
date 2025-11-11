
@extends('layout')

@section('title', 'Ayodhya Ram Mandir Darshan Booking & Tour Packages | Divya Dham Guides')
@section('meta_description', 'Book Ayodhya Ram Mandir Darshan online with Divya Dham Guides. VIP, Sugam & regular darshan tickets, tour package and Ayodhya–Varanasi trips available.')


@section('content')

  <style>
    :root{
      --theme-red: #c62828;        /* main red */
      --accent-border: #ffb14d;
      --btn-yellow: #f5b400;
      --btn-green: #2fa84f;
      --text-black: #111;
      --bg: #ffffff;
    }

    /* basic */
    body{
      font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      color: var(--text-black);
      background: var(--bg);
      line-height:1.6;
      padding:1rem;
      scroll-behavior: smooth;
    }
    main.page{ max-width:1200px; margin:0 auto; }

    /* SECTION TITLES: always red and centered */
    section h2, .section-title {
      color: var(--theme-red);
      text-align: center;
      font-weight:700;
      margin-bottom:0.6rem;
    }
    /* subtitles (lead) center */
    .section-subtitle, .lead {
      text-align:center;
      color:#333;
      margin-bottom:1rem;
      font-size:1.05rem;
    }

    /* pre_hero */
    .pre_hero {
      background-image: linear-gradient(90deg, rgba(198,40,40,0.95), rgba(245,152,51,0.95));
      color: #fff;
      border-radius: 10px;
      padding: 48px 28px;
      text-align: center;
      margin-bottom: 18px;
    }
    .pre_hero h1 { color: #ffffff; font-size:2.4rem; margin-bottom:0.25rem; }
    .pre_hero p { color:#fff; opacity:0.95; margin-bottom:18px; }

    .cta-buttons a{
      border-radius: 36px;
      padding: 12px 26px;
      font-weight:700;
      display:inline-block;
      margin:6px;
      text-decoration:none;
    }
    .btn-pre_hero-book {
      background: linear-gradient(180deg,var(--btn-yellow), #ffc84d);
      color:#111; border:none;
      box-shadow: 0 12px 30px rgba(245,180,0,0.14);
    }
    .btn-pre_hero-enquire {
      background: transparent; color:#fff; border:2px solid rgba(255,255,255,0.9);
    }

    /* NOTE below pre_hero */
    .pre_hero-note-below {
      max-width:1100px;
      margin: 12px auto 28px;
      padding:14px 18px;
      border-radius:10px;
      background: linear-gradient(90deg, rgba(255,246,235,0.9), rgba(255,241,224,0.9));
      border:1px solid rgba(255,177,77,0.25);
      color: #6b3b2b;
      display:flex;
      justify-content:center;
      align-items:center;
      gap:8px;
      text-align:center;
    }
    .pre_hero-note-below a { color: var(--theme-red); font-weight:700; text-decoration:underline; }

    /* Services / package cards */
    .pkg-card {
      background:#fff;
      border: 3px solid var(--accent-border);
      border-radius: 14px;
      padding: 18px;
      box-shadow: 0 12px 28px rgba(17,17,17,0.06);
      transition: transform .12s ease, box-shadow .12s ease;
      height:100%;
      display:flex;
      flex-direction:column;
      justify-content:space-between;
    }
    .pkg-card:hover { transform:translateY(-6px); }
    .pkg-card h5 { color:var(--theme-red); margin-bottom:6px; text-align:center; } /* centered title inside card */
    .pkg-card small { color:#444; display:block; margin-bottom:8px; text-align:center; } /* centered subtitle */
    .pkg-card ul { margin:0 auto 0.8rem; padding-left:1.1rem; color:#222; max-width:320px; } /* centered-ish */
    .pkg-actions { display:flex; gap:10px; align-items:center; justify-content:center; }
    .btn-book {text-decoration: none; background:var(--btn-yellow); color:#111; border:none; padding:8px 14px; border-radius:28px; font-weight:700; box-shadow:0 8px 20px rgba(245,180,0,0.12); }
    .btn-call { text-decoration: none;background:linear-gradient(180deg,var(--btn-green), #1f8a3e); color:#fff; border:none; padding:8px 14px; border-radius:28px; font-weight:700; box-shadow:0 8px 20px rgba(31,138,62,0.12); }

    /* consult banner (centered text) */
    .consult-banner {
      background: linear-gradient(90deg, #b22222, #f06722);
      color: #fff;
      margin: 34px 0;
      padding: 38px 24px;
      border-radius: 10px;
      text-align:center;
    }
    .consult-banner h3{ color:#fff; }
    .consult-cta {
      display:inline-flex;
      align-items:center;
      gap:14px;
      background:#fff;
      color:var(--theme-red);
      padding:16px 22px;
      border-radius:12px;
      box-shadow: 0 12px 36px rgba(0,0,0,0.12);
      font-weight:700;
      text-decoration:none;
    }
    .consult-cta .phone { color:#111; font-weight:700; }

    /* features boxes center */
    .feature-box { border:3px solid var(--accent-border); border-radius:12px; padding:18px; display:flex; gap:14px; align-items:center; justify-content:center; background:#fff; box-shadow:0 12px 28px rgba(17,17,17,0.04); text-align:center; }
    .feature-icon { min-width:46px; min-height:46px; border-radius:50%; background:var(--accent-border); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; }

    /* Online Booking info center */
    .booking-info { text-align:center; }

    /* Timings center */
    .timings-list { list-style:none; padding:0; margin:0 auto; max-width:760px; text-align:center; }
    .timings-list li { margin-bottom:0.5rem; }

    /* FAQ center headings already handled; accordion body left align for readability */
    .accordion-body { text-align:left; }

    /* remove booking form (not present) */

    @media (max-width:768px){
      .pre_hero h1{ font-size:1.8rem; }
      .pkg-card ul{ max-width:100%; }
    }
  </style>

<main class="page">

  <!-- pre_hero -->
  <section class="pre_hero" id="top-pre_hero">
    <div class="container">
      <h1>Ujjain Darshan — Mahakaleshwar & Kshipra Aarti</h1>
      <p class="lead">Experience the sacred Bhasma Aarti at Mahakaleshwar, VIP darshan, Harsiddhi Mata visits, Omkareshwar/Narmada boating and guided Ujjain pilgrimage packages with certified guides and 24/7 support.</p>
      <div class="cta-buttons">
        <!-- scroll to packages -->
        <a class="btn-pre_hero-book" href="#packages">Book Ujjain Package</a>
        <a class="btn-pre_hero-enquire" href="/contact">Enquire Now</a>
      </div>
    </div>
  </section>

  <!-- NOTE (moved below pre_hero) -->
  <div class="pre_hero-note-below" role="note" aria-label="Booking note">
    Note: Divya Dham Guides arranges all temple schedules, bhog offerings and priest guides for you — 
    <a href="/contact"> Book / Enquire</a> or Call: <a href="tel:+919109507691">+91 9109507691</a>
  </div>

  <!-- SERVICES -->
  <section class="mb-4">
    <h2 class="section-title">Our Services</h2>
    <p class="section-subtitle">Complete support for your spiritual journey — darshan, stay, transport & guidance in Ujjain and Omkareshwar.</p>

    <div class="row g-3 justify-content-center">
      <div class="col-md-4">
        <div class="pkg-card info-card text-center">
          <div>
            <div style="font-size:28px; color:var(--theme-red);">🕉️</div>
            <h5>Temple Guidance</h5>
            <p style="margin:0;">Certified local guides for Mahakaleshwar, Harsiddhi, Mangalnath, Sandipani Ashram and more.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pkg-card info-card text-center">
          <div>
            <div style="font-size:28px; color:var(--theme-red);">🏨</div>
            <h5>Accommodation</h5>
            <p style="margin:0;">Clean, family-friendly and senior-friendly hotels with breakfast options.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pkg-card info-card text-center">
          <div>
            <div style="font-size:28px; color:var(--theme-red);">🚐</div>
            <h5>Travel Support</h5>
            <p style="margin:0;">Pickup from Indore, private transfers, Omkareshwar/Narmada boating transfers & local cabs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PACKAGES -->
  <section id="packages" class="packages mb-4">
    <h2 class="section-title">Ujjain Tour Packages</h2>
    <p class="section-subtitle">Choose a package that fits your needs — every package can be customized for families and senior citizens.</p>

    <div class="row g-3 justify-content-center">
      <!-- each card centered within grid -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="pkg-card">
          <div>
            <h5>Sugam Ujjain Darshan — 1N / 2D</h5>
            <small>Mahakaleshwar darshan, Harsiddhi, Kshipra ghats — hotel, guide & transfers</small>
            <ul>
              <li>Hotel (1 night) & breakfast</li>
              <li>Local cab & certified guide</li>
              <li>Darshan assistance (online/offline)</li>
            </ul>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <div class="text-muted me-3">Custom Pricing</div>
            <div class="pkg-actions">
              <a class="btn-book" href="/contact">Book Now</a>
              <a class="btn-call" href="tel:+919109507691">Call Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="pkg-card">
          <div>
            <h5>VIP Mahakaleshwar Darshan — 1N / 2D</h5>
            <small>Priority entry (Nandi Hall coordination), photo/ID help & private transfers</small>
            <ul>
              <li>Priority entry coordination</li>
              <li>Private transfer & premium hotels</li>
              <li>Darshan assistance (online/offline)</li>
            </ul>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <div class="text-muted me-3">Custom Pricing</div>
            <div class="pkg-actions">
              <a class="btn-book" href="/contact">Book Now</a>
              <a class="btn-call" href="tel:+919109507691">Call Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="pkg-card">
          <div>
            <h5>Omkareshwar / Narmada VIP Boating</h5>
            <small>Omkareshwar darshan + Narmada river boating & aarti puja</small>
            <ul>
              <li>Boat booking & riverside puja</li>
              <li>Guide & priest coordination</li>
              <li>Transfers from Ujjain / Indore</li>
            </ul>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <div class="text-muted me-3">Custom Pricing</div>
            <div class="pkg-actions">
              <a class="btn-book" href="/contact">Book Now</a>
              <a class="btn-call" href="tel:+919109507691">Call Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- more cards (centered similarly) -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="pkg-card">
          <div>
            <h5>Harsiddhi Mata — Shakti Peeth Darshan</h5>
            <small>Guided visit & puja arrangements</small>
            <ul>
              <li>Puja coordination</li>
              <li>Local transport</li>
            </ul>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <div class="text-muted me-3">Custom Pricing</div>
            <div class="pkg-actions">
              <a class="btn-book" href="/contact">Book Now</a>
              <a class="btn-call" href="tel:+919109507691">Call Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="pkg-card">
          <div>
            <h5>Pilgrimage Combo: Ujjain — Omkareshwar</h5>
            <small>2–3 day combination for a deeper pilgrimage experience</small>
            <ul>
              <li>Hotels, cab & guides</li>
              <li>Special puja arrangements available</li>
            </ul>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <div class="text-muted me-3">Custom Pricing</div>
            <div class="pkg-actions">
              <a class="btn-book" href="/contact">Book Now</a>
              <a class="btn-call" href="tel:+919109507691">Call Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="pkg-card">
          <div>
            <h5>Customized Multi-day Pilgrimage</h5>
            <small>Tailored itineraries for families, seniors & devotees wanting bhog/havan</small>
            <ul>
              <li>Wheelchair / senior support</li>
              <li>Private priest & bhog coordination</li>
            </ul>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <div class="text-muted me-3">Custom Pricing</div>
            <div class="pkg-actions">
              <a class="btn-book" href="/contact">Book Now</a>
              <a class="btn-call" href="tel:+919109507691">Call Now</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- CONSULTATION BANNER -->
  <section class="consult-banner">
    <h3>Need More Details? Talk to Us for Free!</h3>
    <p class="mb-3">Still confused which package suits you best? Our experts will brief you with complete package details, darshan options and travel info in just a 2–3 minute call.</p>
    <a class="consult-cta" href="tel:+919109507691">
      <span style="font-size:20px;">📞</span>
      <div style="text-align:left;">
        <small style="display:block;">Call Now for Free Consultation</small>
        <div class="phone">+91 9109507691</div>
      </div>
    </a>
  </section>

  <!-- OVERVIEW -->
  <section id="overview" class="mb-4">
    <h2 class="section-title">Overview</h2>
    <p class="section-subtitle">Ujjain — a timeless spiritual city and home to Mahakaleshwar Jyotirlinga. We provide full pilgrimage support for devotees travelling to attend the Bhasma Aarti, special pujas, and local temple tours.</p>
  </section>

  <!-- GROUP FEATURES (centered) -->
  <section class="mb-4">
    <h2 class="section-title">Note (For Multiple Travellers / Group Bookings)</h2>
    <p class="section-subtitle">Planning to visit Ujjain with family or a group? The more members you bring, the lower the package cost per person becomes! We offer exclusive group discounts for 3 or more travellers — enjoy VIP darshan, guided tours, and premium stays at special rates.</p>

    <div class="group-badge" style="display:block; margin: 10px auto;">👥 Group Packages = Bigger Savings 💰</div>

    <div class="container features">
      <div class="row g-3 justify-content-center">
        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">✓</div>
            <div>We cover all pilgrimage religious sites, ensuring you don't miss any sacred spot.</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">✓</div>
            <div>If time allows, our guide will show you local hidden gems, shopping spots and delicious food options.</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">✓</div>
            <div>All puja-related arrangements can be made as per your needs — we’ll handle everything so you just attend peacefully.</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">✓</div>
            <div>We offer cost-effective packages with complete transparency and satisfaction.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ONLINE BOOKING (centered content) -->
  <section class="mb-4">
    <h2 class="section-title">Online Booking for Mahakaleshwar Bhasma Aarti</h2>
    <p class="section-subtitle">Mahakaleshwar Temple is the only Jyotirlinga where the sacred Bhasma Aarti is performed daily. You can book online — below is a concise guide.</p>

    <div class="info-card booking-info" style="margin:auto; max-width:880px;">
      <ol style="text-align:left; display:inline-block; text-align:left; max-width:760px;">
        <li><strong>Visit the official booking portal</strong> — find the "Bhasma Aarti Booking" link on the Mahakaleshwar official site.</li>
        <li><strong>Select date</strong> — choose the date (slots usually open about 90 days before).</li>
        <li><strong>Enter details</strong> — name, mobile, email, full address; upload passport-sized photo & photo ID copy.</li>
        <li><strong>Add companions</strong> — add family/friends with photos & ID proof.</li>
        <li><strong>Select seating</strong> — Nandi Hall (closer view) or Barricades (general). Click check availability.</li>
        <li><strong>Confirm & pay</strong> — online fee (approx ₹200 per person). Download the receipt and keep the SMS confirmation.</li>
        <li><strong>Final list</strong> — confirmed names are published on the temple website by 7 PM the day before. Carry original ID and booking receipt on the day.</li>
      </ol>

      <p style="margin-top:12px;"><strong>Arrival time:</strong> Reach before 5:00 AM. Late arrivals may be denied entry.<br>
      <strong>Booking fees:</strong> Custom Pricing</p>

      <p><strong>Need help?</strong> Call our Ujjain support: <a href="tel:+919109507691">+91 9109507691</a> — we assist with photo/ID prep and online upload.</p>
    </div>
  </section>

  <!-- TIMINGS & RITUALS (centered) -->
  <section class="mb-4">
    <h2 class="section-title">Timings & Rituals</h2>
    <p class="section-subtitle">Key aartis and darshan windows at Mahakaleshwar — check the date you plan and book accordingly.</p>

    <ul class="timings-list">
      <li>The Mahakaleshwar complex is generally open from <strong>4:00 AM to 11:00 PM</strong> on most days (confirm special dates).</li>
      <li><strong>Bhasma Aarti:</strong> early morning around <strong>4:00 AM – 6:00 AM</strong>. Reach before 5:00 AM for smoother entry.</li>
      <li>Other regular aartis: Mangla, Morning Puja and Evening (Sandhya) Aarti in the evenings.</li>
      <li>Festival timings (Shravan, Simhastha etc.) vary — book well in advance for festival windows.</li>
    </ul>
  </section>

  <!-- FAQ (accordion) -->
  <section class="mb-4">
    <h2 class="section-title">Frequently Asked Questions (FAQs)</h2>

    <div class="accordion" id="faq">
      <div class="accordion-item">
        <h2 class="accordion-header" id="f1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c1" aria-expanded="false" aria-controls="c1">
            1. Can I book Bhasma Aarti online?
          </button>
        </h2>
        <div id="c1" class="accordion-collapse collapse" aria-labelledby="f1" data-bs-parent="#faq">
          <div class="accordion-body">Yes — through the official Mahakaleshwar booking portal. We help pilgrims fill forms, upload photos/ID and confirm seats.</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="f2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
            2. What documents are required on the day?
          </button>
        </h2>
        <div id="c2" class="accordion-collapse collapse" aria-labelledby="f2" data-bs-parent="#faq">
          <div class="accordion-body">Carry the same original photo ID you uploaded when booking and the booking receipt (print or SMS copy).</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="f3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3" aria-expanded="false" aria-controls="c3">
            3. Can you arrange VIP / priority entry?
          </button>
        </h2>
        <div id="c3" class="accordion-collapse collapse" aria-labelledby="f3" data-bs-parent="#faq">
          <div class="accordion-body">Yes — we arrange VIP/Sheeghra darshan assistance where possible and coordinate with local procedures for quicker entry.</div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="f4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
            4. Do you provide pickups from Indore / Omkareshwar transfers?
          </button>
        </h2>
        <div id="c4" class="accordion-collapse collapse" aria-labelledby="f4" data-bs-parent="#faq">
          <div class="accordion-body">Yes — we arrange pick-up/drop from Indore airport and transfers to Omkareshwar / Narmada boating as per your chosen package.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA (screenshot-like section) -->
  <section style="background:var(--theme-red); color:#fff; padding:46px 18px; border-radius:8px; text-align:center; margin-bottom:18px;">
    <h2 style="color:#fff; margin-bottom:8px;">Ready to plan your Ujjain pilgrimage?</h2>
    <p style="color:#fff; margin-bottom:20px; font-weight:600;">VIP darshan, Sugam access for elderly & full pilgrimage packages available.</p>
    <div style="display:flex; gap:14px; justify-content:center; flex-wrap:wrap;">
      <a href="/contact" style="background:var(--btn-yellow); color:#111; padding:12px 24px; border-radius:28px; font-weight:800; text-decoration:none; box-shadow:0 12px 30px rgba(245,180,0,0.14);">Plan Your Trip</a>
      <a href="tel:+919109507691" style="border:2px solid rgba(255,255,255,0.3); color:#fff; padding:12px 24px; border-radius:8px; text-decoration:none;">Call for Assistance</a>
    </div>
  </section>


</main>

@endsection