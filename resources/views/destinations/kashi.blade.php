@extends('layout')

@section('title', 'Ayodhya Ram Mandir Darshan Booking & Tour Packages | Divya Dham Guides')
@section('meta_description', 'Book Ayodhya Ram Mandir Darshan online with Divya Dham Guides. VIP, Sugam & regular
    darshan tickets, tour package and Ayodhya–Varanasi trips available.')


@section('content')
    <style>
        :root {
            --primary: #b30000;
            --gold: #FFD700;
            --green: #28a745;
            --accent: #ff9933;
            --text: #111;
            --bg: #ffffff;
            --overlay-dark: rgba(0, 0, 0, 0.45);
            --card-bg: rgba(0, 0, 0, 0.45);
            --card-border: rgba(255, 255, 255, 0.12);
            --slide-duration: 12s;
        }

        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: "Poppins", sans-serif;
            background: #fff;
            color: #111;
        }

        h2, h3, p { text-align: center; }

        /* ========== HERO ========== */
        .hero {
            position: relative;
            min-height: 72vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 56px 16px;
            overflow: hidden;
            color: #fff;
            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
        }

        .hero-bg-slider {
            position: absolute;
            inset: 0;
            z-index: 0;
            pointer-events: none;
        }

        .bg-slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transform: scale(1.03);
            animation: heroFade var(--slide-duration) ease-in-out infinite;
            filter: brightness(0.6);
        }

        .kashi-slide1 { background-image: url('images/kashi-banner1.jpg'); animation-delay: 0s; }
        .kashi-slide2 { background-image: url('images/kashi-banner2.jpg'); animation-delay: 4s; }
        .kashi-slide3 { background-image: url('images/kashi-banner3.jpg'); animation-delay: 8s; }

        @keyframes heroFade {
            0%   { opacity: 0; transform: scale(1.04); }
            8%   { opacity: 1; transform: scale(1);    }
            33%  { opacity: 1; transform: scale(1);    }
            41%  { opacity: 0; transform: scale(0.98); }
            100% { opacity: 0; transform: scale(0.98); }
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0,0,0,0.18), rgba(0,0,0,0.40));
            z-index: 0;
            pointer-events: none;
        }

        .hero-card {
            position: relative;
            z-index: 2;
            width: min(1060px, 94%);
            background: rgba(0,0,0,0.22);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 14px;
            padding: 34px;
            backdrop-filter: blur(3px) saturate(130%);
            -webkit-backdrop-filter: blur(3px) saturate(130%);
            box-shadow: 0 14px 45px rgba(0,0,0,0.40);
            text-align: center;
            transition: transform .45s ease, box-shadow .45s ease;
        }

        @media (hover: hover) {
            .hero-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 28px 70px rgba(0,0,0,0.6);
            }
        }

        .brand {
            margin: 0;
            color: var(--gold) !important;
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: 0.6px;
            text-shadow: 0 4px 14px rgba(0,0,0,0.7);
        }

        .title {
            margin: 6px 0 18px;
            font-family: "Poppins", sans-serif;
            font-size: clamp(26px, 4.6vw, 44px);
            font-weight: 800;
            color: #fff !important;
            text-shadow: 0 3px 12px rgba(0,0,0,0.7), 0 0 22px rgba(255,255,255,0.15);
            animation: titleEntrance .9s ease both;
        }

        .desc {
            margin: 8px auto 18px;
            color: #fff;
            font-size: clamp(14px, 1.4vw, 17px);
            line-height: 1.6;
            max-width: 920px;
            opacity: 0.98;
            text-shadow: 0 2px 10px rgba(0,0,0,0.45);
            animation: descEntrance .9s cubic-bezier(.2,.9,.3,1) both;
            animation-delay: .15s;
        }

        .hero-ctas {
            margin-top: 6px;
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            font-weight: 700;
            padding: 10px 22px;
            border-radius: 30px;
            text-decoration: none;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .btn-gold {
            background: linear-gradient(90deg, var(--gold), #ffd84d);
            color: #111;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            border: none;
        }

        .btn-gold:hover {
            background: linear-gradient(90deg, #ffb300, #ffe45c);
            color: var(--primary) !important;
            transform: translateY(-3px);
        }

        .btn-outline-red {
            background: transparent;
            color: #fff;
            border: 1.6px solid #fff;
        }

        .btn-outline-red:hover {
            background: var(--primary);
            color: #fff;
            border-color: rgba(0,0,0,0.12);
        }

        @keyframes titleEntrance {
            0%   { opacity: 0; transform: translateY(18px) scale(.995); filter: blur(2px); }
            100% { opacity: 1; transform: translateY(0) scale(1);       filter: blur(0);   }
        }

        @keyframes descEntrance {
            0%   { opacity: 0; transform: translateY(8px); }
            100% { opacity: 1; transform: translateY(0);   }
        }

        @media (max-width: 980px) {
            .hero { padding: 44px 12px; min-height: 68vh; }
            .hero-card { padding: 28px; border-radius: 12px; }
            .title { font-size: clamp(22px, 6.6vw, 34px); }
            .desc  { font-size: 15px; }
        }

        @media (max-width: 520px) {
            .hero { padding: 36px 12px 48px; min-height: auto; align-items: flex-start; }
            .hero-card { width: 96%; padding: 18px; border-radius: 10px; }
            .title { font-size: 20px; line-height: 1.08; }
            .desc  { font-size: 14px; }
        }

        @media (prefers-reduced-motion: reduce) {
            .bg-slide, .hero-card, .title, .desc {
                animation: none !important; transition: none !important; transform: none !important;
            }
            .bg-slide { opacity: 1; }
        }

        /* ========== SECTION HEAD ========== */
        .section-head { text-align: center; margin-bottom: 15px; }
        .section-head h2 { color: var(--primary); font-family: "Playfair Display", serif; font-weight: 700; }
        .section-head p  { color: #555; font-size: 0.98rem; }

        /* ========== FEATURE GRID ========== */
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
            box-shadow: 0 8px 20px rgba(244,66,66,0.658);
        }

        .feature-card i  { color: var(--primary); font-size: 2rem; margin-bottom: 10px; }
        .feature-card h5 { color: var(--primary); font-weight: 700; }
        .feature-card p  { color: #333; font-size: 0.95rem; }
        .feature-card ul { text-align: left !important; margin-left: 0; padding-left: 18px; }

        /* ========== KASHI CAROUSEL ========== */
        .kashi-carousel {
            padding: 80px 0;
            background: linear-gradient(135deg, #2b0000, #5a0000);
        }

        .kashi-carousel .slider-heading {
            text-align: center;
            color: #FFD700;
            font-weight: 700;
            margin-bottom: 50px;
        }

        .kashi-carousel .carousel-wrapper {
            position: relative;
            overflow: hidden;
        }

        .kashi-carousel .carousel-track {
            display: flex;
        }

        .kashi-carousel .puja-card {
            min-width: 320px;
            margin: 0 15px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
            flex-shrink: 0;
        }

        .kashi-carousel .card-img img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            display: block;
        }

        .kashi-carousel .card-content {
            padding: 20px;
            background: #fff;
        }

        .kashi-carousel .card-content h3 {
            color: #b30000;
            font-size: 18px;
            margin-bottom: 10px;
            text-align: left;
        }

        .kashi-carousel .card-content ul {
            font-size: 14px;
            padding-left: 18px;
            margin-bottom: 15px;
            text-align: left;
        }

        .kashi-carousel .whatsapp-btn {
            display: inline-block;
            background: #25D366;
            color: #fff;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .kashi-carousel .whatsapp-btn:hover { background: #1ebe5d; }

        .kashi-carousel .nav-btn {
            position: absolute;
            top: 45%;
            transform: translateY(-50%);
            background: #FFD700;
            border: none;
            font-size: 24px;
            padding: 8px 14px;
            cursor: pointer;
            border-radius: 50%;
            z-index: 10;
            line-height: 1;
        }

        .kashi-carousel .nav-btn:hover { background: #ffc200; }
        .kashi-carousel .prev { left: 5px; }
        .kashi-carousel .next { right: 5px; }

        .kashi-carousel .note {
            font-size: 0.95rem;
            color: #ccc;
            text-align: center;
        }

        @media (max-width: 768px) {
            .kashi-carousel .puja-card { min-width: 260px; }
        }

        @media (max-width: 480px) {
            .kashi-carousel .puja-card { min-width: 220px; }
            .kashi-carousel .prev { left: 0; }
            .kashi-carousel .next { right: 0; }
        }

        /* ========== KASHI ABOUT ========== */
        .kashi-about {
            padding: 100px 20px;
            background: linear-gradient(135deg, #3b0000, #6b0000);
            display: flex;
            justify-content: center;
        }

        .kashi-about .container { max-width: 1000px; margin: auto; }

        .kashi-about .about-card {
            background: #fff;
            padding: 60px 50px;
            border-radius: 20px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
            text-align: center;
        }

        .kashi-about .about-main-heading { font-size: 32px; color: #7a0000; margin-bottom: 10px; }
        .kashi-about .about-sub-heading  { font-size: 18px; color: #b8860b; margin-bottom: 30px; }

        .kashi-about .about-card p {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            margin-bottom: 20px;
        }

        .kashi-about .highlight { color: #b30000; font-weight: 600; }
        .kashi-about .about-cta { margin-top: 40px; }

        .kashi-about .explore-btn {
            background: linear-gradient(45deg, #FFD700, #ffcc00);
            color: #7a0000;
            padding: 14px 35px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: 0.3s ease;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .kashi-about .explore-btn:hover {
            background: #b30000;
            color: #fff;
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .kashi-about .about-card { padding: 40px 25px; }
            .kashi-about .about-main-heading { font-size: 24px; }
        }

        /* ========== FREE CALL ========== */
        .free-call-section {
            background: linear-gradient(90deg, var(--primary), var(--accent));
            color: #fff;
            padding: 70px 20px;
            text-align: center;
        }

        .free-call-section h2 { font-family: "Playfair Display", serif; font-weight: 700; margin-bottom: 15px; }

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

        .btn-call-now:hover { background: var(--accent); color: #fff; transform: scale(1.03); }
        .btn-call-now i     { margin-right: 8px; }
        .btn-call-now span  { display: block; font-size: 0.9rem; color: #555; }
        .btn-call-now:hover span { color: #fff; }

        /* ========== WHY CHOOSE ========== */
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

        .choose-item:hover { transform: translateY(-5px); }
        .choose-item i { color: var(--primary); margin-right: 10px; }

        /* ========== FAQ ========== */
        .faq-section { padding: 60px 20px; background: #fffdf4; }

        .accordion-button { color: var(--primary); font-weight: 600; }
        .accordion-button:not(.collapsed) { background: rgba(255,215,0,0.2); }

        /* ========== CTA ========== */
        .cta-section {
            background: var(--primary);
            color: #fff;
            text-align: center;
            padding: 60px 20px;
        }

        .cta-section h3 { font-family: "Playfair Display", serif; font-weight: 700; margin-bottom: 15px; }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 991px) {
            .feature-grid  { grid-template-columns: repeat(2, 1fr); }
            .choose-grid   { grid-template-columns: 1fr; }
        }

        @media (max-width: 767px) {
            .feature-grid  { grid-template-columns: 1fr; }
            .pkg-cta       { flex-direction: column; }
            .btn-call, .btn-gold, .btn-outline-red { width: 100%; }
        }
    </style>
     <!-- ========== HERO ========== -->
    <section class="hero">
        <div class="hero-bg-slider" aria-hidden="true">
            <div class="bg-slide kashi-slide1"></div>
            <div class="bg-slide kashi-slide2"></div>
            <div class="bg-slide kashi-slide3"></div>
        </div>

        <div class="hero-card" role="region" aria-label="Kashi Vishwanath hero content">
            <h1 class="brand">Divya Dham Guides Association</h1>
            <h2 class="title">Kashi Vishwanath Jyotirlinga Darshan Booking & Varanasi Pilgrimage Assistance</h2>

            <p class="desc">
                Experience the divine blessings of Lord Shiva at the sacred <strong>Shri Kashi Vishwanath Jyotirlinga Temple</strong>, one of the twelve Jyotirlingas and the spiritual heart of <strong>Kashi (Varanasi), Uttar Pradesh</strong> — one of the world's oldest living cities. Devotees from across India and around the world visit this supremely sacred temple to seek the blessings of <strong>Vishwanath</strong>, the Lord of the Universe. Due to heavy pilgrimage crowds and temple rituals such as <strong>Vishesh Darshan, Rudrabhishek Puja, Garbhgriha Darshan, and Ganga Aarti at Dashashwamedh Ghat</strong>, managing darshan and temple coordination can sometimes be challenging. Divya Dham Guides provides reliable assistance for Kashi Vishwanath darshan, Vishesh Darshan guidance, temple rituals, Ganga Aarti experience, accommodation arrangements, and Varanasi ghat tours so that your pilgrimage remains peaceful, organized, and spiritually fulfilling.
            </p>

            <div class="hero-ctas">
                <a href="/contact" class="btn btn-gold">Book Kashi Vishwanath Darshan</a>
                <a href="/contact" class="btn btn-outline-red">Enquiry Now</a>
            </div>
        </div>
    </section>


    <!-- ========== SERVICES ========== -->
    <section class="container my-5">
        <div class="section-head">
            <h2>Our Kashi Vishwanath Darshan & Varanasi Pilgrimage Services</h2>
            <p>
                Divya Dham Guides provides complete assistance to make your visit to Kashi Vishwanath Jyotirlinga peaceful, organized, and spiritually fulfilling. From Vishesh Darshan guidance and Rudrabhishek puja arrangements to Ganga Aarti experience, accommodation coordination, and Varanasi ghat tours — our team manages everything carefully so devotees can focus fully on prayer and devotion.
            </p>
        </div>

        <div class="feature-grid">

            <div class="feature-card">
                <i class="fa-solid fa-gopuram"></i>
                <h5>Kashi Vishwanath Jyotirlinga Darshan Assistance</h5>
                <p>
                    Shri Kashi Vishwanath Temple is one of the most sacred Jyotirlingas of Lord Shiva and attracts lakhs of devotees every day. Many pilgrims require proper guidance regarding Vishesh Darshan, temple entry timings, Garbhgriha darshan, and ritual procedures. Our team helps devotees complete their darshan smoothly and peacefully.
                </p>
                <ul>
                    <li>Vishesh Darshan assistance and temple entry coordination</li>
                    <li>VIP and Garbhgriha Darshan guidance</li>
                    <li>Support for Rudrabhishek and Abhishek puja arrangements</li>
                    <li>Experienced local guide for temple rituals and aarti timings</li>
                </ul>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-hotel"></i>
                <h5>Varanasi Accommodation Booking Assistance</h5>
                <p>
                    A comfortable and clean stay is essential for a peaceful pilgrimage. Divya Dham Guides helps devotees arrange convenient accommodation near Kashi Vishwanath Temple and the ghats of Varanasi so your spiritual journey remains relaxed and well-organized.
                </p>
                <ul>
                    <li>Hotels and guesthouses near Kashi Vishwanath Corridor and Ghats</li>
                    <li>Clean and hygienic rooms for families, senior devotees, and groups</li>
                    <li>Budget to premium stay options available</li>
                    <li>Easy booking assistance based on your travel dates</li>
                    <li>Accommodation support for individuals, families, and pilgrimage groups</li>
                </ul>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-bus"></i>
                <h5>Varanasi Travel Support & Ghat Tour</h5>
                <ul>
                    <li>Pickup & drop from Varanasi Junction (Kashi), Manduadih Railway Station, and Varanasi Airport</li>
                    <li>Local transport for temple visits, Ganga ghat darshan, and Sarnath excursion</li>
                    <li>Ganga Aarti at Dashashwamedh Ghat — seating and guidance assistance</li>
                    <li>Private vehicle arrangements for families, senior citizens, and groups</li>
                    <li>Comfortable and reliable vehicles for a safe and peaceful pilgrimage journey</li>
                    <li>Our goal: make your Kashi Yatra well-planned, safe, and spiritually fulfilling</li>
                </ul>
            </div>

        </div>
    </section>


    <!-- ========== KASHI CAROUSEL ========== -->
    <section class="kashi-carousel" id="kashi-services">
        <div class="container">
            <h2 class="slider-heading">Kashi Vishwanath Special Rituals & Varanasi Spiritual Experiences</h2>

            <div class="carousel-wrapper">
                <button class="nav-btn prev" aria-label="Previous">&#10094;</button>

                <div class="carousel-track">

                    <!-- Card 1 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/kashi-vishwanath-darshan.jpg') }}" alt="Kashi Vishwanath Vishesh Darshan">
                        </div>
                        <div class="card-content">
                            <h3>Kashi Vishwanath Vishesh Darshan</h3>
                            <ul>
                                <li>Vishesh Darshan Assistance</li>
                                <li>VIP Entry Guidance</li>
                                <li>Rudrabhishek Arrangement</li>
                                <li>Puja Samagri Arrangement</li>
                                <li>Experienced Temple Guide</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Kashi Vishwanath Vishesh Darshan"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/ganga-aarti-dashashwamedh.jpg') }}" alt="VIP Ganga Aarti Dashashwamedh Ghat">
                        </div>
                        <div class="card-content">
                            <h3>VIP Ganga Aarti – Dashashwamedh Ghat</h3>
                            <ul>
                                <li>VIP Seating Arrangement</li>
                                <li>Reserved Boat for Aarti View</li>
                                <li>Priority Access to Ghat Area</li>
                                <li>Guided Spiritual Explanation</li>
                                <li>Photography Assistance</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book VIP Ganga Aarti at Dashashwamedh Ghat"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/kashi-ghat-boat-ride.jpg') }}" alt="Kashi Ghat Boat Ride Varanasi">
                        </div>
                        <div class="card-content">
                            <h3>Kashi Ghat Boat Ride</h3>
                            <ul>
                                <li>Sunrise / Sunset Boat Ride</li>
                                <li>Ghat Darshan Tour</li>
                                <li>Local Guide Explanation</li>
                                <li>Photography Assistance</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Kashi Ghat Boat Ride"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/pind-daan-kashi.jpg') }}" alt="Pind Daan Shraddh Rituals Kashi">
                        </div>
                        <div class="card-content">
                            <h3>Pind Daan & Shraddh Rituals in Kashi</h3>
                            <ul>
                                <li>Pandit Ji Arrangement</li>
                                <li>Complete Puja Samagri</li>
                                <li>Ritual Guidance</li>
                                <li>Sacred Ghat Arrangement</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Pind Daan and Shraddh Rituals in Kashi"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/rudrabhishek-kashi-vishwanath.jpg') }}" alt="Vishesh Rudrabhishek Kashi Vishwanath">
                        </div>
                        <div class="card-content">
                            <h3>Vishesh Rudrabhishek at Kashi Vishwanath</h3>
                            <ul>
                                <li>VIP Rudrabhishek Arrangement</li>
                                <li>Pandit Ji Assistance</li>
                                <li>Complete Puja Samagri</li>
                                <li>Vishesh Darshan Support</li>
                                <li>Spiritual Guidance</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Vishesh Rudrabhishek at Kashi Vishwanath"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/garbhgriha-darshan-kashi.jpg') }}" alt="Garbhgriha Darshan Kashi Vishwanath">
                        </div>
                        <div class="card-content">
                            <h3>Garbhgriha Darshan – Kashi Vishwanath</h3>
                            <ul>
                                <li>Garbhgriha Darshan Assistance</li>
                                <li>VIP Entry Guidance</li>
                                <li>Temple Ritual Support</li>
                                <li>Experienced Local Guide</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Garbhgriha Darshan at Kashi Vishwanath"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/kaal-bhairav-varanasi.jpg') }}" alt="Kaal Bhairav Temple Darshan Varanasi">
                        </div>
                        <div class="card-content">
                            <h3>Kaal Bhairav Temple Darshan</h3>
                            <ul>
                                <li>Vishesh Darshan Assistance</li>
                                <li>Special Puja Arrangement</li>
                                <li>Temple History Guidance</li>
                                <li>Comfortable Visit Support</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Kaal Bhairav Temple Darshan Varanasi"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/vishalakshi-mata-temple.jpg') }}" alt="Vishalakshi Mata Temple Darshan Kashi">
                        </div>
                        <div class="card-content">
                            <h3>Vishalakshi Mata Temple Darshan</h3>
                            <ul>
                                <li>Vishesh Darshan Assistance</li>
                                <li>Special Puja Arrangement</li>
                                <li>Temple Guide Support</li>
                                <li>Spiritual Guidance</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Vishalakshi Mata Temple Darshan Kashi"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 9 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/kashi-temple-darshan-tour.jpg') }}" alt="Kashi Temple Darshan Tour Varanasi">
                        </div>
                        <div class="card-content">
                            <h3>Kashi Temple Darshan Tour</h3>
                            <ul>
                                <li>Vishesh Darshan Assistance</li>
                                <li>Temple Tour Guide</li>
                                <li>Puja Arrangement</li>
                                <li>Local Transport Guidance</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Kashi Temple Darshan Tour"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 10 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/kashi-spiritual-tour.jpg') }}" alt="Kashi Spiritual Tour Varanasi">
                        </div>
                        <div class="card-content">
                            <h3>Kashi Spiritual Tour</h3>
                            <ul>
                                <li>Vishesh Temple Darshan</li>
                                <li>Ghat Sightseeing</li>
                                <li>Ganga Aarti Experience</li>
                                <li>Local Spiritual Guide</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Kashi Spiritual Tour Varanasi"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                    <!-- Card 11 -->
                    <div class="puja-card">
                        <div class="card-img">
                            <img src="{{ asset('images/sarnath-tour.jpg') }}" alt="Sarnath Tour from Varanasi">
                        </div>
                        <div class="card-content">
                            <h3>Sarnath Buddhist Tour</h3>
                            <ul>
                                <li>Sarnath Stupa & Museum Visit</li>
                                <li>Local Guide Explanation</li>
                                <li>Comfortable Transport</li>
                                <li>Half-day Tour from Varanasi</li>
                            </ul>
                            <a href="https://wa.me/919109507691?text=I want to book Sarnath Tour from Varanasi"
                            class="whatsapp-btn" target="_blank">Book Now</a>
                        </div>
                    </div>

                </div><!-- /.carousel-track -->

                <button class="nav-btn next" aria-label="Next">&#10095;</button>
            </div><!-- /.carousel-wrapper -->

            <p class="note mt-5">
                <strong>Note:</strong> Divya Dham Guides arranges all temple schedules, Bhog offerings, and Priest Guides
                for you —
                <a href="/contact" class="text-decoration-underline text-warning">Book / Enquire</a> or Call:
                <a href="tel:+919109507691" class="text-warning">+91 9109507691</a>
            </p>

        </div>
    </section>


    <!-- ========== KASHI ABOUT ========== -->
    <section class="kashi-about" id="kashi-about">
        <div class="container">
            <div class="about-card">

                <h2 class="about-main-heading">Kashi Vishwanath Jyotirlinga – Darshan & Puja Assistance</h2>
                <h4 class="about-sub-heading">Divya Dham Guides Association</h4>

                <p>
                    <strong>Shri Kashi Vishwanath Jyotirlinga</strong> is one of the most sacred among the
                    <span class="highlight">12 Jyotirlingas of Lord Shiva</span>, located in the holy city of
                    <strong>Kashi (Varanasi), Uttar Pradesh</strong>. Kashi is believed to be the eternal city of Lord Shiva himself — the city that grants <span class="highlight">Mukti (liberation)</span> to all who die here and seek His blessings. Devotees from across India and the world visit this supreme pilgrimage destination to receive the <span class="highlight">divine blessings of Vishwanath</span> — the Lord of the Universe.
                </p>

                <p>
                    Situated on the sacred banks of the <span class="highlight">Ganga River</span>, Varanasi is one of the oldest continuously inhabited cities in the world. The famous <span class="highlight">Kashi Vishwanath Corridor</span> now offers devotees a grander and more organized darshan experience with direct views of the Ganga from the temple premises. The divine <span class="highlight">Ganga Aarti at Dashashwamedh Ghat</span> every evening is one of the most spiritually powerful experiences a devotee can witness.
                </p>

                <p>
                    At <strong>Divya Dham Guides Association</strong>, we provide
                    <span class="highlight">Kashi Vishwanath Vishesh Darshan Assistance</span>,
                    <span class="highlight">Rudrabhishek & Abhishek Puja Booking</span>,
                    <span class="highlight">Ganga Aarti VIP Experience</span>,
                    <span class="highlight">Temple Guide Services</span>, and
                    <span class="highlight">Varanasi Pilgrimage Travel Support</span>
                    so that your visit remains peaceful, organized, and spiritually fulfilling.
                </p>

                <p>
                    Varanasi is also home to numerous sacred temples including
                    <span class="highlight">Kaal Bhairav Temple</span>,
                    <span class="highlight">Vishalakshi Mata Temple</span>,
                    <span class="highlight">Annapurna Devi Mandir</span>,
                    <span class="highlight">Sankat Mochan Hanuman Temple</span>, and
                    <span class="highlight">Tulsi Manas Temple</span>.
                    Many devotees also visit nearby <span class="highlight">Sarnath</span> — the sacred site where Lord Buddha gave his first sermon. Our team helps you plan all these visits within a single well-organized Kashi Yatra.
                </p>

                <div class="about-cta">
                    <a href="https://divyadhamguides.com/blogs" class="explore-btn">Explore More</a>
                </div>

            </div>
        </div>
    </section>


    <!-- ========== FREE CALL ========== -->
    <section class="free-call-section" id="kashi-contact">
        <div class="container text-center">
            <h2>Need Help Planning Your Kashi Vishwanath Yatra?</h2>
            <p>
                Not sure which Kashi Vishwanath darshan or Varanasi pilgrimage package is right for you?
                Our team will guide you with complete details about Vishesh Darshan, Rudrabhishek puja,
                Ganga Aarti experience, Garbhgriha darshan, and Varanasi ghat tour options —
                <strong>in just a quick 2–3 minute call!</strong>
            </p>
            <a href="tel:+919109507691" class="btn-call-now">
                <i class="fa-solid fa-phone-volume"></i> Call Now for Free Consultation
                <span>📞 +91 9109507691</span>
            </a>
        </div>
    </section>


    <!-- ========== WHY CHOOSE ========== -->
    <section class="choose-section" id="kashi-why-choose">
        <div class="container">
            <div class="section-head">
                <h2>Why Choose Divya Dham Guides</h2>
            </div>
            <div class="choose-grid">
                <div class="choose-item"><i class="fa-solid fa-headset"></i> 24×7 Support for devotees during Kashi Yatra</div>
                <div class="choose-item"><i class="fa-solid fa-ticket"></i> Hassle-free Kashi Vishwanath Vishesh Darshan assistance</div>
                <div class="choose-item"><i class="fa-solid fa-user-tie"></i> Experienced local pilgrimage guides in Varanasi</div>
                <div class="choose-item"><i class="fa-solid fa-hotel"></i> Clean accommodation & comfortable travel options near Ghats</div>
                <div class="choose-item"><i class="fa-solid fa-route"></i> Customized Kashi, Ayodhya & Prayagraj pilgrimage packages</div>
            </div>
        </div>
    </section>


    <!-- ========== FAQ ========== -->
    <section class="faq-section py-5 bg-light" id="kashi-faq">
        <div class="container">
            <div class="section-head text-center mb-4">
                <h2 class="fw-bold text-dark">Frequently Asked Questions</h2>
                <p class="text-muted">Quick answers to common queries about Kashi Vishwanath Darshan & Varanasi Pilgrimage Services.</p>
            </div>

            <div class="accordion" id="kashiFaqAccordion">

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="kashiFaqHeading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kashiFaq1" aria-expanded="true">
                            1. How can I plan Kashi Vishwanath Jyotirlinga Darshan?
                        </button>
                    </h2>
                    <div id="kashiFaq1" class="accordion-collapse collapse show" data-bs-parent="#kashiFaqAccordion">
                        <div class="accordion-body">
                            You can contact Divya Dham Guides for complete assistance in planning your Kashi Vishwanath darshan. Our team helps with Vishesh Darshan guidance, temple entry coordination, Ganga Aarti experience, travel planning, and accommodation support for a smooth and peaceful Kashi Yatra.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="kashiFaqHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kashiFaq2" aria-expanded="false">
                            2. What is Vishesh Darshan at Kashi Vishwanath Temple?
                        </button>
                    </h2>
                    <div id="kashiFaq2" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                        <div class="accordion-body">
                            Vishesh Darshan is a special darshan pass available at Kashi Vishwanath Temple that allows devotees to have a closer and more organized darshan of the Jyotirlinga without waiting in long general queues. Divya Dham Guides assists devotees with the Vishesh Darshan procedure, timing, and entry guidance.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="kashiFaqHeading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kashiFaq3" aria-expanded="false">
                            3. What rituals can be performed at Kashi Vishwanath Temple?
                        </button>
                    </h2>
                    <div id="kashiFaq3" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                        <div class="accordion-body">
                            Devotees commonly perform Rudrabhishek, Abhishek, Sahastra Archana, and Garbhgriha Darshan at Kashi Vishwanath Temple. Pind Daan and Shraddh rituals can also be performed at the sacred ghats of Varanasi. Our team guides you on all procedures and coordinates the arrangements respectfully.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="kashiFaqHeading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kashiFaq4" aria-expanded="false">
                            4. Which temples can be visited along with Kashi Vishwanath?
                        </button>
                    </h2>
                    <div id="kashiFaq4" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                        <div class="accordion-body">
                            Devotees often visit Kaal Bhairav Temple, Vishalakshi Mata Temple, Annapurna Devi Mandir, Sankat Mochan Hanuman Temple, Tulsi Manas Temple, and Durga Kund Mandir along with Kashi Vishwanath Jyotirlinga. A visit to Sarnath for the Buddhist sacred site is also popular. Our team helps plan all these visits in a single organized Kashi Yatra.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="kashiFaqHeading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kashiFaq5" aria-expanded="false">
                            5. What is the Ganga Aarti at Dashashwamedh Ghat?
                        </button>
                    </h2>
                    <div id="kashiFaq5" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                        <div class="accordion-body">
                            The Ganga Aarti at Dashashwamedh Ghat in Varanasi is a magnificent and spiritually powerful ritual performed every evening on the banks of the Ganga River. It is one of the most sacred and visually stunning experiences in India, attended by thousands of devotees and pilgrims daily. We assist with VIP seating, reserved boat arrangements, and guided experience.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="kashiFaqHeading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kashiFaq6" aria-expanded="false">
                            6. Can Kashi, Ayodhya, and Prayagraj be visited together?
                        </button>
                    </h2>
                    <div id="kashiFaq6" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                        <div class="accordion-body">
                            Yes, many devotees visit Kashi Vishwanath in Varanasi, Ram Mandir in Ayodhya, and Triveni Sangam in Prayagraj together as part of a complete Uttar Pradesh pilgrimage. All three sacred cities are well connected and can be covered in a single planned spiritual journey. Divya Dham Guides offers customized packages for this combined yatra.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ========== CTA ========== -->
    <section class="cta-section" id="kashi-cta">
        <h3>Ready to plan your Kashi Vishwanath Jyotirlinga Yatra?</h3>
        <p>Vishesh Darshan guidance, Rudrabhishek puja assistance, Ganga Aarti experience & complete Varanasi pilgrimage packages available.</p>
        <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
            <a href="/contact" class="btn btn-gold">Plan Your Trip</a>
            <a href="tel:+919109507691" class="btn btn-outline-light">Call for Assistance</a>
        </div>
    </section>


    <!-- ========== KASHI CAROUSEL JAVASCRIPT (INFINITE AUTO-SLIDE) ========== -->
    <script>
    (function () {
        const track   = document.querySelector('.kashi-carousel .carousel-track');
        const wrapper = document.querySelector('.kashi-carousel .carousel-wrapper');
        const prevBtn = document.querySelector('.kashi-carousel .prev');
        const nextBtn = document.querySelector('.kashi-carousel .next');

        /* 1. Collect original cards & clone them */
        const originals = Array.from(track.querySelectorAll('.puja-card'));
        const total     = originals.length;

        /* Append clones at END */
        originals.forEach(card => {
            const c = card.cloneNode(true);
            c.dataset.clone = 'end';
            track.appendChild(c);
        });

        /* Prepend clones at START (reverse insert keeps correct order) */
        [...originals].reverse().forEach(card => {
            const c = card.cloneNode(true);
            c.dataset.clone = 'start';
            track.insertBefore(c, track.firstChild);
        });

        /*
        Final layout:
        [0 … total-1]         → START clones
        [total … 2*total-1]   → REAL cards   ← always start here
        [2*total … 3*total-1] → END clones
        */

        const allCards   = Array.from(track.querySelectorAll('.puja-card'));
        let currentIndex = total;
        let cardWidth    = 0;
        let busy         = false;
        let autoTimer    = null;

        /* 2. Calculate card width (card + left/right margins = 30px) */
        function calcWidth() {
            cardWidth = allCards[0].getBoundingClientRect().width + 30;
        }

        /* 3. Move to index — animated or instant silent jump */
        function goTo(idx, animate) {
            if (animate) {
                track.style.transition = 'transform 0.55s ease-in-out';
            } else {
                track.style.transition = 'none';
                track.getBoundingClientRect(); /* force reflow */
            }
            track.style.transform = `translateX(-${cardWidth * idx}px)`;
            currentIndex = idx;
        }

        /* 4. Init — wait two frames so cards are fully painted */
        function init() {
            calcWidth();
            goTo(total, false);
        }
        requestAnimationFrame(() => requestAnimationFrame(init));

        /* Recalculate on resize */
        window.addEventListener('resize', () => {
            calcWidth();
            goTo(currentIndex, false);
        });

        /* 5. Navigation functions */
        function next() {
            if (busy) return;
            busy = true;
            goTo(currentIndex + 1, true);
        }

        function prev() {
            if (busy) return;
            busy = true;
            goTo(currentIndex - 1, true);
        }

        nextBtn.addEventListener('click', next);
        prevBtn.addEventListener('click', prev);

        /* 6. Seamless loop — fires only for transform property */
        track.addEventListener('transitionend', (e) => {
            if (e.propertyName !== 'transform') return;

            if (currentIndex >= total * 2) {
                goTo(currentIndex - total, false);
            } else if (currentIndex < total) {
                goTo(currentIndex + total, false);
            }

            requestAnimationFrame(() => { busy = false; });
        });

        /* 7. Auto-slide every 2 seconds */
        function startAuto() {
            autoTimer = setInterval(() => {
                busy = false; /* safety reset */
                next();
            }, 2000);
        }

        function stopAuto() { clearInterval(autoTimer); }

        startAuto();
        wrapper.addEventListener('mouseenter', stopAuto);
        wrapper.addEventListener('mouseleave', startAuto);

    })();
    </script>
@endsection