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
           HEADER — FULLY RESPONSIVE (copied from baglamukhi page)
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
            position: relative;
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

        /* ── MOBILE NAV DRAWER ── */
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

            .header-nav > li > a.active {
                background: #fff5f5;
                color: var(--primary);
            }

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

        /* Tiny screens */
        @media (max-width: 375px) {
            .header-logo img { height: 44px; }
            .header-inner { padding: 0 14px; }
        }

        /* ========== BACK TO HOME — TOP LEFT ========== */
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
        .back-to-home-top:hover {
            background: #b30000;
            color: #fff;
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

        .mahakaleshwar-slide1 { background-image: url('images/ujjian1.jpg'); animation-delay: 0s; }
        .mahakaleshwar-slide2 { background-image: url('images/ujjain2.jpg'); animation-delay: 4s; }
        .mahakaleshwar-slide3 { background-image: url('images/ujjain3.jpg'); animation-delay: 8s; }

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
            font-size: clamp(26px, 4.6vw, 44px);
            font-weight: 800;
            color: #fff !important;
            text-shadow: 0 3px 12px rgba(0,0,0,0.7);
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
        }

        .hero-ctas { margin-top: 6px; display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }

        .btn {
            display: inline-block;
            font-weight: 700;
            padding: 10px 22px;
            border-radius: 30px;
            text-decoration: none;
            transition: transform .25s ease;
        }

        .btn-gold {
            background: linear-gradient(90deg, var(--gold), #ffd84d);
            color: #111;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            border: none;
        }

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

        .feature-card:hover { transform: translateY(-6px); box-shadow: 0 8px 20px rgba(244,66,66,0.4); }
        .feature-card i  { color: var(--primary); font-size: 2rem; margin-bottom: 10px; }
        .feature-card h5 { color: var(--primary); font-weight: 700; }
        .feature-card p  { color: #333; font-size: 0.95rem; }
        .feature-card ul { text-align: left !important; margin-left: 0; padding-left: 18px; }

        @media (max-width: 991px) { .feature-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 767px) { .feature-grid { grid-template-columns: 1fr; } }

        /* ========== MAHAKALESHWAR CAROUSEL ========== */
        .mahakaleshwar-carousel {
            padding: 80px 0;
            background: linear-gradient(135deg, #2b0000, #5a0000);
        }

        .mahakaleshwar-carousel .slider-heading {
            text-align: center;
            color: #FFD700;
            font-weight: 700;
            margin-bottom: 50px;
        }

        .mahakaleshwar-carousel .carousel-wrapper {
            position: relative;
            overflow: hidden;
            padding: 0 50px;
        }

        @media (max-width: 600px) {
            .mahakaleshwar-carousel .carousel-wrapper { padding: 0 40px; }
        }

        .mahakaleshwar-carousel .carousel-track {
            display: flex;
            will-change: transform;
        }

        .mahakaleshwar-carousel .puja-card {
            flex: 0 0 320px;
            width: 320px;
            margin: 0 12px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        }

        @media (max-width: 600px) {
            .mahakaleshwar-carousel .puja-card {
                flex: 0 0 calc(100vw - 80px);
                width: calc(100vw - 80px);
                margin: 0 8px;
            }
        }

        .mahakaleshwar-carousel .card-img img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            display: block;
        }

        .mahakaleshwar-carousel .card-content { padding: 20px; background: #fff; }

        .mahakaleshwar-carousel .card-content h3 {
            color: #b30000;
            font-size: 18px;
            margin-bottom: 10px;
            text-align: left;
        }

        .mahakaleshwar-carousel .card-content ul {
            font-size: 14px;
            padding-left: 18px;
            margin-bottom: 15px;
            text-align: left;
        }

        .mahakaleshwar-carousel .whatsapp-btn {
            display: inline-block;
            background: #25D366;
            color: #fff;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .mahakaleshwar-carousel .whatsapp-btn:hover { background: #1ebe5d; }

        .mahakaleshwar-carousel .nav-btn {
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
            line-height: 1;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }

        .mahakaleshwar-carousel .nav-btn:hover { background: #ffc200; }
        .mahakaleshwar-carousel .prev { left: 6px; }
        .mahakaleshwar-carousel .next { right: 6px; }

        .mahakaleshwar-carousel .note {
            font-size: 0.95rem;
            color: #ccc;
            text-align: center;
        }

        .note-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-weight: 700;
            font-size: 0.88rem;
            padding: 7px 16px;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.25s ease;
            white-space: nowrap;
        }

        .note-btn-enquire {
            background: #FFD700;
            color: #7a0000;
            box-shadow: 0 3px 10px rgba(0,0,0,0.3);
        }

        .note-btn-enquire:hover {
            background: #ffb300;
            color: #5a0000;
            transform: translateY(-2px);
        }

        .note-btn-call {
            background: #25D366;
            color: #fff;
            box-shadow: 0 3px 10px rgba(0,0,0,0.3);
        }

        .note-btn-call:hover {
            background: #1ebe5d;
            color: #fff;
            transform: translateY(-2px);
        }

        @media (max-width: 480px) {
            .note-btn { font-size: 0.82rem; padding: 6px 13px; }
        }

        /* ========== MAHAKALESHWAR ABOUT ========== */
        .mahakaleshwar-about {
            padding: 100px 20px;
            background: linear-gradient(135deg, #3b0000, #6b0000);
            display: flex;
            justify-content: center;
        }

        .mahakaleshwar-about .container { max-width: 1000px; margin: auto; }

        .mahakaleshwar-about .about-card {
            background: #fff;
            padding: 60px 50px;
            border-radius: 20px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.4);
            text-align: center;
        }

        .mahakaleshwar-about .about-main-heading { font-size: 32px; color: #7a0000; margin-bottom: 10px; }
        .mahakaleshwar-about .about-sub-heading  { font-size: 18px; color: #b8860b; margin-bottom: 30px; }
        .mahakaleshwar-about .about-card p { font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px; }
        .mahakaleshwar-about .highlight { color: #b30000; font-weight: 600; }
        .mahakaleshwar-about .about-cta { margin-top: 40px; }

        .mahakaleshwar-about .explore-btn {
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

        .mahakaleshwar-about .explore-btn:hover { background: #b30000; color: #fff; transform: translateY(-3px); }

        @media (max-width: 768px) {
            .mahakaleshwar-about .about-card { padding: 40px 25px; }
            .mahakaleshwar-about .about-main-heading { font-size: 24px; }
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
        .choose-section { background: linear-gradient(0deg, rgba(255,215,0,0.15), #fff); padding: 60px 20px; }

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

        .destination-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            background: #fff;
        }

        .destination-card:hover { transform: translateY(-8px); box-shadow: 0 12px 35px rgba(0,0,0,0.15); }
        .destination-card img { width: 100%; height: 220px; object-fit: cover; }
        .destination-card .card-content { padding: 20px; }

        .card-title { font-size: 20px; font-weight: 700; color: #d32f2f; margin-bottom: 10px; }
        .card-text  { color: #555; font-size: 14px; margin-bottom: 15px; }

        .btn-book {
            display: inline-block;
            background: #d32f2f;
            color: #fff;
            padding: 8px 18px;
            border-radius: 25px;
            font-size: 14px;
            text-decoration: none;
            transition: 0.3s;
            position: relative;
            z-index: 2;
        }

        .btn-book:hover { background: #b71c1c; }

        .stretched-link {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 1;
        }

        /* ========== BACK TO HOME — ABOVE FOOTER ========== */
        .back-home-section {
            background: #1a0000;
            padding: 28px 20px;
            text-align: center;
        }

        .back-home-section a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #7a0000;
            color: #fff;
            font-weight: 700;
            font-size: 14px;
            padding: 10px 26px;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(0,0,0,0.35);
            transition: background 0.25s ease, transform 0.25s ease;
        }

        .back-home-section a:hover {
            background: #b30000;
            transform: translateY(-2px);
        }

        /* ========== FOOTER ========== */
        .site-footer {
            background: #0f0000;
            color: #ccc;
            padding: 60px 20px 30px;
        }

        .site-footer .footer-brand {
            color: var(--gold);
            font-family: "Playfair Display", serif;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-align: left;
        }

        .site-footer .footer-tagline {
            color: #aaa;
            font-size: 0.9rem;
            margin-bottom: 20px;
            text-align: left;
        }

        .site-footer .footer-socials {
            display: flex;
            gap: 12px;
            margin-bottom: 10px;
        }

        .site-footer .footer-socials a {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255,215,0,0.15);
            color: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            text-decoration: none;
            transition: background 0.25s ease;
        }

        .site-footer .footer-socials a:hover { background: var(--gold); color: #111; }

        .site-footer h6 {
            color: var(--gold);
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 16px;
            text-align: left;
        }

        .site-footer ul { list-style: none; padding: 0; margin: 0; }
        .site-footer ul li { margin-bottom: 10px; text-align: left; }

        .site-footer ul li a {
            color: #bbb;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s;
        }

        .site-footer ul li a:hover { color: var(--gold); }

        .site-footer .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 14px;
        }

        .site-footer .footer-contact-item i {
            color: var(--gold);
            font-size: 16px;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .site-footer .footer-contact-item span { color: #bbb; font-size: 0.9rem; line-height: 1.5; }
        .site-footer .footer-contact-item a { color: #bbb; text-decoration: none; }
        .site-footer .footer-contact-item a:hover { color: var(--gold); }

        .site-footer .footer-divider { border-color: rgba(255,255,255,0.1); margin: 30px 0 20px; }

        .site-footer .footer-bottom {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

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
        <div class="bg-slide mahakaleshwar-slide1"></div>
        <div class="bg-slide mahakaleshwar-slide2"></div>
        <div class="bg-slide mahakaleshwar-slide3"></div>
    </div>

    <div class="hero-card" role="region" aria-label="Mahakaleshwar hero content">
        <h1 class="brand">Divya Dham Guides Association</h1>
        <h2 class="title">Mahakaleshwar Jyotirlinga Darshan Booking & Ujjain Pilgrimage Assistance</h2>

        <p class="desc">
            Experience the divine blessings of Lord Shiva at the sacred
            <strong>Shri Mahakaleshwar Jyotirlinga Temple</strong>, one of the twelve Jyotirlingas
            located in the holy city of <strong>Ujjain, Madhya Pradesh</strong>. Devotees from across
            India and around the world visit this powerful temple to seek the blessings of
            <strong>Mahakal</strong>, the eternal Lord of Time. Due to heavy pilgrimage crowds and
            temple rituals such as <strong>Bhasma Aarti, Rudrabhishek Puja, and Sayan Aarti</strong>,
            managing darshan and temple coordination can sometimes be challenging for devotees.
            Divya Dham Guides provides reliable assistance for Mahakaleshwar darshan, Bhasma Aarti
            guidance, temple rituals, accommodation arrangements, and local temple tours in Ujjain
            so that your pilgrimage remains peaceful, organized, and spiritually fulfilling.
        </p>

        <div class="hero-ctas">
            <a href="/contact" class="btn btn-gold">Book Mahakaleshwar Darshan</a>
            <a href="/contact" class="btn btn-outline-red">Enquiry Now</a>
        </div>
    </div>
</section>


<!-- ========== SERVICES ========== -->
<section class="container my-5">
    <div class="section-head">
        <h2>Our Mahakaleshwar Jyotirlinga Darshan & Ujjain Pilgrimage Services</h2>
        <p>
            Divya Dham Guides provides complete assistance to make your visit to Mahakaleshwar
            Jyotirlinga peaceful, organized, and spiritually fulfilling. From temple darshan guidance
            and Bhasma Aarti assistance to Rudrabhishek puja arrangements, accommodation coordination,
            and Ujjain temple tours — our team manages everything carefully so devotees can focus
            fully on prayer and devotion.
        </p>
    </div>

    <div class="feature-grid">

        <div class="feature-card">
            <i class="fa-solid fa-gopuram"></i>
            <h5>Mahakaleshwar Jyotirlinga Darshan Assistance</h5>
            <p>
                Shri Mahakaleshwar Temple is one of the most sacred Jyotirlingas of Lord Shiva and
                attracts thousands of devotees every day. Many pilgrims require guidance regarding
                temple entry, darshan timings, and ritual procedures. Our team helps devotees complete
                their darshan smoothly and peacefully.
            </p>
            <ul>
                <li>Temple entry and darshan guidance</li>
                <li>VIP darshan assistance</li>
                <li>Local support for devotees</li>
                <li>Guidance for temple rituals and aarti timings</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-hotel"></i>
            <h5>Ujjain Accommodation Booking Assistance</h5>
            <p>
                A comfortable stay is an important part of a peaceful pilgrimage experience.
                Divya Dham Guides helps devotees arrange clean and convenient accommodation near
                Mahakaleshwar Temple so that your spiritual journey remains relaxed and well organized.
            </p>
            <ul>
                <li>Hotels located near Mahakaleshwar Temple</li>
                <li>Clean and hygienic rooms for families and devotees</li>
                <li>Budget and premium stay options available</li>
                <li>Accommodation support for families and groups</li>
                <li>Easy booking assistance based on your travel dates</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-bus"></i>
            <h5>Ujjain Travel Support & Temple Tour</h5>
            <ul>
                <li>Pickup & drop from Indore Airport and Ujjain Railway Station</li>
                <li>Local temple tours in Ujjain</li>
                <li>Private transport for families and groups</li>
                <li>Visits to famous temples like Harsiddhi Mata and Kal Bhairav</li>
                <li>Comfortable vehicles for a smooth pilgrimage journey</li>
            </ul>
        </div>

    </div>
</section>


<!-- ========== MAHAKALESHWAR CAROUSEL ========== -->
<section class="mahakaleshwar-carousel" id="mahakaleshwar-services">
    <div class="container">
        <h2 class="slider-heading">Mahakaleshwar Temple Rituals & Ujjain Spiritual Experiences</h2>

        <div class="carousel-wrapper">
            <button class="nav-btn prev" aria-label="Previous">&#10094;</button>

            <div class="carousel-track">

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/mahakaleshwar2.jfif') }}" alt="Mahakaleshwar Darshan Ujjain">
                    </div>
                    <div class="card-content">
                        <h3>Mahakaleshwar Darshan</h3>
                        <ul>
                            <li>Temple entry guidance</li>
                            <li>VIP Darshan assistance</li>
                            <li>Local support for devotees</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Mahakaleshwar Darshan"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/mahakal-bhasma-aarti.webp') }}" alt="Bhasma Aarti Darshan Mahakaleshwar">
                    </div>
                    <div class="card-content">
                        <h3>Bhasma Aarti Darshan</h3>
                        <ul>
                            <li>Bhasma Aarti booking guidance</li>
                            <li>Temple entry assistance</li>
                            <li>Complete darshan support</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Bhasma Aarti Darshan"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/mahakal-Rudrabhishek_Puja.jpg') }}" alt="Rudrabhishek Puja Mahakaleshwar">
                    </div>
                    <div class="card-content">
                        <h3>Rudrabhishek Puja</h3>
                        <ul>
                            <li>Puja arrangement</li>
                            <li>Experienced priest</li>
                            <li>Complete ritual guidance</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Rudrabhishek Puja"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/SayanAartiDarshan.webp') }}" alt="Sayan Aarti Darshan Ujjain">
                    </div>
                    <div class="card-content">
                        <h3>Sayan Aarti Darshan</h3>
                        <ul>
                            <li>Aarti darshan assistance</li>
                            <li>Temple guidance</li>
                            <li>Devotional experience</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Sayan Aarti Darshan"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/ujjain-to-omkareshwar.webp') }}" alt="Ujjain Temple Tour">
                    </div>
                    <div class="card-content">
                        <h3>Ujjain Temple Tour</h3>
                        <ul>
                            <li>Mahakaleshwar VIP Darshan</li>
                            <li>Harsiddhi Mata Temple</li>
                            <li>Kal Bhairav Temple</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Ujjain Temple Tour"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/kalbhairav.jpg') }}" alt="Kal Bhairav Temple Darshan Ujjain">
                    </div>
                    <div class="card-content">
                        <h3>Kal Bhairav Temple Darshan</h3>
                        <ul>
                            <li>VIP darshan guidance</li>
                            <li>Temple ritual information</li>
                            <li>Local temple visit support</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Kal Bhairav Temple Darshan"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/harsiddhh.jpg') }}" alt="Harsiddhi Mata Temple Ujjain">
                    </div>
                    <div class="card-content">
                        <h3>Harsiddhi Mata Temple Darshan</h3>
                        <ul>
                            <li>Shakti Peeth darshan guidance</li>
                            <li>Puja arrangement support</li>
                            <li>Temple history explanation</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Harsiddhi Mata Temple Darshan Ujjain"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/Mangalnath.webp') }}" alt="Mangalnath Temple Ujjain">
                    </div>
                    <div class="card-content">
                        <h3>Mangalnath Temple Darshan</h3>
                        <ul>
                            <li>Mangal Dosh Nivaran puja</li>
                            <li>Temple darshan guidance</li>
                            <li>Ritual support</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Mangalnath Temple Darshan Ujjain"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/Chintaman.webp') }}" alt="Chintaman Ganesh Temple Ujjain">
                    </div>
                    <div class="card-content">
                        <h3>Chintaman Ganesh Temple Darshan</h3>
                        <ul>
                            <li>Ancient Ganesh temple darshan</li>
                            <li>Puja arrangement</li>
                            <li>Pilgrimage guidance</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Chintaman Ganesh Temple Darshan Ujjain"
                           class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img">
                        <img src="{{ asset('images/ujjain-to-omkareshwar.webp') }}" alt="Ujjain Omkareshwar Combined Tour">
                    </div>
                    <div class="card-content">
                        <h3>Ujjain–Omkareshwar Combined Tour</h3>
                        <ul>
                            <li>Mahakaleshwar darshan</li>
                            <li>Omkareshwar Jyotirlinga visit</li>
                            <li>Comfortable transport & guide</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Ujjain Omkareshwar Combined Tour"
                           class="whatsapp-btn" target="_blank">Book Now</a>
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


<!-- ========== MAHAKALESHWAR ABOUT ========== -->
<section class="mahakaleshwar-about" id="mahakaleshwar-about">
    <div class="container">
        <div class="about-card">

            <h2 class="about-main-heading">Mahakaleshwar Jyotirlinga – Darshan & Puja Assistance</h2>
            <h4 class="about-sub-heading">Divya Dham Guides Association</h4>

            <p>
                <strong>Shri Mahakaleshwar Jyotirlinga</strong> is one of the sacred
                <span class="highlight">12 Jyotirlingas of Lord Shiva</span>, located in the holy city
                of <strong>Ujjain, Madhya Pradesh</strong>. Devotees from across India visit this
                powerful temple to seek <span class="highlight">divine blessings of Lord Shiva</span>,
                <span class="highlight">spiritual protection</span>,
                <span class="highlight">inner strength</span>, and
                <span class="highlight">peaceful spiritual energy</span>.
            </p>

            <p>
                Mahakaleshwar Temple is one of the most important pilgrimage destinations in India
                and is famous for the sacred <span class="highlight">Bhasma Aarti</span>, a unique
                early morning ritual dedicated to Lord Mahakal. The temple is located in
                <strong>Ujjain city on the banks of the Shipra River</strong>, which has been a
                spiritual center of Hindu culture and devotion for thousands of years.
            </p>

            <p>
                At <strong>Divya Dham Guides Association</strong>, we provide
                <span class="highlight">Mahakaleshwar VIP Darshan Assistance</span>,
                <span class="highlight">Bhasma Aarti Guidance</span>,
                <span class="highlight">Rudrabhishek Puja Arrangements</span>, and
                <span class="highlight">Ujjain Temple Tour Support</span>
                to ensure your pilgrimage remains peaceful, organized, and spiritually fulfilling.
            </p>

            <p>
                Ujjain is also home to several sacred temples such as
                <span class="highlight">Kal Bhairav Temple</span>,
                <span class="highlight">Harsiddhi Mata Temple</span>,
                <span class="highlight">Mangalnath Temple</span>, and
                <span class="highlight">Chintaman Ganesh Temple</span>.
                Many devotees combine these temple visits with Mahakaleshwar darshan
                to complete a powerful spiritual journey in Ujjain.
            </p>

            <div class="about-cta">
                <a href="https://divyadhamguides.com/blogs" class="explore-btn">Explore More</a>
            </div>

        </div>
    </div>
</section>


<!-- ========== FREE CALL ========== -->
<section class="free-call-section" id="mahakaleshwar-contact">
    <div class="container text-center">
        <h2>Need Help Planning Your Mahakaleshwar Jyotirlinga Visit?</h2>
        <p>
            Not sure which Mahakaleshwar darshan or Ujjain temple tour package is right for you?
            Our team will guide you with complete details about Bhasma Aarti, Rudrabhishek puja,
            temple darshan, and Ujjain pilgrimage options —
            <strong>in just a quick 2–3 minute call!</strong>
        </p>
        <a href="tel:+919109507691" class="btn-call-now">
            <i class="fa-solid fa-phone-volume"></i> Call Now for Free Consultation
            <span>📞 +91 9109507691</span>
        </a>
    </div>
</section>


<!-- ========== WHY CHOOSE ========== -->
<section class="choose-section" id="mahakaleshwar-why-choose">
    <div class="container">
        <div class="section-head"><h2>Why Choose Divya Dham Guides</h2></div>
        <div class="choose-grid">
            <div class="choose-item"><i class="fa-solid fa-headset"></i> 24×7 Support for devotees</div>
            <div class="choose-item"><i class="fa-solid fa-ticket"></i> Hassle-free Mahakaleshwar Darshan & Bhasma Aarti assistance</div>
            <div class="choose-item"><i class="fa-solid fa-user-tie"></i> Experienced local pilgrimage guides</div>
            <div class="choose-item"><i class="fa-solid fa-hotel"></i> Clean accommodation & comfortable travel options</div>
            <div class="choose-item"><i class="fa-solid fa-route"></i> Customized Ujjain & Omkareshwar pilgrimage packages</div>
        </div>
    </div>
</section>


<!-- ========== FAQ ========== -->
<section class="faq-section py-5 bg-light" id="mahakaleshwar-faq">
    <div class="container">
        <div class="section-head text-center mb-4">
            <h2 class="fw-bold text-dark">Frequently Asked Questions</h2>
            <p class="text-muted">Quick answers to common queries about Mahakaleshwar Jyotirlinga Darshan & Ujjain Temple Visits.</p>
        </div>

        <div class="accordion" id="mahakaleshwarFaqAccordion">

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mahakaleshwarFaq1" aria-expanded="true">
                        1. How can I plan Mahakaleshwar Jyotirlinga Darshan?
                    </button>
                </h2>
                <div id="mahakaleshwarFaq1" class="accordion-collapse collapse show" data-bs-parent="#mahakaleshwarFaqAccordion">
                    <div class="accordion-body">
                        You can contact Divya Dham Guides for complete assistance in planning your
                        Mahakaleshwar darshan. Our team helps with temple guidance, Bhasma Aarti
                        information, travel planning, and accommodation coordination for a smooth
                        and peaceful pilgrimage.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mahakaleshwarFaq2">
                        2. What rituals can be performed at Mahakaleshwar Temple?
                    </button>
                </h2>
                <div id="mahakaleshwarFaq2" class="accordion-collapse collapse" data-bs-parent="#mahakaleshwarFaqAccordion">
                    <div class="accordion-body">
                        Devotees commonly perform Rudrabhishek, Abhishek, and participate in sacred
                        aartis like the famous Bhasma Aarti and Sayan Aarti at Mahakaleshwar Temple.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mahakaleshwarFaq3">
                        3. Do you provide accommodation near Mahakaleshwar Temple?
                    </button>
                </h2>
                <div id="mahakaleshwarFaq3" class="accordion-collapse collapse" data-bs-parent="#mahakaleshwarFaqAccordion">
                    <div class="accordion-body">
                        Yes, we assist devotees with clean and comfortable accommodation options
                        near Mahakaleshwar Temple suitable for families, senior citizens,
                        and pilgrimage groups.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mahakaleshwarFaq4">
                        4. Which temples can be visited along with Mahakaleshwar?
                    </button>
                </h2>
                <div id="mahakaleshwarFaq4" class="accordion-collapse collapse" data-bs-parent="#mahakaleshwarFaqAccordion">
                    <div class="accordion-body">
                        Devotees often visit Kal Bhairav Temple, Harsiddhi Mata Temple,
                        Mangalnath Temple, and Chintaman Ganesh Temple along with
                        Mahakaleshwar Jyotirlinga during their Ujjain pilgrimage.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mahakaleshwarFaq5">
                        5. What is Bhasma Aarti at Mahakaleshwar Temple?
                    </button>
                </h2>
                <div id="mahakaleshwarFaq5" class="accordion-collapse collapse" data-bs-parent="#mahakaleshwarFaqAccordion">
                    <div class="accordion-body">
                        Bhasma Aarti is a unique early morning ritual performed at Mahakaleshwar
                        Temple where Lord Shiva is worshipped with sacred ash. It is one of the most
                        famous rituals in Ujjain and attracts devotees from across the world.
                    </div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mahakaleshwarFaq6">
                        6. Can Mahakaleshwar and Omkareshwar be visited together?
                    </button>
                </h2>
                <div id="mahakaleshwarFaq6" class="accordion-collapse collapse" data-bs-parent="#mahakaleshwarFaqAccordion">
                    <div class="accordion-body">
                        Yes, many devotees visit Mahakaleshwar Jyotirlinga in Ujjain and
                        Omkareshwar Jyotirlinga together as part of a sacred Jyotirlinga
                        pilgrimage in Madhya Pradesh.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ========== CTA ========== -->
<section class="cta-section" id="mahakaleshwar-cta">
    <h3>Ready to plan your Mahakaleshwar Jyotirlinga pilgrimage?</h3>
    <p>VIP darshan guidance, Bhasma Aarti assistance & complete Ujjain temple tour packages available.</p>
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
                    <img src="{{ asset('images/baglamukhi_mata.jfif') }}" alt="Maa Baglamukhi Nalkheda Dham">
                    <div class="card-content">
                        <h5 class="card-title">Maa Baglamukhi Nalkheda</h5>
                        <p class="card-text">Experience divine power and protection at Maa Baglamukhi Nalkheda Dham.</p>
                        <a href="/baglamukhi.html" class="btn-book">Book Now</a>
                        <a href="/baglamukhi.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/omkareshwar.jfif') }}" alt="Omkareshwar Jyotirlinga">
                    <div class="card-content">
                        <h5 class="card-title">Omkareshwar Jyotirlinga</h5>
                        <p class="card-text">Visit sacred island temple of Omkareshwar on the holy Narmada river.</p>
                        <a href="/omkareshwar.html" class="btn-book">Book Now</a>
                        <a href="/omkareshwar.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/kashi.jfif') }}" alt="Kashi Vishwanath Varanasi">
                    <div class="card-content">
                        <h5 class="card-title">Kashi Vishwanath Darshan</h5>
                        <p class="card-text">Seek divine blessings at Kashi Vishwanath Jyotirlinga and Ganga Aarti.</p>
                        <a href="https://divyadhamguides.com/kashi" class="btn-book">Book Now</a>
                        <a href="https://divyadhamguides.com/kashi" class="stretched-link"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ========== BACK TO HOME — ABOVE FOOTER ========== -->
<div class="back-home-section">
    <a href="https://divyadhamguides.com/">
        <i class="fa-solid fa-house"></i> Back to Home
    </a>
</div>
@endsection