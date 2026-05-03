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

               .hamburger {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 6px;
            flex-direction: column;
            gap: 5px;
            z-index: 2;
        }

        .hamburger span { display: block; width: 26px; height: 2.5px; background: #111; border-radius: 2px; transition: all 0.3s ease; }
        .hamburger.open span:nth-child(1) { transform: translateY(7.5px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; }
        .hamburger.open span:nth-child(3) { transform: translateY(-7.5px) rotate(-45deg); }

        @media (max-width: 991px) {
            .hamburger { display: flex; }

            .header-nav {
                display: none;
                position: fixed;
                top: 70px;
                left: 0;
                right: 0;
                bottom: 0;
                background: #fff;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                padding: 6px 0 30px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.12);
                border-top: 1px solid #eee;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
                z-index: 9998;
            }

            .header-nav.open { display: flex; }

            .header-nav > li > a,
            .header-nav > li > button {
                padding: 14px 22px;
                border-radius: 0;
                justify-content: space-between;
                font-size: 0.96rem;
                border-bottom: 1px solid #f2f2f2;
                width: 100%;
            }

            .header-nav > li > a.active { background: #fff5f5; color: var(--primary); }

            .dropdown-menu-custom {
                position: static;
                transform: none;
                box-shadow: none;
                border: none;
                border-radius: 0;
                padding: 0;
                border-top: 1px solid #f0e0e0;
                background: #fff8f8;
                min-width: unset;
            }

            .dropdown-menu-custom a { padding: 12px 36px; border-bottom: 1px solid #f5e5e5; font-size: 0.9rem; }
        }

        @media (max-width: 375px) {
            .header-logo img { height: 44px; }
            .header-inner { padding: 0 14px; }
        }

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

        .back-to-home-top {
            position: absolute;
            top: 14px;
            left: 14px;
            z-index: 9999;
            background: #7a0000;
            color: #fff;
            font-weight: 600;
            font-size: 11px;
            padding: 5px 12px;
            border-radius: 20px;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.35);
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: background 0.25s ease;
        }
        .back-to-home-top:hover { background: #b30000; color: #fff; }

        .hero-bg-slider { position: absolute; inset: 0; z-index: 0; pointer-events: none; }

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
            .hero-card:hover { transform: translateY(-6px); box-shadow: 0 28px 70px rgba(0,0,0,0.6); }
        }

        .brand { margin: 0; color: var(--gold) !important; font-weight: 700; font-size: 1.25rem; letter-spacing: 0.6px; text-shadow: 0 4px 14px rgba(0,0,0,0.7); }
        .title { margin: 6px 0 18px; font-size: clamp(26px, 4.6vw, 44px); font-weight: 800; color: #fff !important; text-shadow: 0 3px 12px rgba(0,0,0,0.7); animation: titleEntrance .9s ease both; }
        .desc  { margin: 8px auto 18px; color: #fff; font-size: clamp(14px, 1.4vw, 17px); line-height: 1.6; max-width: 920px; opacity: 0.98; text-shadow: 0 2px 10px rgba(0,0,0,0.45); }

        .hero-ctas { margin-top: 6px; display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }

        .btn { display: inline-block; font-weight: 700; padding: 10px 22px; border-radius: 30px; text-decoration: none; transition: transform .25s ease; }
        .btn-gold { background: linear-gradient(90deg, var(--gold), #ffd84d); color: #111; box-shadow: 0 10px 30px rgba(0,0,0,0.25); border: none; }
        .btn-gold:hover { background: linear-gradient(90deg, #ffb300, #ffe45c); color: var(--primary) !important; transform: translateY(-3px); }
        .btn-outline-red { background: transparent; color: #fff; border: 1.6px solid #fff; }
        .btn-outline-red:hover { background: var(--primary); color: #fff; }

        @keyframes titleEntrance {
            0%   { opacity: 0; transform: translateY(18px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 980px) {
            .hero { padding: 44px 12px; min-height: 68vh; }
            .hero-card { padding: 28px; }
            .title { font-size: clamp(22px, 6.6vw, 34px); }
        }

        @media (max-width: 520px) {
            .hero { padding: 56px 12px 48px; min-height: auto; align-items: flex-start; }
            .hero-card { width: 96%; padding: 18px; }
            .title { font-size: 20px; line-height: 1.08; }
        }

        @media (prefers-reduced-motion: reduce) {
            .bg-slide, .hero-card, .title, .desc { animation: none !important; transition: none !important; transform: none !important; }
            .bg-slide { opacity: 1; }
        }

        /* ========== SECTION HEAD ========== */
        .section-head { text-align: center; margin-bottom: 15px; }
        .section-head h2 { color: var(--primary); font-family: "Playfair Display", serif; font-weight: 700; }
        .section-head p  { color: #555; font-size: 0.98rem; }

        /* ========== FEATURE GRID ========== */
        .feature-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px; }
        .feature-card { background: #fff8e6; border: 2px solid rgba(255,215,0,0.4); border-radius: 12px; padding: 20px; text-align: center; transition: transform .3s ease, box-shadow .3s ease; }
        .feature-card:hover { transform: translateY(-6px); box-shadow: 0 8px 20px rgba(244,66,66,0.4); }
        .feature-card i  { color: var(--primary); font-size: 2rem; margin-bottom: 10px; }
        .feature-card h5 { color: var(--primary); font-weight: 700; }
        .feature-card p  { color: #333; font-size: 0.95rem; }
        .feature-card ul { text-align: left !important; margin-left: 0; padding-left: 18px; }

        /* ========== KASHI CAROUSEL ========== */
        .kashi-carousel { padding: 80px 0; background: linear-gradient(135deg, #2b0000, #5a0000); }
        .kashi-carousel .slider-heading { text-align: center; color: #FFD700; font-weight: 700; margin-bottom: 50px; }
        .kashi-carousel .carousel-wrapper { position: relative; overflow: hidden; padding: 0 50px; }

        @media (max-width: 600px) {
            .kashi-carousel .carousel-wrapper { padding: 0 40px; }
        }

        .kashi-carousel .carousel-track { display: flex; will-change: transform; }

        .kashi-carousel .puja-card {
            flex: 0 0 320px;
            width: 320px;
            margin: 0 12px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        }

        @media (max-width: 600px) {
            .kashi-carousel .puja-card { flex: 0 0 calc(100vw - 80px); width: calc(100vw - 80px); margin: 0 8px; }
        }

        .kashi-carousel .card-img img { width: 100%; height: 240px; object-fit: cover; display: block; }
        .kashi-carousel .card-content { padding: 20px; background: #fff; }
        .kashi-carousel .card-content h3 { color: #b30000; font-size: 18px; margin-bottom: 10px; text-align: left; }
        .kashi-carousel .card-content ul { font-size: 14px; padding-left: 18px; margin-bottom: 15px; text-align: left; }

        .kashi-carousel .whatsapp-btn { display: inline-block; background: #25D366; color: #fff; padding: 8px 16px; border-radius: 30px; font-size: 14px; text-decoration: none; transition: 0.3s ease; }
        .kashi-carousel .whatsapp-btn:hover { background: #1ebe5d; }

        .kashi-carousel .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #FFD700;
            border: none;
            font-size: 22px;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border-radius: 50%;
            z-index: 10;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }

        .kashi-carousel .nav-btn:hover { background: #ffc200; }
        .kashi-carousel .prev { left: 6px; }
        .kashi-carousel .next { right: 6px; }
        .kashi-carousel .note { font-size: 0.95rem; color: #ccc; text-align: center; }

        /* Note attractive buttons (same as baglamukhi/ayodhya) */
        .note-btn { display: inline-flex; align-items: center; gap: 6px; font-weight: 700; font-size: 0.88rem; padding: 7px 16px; border-radius: 25px; text-decoration: none; transition: all 0.25s ease; white-space: nowrap; }
        .note-btn-enquire { background: #FFD700; color: #7a0000; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-enquire:hover { background: #ffb300; color: #5a0000; transform: translateY(-2px); }
        .note-btn-call { background: #25D366; color: #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-call:hover { background: #1ebe5d; color: #fff; transform: translateY(-2px); }
        @media (max-width: 480px) { .note-btn { font-size: 0.82rem; padding: 6px 13px; } }

        /* ========== KASHI ABOUT ========== */
        .kashi-about { padding: 100px 20px; background: linear-gradient(135deg, #3b0000, #6b0000); display: flex; justify-content: center; }
        .kashi-about .container { max-width: 1000px; margin: auto; }
        .kashi-about .about-card { background: #fff; padding: 60px 50px; border-radius: 20px; box-shadow: 0 25px 60px rgba(0,0,0,0.4); text-align: center; }
        .kashi-about .about-main-heading { font-size: 32px; color: #7a0000; margin-bottom: 10px; }
        .kashi-about .about-sub-heading  { font-size: 18px; color: #b8860b; margin-bottom: 30px; }
        .kashi-about .about-card p { font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px; }
        .kashi-about .highlight { color: #b30000; font-weight: 600; }
        .kashi-about .about-cta { margin-top: 40px; }
        .kashi-about .explore-btn { background: linear-gradient(45deg, #FFD700, #ffcc00); color: #7a0000; padding: 14px 35px; border-radius: 40px; text-decoration: none; font-weight: 600; font-size: 16px; transition: 0.3s ease; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
        .kashi-about .explore-btn:hover { background: #b30000; color: #fff; transform: translateY(-3px); }

        @media (max-width: 768px) {
            .kashi-about .about-card { padding: 40px 25px; }
            .kashi-about .about-main-heading { font-size: 24px; }
        }

        /* ========== FREE CALL ========== */
        .free-call-section { background: linear-gradient(90deg, var(--primary), var(--accent)); color: #fff; padding: 70px 20px; text-align: center; }
        .free-call-section h2 { font-family: "Playfair Display", serif; font-weight: 700; margin-bottom: 15px; }
        .free-call-section p { color: #fff; font-size: 1.05rem; max-width: 850px; margin: 0 auto 25px; line-height: 1.7; }
        .btn-call-now { background: #fff; color: var(--primary); border-radius: 12px; padding: 14px 35px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-block; box-shadow: 0 4px 10px rgba(0,0,0,0.2); transition: all 0.3s ease; text-align: center; }
        .btn-call-now:hover { background: var(--accent); color: #fff; transform: scale(1.03); }
        .btn-call-now i { margin-right: 8px; }
        .btn-call-now span { display: block; font-size: 0.9rem; color: #555; }
        .btn-call-now:hover span { color: #fff; }

        /* ========== WHY CHOOSE ========== */
        .choose-section { background: linear-gradient(0deg, rgba(255,215,0,0.15), #fff); padding: 60px 20px; }
        .choose-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 30px; }
        .choose-item { background: #fff; border-left: 5px solid var(--primary); padding: 20px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: transform .3s ease; }
        .choose-item:hover { transform: translateY(-5px); }
        .choose-item i { color: var(--primary); margin-right: 10px; }

        /* ========== FAQ ========== */
        .faq-section { padding: 60px 20px; background: #fffdf4; }
        .accordion-button { color: var(--primary); font-weight: 600; }
        .accordion-button:not(.collapsed) { background: rgba(255,215,0,0.2); }

        /* ========== CTA ========== */
        .cta-section { background: var(--primary); color: #fff; text-align: center; padding: 60px 20px; }
        .cta-section h3 { font-family: "Playfair Display", serif; font-weight: 700; margin-bottom: 15px; }

        /* ========== DESTINATION CARDS ========== */
        .destination-section { padding: 60px 0; background: #f8f9fa; }
        .destination-card { border-radius: 15px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease; position: relative; background: #fff; }
        .destination-card:hover { transform: translateY(-8px); box-shadow: 0 12px 35px rgba(0,0,0,0.15); }
        .destination-card img { width: 100%; height: 220px; object-fit: cover; }
        .destination-card .card-content { padding: 20px; }
        .card-title { font-size: 20px; font-weight: 700; color: #d32f2f; margin-bottom: 10px; }
        .card-text  { color: #555; font-size: 14px; margin-bottom: 15px; }
        .btn-book { display: inline-block; background: #d32f2f; color: #fff; padding: 8px 18px; border-radius: 25px; font-size: 14px; text-decoration: none; transition: 0.3s; position: relative; z-index: 2; }
        .btn-book:hover { background: #b71c1c; }
        .stretched-link { position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1; }

        /* ========== BACK TO HOME ========== */
        .back-home-section { background: #1a0000; padding: 28px 20px; text-align: center; }
        .back-home-section a { display: inline-flex; align-items: center; gap: 8px; background: #7a0000; color: #fff; font-weight: 700; font-size: 14px; padding: 10px 26px; border-radius: 30px; text-decoration: none; box-shadow: 0 4px 14px rgba(0,0,0,0.35); transition: background 0.25s ease, transform 0.25s ease; }
        .back-home-section a:hover { background: #b30000; transform: translateY(-2px); }
    </style>


<!-- ========== HERO ========== -->
<section class="hero">
    <a href="https://divyadhamguides.com/" class="back-to-home-top">
        <i class="fa-solid fa-house"></i> Back to Home
    </a>

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
        <p>Divya Dham Guides provides complete assistance to make your visit to Kashi Vishwanath Jyotirlinga peaceful, organized, and spiritually fulfilling. From Vishesh Darshan guidance and Rudrabhishek puja arrangements to Ganga Aarti experience, accommodation coordination, and Varanasi ghat tours — our team manages everything carefully so devotees can focus fully on prayer and devotion.</p>
    </div>

    <div class="feature-grid">
        <div class="feature-card">
            <i class="fa-solid fa-gopuram"></i>
            <h5>Kashi Vishwanath Jyotirlinga Darshan Assistance</h5>
            <p>Shri Kashi Vishwanath Temple is one of the most sacred Jyotirlingas of Lord Shiva and attracts lakhs of devotees every day. Many pilgrims require proper guidance regarding Vishesh Darshan, temple entry timings, Garbhgriha darshan, and ritual procedures.</p>
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
            <p>A comfortable and clean stay is essential for a peaceful pilgrimage. Divya Dham Guides helps devotees arrange convenient accommodation near Kashi Vishwanath Temple and the ghats of Varanasi so your spiritual journey remains relaxed and well-organized.</p>
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

                <div class="puja-card">
                    <div class="card-img"><img src="images/kashi-vishwanath-darshan.jpg" alt="Kashi Vishwanath Vishesh Darshan"></div>
                    <div class="card-content">
                        <h3>Kashi Vishwanath Vishesh Darshan</h3>
                        <ul><li>Vishesh Darshan Assistance</li><li>VIP Entry Guidance</li><li>Rudrabhishek Arrangement</li><li>Puja Samagri Arrangement</li><li>Experienced Temple Guide</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Kashi Vishwanath Vishesh Darshan" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="images/ganga-aarti-dashashwamedh.jpg" alt="VIP Ganga Aarti Dashashwamedh Ghat"></div>
                    <div class="card-content">
                        <h3>VIP Ganga Aarti – Dashashwamedh Ghat</h3>
                        <ul><li>VIP Seating Arrangement</li><li>Reserved Boat for Aarti View</li><li>Priority Access to Ghat Area</li><li>Guided Spiritual Explanation</li><li>Photography Assistance</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book VIP Ganga Aarti at Dashashwamedh Ghat" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="images/kashi-ghat-boat-ride.jpg" alt="Kashi Ghat Boat Ride Varanasi"></div>
                    <div class="card-content">
                        <h3>Kashi Ghat Boat Ride</h3>
                        <ul><li>Sunrise / Sunset Boat Ride</li><li>Ghat Darshan Tour</li><li>Local Guide Explanation</li><li>Photography Assistance</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Kashi Ghat Boat Ride" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="images/pind-daan-kashi.jpg" alt="Pind Daan Shraddh Rituals Kashi"></div>
                    <div class="card-content">
                        <h3>Pind Daan & Shraddh Rituals in Kashi</h3>
                        <ul><li>Pandit Ji Arrangement</li><li>Complete Puja Samagri</li><li>Ritual Guidance</li><li>Sacred Ghat Arrangement</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Pind Daan and Shraddh Rituals in Kashi" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="images/rudrabhishek-kashi-vishwanath.jpg" alt="Vishesh Rudrabhishek Kashi Vishwanath"></div>
                    <div class="card-content">
                        <h3>Vishesh Rudrabhishek at Kashi Vishwanath</h3>
                        <ul><li>VIP Rudrabhishek Arrangement</li><li>Pandit Ji Assistance</li><li>Complete Puja Samagri</li><li>Vishesh Darshan Support</li><li>Spiritual Guidance</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Vishesh Rudrabhishek at Kashi Vishwanath" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="images/kaal-bhairav-varanasi.jpg" alt="Kaal Bhairav Temple Darshan Varanasi"></div>
                    <div class="card-content">
                        <h3>Kaal Bhairav Temple Darshan</h3>
                        <ul><li>Vishesh Darshan Assistance</li><li>Special Puja Arrangement</li><li>Temple History Guidance</li><li>Comfortable Visit Support</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Kaal Bhairav Temple Darshan Varanasi" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="images/kashi-temple-darshan-tour.jpg" alt="Kashi Temple Darshan Tour Varanasi"></div>
                    <div class="card-content">
                        <h3>Kashi Temple Darshan Tour</h3>
                        <ul><li>Vishesh Darshan Assistance</li><li>Temple Tour Guide</li><li>Puja Arrangement</li><li>Local Transport Guidance</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Kashi Temple Darshan Tour" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

            </div><!-- /.carousel-track -->
            <button class="nav-btn next" aria-label="Next">&#10095;</button>
        </div><!-- /.carousel-wrapper -->

        <p class="note mt-5">
            <strong>Note:</strong> Divya Dham Guides arranges all temple schedules, Bhog offerings, and Priest Guides for you —
            <a href="/contact" class="note-btn note-btn-enquire ms-1"><i class="fa-solid fa-calendar-check"></i> Book / Enquire</a>
            &nbsp;or&nbsp;
            <a href="tel:+919109507691" class="note-btn note-btn-call"><i class="fa-solid fa-phone"></i> +91 9109507691</a>
        </p>
    </div>
</section>


<!-- ========== KASHI ABOUT ========== -->
<section class="kashi-about" id="kashi-about">
    <div class="container">
        <div class="about-card">
            <h2 class="about-main-heading">Kashi Vishwanath Jyotirlinga – Darshan & Puja Assistance</h2>
            <h4 class="about-sub-heading">Divya Dham Guides Association</h4>

            <p><strong>Shri Kashi Vishwanath Jyotirlinga</strong> is one of the most sacred among the <span class="highlight">12 Jyotirlingas of Lord Shiva</span>, located in the holy city of <strong>Kashi (Varanasi), Uttar Pradesh</strong>. Kashi is believed to be the eternal city of Lord Shiva himself — the city that grants <span class="highlight">Mukti (liberation)</span> to all who die here and seek His blessings. Devotees from across India and the world visit this supreme pilgrimage destination to receive the <span class="highlight">divine blessings of Vishwanath</span> — the Lord of the Universe.</p>

            <p>Situated on the sacred banks of the <span class="highlight">Ganga River</span>, Varanasi is one of the oldest continuously inhabited cities in the world. The famous <span class="highlight">Kashi Vishwanath Corridor</span> now offers devotees a grander and more organized darshan experience with direct views of the Ganga from the temple premises. The divine <span class="highlight">Ganga Aarti at Dashashwamedh Ghat</span> every evening is one of the most spiritually powerful experiences a devotee can witness.</p>

            <p>At <strong>Divya Dham Guides Association</strong>, we provide <span class="highlight">Kashi Vishwanath Vishesh Darshan Assistance</span>, <span class="highlight">Rudrabhishek & Abhishek Puja Booking</span>, <span class="highlight">Ganga Aarti VIP Experience</span>, <span class="highlight">Temple Guide Services</span>, and <span class="highlight">Varanasi Pilgrimage Travel Support</span> so that your visit remains peaceful, organized, and spiritually fulfilling.</p>

            <p>Varanasi is also home to numerous sacred temples including <span class="highlight">Kaal Bhairav Temple</span>, <span class="highlight">Vishalakshi Mata Temple</span>, <span class="highlight">Annapurna Devi Mandir</span>, <span class="highlight">Sankat Mochan Hanuman Temple</span>, and <span class="highlight">Tulsi Manas Temple</span>. Many devotees also visit nearby <span class="highlight">Sarnath</span> — the sacred site where Lord Buddha gave his first sermon. Our team helps you plan all these visits within a single well-organized Kashi Yatra.</p>

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
        <p>Not sure which Kashi Vishwanath darshan or Varanasi pilgrimage package is right for you? Our team will guide you with complete details about Vishesh Darshan, Rudrabhishek puja, Ganga Aarti experience, Garbhgriha darshan, and Varanasi ghat tour options — <strong>in just a quick 2–3 minute call!</strong></p>
        <a href="tel:+919109507691" class="btn-call-now">
            <i class="fa-solid fa-phone-volume"></i> Call Now for Free Consultation
            <span>📞 +91 9109507691</span>
        </a>
    </div>
</section>


<!-- ========== WHY CHOOSE ========== -->
<section class="choose-section" id="kashi-why-choose">
    <div class="container">
        <div class="section-head"><h2>Why Choose Divya Dham Guides</h2></div>
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
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#kashiFaq1" aria-expanded="true">
                        1. How can I plan Kashi Vishwanath Jyotirlinga Darshan?
                    </button>
                </h2>
                <div id="kashiFaq1" class="accordion-collapse collapse show" data-bs-parent="#kashiFaqAccordion">
                    <div class="accordion-body">You can contact Divya Dham Guides for complete assistance in planning your Kashi Vishwanath darshan. Our team helps with Vishesh Darshan guidance, temple entry coordination, Ganga Aarti experience, travel planning, and accommodation support for a smooth and peaceful Kashi Yatra.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kashiFaq2">
                        2. What is Vishesh Darshan at Kashi Vishwanath Temple?
                    </button>
                </h2>
                <div id="kashiFaq2" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                    <div class="accordion-body">Vishesh Darshan is a special darshan pass available at Kashi Vishwanath Temple that allows devotees to have a closer and more organized darshan of the Jyotirlinga without waiting in long general queues. Divya Dham Guides assists devotees with the Vishesh Darshan procedure, timing, and entry guidance.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kashiFaq3">
                        3. What rituals can be performed at Kashi Vishwanath Temple?
                    </button>
                </h2>
                <div id="kashiFaq3" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                    <div class="accordion-body">Devotees commonly perform Rudrabhishek, Abhishek, Sahastra Archana, and Garbhgriha Darshan at Kashi Vishwanath Temple. Pind Daan and Shraddh rituals can also be performed at the sacred ghats of Varanasi. Our team guides you on all procedures and coordinates the arrangements respectfully.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kashiFaq4">
                        4. Which temples can be visited along with Kashi Vishwanath?
                    </button>
                </h2>
                <div id="kashiFaq4" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                    <div class="accordion-body">Devotees often visit Kaal Bhairav Temple, Vishalakshi Mata Temple, Annapurna Devi Mandir, Sankat Mochan Hanuman Temple, Tulsi Manas Temple, and Durga Kund Mandir along with Kashi Vishwanath Jyotirlinga. A visit to Sarnath for the Buddhist sacred site is also popular. Our team helps plan all these visits in a single organized Kashi Yatra.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kashiFaq5">
                        5. What is the Ganga Aarti at Dashashwamedh Ghat?
                    </button>
                </h2>
                <div id="kashiFaq5" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                    <div class="accordion-body">The Ganga Aarti at Dashashwamedh Ghat in Varanasi is a magnificent and spiritually powerful ritual performed every evening on the banks of the Ganga River. It is one of the most sacred and visually stunning experiences in India, attended by thousands of devotees and pilgrims daily. We assist with VIP seating, reserved boat arrangements, and guided experience.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kashiFaq6">
                        6. Can Kashi, Ayodhya, and Prayagraj be visited together?
                    </button>
                </h2>
                <div id="kashiFaq6" class="accordion-collapse collapse" data-bs-parent="#kashiFaqAccordion">
                    <div class="accordion-body">Yes, many devotees visit Kashi Vishwanath in Varanasi, Ram Mandir in Ayodhya, and Triveni Sangam in Prayagraj together as part of a complete Uttar Pradesh pilgrimage. All three sacred cities are well connected and can be covered in a single planned spiritual journey. Divya Dham Guides offers customized packages for this combined yatra.</div>
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


<!-- ========== OTHER DESTINATIONS ========== -->
<section class="destination-section">
    <div class="container">
        <div class="section-head mb-4">
            <h2 style="color:var(--primary); font-family:'Playfair Display',serif; font-weight:700;">Explore Our Other Sacred Destinations</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="destination-card">
                    <img src="images/AyodhyaSlide1.jpg" alt="Ayodhya Ram Mandir">
                    <div class="card-content">
                        <h5 class="card-title">Ayodhya Ram Mandir</h5>
                        <p class="card-text">Experience divine darshan of Ram Lalla at the sacred Ram Janmabhoomi in Ayodhya.</p>
                        <a href="ayodhya.html" class="btn-book">Book Now</a>
                        <a href="ayodhya.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="destination-card">
                    <img src="images/baglamukhi_mata.jfif" alt="Baglamukhi Dham">
                    <div class="card-content">
                        <h5 class="card-title">Maa Baglamukhi Dham</h5>
                        <p class="card-text">Experience divine power and protection at Maa Baglamukhi temple in Nalkheda.</p>
                        <a href="baglamukhi.html" class="btn-book">Book Now</a>
                        <a href="baglamukhi.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="destination-card">
                    <img src="images/ujjain2.jpg" alt="Mahakaleshwar Dham">
                    <div class="card-content">
                        <h5 class="card-title">Mahakaleshwar Ujjain</h5>
                        <p class="card-text">Seek blessings at Mahakaleshwar Jyotirlinga and attend divine Bhasma Aarti.</p>
                        <a href="mahakaleshwar.html" class="btn-book">Book Now</a>
                        <a href="mahakaleshwar.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ========== BACK TO HOME ========== -->
<div class="back-home-section">
    <a href="https://divyadhamguides.com/">
        <i class="fa-solid fa-house"></i> Back to Home
    </a>
</div>


<!-- ========== HEADER JS ========== -->
<script>
(function () {
    const hamburger    = document.getElementById('hamburger');
    const headerNav    = document.getElementById('headerNav');
    const destBtn      = document.getElementById('destBtn');
    const destDropdown = document.getElementById('destDropdown');

    hamburger.addEventListener('click', () => {
        const isOpen = hamburger.classList.toggle('open');
        headerNav.classList.toggle('open', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    destBtn.addEventListener('click', () => {
        const isOpen = destDropdown.classList.toggle('open');
        destBtn.classList.toggle('open', isOpen);
        destBtn.setAttribute('aria-expanded', isOpen);
    });

    headerNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('open');
            headerNav.classList.remove('open');
            destDropdown.classList.remove('open');
            destBtn.classList.remove('open');
            document.body.style.overflow = '';
        });
    });

    document.addEventListener('click', (e) => {
        if (!destBtn.contains(e.target) && !destDropdown.contains(e.target)) {
            destDropdown.classList.remove('open');
            destBtn.classList.remove('open');
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            hamburger.classList.remove('open');
            headerNav.classList.remove('open');
            destDropdown.classList.remove('open');
            destBtn.classList.remove('open');
            document.body.style.overflow = '';
        }
    });
})();
</script>

<!-- ========== CAROUSEL JS ========== -->
<script>
(function () {
    const track   = document.querySelector('.kashi-carousel .carousel-track');
    const wrapper = document.querySelector('.kashi-carousel .carousel-wrapper');
    const prevBtn = document.querySelector('.kashi-carousel .prev');
    const nextBtn = document.querySelector('.kashi-carousel .next');

    const originals = Array.from(track.querySelectorAll('.puja-card'));
    const total     = originals.length;

    originals.forEach(card => {
        const c = card.cloneNode(true);
        c.dataset.clone = 'end';
        track.appendChild(c);
    });

    [...originals].reverse().forEach(card => {
        const c = card.cloneNode(true);
        c.dataset.clone = 'start';
        track.insertBefore(c, track.firstChild);
    });

    const allCards   = Array.from(track.querySelectorAll('.puja-card'));
    let currentIndex = total;
    let cardWidth    = 0;
    let busy         = false;
    let autoTimer    = null;

    function calcWidth() {
        const card  = allCards[0];
        const style = window.getComputedStyle(card);
        cardWidth   = card.getBoundingClientRect().width
                    + (parseFloat(style.marginLeft)  || 0)
                    + (parseFloat(style.marginRight) || 0);
    }

    function goTo(idx, animate) {
        track.style.transition = animate ? 'transform 0.55s ease-in-out' : 'none';
        if (!animate) track.getBoundingClientRect();
        track.style.transform  = `translateX(-${cardWidth * idx}px)`;
        currentIndex = idx;
    }

    function init() { calcWidth(); goTo(total, false); }
    requestAnimationFrame(() => requestAnimationFrame(init));

    window.addEventListener('resize', () => { calcWidth(); goTo(currentIndex, false); });

    function next() { if (busy) return; busy = true; goTo(currentIndex + 1, true); }
    function prev() { if (busy) return; busy = true; goTo(currentIndex - 1, true); }

    nextBtn.addEventListener('click', next);
    prevBtn.addEventListener('click', prev);

    track.addEventListener('transitionend', (e) => {
        if (e.propertyName !== 'transform') return;
        if (currentIndex >= total * 2)  goTo(currentIndex - total, false);
        else if (currentIndex < total)  goTo(currentIndex + total, false);
        requestAnimationFrame(() => { busy = false; });
    });

    function startAuto() { autoTimer = setInterval(() => { busy = false; next(); }, 2000); }
    function stopAuto()  { clearInterval(autoTimer); }

    startAuto();
    wrapper.addEventListener('mouseenter', stopAuto);
    wrapper.addEventListener('mouseleave', startAuto);
})();
</script>

@endsection