@extends('layout')

@section('title', 'Ayodhya Ram Mandir Darshan Booking & Tour Packages | Divya Dham Guides')
@section('meta_description', 'Book Ayodhya Ram Mandir Darshan online with Divya Dham Guides. VIP, Sugam & regular
    darshan tickets, tour package and Ayodhya–Varanasi trips available.')


@section('content')
 <style>
        :root {
            --primary: #b30000;
            --gold: #FFD700;
            --accent: #ff9933;
            --slide-duration: 12s;
        }

        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: "Poppins", sans-serif;
            background: #fff;
            color: #111;
            margin: 0;
            padding: 0;
        }

        h2, h3, p { text-align: center; }

        /* ========================================================
           HEADER — FULLY RESPONSIVE (FIXED)
           ======================================================== */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 10000;
            background: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.10);
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px;
            height: 70px;
            max-width: 1300px;
            margin: 0 auto;
            position: relative;   /* anchor for absolute mobile drawer */
        }

        /* ── Logo ── */
        .header-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            flex-shrink: 0;
            z-index: 2;
        }

        .header-logo img {
            height: 52px;
            width: auto;
            object-fit: contain;
        }

        /* ── Nav list ── */
        .header-nav {
            display: flex;
            align-items: center;
            gap: 2px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .header-nav > li { position: relative; }

        .header-nav > li > a,
        .header-nav > li > button {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #111;
            font-weight: 600;
            font-size: 0.87rem;
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 6px;
            border: none;
            background: none;
            cursor: pointer;
            white-space: nowrap;
            transition: color 0.2s, background 0.2s;
        }

        .header-nav > li > a:hover,
        .header-nav > li > button:hover,
        .header-nav > li > a.active {
            color: var(--primary);
            background: rgba(179,0,0,0.06);
        }

        /* ── Dropdown ── */
        .dropdown-menu-custom {
            display: none;
            position: absolute;
            top: calc(100% + 6px);
            left: 50%;
            transform: translateX(-50%);
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            padding: 8px 0;
            min-width: 230px;
            z-index: 9999;
            border: 1px solid rgba(0,0,0,0.08);
        }

        .dropdown-menu-custom a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 18px;
            color: #222;
            font-size: 0.87rem;
            font-weight: 500;
            text-decoration: none;
            transition: background 0.18s, color 0.18s;
        }

        .dropdown-menu-custom a i {
            color: var(--primary);
            width: 16px;
            flex-shrink: 0;
        }

        .dropdown-menu-custom a:hover {
            background: #fff5f5;
            color: var(--primary);
        }

        /* desktop hover */
        @media (min-width: 992px) {
            .header-nav > li:hover .dropdown-menu-custom { display: block; }
        }

        /* mobile: .open class */
        .header-nav > li .dropdown-menu-custom.open { display: block; }

        /* chevron rotate */
        .header-nav > li > button .chevron {
            font-size: 11px;
            transition: transform 0.25s;
        }
        .header-nav > li > button.open .chevron { transform: rotate(180deg); }

        /* ── Hamburger ── */
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

        .hamburger span {
            display: block;
            width: 26px;
            height: 2.5px;
            background: #111;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .hamburger.open span:nth-child(1) { transform: translateY(7.5px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; }
        .hamburger.open span:nth-child(3) { transform: translateY(-7.5px) rotate(-45deg); }

        /* ──────────────────────────────────────────────────────────
           MOBILE NAV DRAWER  — KEY FIXES:
           • Full-width drawer below header
           • max-height = viewport minus header → scrollable
           • overflow-y: auto  so Contact is always reachable
           ────────────────────────────────────────────────────────── */
        @media (max-width: 991px) {
            .hamburger { display: flex; }

            .header-nav {
                display: none;           /* hidden by default */
                position: fixed;         /* fixed so it doesn't shift layout */
                top: 70px;               /* exactly below sticky header */
                left: 0;
                right: 0;
                bottom: 0;              /* stretch to viewport bottom */
                background: #fff;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                padding: 6px 0 30px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.12);
                border-top: 1px solid #eee;
                overflow-y: auto;        /* ← scroll fix */
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

            /* highlight active on mobile */
            .header-nav > li > a.active {
                background: #fff5f5;
                color: var(--primary);
            }

            /* Dropdown on mobile — inline, no shadow */
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

            .dropdown-menu-custom a {
                padding: 12px 36px;
                border-bottom: 1px solid #f5e5e5;
                font-size: 0.9rem;
            }
        }

        /* Tiny screens — slightly smaller text */
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

        .baglamukhi-slide1 { background-image: url('images/baglamukhi-temple-banner1.avif'); animation-delay: 0s; }
        .baglamukhi-slide2 { background-image: url('images/baglamukhi-banner2.webp'); animation-delay: 4s; }
        .baglamukhi-slide3 { background-image: url('images/baglamukhi-banner3.webp'); animation-delay: 8s; }

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
            .title { font-size: 20px; }
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
        @media (max-width: 991px) { .feature-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 767px) { .feature-grid { grid-template-columns: 1fr; } }

        /* ========== CAROUSEL ========== */
        .baglamukhi-carousel { padding: 80px 0; background: linear-gradient(135deg, #2b0000, #5a0000); }
        .baglamukhi-carousel .slider-heading { text-align: center; color: #FFD700; font-weight: 700; margin-bottom: 50px; }
        .baglamukhi-carousel .carousel-wrapper { position: relative; overflow: hidden; padding: 0 50px; }

        @media (max-width: 600px) {
            .baglamukhi-carousel .carousel-wrapper { padding: 0 40px; }
        }

        .baglamukhi-carousel .carousel-track { display: flex; will-change: transform; }

        .baglamukhi-carousel .puja-card {
            flex: 0 0 320px;
            width: 320px;
            margin: 0 12px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        }

        @media (max-width: 600px) {
            .baglamukhi-carousel .puja-card { flex: 0 0 calc(100vw - 80px); width: calc(100vw - 80px); margin: 0 8px; }
        }

        .baglamukhi-carousel .card-img img { width: 100%; height: 240px; object-fit: cover; display: block; }
        .baglamukhi-carousel .card-content { padding: 20px; background: #fff; }
        .baglamukhi-carousel .card-content h3 { color: #b30000; font-size: 18px; margin-bottom: 10px; text-align: left; }
        .baglamukhi-carousel .card-content ul { font-size: 14px; padding-left: 18px; margin-bottom: 15px; text-align: left; }

        .baglamukhi-carousel .whatsapp-btn { display: inline-block; background: #25D366; color: #fff; padding: 8px 16px; border-radius: 30px; font-size: 14px; text-decoration: none; transition: 0.3s ease; }
        .baglamukhi-carousel .whatsapp-btn:hover { background: #1ebe5d; }

        .baglamukhi-carousel .nav-btn {
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

        .baglamukhi-carousel .nav-btn:hover { background: #ffc200; }
        .baglamukhi-carousel .prev { left: 6px; }
        .baglamukhi-carousel .next { right: 6px; }
        .baglamukhi-carousel .note { font-size: 0.95rem; color: #ccc; text-align: center; }

        .note-btn { display: inline-flex; align-items: center; gap: 6px; font-weight: 700; font-size: 0.88rem; padding: 7px 16px; border-radius: 25px; text-decoration: none; transition: all 0.25s ease; white-space: nowrap; }
        .note-btn-enquire { background: #FFD700; color: #7a0000; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-enquire:hover { background: #ffb300; color: #5a0000; transform: translateY(-2px); }
        .note-btn-call { background: #25D366; color: #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-call:hover { background: #1ebe5d; color: #fff; transform: translateY(-2px); }
        @media (max-width: 480px) { .note-btn { font-size: 0.82rem; padding: 6px 13px; } }

        /* ========== ABOUT ========== */
        .baglamukhi-about { padding: 100px 20px; background: linear-gradient(135deg, #3b0000, #6b0000); display: flex; justify-content: center; }
        .baglamukhi-about .container { max-width: 1000px; margin: auto; }
        .baglamukhi-about .about-card { background: #fff; padding: 60px 50px; border-radius: 20px; box-shadow: 0 25px 60px rgba(0,0,0,0.4); text-align: center; }
        .baglamukhi-about .about-main-heading { font-size: 32px; color: #7a0000; margin-bottom: 10px; }
        .baglamukhi-about .about-sub-heading  { font-size: 18px; color: #b8860b; margin-bottom: 30px; }
        .baglamukhi-about .about-card p { font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px; }
        .baglamukhi-about .highlight { color: #b30000; font-weight: 600; }
        .baglamukhi-about .about-cta { margin-top: 40px; }
        .baglamukhi-about .explore-btn { background: linear-gradient(45deg, #FFD700, #ffcc00); color: #7a0000; padding: 14px 35px; border-radius: 40px; text-decoration: none; font-weight: 600; font-size: 16px; transition: 0.3s ease; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
        .baglamukhi-about .explore-btn:hover { background: #b30000; color: #fff; transform: translateY(-3px); }
        @media (max-width: 768px) { .baglamukhi-about .about-card { padding: 40px 25px; } .baglamukhi-about .about-main-heading { font-size: 24px; } }

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
        @media (max-width: 991px) { .choose-grid { grid-template-columns: 1fr; } }

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

        /* ========== FOOTER ========== */
        .site-footer { background: #0f0000; color: #ccc; padding: 60px 20px 30px; }
        .site-footer .footer-brand { color: var(--gold); font-family: "Playfair Display", serif; font-size: 1.5rem; font-weight: 700; margin-bottom: 10px; text-align: left; }
        .site-footer .footer-tagline { color: #aaa; font-size: 0.9rem; margin-bottom: 20px; text-align: left; }
        .site-footer .footer-socials { display: flex; gap: 12px; margin-bottom: 10px; }
        .site-footer .footer-socials a { width: 38px; height: 38px; border-radius: 50%; background: rgba(255,215,0,0.15); color: var(--gold); display: flex; align-items: center; justify-content: center; font-size: 16px; text-decoration: none; transition: background 0.25s ease; }
        .site-footer .footer-socials a:hover { background: var(--gold); color: #111; }
        .site-footer h6 { color: var(--gold); font-weight: 700; font-size: 1rem; margin-bottom: 16px; text-align: left; }
        .site-footer ul { list-style: none; padding: 0; margin: 0; }
        .site-footer ul li { margin-bottom: 10px; text-align: left; }
        .site-footer ul li a { color: #bbb; text-decoration: none; font-size: 0.9rem; transition: color 0.2s; }
        .site-footer ul li a:hover { color: var(--gold); }
        .site-footer .footer-contact-item { display: flex; align-items: flex-start; gap: 10px; margin-bottom: 14px; }
        .site-footer .footer-contact-item i { color: var(--gold); font-size: 16px; margin-top: 2px; flex-shrink: 0; }
        .site-footer .footer-contact-item span { color: #bbb; font-size: 0.9rem; line-height: 1.5; }
        .site-footer .footer-contact-item a { color: #bbb; text-decoration: none; }
        .site-footer .footer-contact-item a:hover { color: var(--gold); }
        .site-footer .footer-divider { border-color: rgba(255,255,255,0.1); margin: 30px 0 20px; }
        .site-footer .footer-bottom { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 10px; }
        .site-footer .footer-bottom p { margin: 0; font-size: 0.85rem; color: #888; text-align: left; }
        .site-footer .footer-bottom-links { display: flex; gap: 16px; }
        .site-footer .footer-bottom-links a { color: #888; font-size: 0.85rem; text-decoration: none; }
        .site-footer .footer-bottom-links a:hover { color: var(--gold); }

        @media (max-width: 767px) {
            .site-footer .footer-brand    { text-align: center; }
            .site-footer .footer-tagline  { text-align: center; }
            .site-footer .footer-socials  { justify-content: center; }
            .site-footer h6               { text-align: center; }
            .site-footer ul li            { text-align: center; }
            .site-footer .footer-contact-item { justify-content: center; }
            .site-footer .footer-bottom   { flex-direction: column; align-items: center; }
            .site-footer .footer-bottom p { text-align: center; }
            .site-footer .footer-bottom-links { justify-content: center; }
        }
    </style>
    
<!-- ========== HERO ========== -->
<section class="hero">

    <a href="https://divyadhamguides.com/" class="back-to-home-top">
        <i class="fa-solid fa-house"></i> Back to Home
    </a>

    <div class="hero-bg-slider" aria-hidden="true">
        <div class="bg-slide baglamukhi-slide1"></div>
        <div class="bg-slide baglamukhi-slide2"></div>
        <div class="bg-slide baglamukhi-slide3"></div>
    </div>

    <div class="hero-card" role="region" aria-label="Baglamukhi hero content">
        <h1 class="brand">Divya Dham Guides Association</h1>
        <h2 class="title">Maa Baglamukhi Nalkheda Dham VIP & Vishesh Pooja Services.</h2>
        <p class="desc">
            Experience divine blessings at the sacred Maa Baglamukhi Nalkheda Dham with reliable and hassle-free assistance from Divya Dham Guides. We provide well-organized VIP & Vishesh Pujan booking, traditional Baglamukhi hawan arrangements, and special puja services so your spiritual journey remains peaceful and powerful.
            Whether you are visiting for darshan, anushthan, court case victory puja, or spiritual protection rituals, our experienced team ensures smooth temple coordination, local assistance, and respectful arrangements — allowing you to focus completely on devotion while we manage everything with care and transparency.
        </p>
        <div class="hero-ctas">
            <a href="/contact" class="btn btn-gold">Book Vishesh Pujan</a>
            <a href="/contact" class="btn btn-outline-red">Enquiry Now</a>
        </div>
    </div>
</section>


<!-- ========== SERVICES ========== -->
<section class="container my-5">
    <div class="section-head">
        <h2>Our Maa Baglamukhi Nalkheda Dham Darshan & Puja Services</h2>
        <p>Divya Dham Guides provides complete assistance to make your visit to Maa Baglamukhi Nalkheda Dham peaceful, organized, and spiritually fulfilling. From VIP darshan booking and Baglamukhi hawan arrangements to special puja coordination and on-ground temple support, we manage everything with proper planning and transparency — so you can focus entirely on devotion and divine blessings.</p>
    </div>

    <div class="feature-grid">
        <div class="feature-card">
            <i class="fa-solid fa-gopuram"></i>
            <h5>Maa Baglamukhi Nalkheda Dham Darshan Assistance</h5>
            <p>Nalkheda Dham is one of the most powerful and spiritually significant temples dedicated to Maa Baglamukhi. Devotees visiting for the first time often need proper guidance regarding temple rituals, darshan timings, and special anushthan procedures.</p>
            <ul>
                <li>We assist you with Maa Baglamukhi Temple Darshan and proper coordination for special rituals and temple procedures.</li>
                <li>Our experienced local support team stays connected with you and helps manage temple entry, puja arrangements, and ritual guidance smoothly.</li>
                <li>We suggest the most suitable darshan timings and ritual schedule based on temple availability and crowd conditions.</li>
                <li>With our organized assistance, your visit to Nalkheda Dham becomes peaceful, spiritually powerful, and completely stress-free.</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-hotel"></i>
            <h5>Nalkheda Accommodation Booking Assistance</h5>
            <p>A comfortable and peaceful stay is an important part of your spiritual visit to Maa Baglamukhi Nalkheda Dham. Divya Dham Guides helps you arrange clean, safe, and convenient accommodation options near the temple area.</p>
            <ul>
                <li>Clean and comfortable stays located near Maa Baglamukhi Temple.</li>
                <li>Hygienic, well-maintained rooms suitable for families and senior citizens.</li>
                <li>Accommodation options for individual devotees, families, and large groups.</li>
                <li>From budget guesthouses to comfortable premium stays — multiple options available.</li>
                <li>Share your travel dates with us, and we will coordinate the best available stay without hassle.</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-bus"></i>
            <h5>Nalkheda Travel Support & Pickup Services</h5>
            <ul>
                <li>Traveling to Maa Baglamukhi Nalkheda Dham becomes smooth and convenient with our organized transport assistance.</li>
                <li>Pickup & drop services from nearby railway stations and major cities like Indore, Ujjain, Bhopal, and Agar Malwa.</li>
                <li>Local vehicle arrangements for temple visits and ritual coordination.</li>
                <li>Private transfers for families, senior citizens, and group devotees.</li>
                <li>Comfortable and safe vehicles ensuring a stress-free spiritual journey.</li>
                <li>Our goal is to make your entire visit to Nalkheda Dham peaceful, safe, and completely well-managed.</li>
            </ul>
        </div>
    </div>
</section>


<!-- ========== CAROUSEL ========== -->
<section class="baglamukhi-carousel" id="baglamukhi-services">
    <div class="container">
        <h2 class="slider-heading">Maa Baglamukhi Special Puja Services</h2>

        <div class="carousel-wrapper">
            <button class="nav-btn prev" aria-label="Previous">&#10094;</button>
            <div class="carousel-track">

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/Hawan_Baglamukhi.jfif') }}" alt="Baglamukhi Stambhan Havan"></div>
                    <div class="card-content">
                        <h3>Baglamukhi Stambhan Havan</h3>
                        <ul><li>Enemy protection</li><li>Negative energy removal</li><li>Spiritual strength</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Baglamukhi Stambhan Havan" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/sankalp_pooja.jfif') }}" alt="Court Case Victory Puja"></div>
                    <div class="card-content">
                        <h3>Court Case Victory Puja</h3>
                        <ul><li>Legal success blessings</li><li>Relief from disputes</li><li>Positive judgment energy</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Court Case Victory Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/baglamukhi_hawan.jfif') }}" alt="Shatru Nash Anushthan"></div>
                    <div class="card-content">
                        <h3>Shatru Nash Anushthan</h3>
                        <ul><li>Enemy pacification</li><li>Black magic protection</li><li>Peace & confidence</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Shatru Nash Anushthan" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/career.jfif') }}" alt="Business Growth Puja"></div>
                    <div class="card-content">
                        <h3>Business & Career Growth Puja</h3>
                        <ul><li>Career promotion</li><li>Financial stability</li><li>Success blessings</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Business Growth Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/sankalp_pooja.jfif') }}" alt="Customized Sankalp Puja"></div>
                    <div class="card-content">
                        <h3>Customized Sankalp Puja</h3>
                        <ul><li>Personalized ritual</li><li>Astrology based</li><li>Online & offline</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Customized Sankalp Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/Hawan.jfif') }}" alt="Akhand Baglamukhi Jaap"></div>
                    <div class="card-content">
                        <h3>Akhand Baglamukhi Jaap</h3>
                        <ul><li>Continuous chanting</li><li>Energy purification</li><li>Divine protection</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Akhand Baglamukhi Jaap" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/sankalp_pooja.jfif') }}" alt="Baglamukhi Maha Anushthan"></div>
                    <div class="card-content">
                        <h3>Baglamukhi Maha Anushthan</h3>
                        <ul><li>Major obstacle removal</li><li>Powerful protection</li><li>Divine activation</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Baglamukhi Maha Anushthan" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/Hawan.jfif') }}" alt="Vashikaran Shanti Puja"></div>
                    <div class="card-content">
                        <h3>Vashikaran Shanti Puja</h3>
                        <ul><li>Relationship harmony</li><li>Emotional balance</li><li>Positive attraction</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Vashikaran Shanti Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/Hawan_Baglamukhi.jfif') }}" alt="Nazar Dosh Nivaran Puja"></div>
                    <div class="card-content">
                        <h3>Nazar Dosh Nivaran Puja</h3>
                        <ul><li>Evil eye protection</li><li>Energy cleansing</li><li>Family safety</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Nazar Dosh Nivaran Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/career.jfif') }}" alt="Debt Relief Puja"></div>
                    <div class="card-content">
                        <h3>Debt Relief & Financial Stability Puja</h3>
                        <ul><li>Debt relief blessings</li><li>Financial growth</li><li>Business stability</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Debt Relief Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/sankalp_pooja.jfif') }}" alt="Marriage Obstacle Removal Puja"></div>
                    <div class="card-content">
                        <h3>Marriage Obstacle Removal Puja</h3>
                        <ul><li>Delay removal</li><li>Positive alliances</li><li>Family harmony</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Marriage Obstacle Removal Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/Baglamukhi_Img.jfif') }}" alt="Health & Protection Puja"></div>
                    <div class="card-content">
                        <h3>Health & Protection Puja</h3>
                        <ul><li>Health blessings</li><li>Mental strength</li><li>Energy purification</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Health & Protection Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/career.jfif') }}" alt="Student Success Puja"></div>
                    <div class="card-content">
                        <h3>Student Success & Exam Victory Puja</h3>
                        <ul><li>Focus & concentration</li><li>Exam success</li><li>Confidence boost</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Student Success Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/Hawan.jfif') }}" alt="Grah Badha Shanti Puja"></div>
                    <div class="card-content">
                        <h3>Grah Badha Shanti Puja</h3>
                        <ul><li>Planetary dosha relief</li><li>Life balance</li><li>Peace & stability</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Grah Badha Shanti Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/baglamukhi_mata.jfif') }}" alt="Baglamukhi Jayanti Special Puja"></div>
                    <div class="card-content">
                        <h3>Baglamukhi Jayanti Special Puja</h3>
                        <ul><li>Special day rituals</li><li>Maha havan & jaap</li><li>Year-long blessings</li></ul>
                        <a href="https://wa.me/919109507691?text=I want to book Baglamukhi Jayanti Special Puja" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

            </div><!-- /.carousel-track -->
            <button class="nav-btn next" aria-label="Next">&#10095;</button>
        </div><!-- /.carousel-wrapper -->

        <p class="note mt-5">
            <strong>Note:</strong> Divya Dham Guides arranges all temple schedules, Bhog offerings, and Priest Guides for you —
            <a href="/contact" class="note-btn note-btn-enquire"><i class="fa-solid fa-calendar-check"></i> Book / Enquire</a>
            &nbsp;or&nbsp;
            <a href="tel:+919109507691" class="note-btn note-btn-call"><i class="fa-solid fa-phone"></i> +91 9109507691</a>
        </p>
    </div>
</section>


<!-- ========== ABOUT ========== -->
<section class="baglamukhi-about" id="baglamukhi-about">
    <div class="container">
        <div class="about-card">
            <h2 class="about-main-heading">Nalkheda Dham – Vishesh Puja Booking</h2>
            <h4 class="about-sub-heading">Divya Dham Guides Association</h4>
            <p><strong>Nalkheda Dham</strong> is one of the most powerful <span class="highlight">Shakti Peeths in India</span>, dedicated to <strong>Maa Baglamukhi</strong>, the eighth Mahavidya of Adi Shakti. Every year, thousands of devotees visit this sacred temple seeking <span class="highlight">victory in court cases</span>, <span class="highlight">protection from enemies</span>, <span class="highlight">business success</span>, and <span class="highlight">spiritual strength</span>.</p>
            <p>Located in the <strong>Agar Malwa district of Madhya Pradesh</strong> on the sacred banks of the <span class="highlight">Lakhundar River</span>, this ancient Siddh Peeth is believed to be connected to the Mahabharata era. The temple houses a rare divine form of Maa Baglamukhi representing <span class="highlight">Lakshmi, Saraswati, and Kali</span> — blessing devotees with wealth, wisdom, and protection.</p>
            <p>At <strong>Divya Dham Guides Association</strong>, we provide <span class="highlight">VIP Darshan</span>, <span class="highlight">Baglamukhi Hawan & Anushthan Booking</span>, <span class="highlight">Temple Guide Services</span>, and <span class="highlight">Online Puja Support</span> to ensure your spiritual journey is smooth, authentic, and fulfilling.</p>
            <p>Nalkheda Dham is considered highly powerful because it is an <span class="highlight">ancient Siddh Peeth</span> where authentic Shakti Sadhana continues under traditional priest lineage, and special Baglamukhi Hawan is performed daily.</p>
            <div class="about-cta">
                <a href="https://divyadhamguides.com/blogs" class="explore-btn">Explore More</a>
            </div>
        </div>
    </div>
</section>


<!-- ========== FREE CALL ========== -->
<section class="free-call-section" id="baglamukhi-contact">
    <div class="container text-center">
        <h2>Need More Details? Talk to Us for Free!</h2>
        <p>Still confused which package suits you best? Don't worry — our experts will brief you with complete package details, darshan options, and travel info <strong>in just a 2–3 minute call!</strong></p>
        <a href="tel:+919109507691" class="btn-call-now">
            <i class="fa-solid fa-phone-volume"></i> Call Now for Free Consultation
            <span>📞 +91 9109507691</span>
        </a>
    </div>
</section>


<!-- ========== WHY CHOOSE ========== -->
<section class="choose-section" id="baglamukhi-why-choose">
    <div class="container">
        <div class="section-head"><h2>Why Choose Divya Dham Guides</h2></div>
        <div class="choose-grid">
            <div class="choose-item"><i class="fa-solid fa-headset"></i> 24×7 Support for devotees</div>
            <div class="choose-item"><i class="fa-solid fa-ticket"></i> Hassle-free online darshan booking (VIP / Sugam / Regular)</div>
            <div class="choose-item"><i class="fa-solid fa-user-tie"></i> Experienced certified local tour guides</div>
            <div class="choose-item"><i class="fa-solid fa-hotel"></i> Clean, affordable hotels & AC/non-AC vehicle options</div>
            <div class="choose-item"><i class="fa-solid fa-route"></i> Customised pilgrimage packages (from major cities)</div>
        </div>
    </div>
</section>


<!-- ========== FAQ ========== -->
<section class="faq-section py-5 bg-light" id="baglamukhi-faq">
    <div class="container">
        <div class="section-head text-center mb-4">
            <h2 class="fw-bold text-dark">Frequently Asked Questions</h2>
            <p class="text-muted">Quick answers to common queries about Maa Baglamukhi Nalkheda Dham Darshan & Puja Services.</p>
        </div>

        <div class="accordion" id="baglamukhiFaqAccordion">

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#baglamukhiFaq1" aria-expanded="true">
                        1. How can I book VIP Darshan at Maa Baglamukhi Nalkheda Dham?
                    </button>
                </h2>
                <div id="baglamukhiFaq1" class="accordion-collapse collapse show" data-bs-parent="#baglamukhiFaqAccordion">
                    <div class="accordion-body">You can contact Divya Dham Guides directly for VIP darshan assistance. We coordinate temple entry, timing guidance, and on-ground support to ensure a smooth and peaceful experience.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baglamukhiFaq2">
                        2. What types of puja and hawan can be arranged at Nalkheda Dham?
                    </button>
                </h2>
                <div id="baglamukhiFaq2" class="accordion-collapse collapse" data-bs-parent="#baglamukhiFaqAccordion">
                    <div class="accordion-body">We arrange Baglamukhi Stambhan Hawan, Court Case Victory Puja, Shatru Nash Anushthan, Business & Career Growth Puja, and customized rituals as per devotee requirements, following proper temple procedures.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baglamukhiFaq3">
                        3. Do you provide accommodation near Maa Baglamukhi Temple?
                    </button>
                </h2>
                <div id="baglamukhiFaq3" class="accordion-collapse collapse" data-bs-parent="#baglamukhiFaqAccordion">
                    <div class="accordion-body">Yes, we assist with clean and comfortable accommodation options near the temple area, suitable for families, senior citizens, and group devotees.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baglamukhiFaq4">
                        4. From which cities do you provide pickup services?
                    </button>
                </h2>
                <div id="baglamukhiFaq4" class="accordion-collapse collapse" data-bs-parent="#baglamukhiFaqAccordion">
                    <div class="accordion-body">We provide pickup and drop assistance from nearby cities such as Indore, Ujjain, Bhopal, Agar Malwa, and surrounding regions. Custom transfers can also be arranged on request.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baglamukhiFaq5">
                        5. Can rituals be customized based on personal requirements?
                    </button>
                </h2>
                <div id="baglamukhiFaq5" class="accordion-collapse collapse" data-bs-parent="#baglamukhiFaqAccordion">
                    <div class="accordion-body">Yes, we arrange customized puja and anushthan based on your spiritual goals, whether for court cases, protection, business growth, or specific sankalp.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baglamukhiFaq6">
                        6. Is prior booking required for Baglamukhi Hawan?
                    </button>
                </h2>
                <div id="baglamukhiFaq6" class="accordion-collapse collapse" data-bs-parent="#baglamukhiFaqAccordion">
                    <div class="accordion-body">Yes, prior booking is recommended for Baglamukhi Hawan and special rituals to ensure proper arrangement of pandits, materials, and temple coordination.</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ========== CTA ========== -->
<section class="cta-section" id="baglamukhi-cta">
    <h3>Ready to plan your Baglamukhi Nalkheda Dham pilgrimage?</h3>
    <p>VIP darshan, Sugam access for elderly & full pilgrimage packages available.</p>
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
                    <img src="{{ asset('images/baglamukhi_mata.jfif') }}" alt="Baglamukhi Dham">
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
                    <img src="{{ asset('images/ujjain2.jpg') }}" alt="Mahakaleshwar Dham">
                    <div class="card-content">
                        <h5 class="card-title">Mahakaleshwar Ujjain</h5>
                        <p class="card-text">Seek blessings at Mahakaleshwar Jyotirlinga and attend divine Bhasma Aarti.</p>
                        <a href="mahakaleshwar.html" class="btn-book">Book Now</a>
                        <a href="mahakaleshwar.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/omkareshwar.jfif') }}" alt="Omkareshwar">
                    <div class="card-content">
                        <h5 class="card-title">Omkareshwar Jyotirlinga</h5>
                        <p class="card-text">Visit sacred island temple of Omkareshwar on Narmada river.</p>
                        <a href="omkareshwar.html" class="btn-book">Book Now</a>
                        <a href="omkareshwar.html" class="stretched-link"></a>
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


<!-- ========== FOOTER ========== -->
<footer class="site-footer">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-4 col-md-6">
                <p class="footer-brand">🕉 Divya Dham Guides</p>
                <p class="footer-tagline">Your trusted partner for spiritual journeys in Ayodhya, Varanasi, Prayagraj, Ujjain & Nalkheda.</p>
                <div class="footer-socials">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://wa.me/919109507691" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-6">
                <h6>Quick Links</h6>
                <ul>
                    <li><a href="https://divyadhamguides.com/">Home</a></li>
                    <li><a href="https://divyadhamguides.com/about">About Us</a></li>
                    <li><a href="https://divyadhamguides.com/contact">Contact</a></li>
                    <li><a href="https://divyadhamguides.com/blogs">Blogs</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <h6>Our Destinations</h6>
                <ul>
                    <li><a href="baglamukhi.html">Maa Baglamukhi Nalkheda</a></li>
                    <li><a href="mahakaleshwar.html">Mahakaleshwar Ujjain</a></li>
                    <li><a href="omkareshwar.html">Omkareshwar</a></li>
                    <li><a href="ayodhya.html">Ayodhya Darshan</a></li>
                    <li><a href="kashi.html">Kashi Darshan</a></li>
                    <li><a href="prayagraj.html">Prayagraj Darshan</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h6>Contact Us</h6>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <span><a href="tel:+919109507691">+91 9109507691</a></span>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span><a href="https://wa.me/919109507691" target="_blank">WhatsApp Us</a></span>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span><a href="mailto:divyadhamguides@gmail.com">divyadhamguides@gmail.com</a></span>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Ayodhya, Varanasi, Prayagraj,<br>Ujjain & Nalkheda, India</span>
                </div>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
            <p>© 2025 Divya Dham Guides Association. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- ========== HEADER JS ========== -->
<script>
(function () {
    const hamburger    = document.getElementById('hamburger');
    const headerNav    = document.getElementById('headerNav');
    const destBtn      = document.getElementById('destBtn');
    const destDropdown = document.getElementById('destDropdown');

    /* Hamburger toggle */
    hamburger.addEventListener('click', () => {
        const isOpen = hamburger.classList.toggle('open');
        headerNav.classList.toggle('open', isOpen);
        /* Prevent body scroll when drawer is open */
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    /* Destinations dropdown — mobile: click toggle */
    destBtn.addEventListener('click', () => {
        const isOpen = destDropdown.classList.toggle('open');
        destBtn.classList.toggle('open', isOpen);
        destBtn.setAttribute('aria-expanded', isOpen);
    });

    /* Close nav & dropdown when any link inside is clicked */
    headerNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('open');
            headerNav.classList.remove('open');
            destDropdown.classList.remove('open');
            destBtn.classList.remove('open');
            document.body.style.overflow = '';
        });
    });

    /* Close dropdown when clicking outside (desktop) */
    document.addEventListener('click', (e) => {
        if (!destBtn.contains(e.target) && !destDropdown.contains(e.target)) {
            destDropdown.classList.remove('open');
            destBtn.classList.remove('open');
        }
    });

    /* Close drawer on Escape key */
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
    const track   = document.querySelector('.baglamukhi-carousel .carousel-track');
    const wrapper = document.querySelector('.baglamukhi-carousel .carousel-wrapper');
    const prevBtn = document.querySelector('.baglamukhi-carousel .prev');
    const nextBtn = document.querySelector('.baglamukhi-carousel .next');

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
