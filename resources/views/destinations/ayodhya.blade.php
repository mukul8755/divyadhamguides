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
            /* Ayodhya saffron-orange theme */
            --a-dark: #7a2d00;
            --a-mid:  #b34400;
            --a-light: #ff7020;
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
           HEADER — FULLY RESPONSIVE (same as Baglamukhi)
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

        .header-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            flex-shrink: 0;
            z-index: 2;
        }

        .header-logo img { height: 52px; width: auto; object-fit: contain; }

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

        .dropdown-menu-custom a i { color: var(--primary); width: 16px; flex-shrink: 0; }
        .dropdown-menu-custom a:hover { background: #fff5f5; color: var(--primary); }

        @media (min-width: 992px) {
            .header-nav > li:hover .dropdown-menu-custom { display: block; }
        }

        .header-nav > li .dropdown-menu-custom.open { display: block; }
        .header-nav > li > button .chevron { font-size: 11px; transition: transform 0.25s; }
        .header-nav > li > button.open .chevron { transform: rotate(180deg); }

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

            .dropdown-menu-custom a {
                padding: 12px 36px;
                border-bottom: 1px solid #f5e5e5;
                font-size: 0.9rem;
            }
        }

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
        .back-to-home-top:hover { background: #b30000; color: #fff; }

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

        .ayodhya-slide1 { background-image: url('images/ayodhya-banner1.jpg'); animation-delay: 0s; }
        .ayodhya-slide2 { background-image: url('images/ayodhya-banner2.jpg'); animation-delay: 4s; }
        .ayodhya-slide3 { background-image: url('images/ayodhya-banner3.jpg'); animation-delay: 8s; }

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
        .btn-gold:hover { background: linear-gradient(90deg, #ffb300, #ffe45c); color: var(--a-dark) !important; transform: translateY(-3px); }
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
        .section-head h2 { color: var(--a-dark); font-family: "Playfair Display", serif; font-weight: 700; }
        .section-head p  { color: #555; font-size: 0.98rem; }

        /* ========== FEATURE GRID ========== */
        .feature-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px; }
        .feature-card { background: #fff8f0; border: 2px solid rgba(255,153,0,0.3); border-radius: 12px; padding: 20px; text-align: center; transition: transform .3s ease, box-shadow .3s ease; }
        .feature-card:hover { transform: translateY(-6px); box-shadow: 0 8px 20px rgba(180,70,0,0.25); }
        .feature-card i  { color: var(--a-dark); font-size: 2rem; margin-bottom: 10px; }
        .feature-card h5 { color: var(--a-dark); font-weight: 700; }
        .feature-card p  { color: #333; font-size: 0.95rem; }
        .feature-card ul { text-align: left !important; margin-left: 0; padding-left: 18px; }
        @media (max-width: 991px) { .feature-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 767px) { .feature-grid { grid-template-columns: 1fr; } }

        /* ========== AYODHYA CAROUSEL — saffron gradient ========== */
        .ayodhya-carousel { padding: 80px 0; background: linear-gradient(135deg, #3d1500, #7a2d00); }
        .ayodhya-carousel .slider-heading { text-align: center; color: #FFD700; font-weight: 700; margin-bottom: 50px; }
        .ayodhya-carousel .carousel-wrapper { position: relative; overflow: hidden; padding: 0 50px; }

        @media (max-width: 600px) {
            .ayodhya-carousel .carousel-wrapper { padding: 0 40px; }
        }

        .ayodhya-carousel .carousel-track { display: flex; will-change: transform; }

        .ayodhya-carousel .puja-card {
            flex: 0 0 320px;
            width: 320px;
            margin: 0 12px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        }

        @media (max-width: 600px) {
            .ayodhya-carousel .puja-card { flex: 0 0 calc(100vw - 80px); width: calc(100vw - 80px); margin: 0 8px; }
        }

        .ayodhya-carousel .card-img img { width: 100%; height: 240px; object-fit: cover; display: block; }
        .ayodhya-carousel .card-content { padding: 20px; background: #fff; }
        .ayodhya-carousel .card-content h3 { color: var(--a-dark); font-size: 18px; margin-bottom: 10px; text-align: left; }
        .ayodhya-carousel .card-content ul { font-size: 14px; padding-left: 18px; margin-bottom: 15px; text-align: left; }

        .ayodhya-carousel .whatsapp-btn { display: inline-block; background: #25D366; color: #fff; padding: 8px 16px; border-radius: 30px; font-size: 14px; text-decoration: none; transition: 0.3s ease; }
        .ayodhya-carousel .whatsapp-btn:hover { background: #1ebe5d; }

        .ayodhya-carousel .nav-btn {
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

        .ayodhya-carousel .nav-btn:hover { background: #ffc200; }
        .ayodhya-carousel .prev { left: 6px; }
        .ayodhya-carousel .next { right: 6px; }
        .ayodhya-carousel .note { font-size: 0.95rem; color: #ccc; text-align: center; }

        /* Note attractive buttons */
        .note-btn { display: inline-flex; align-items: center; gap: 6px; font-weight: 700; font-size: 0.88rem; padding: 7px 16px; border-radius: 25px; text-decoration: none; transition: all 0.25s ease; white-space: nowrap; }
        .note-btn-enquire { background: #FFD700; color: var(--a-dark); box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-enquire:hover { background: #ffb300; color: #5a1500; transform: translateY(-2px); }
        .note-btn-call { background: #25D366; color: #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-call:hover { background: #1ebe5d; color: #fff; transform: translateY(-2px); }
        @media (max-width: 480px) { .note-btn { font-size: 0.82rem; padding: 6px 13px; } }

        /* ========== AYODHYA ABOUT ========== */
        .ayodhya-about { padding: 100px 20px; background: linear-gradient(135deg, #4a1a00, #7a3200); display: flex; justify-content: center; }
        .ayodhya-about .container { max-width: 1000px; margin: auto; }
        .ayodhya-about .about-card { background: #fff; padding: 60px 50px; border-radius: 20px; box-shadow: 0 25px 60px rgba(0,0,0,0.4); text-align: center; }
        .ayodhya-about .about-main-heading { font-size: 32px; color: var(--a-dark); margin-bottom: 10px; }
        .ayodhya-about .about-sub-heading  { font-size: 18px; color: #b8860b; margin-bottom: 30px; }
        .ayodhya-about .about-card p { font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px; }
        .ayodhya-about .highlight { color: var(--a-dark); font-weight: 600; }
        .ayodhya-about .about-cta { margin-top: 40px; }
        .ayodhya-about .explore-btn { background: linear-gradient(45deg, #FFD700, #ffcc00); color: var(--a-dark); padding: 14px 35px; border-radius: 40px; text-decoration: none; font-weight: 600; font-size: 16px; transition: 0.3s ease; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
        .ayodhya-about .explore-btn:hover { background: var(--a-dark); color: #fff; transform: translateY(-3px); }
        @media (max-width: 768px) { .ayodhya-about .about-card { padding: 40px 25px; } .ayodhya-about .about-main-heading { font-size: 24px; } }

        /* ========== FREE CALL ========== */
        .free-call-section { background: linear-gradient(90deg, var(--a-dark), var(--a-mid)); color: #fff; padding: 70px 20px; text-align: center; }
        .free-call-section h2 { font-family: "Playfair Display", serif; font-weight: 700; margin-bottom: 15px; }
        .free-call-section p { color: #fff; font-size: 1.05rem; max-width: 850px; margin: 0 auto 25px; line-height: 1.7; }
        .btn-call-now { background: #fff; color: var(--a-dark); border-radius: 12px; padding: 14px 35px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-block; box-shadow: 0 4px 10px rgba(0,0,0,0.2); transition: all 0.3s ease; text-align: center; }
        .btn-call-now:hover { background: var(--gold); color: var(--a-dark); transform: scale(1.03); }
        .btn-call-now i { margin-right: 8px; }
        .btn-call-now span { display: block; font-size: 0.9rem; color: #555; }
        .btn-call-now:hover span { color: var(--a-dark); }

        /* ========== WHY CHOOSE ========== */
        .choose-section { background: linear-gradient(0deg, rgba(255,153,0,0.12), #fff); padding: 60px 20px; }
        .choose-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 30px; }
        .choose-item { background: #fff; border-left: 5px solid var(--a-dark); padding: 20px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: transform .3s ease; }
        .choose-item:hover { transform: translateY(-5px); }
        .choose-item i { color: var(--a-dark); margin-right: 10px; }
        @media (max-width: 991px) { .choose-grid { grid-template-columns: 1fr; } }

        /* ========== FAQ ========== */
        .faq-section { padding: 60px 20px; background: #fffbf5; }
        .accordion-button { color: var(--a-dark); font-weight: 600; }
        .accordion-button:not(.collapsed) { background: rgba(255,153,0,0.15); }

        /* ========== CTA ========== */
        .cta-section { background: linear-gradient(90deg, var(--a-dark), var(--a-mid)); color: #fff; text-align: center; padding: 60px 20px; }
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

        /* ========== BACK TO HOME — ABOVE FOOTER ========== */
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
        <div class="bg-slide ayodhya-slide1"></div>
        <div class="bg-slide ayodhya-slide2"></div>
        <div class="bg-slide ayodhya-slide3"></div>
    </div>

    <div class="hero-card" role="region" aria-label="Ayodhya hero content">
        <h1 class="brand">Divya Dham Guides Association</h1>
        <h2 class="title">Ayodhya Ram Mandir Darshan Booking & Pilgrimage Assistance</h2>
        <p class="desc">
            Experience the divine blessings of <strong>Shri Ram Lalla</strong> at the sacred <strong>Shri Ram Janmabhoomi Mandir, Ayodhya</strong> — the birthplace of Lord Shri Ram and one of the seven most sacred cities of Hinduism in Uttar Pradesh. Ayodhya is revered as the <strong>eternal city of Lord Ram</strong>, where millions of devotees visit to seek blessings at Ram Mandir, Hanuman Garhi, Kanak Bhawan, and the holy ghats of <strong>Saryu River</strong>. Divya Dham Guides provides reliable assistance for Ram Mandir darshan coordination, Hanuman Garhi puja, Saryu Aarti experience, accommodation arrangements, and local pilgrimage travel support so that your Ayodhya Yatra remains peaceful, organized, and spiritually fulfilling.
        </p>
        <div class="hero-ctas">
            <a href="/contact" class="btn btn-gold">Book Ram Mandir Darshan</a>
            <a href="/contact" class="btn btn-outline-red">Enquiry Now</a>
        </div>
    </div>
</section>


<!-- ========== SERVICES ========== -->
<section class="container my-5">
    <div class="section-head">
        <h2>Our Ayodhya Ram Mandir Darshan & Pilgrimage Services</h2>
        <p>Divya Dham Guides provides complete assistance to make your Ayodhya pilgrimage peaceful, organized, and spiritually fulfilling. From Ram Mandir darshan coordination and Hanuman Garhi puja arrangements to Saryu Aarti experience, accommodation coordination, and temple tour support — our team manages everything carefully so devotees can focus fully on devotion.</p>
    </div>

    <div class="feature-grid">

        <div class="feature-card">
            <i class="fa-solid fa-gopuram"></i>
            <h5>Ram Mandir Darshan & Temple Assistance</h5>
            <p>Shri Ram Janmabhoomi Mandir is the most sacred temple in Ayodhya, consecrated in January 2024. Many pilgrims need proper guidance for darshan coordination, temple entry timings, and VIP darshan procedures. Our team ensures smooth and peaceful Ram Lalla darshan for every devotee.</p>
            <ul>
                <li>Ram Mandir darshan guidance and temple entry coordination</li>
                <li>VIP darshan assistance and queue management support</li>
                <li>Guidance for Hanuman Garhi, Kanak Bhawan, and major temple visits</li>
                <li>Experienced local guide for spiritual significance and temple history</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-hotel"></i>
            <h5>Ayodhya Accommodation Booking Assistance</h5>
            <p>A comfortable and clean stay near the Ram Mandir area is essential for a peaceful pilgrimage. Divya Dham Guides helps devotees arrange hygienic accommodation near key temples so your spiritual journey remains relaxed and well-organized.</p>
            <ul>
                <li>Hotels and dharamshalas near Ram Mandir and Saryu Ghat</li>
                <li>Clean and hygienic rooms for families, senior devotees, and groups</li>
                <li>Budget to premium stay options available</li>
                <li>Easy booking assistance based on your travel dates and group size</li>
                <li>Accommodation support during Ram Navami, Deepotsav, and festival seasons</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-bus"></i>
            <h5>Ayodhya Travel Support & Temple Tour</h5>
            <ul>
                <li>Pickup &amp; drop from Ayodhya Dham Railway Station and nearby cities</li>
                <li>Local transport for Ram Mandir, Hanuman Garhi, Kanak Bhawan, and Saryu Ghat</li>
                <li>Organized pilgrimage circuit covering all major sacred spots of Ayodhya</li>
                <li>Private vehicle for families, senior citizens, and pilgrimage groups</li>
                <li>Safe and comfortable journey with experienced local support</li>
                <li>Combined Ayodhya–Varanasi–Prayagraj pilgrimage coordination also available</li>
            </ul>
        </div>

    </div>
</section>


<!-- ========== AYODHYA CAROUSEL ========== -->
<section class="ayodhya-carousel" id="ayodhya-services">
    <div class="container">
        <h2 class="slider-heading">Ayodhya Sacred Places & Spiritual Experiences</h2>

        <div class="carousel-wrapper">
            <button class="nav-btn prev" aria-label="Previous">&#10094;</button>
            <div class="carousel-track">

                <!-- Card 1 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/ram-mandir-ayodhya.jpg') }}" alt="Ram Mandir Darshan Ayodhya"></div>
                    <div class="card-content">
                        <h3>🕉 Shri Ram Janmabhoomi Mandir Darshan</h3>
                        <ul>
                            <li>Darshan of Ram Lalla at the sacred birthplace of Lord Shri Ram</li>
                            <li>Temple entry guidance and VIP darshan assistance</li>
                            <li>Local support and spiritual explanation</li>
                            <li>Sanctum darshan coordination</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Ram Mandir Darshan Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/hanuman-garhi-ayodhya.jpg') }}" alt="Hanuman Garhi Darshan Ayodhya"></div>
                    <div class="card-content">
                        <h3>Hanuman Garhi Darshan</h3>
                        <ul>
                            <li>Visit the 76-step fort temple of Lord Hanuman</li>
                            <li>Traditional first stop before Ram Mandir darshan</li>
                            <li>Puja and darshan guidance</li>
                            <li>Temple history explanation</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Hanuman Garhi Darshan Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/kanak-bhawan-ayodhya.jpg') }}" alt="Kanak Bhawan Ayodhya"></div>
                    <div class="card-content">
                        <h3>Kanak Bhawan Temple Darshan</h3>
                        <ul>
                            <li>Visit the golden palace — gift of Maa Kaikeyi to Sita Ji</li>
                            <li>Beautiful Ram–Sita idol darshan</li>
                            <li>Temple guidance and puja assistance</li>
                            <li>Spiritual significance explanation</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Kanak Bhawan Darshan Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/saryu-aarti-ayodhya.jpg') }}" alt="Saryu Ghat Aarti Ayodhya"></div>
                    <div class="card-content">
                        <h3>Saryu Ghat & Saryu Aarti Darshan</h3>
                        <ul>
                            <li>Attend the divine evening Saryu Aarti at Ram Ki Paidi</li>
                            <li>Holy dip at sacred Saryu River</li>
                            <li>Ghat darshan guidance</li>
                            <li>Sunrise boat ride on Saryu available</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to attend Saryu Aarti and Ghat Darshan Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/nageshwarnath-temple-ayodhya.jpg') }}" alt="Nageshwarnath Temple Ayodhya"></div>
                    <div class="card-content">
                        <h3>Nageshwarnath Temple Darshan</h3>
                        <ul>
                            <li>Ancient Shiva temple built by Kush (son of Lord Ram)</li>
                            <li>One of the most revered temples in Ayodhya</li>
                            <li>Puja and darshan guidance</li>
                            <li>Mahashivratri special darshan support</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Nageshwarnath Temple Darshan Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/treta-ke-thakur-ayodhya.jpg') }}" alt="Treta Ke Thakur Ayodhya"></div>
                    <div class="card-content">
                        <h3>Treta Ke Thakur Temple Darshan</h3>
                        <ul>
                            <li>Ancient temple linked with Lord Ram's Ashvamedha Yagna</li>
                            <li>Rare black sandstone idols of Ram, Sita, Lakshman, and Hanuman</li>
                            <li>Temple darshan guidance</li>
                            <li>Spiritual history explanation</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Treta Ke Thakur Temple Darshan Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/sita-ki-rasoi-ayodhya.jpg') }}" alt="Sita Ki Rasoi Ayodhya"></div>
                    <div class="card-content">
                        <h3>Sita Ki Rasoi & Mani Parvat Visit</h3>
                        <ul>
                            <li>Visit Sita Ki Rasoi — sacred kitchen of Maa Sita</li>
                            <li>Mani Parvat — hill built by King Ashoka</li>
                            <li>Spiritual significance and mythology explanation</li>
                            <li>Local guide support</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to visit Sita Ki Rasoi and Mani Parvat Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/ram-ki-paidi-ayodhya.jpg') }}" alt="Ram Ki Paidi Saryu Ghat Ayodhya"></div>
                    <div class="card-content">
                        <h3>Ram Ki Paidi — Saryu River Bathing Ghat</h3>
                        <ul>
                            <li>Sacred series of bathing ghats on Saryu River</li>
                            <li>Holy Saryu Snan guidance</li>
                            <li>Morning aarti and ritual assistance</li>
                            <li>Peaceful spiritual experience</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to visit Ram Ki Paidi Saryu Ghat Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 9 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/valmiki-ramayan-bhavan-ayodhya.jpg') }}" alt="Valmiki Ramayan Bhavan Ayodhya"></div>
                    <div class="card-content">
                        <h3>Valmiki Ramayan Bhavan & Tulsi Smarak</h3>
                        <ul>
                            <li>Temple dedicated to Maharishi Valmiki — author of Ramayana</li>
                            <li>Tulsi Smarak — honors Goswami Tulsidas</li>
                            <li>Daily Ramayana discourses and chanting</li>
                            <li>Cultural and spiritual experience</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to visit Valmiki Ramayan Bhavan Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 10 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/ayodhya-complete-tour.jpg') }}" alt="Ayodhya Complete Pilgrimage Tour"></div>
                    <div class="card-content">
                        <h3>Ayodhya Complete Pilgrimage Tour</h3>
                        <ul>
                            <li>Ram Mandir + Hanuman Garhi + Kanak Bhawan</li>
                            <li>Saryu Ghat + Saryu Aarti experience</li>
                            <li>All major temples covered in one tour</li>
                            <li>Comfortable vehicle &amp; experienced local guide</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Complete Pilgrimage Tour Ayodhya" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <!-- Card 11 -->
                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/ayodhya-kashi-prayagraj-tour.jpg') }}" alt="Ayodhya Kashi Prayagraj Tour Package"></div>
                    <div class="card-content">
                        <h3>Ayodhya–Kashi–Prayagraj Combined Yatra</h3>
                        <ul>
                            <li>Ram Mandir darshan in Ayodhya</li>
                            <li>Kashi Vishwanath darshan in Varanasi</li>
                            <li>Triveni Sangam Snan in Prayagraj</li>
                            <li>Complete UP Tirtha Yatra in one package</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Ayodhya Kashi Prayagraj Combined Yatra" class="whatsapp-btn" target="_blank">Book Now</a>
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


<!-- ========== AYODHYA ABOUT ========== -->
<section class="ayodhya-about" id="ayodhya-about">
    <div class="container">
        <div class="about-card">
            <h2 class="about-main-heading">Ayodhya – Ram Janmabhoomi & Divine Pilgrimage City</h2>
            <h4 class="about-sub-heading">Divya Dham Guides Association</h4>
            <p>
                <strong>Ayodhya</strong> — the birthplace of <span class="highlight">Lord Shri Ram</span> — is one of the seven most sacred cities of Hinduism, situated on the sacred banks of the <span class="highlight">Saryu River</span> in Uttar Pradesh. Regarded as the <span class="highlight">eternal city of Lord Ram</span>, Ayodhya holds a supreme place in Hindu tradition, culture, and devotion. The magnificent <span class="highlight">Shri Ram Janmabhoomi Mandir</span>, consecrated on 22 January 2024, has made Ayodhya one of the most visited pilgrimage destinations in India.
            </p>
            <p>
                Ayodhya is home to several sacred temples and spiritual sites including <span class="highlight">Hanuman Garhi</span> — the fort temple of Lord Hanuman, <span class="highlight">Kanak Bhawan</span> — the golden palace gifted to Sita Ji, <span class="highlight">Nageshwarnath Temple</span> — built by Kush (son of Lord Ram), <span class="highlight">Treta Ke Thakur</span>, <span class="highlight">Sita Ki Rasoi</span>, and the divine <span class="highlight">Ram Ki Paidi ghats</span> on the Saryu River. The evening <span class="highlight">Saryu Aarti</span> at the ghats is a spiritually uplifting experience that every devotee cherishes.
            </p>
            <p>
                At <strong>Divya Dham Guides Association</strong>, we provide <span class="highlight">Ram Mandir Darshan Assistance</span>, <span class="highlight">Hanuman Garhi Puja Coordination</span>, <span class="highlight">Saryu Aarti Experience</span>, <span class="highlight">Temple Tour Support</span>, and <span class="highlight">Ayodhya Pilgrimage Travel Assistance</span> so that your entire yatra remains peaceful, organized, and spiritually fulfilling from the moment you arrive.
            </p>
            <p>
                Ayodhya is ideally combined with a pilgrimage to <span class="highlight">Kashi (Varanasi)</span> and <span class="highlight">Prayagraj</span> — the holy pilgrimage triangle of Uttar Pradesh. Our team helps you plan this complete <span class="highlight">Uttar Pradesh Tirtha Yatra</span> covering all three sacred cities in a single smooth and well-organized journey.
            </p>
            <div class="about-cta">
                <a href="https://divyadhamguides.com/blogs" class="explore-btn">Explore More</a>
            </div>
        </div>
    </div>
</section>


<!-- ========== FREE CALL ========== -->
<section class="free-call-section" id="ayodhya-contact">
    <div class="container text-center">
        <h2>Need Help Planning Your Ayodhya Ram Mandir Yatra?</h2>
        <p>Not sure how to plan your Ayodhya pilgrimage — Ram Mandir darshan, Hanuman Garhi visit, Saryu Aarti experience, or accommodation arrangements? Our team will guide you with complete details — <strong>in just a quick 2–3 minute call!</strong></p>
        <a href="tel:+919109507691" class="btn-call-now">
            <i class="fa-solid fa-phone-volume"></i> Call Now for Free Consultation
            <span>📞 +91 9109507691</span>
        </a>
    </div>
</section>


<!-- ========== WHY CHOOSE ========== -->
<section class="choose-section" id="ayodhya-why-choose">
    <div class="container">
        <div class="section-head"><h2>Why Choose Divya Dham Guides</h2></div>
        <div class="choose-grid">
            <div class="choose-item"><i class="fa-solid fa-headset"></i> 24×7 Support for devotees during Ayodhya Yatra</div>
            <div class="choose-item"><i class="fa-solid fa-ticket"></i> Hassle-free Ram Mandir darshan and VIP guidance</div>
            <div class="choose-item"><i class="fa-solid fa-user-tie"></i> Experienced local pilgrimage guides in Ayodhya</div>
            <div class="choose-item"><i class="fa-solid fa-hotel"></i> Clean accommodation &amp; comfortable travel near Ram Mandir</div>
            <div class="choose-item"><i class="fa-solid fa-route"></i> Customized Ayodhya, Kashi &amp; Prayagraj combined pilgrimage packages</div>
        </div>
    </div>
</section>


<!-- ========== FAQ ========== -->
<section class="faq-section py-5 bg-light" id="ayodhya-faq">
    <div class="container">
        <div class="section-head text-center mb-4">
            <h2 class="fw-bold" style="color:#7a2d00;">Frequently Asked Questions</h2>
            <p class="text-muted">Quick answers to common queries about Ayodhya Ram Mandir Darshan &amp; Pilgrimage Services.</p>
        </div>

        <div class="accordion" id="ayodhyaFaqAccordion">

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ayodhyaFaq1" aria-expanded="true">
                        1. How can I plan Ram Mandir Darshan at Ayodhya?
                    </button>
                </h2>
                <div id="ayodhyaFaq1" class="accordion-collapse collapse show" data-bs-parent="#ayodhyaFaqAccordion">
                    <div class="accordion-body">You can contact Divya Dham Guides for complete assistance in planning your Ram Mandir darshan. Our team helps with temple entry guidance, VIP darshan coordination, local transport, accommodation, and complete Ayodhya pilgrimage planning for a smooth and peaceful visit.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ayodhyaFaq2">
                        2. Which are the most important temples to visit in Ayodhya?
                    </button>
                </h2>
                <div id="ayodhyaFaq2" class="accordion-collapse collapse" data-bs-parent="#ayodhyaFaqAccordion">
                    <div class="accordion-body">The most important temples and sacred sites in Ayodhya include Shri Ram Janmabhoomi Mandir (Ram Mandir), Hanuman Garhi, Kanak Bhawan, Nageshwarnath Temple, Treta Ke Thakur, Sita Ki Rasoi, Valmiki Ramayan Bhavan, and the sacred Ram Ki Paidi ghats on the Saryu River. Our team helps plan a comfortable visit covering all these sacred spots.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ayodhyaFaq3">
                        3. What is the significance of Hanuman Garhi in Ayodhya?
                    </button>
                </h2>
                <div id="ayodhyaFaq3" class="accordion-collapse collapse" data-bs-parent="#ayodhyaFaqAccordion">
                    <div class="accordion-body">Hanuman Garhi is a revered 76-step fort temple dedicated to Lord Hanuman in Ayodhya. It is traditionally considered the first temple a devotee should visit before going to Shri Ram Janmabhoomi Mandir, as Lord Hanuman is the eternal devotee and protector of Lord Ram. The temple houses a beautiful idol of young Hanuman sitting on the lap of Maa Anjani.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ayodhyaFaq4">
                        4. Do you provide accommodation near Ram Mandir in Ayodhya?
                    </button>
                </h2>
                <div id="ayodhyaFaq4" class="accordion-collapse collapse" data-bs-parent="#ayodhyaFaqAccordion">
                    <div class="accordion-body">Yes, we assist devotees with clean and comfortable accommodation options near Ram Mandir and Saryu Ghat in Ayodhya, suitable for families, senior citizens, and pilgrimage groups. We coordinate budget to premium stay options based on your travel dates and requirements.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ayodhyaFaq5">
                        5. What is the Saryu Aarti at Ayodhya and how to attend it?
                    </button>
                </h2>
                <div id="ayodhyaFaq5" class="accordion-collapse collapse" data-bs-parent="#ayodhyaFaqAccordion">
                    <div class="accordion-body">Saryu Aarti is a divine evening ritual performed on the banks of the sacred Saryu River at Ram Ki Paidi ghats in Ayodhya. It is a spiritually powerful and visually beautiful experience similar to Ganga Aarti in Varanasi. Divya Dham Guides assists with seating arrangements, timing guidance, and ghat darshan coordination for the Saryu Aarti experience.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ayodhyaFaq6">
                        6. Can Ayodhya, Varanasi, and Prayagraj be visited together?
                    </button>
                </h2>
                <div id="ayodhyaFaq6" class="accordion-collapse collapse" data-bs-parent="#ayodhyaFaqAccordion">
                    <div class="accordion-body">Yes, Ayodhya, Kashi (Varanasi), and Prayagraj form the holy pilgrimage triangle of Uttar Pradesh. Many devotees visit all three sacred cities together as part of a complete Uttar Pradesh Tirtha Yatra. Divya Dham Guides offers customized combined pilgrimage packages covering all three cities in a single organized and comfortable journey.</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ========== CTA ========== -->
<section class="cta-section" id="ayodhya-cta">
    <h3>Ready to plan your Ayodhya Ram Mandir Yatra?</h3>
    <p>VIP darshan guidance, Hanuman Garhi puja assistance, Saryu Aarti experience &amp; complete Ayodhya–Kashi–Prayagraj pilgrimage packages available.</p>
    <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
        <a href="/contact" class="btn btn-gold">Plan Your Trip</a>
        <a href="tel:+919109507691" class="btn btn-outline-light">Call for Assistance</a>
    </div>
</section>


<!-- ========== OTHER DESTINATIONS ========== -->
<section class="destination-section">
    <div class="container">
        <div class="section-head mb-4">
            <h2 style="color:var(--a-dark); font-family:'Playfair Display',serif; font-weight:700;">Explore Our Other Sacred Destinations</h2>
        </div>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/kashi.jfif') }}" alt="Kashi Vishwanath Varanasi">
                    <div class="card-content">
                        <h5 class="card-title">Kashi Vishwanath Darshan</h5>
                        <p class="card-text">Seek divine blessings at Kashi Vishwanath Jyotirlinga and attend the sacred Ganga Aarti in Varanasi.</p>
                        <a href="kashi.html" class="btn-book">Book Now</a>
                        <a href="kashi.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/prayagraj-banner1.jpg') }}" alt="Prayagraj Triveni Sangam">
                    <div class="card-content">
                        <h5 class="card-title">Prayagraj – Triveni Sangam</h5>
                        <p class="card-text">Take the holy Sangam Snan at Ganga–Yamuna–Saraswati confluence and attend Kumbh Mela.</p>
                        <a href="prayagraj.html" class="btn-book">Book Now</a>
                        <a href="prayagraj.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/ujjain2.jpg') }}" alt="Mahakaleshwar Ujjain">
                    <div class="card-content">
                        <h5 class="card-title">Mahakaleshwar Ujjain</h5>
                        <p class="card-text">Seek blessings at Mahakaleshwar Jyotirlinga and attend the divine Bhasma Aarti in Ujjain.</p>
                        <a href="mahakaleshwar.html" class="btn-book">Book Now</a>
                        <a href="mahakaleshwar.html" class="stretched-link"></a>
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
<!-- ========== AYODHYA CAROUSEL JS ========== -->
<script>
(function () {
    const track   = document.querySelector('.ayodhya-carousel .carousel-track');
    const wrapper = document.querySelector('.ayodhya-carousel .carousel-wrapper');
    const prevBtn = document.querySelector('.ayodhya-carousel .prev');
    const nextBtn = document.querySelector('.ayodhya-carousel .next');

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
        const mL    = parseFloat(style.marginLeft)  || 0;
        const mR    = parseFloat(style.marginRight) || 0;
        cardWidth   = card.getBoundingClientRect().width + mL + mR;
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
        if (currentIndex >= total * 2) goTo(currentIndex - total, false);
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
