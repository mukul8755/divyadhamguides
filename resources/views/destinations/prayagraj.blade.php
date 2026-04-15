@extends('layout')

@section('title', 'Ayodhya Ram Mandir Darshan Booking & Tour Packages | Divya Dham Guides')
@section('meta_description', 'Book Ayodhya Ram Mandir Darshan online with Divya Dham Guides. VIP, Sugam & regular
    darshan tickets, tour package and Ayodhya–Varanasi trips available.')


@section('content')
    <style>
        :root {
            --primary: #b30000;
            --gold: #FFD700;
            --green: #e85500;
            --accent: #ff9933;
            --text: #111;
            --bg: #ffffff;
            --slide-duration: 12s;
            /* Prayagraj theme color */
            --p-dark: #851919;
            --p-mid:  #701111;
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
           HEADER — same as baglamukhi / omkareshwar
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

        .prayagraj-slide1 { background-image: url('images/prayagraj-banner1.jpg'); animation-delay: 0s; }
        .prayagraj-slide2 { background-image: url('images/prayagraj-banner2.jpg'); animation-delay: 4s; }
        .prayagraj-slide3 { background-image: url('images/prayagraj-banner3.jpg'); animation-delay: 8s; }

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
        .section-head h2 { color: var(--p-dark); font-family: "Playfair Display", serif; font-weight: 700; }
        .section-head p  { color: #555; font-size: 0.98rem; }

        /* ========== FEATURE GRID ========== */
        .feature-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px; }
        .feature-card { background: #f4fff0; border: 2px solid rgba(100,180,0,0.3); border-radius: 12px; padding: 20px; text-align: center; transition: transform .3s ease, box-shadow .3s ease; }
        .feature-card:hover { transform: translateY(-6px); box-shadow: 0 8px 20px rgba(26,77,0,0.2); }
        .feature-card i  { color: var(--p-dark); font-size: 2rem; margin-bottom: 10px; }
        .feature-card h5 { color: var(--p-dark); font-weight: 700; }
        .feature-card p  { color: #333; font-size: 0.95rem; }
        .feature-card ul { text-align: left !important; margin-left: 0; padding-left: 18px; }
        @media (max-width: 991px) { .feature-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 767px) { .feature-grid { grid-template-columns: 1fr; } }

        /* ========== PRAYAGRAJ CAROUSEL — FIXED (same approach as baglamukhi) ========== */
        .prayagraj-carousel { padding: 80px 0; background: linear-gradient(135deg, #1a2a00, #3a5200); }
        .prayagraj-carousel .slider-heading { text-align: center; color: #FFD700; font-weight: 700; margin-bottom: 50px; }
        .prayagraj-carousel .carousel-wrapper { position: relative; overflow: hidden; padding: 0 50px; }

        @media (max-width: 600px) {
            .prayagraj-carousel .carousel-wrapper { padding: 0 40px; }
        }

        .prayagraj-carousel .carousel-track { display: flex; will-change: transform; }

        .prayagraj-carousel .puja-card {
            flex: 0 0 320px;
            width: 320px;
            margin: 0 12px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        }

        @media (max-width: 600px) {
            .prayagraj-carousel .puja-card {
                flex: 0 0 calc(100vw - 80px);
                width: calc(100vw - 80px);
                margin: 0 8px;
            }
        }

        .prayagraj-carousel .card-img img { width: 100%; height: 240px; object-fit: cover; display: block; }
        .prayagraj-carousel .card-content { padding: 20px; background: #fff; }
        .prayagraj-carousel .card-content h3 { color: #1a4d00; font-size: 18px; margin-bottom: 10px; text-align: left; }
        .prayagraj-carousel .card-content ul { font-size: 14px; padding-left: 18px; margin-bottom: 15px; text-align: left; }

        .prayagraj-carousel .whatsapp-btn { display: inline-block; background: #25D366; color: #fff; padding: 8px 16px; border-radius: 30px; font-size: 14px; text-decoration: none; transition: 0.3s ease; }
        .prayagraj-carousel .whatsapp-btn:hover { background: #1ebe5d; }

        .prayagraj-carousel .nav-btn {
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

        .prayagraj-carousel .nav-btn:hover { background: #ffc200; }
        .prayagraj-carousel .prev { left: 6px; }
        .prayagraj-carousel .next { right: 6px; }
        .prayagraj-carousel .note { font-size: 0.95rem; color: #ccc; text-align: center; }

        /* Note attractive buttons */
        .note-btn { display: inline-flex; align-items: center; gap: 6px; font-weight: 700; font-size: 0.88rem; padding: 7px 16px; border-radius: 25px; text-decoration: none; transition: all 0.25s ease; white-space: nowrap; }
        .note-btn-enquire { background: #FFD700; color: #1a4d00; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-enquire:hover { background: #ffb300; color: #0f2d00; transform: translateY(-2px); }
        .note-btn-call { background: #25D366; color: #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-call:hover { background: #1ebe5d; color: #fff; transform: translateY(-2px); }
        @media (max-width: 480px) { .note-btn { font-size: 0.82rem; padding: 6px 13px; } }

        /* ========== PRAYAGRAJ ABOUT ========== */
        .prayagraj-about { padding: 100px 20px; background: linear-gradient(135deg, #1a3300, #2e5500); display: flex; justify-content: center; }
        .prayagraj-about .container { max-width: 1000px; margin: auto; }
        .prayagraj-about .about-card { background: #fff; padding: 60px 50px; border-radius: 20px; box-shadow: 0 25px 60px rgba(0,0,0,0.4); text-align: center; }
        .prayagraj-about .about-main-heading { font-size: 32px; color: var(--p-dark); margin-bottom: 10px; }
        .prayagraj-about .about-sub-heading  { font-size: 18px; color: #b8860b; margin-bottom: 30px; }
        .prayagraj-about .about-card p { font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px; }
        .prayagraj-about .highlight { color: var(--p-dark); font-weight: 600; }
        .prayagraj-about .about-cta { margin-top: 40px; }
        .prayagraj-about .explore-btn { background: linear-gradient(45deg, #FFD700, #ffcc00); color: var(--p-dark); padding: 14px 35px; border-radius: 40px; text-decoration: none; font-weight: 600; font-size: 16px; transition: 0.3s ease; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
        .prayagraj-about .explore-btn:hover { background: var(--p-dark); color: #fff; transform: translateY(-3px); }
        @media (max-width: 768px) { .prayagraj-about .about-card { padding: 40px 25px; } .prayagraj-about .about-main-heading { font-size: 24px; } }

        /* ========== FREE CALL ========== */
        .free-call-section { background: linear-gradient(90deg, var(--p-dark), var(--p-mid)); color: #fff; padding: 70px 20px; text-align: center; }
        .free-call-section h2 { font-family: "Playfair Display", serif; font-weight: 700; margin-bottom: 15px; }
        .free-call-section p { color: #fff; font-size: 1.05rem; max-width: 850px; margin: 0 auto 25px; line-height: 1.7; }
        .btn-call-now { background: #fff; color: var(--p-dark); border-radius: 12px; padding: 14px 35px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-block; box-shadow: 0 4px 10px rgba(0,0,0,0.2); transition: all 0.3s ease; text-align: center; }
        .btn-call-now:hover { background: var(--gold); color: var(--p-dark); transform: scale(1.03); }
        .btn-call-now i { margin-right: 8px; }
        .btn-call-now span { display: block; font-size: 0.9rem; color: #555; }
        .btn-call-now:hover span { color: var(--p-dark); }

        /* ========== WHY CHOOSE ========== */
        .choose-section { background: linear-gradient(0deg, rgba(255,215,0,0.15), #fff); padding: 60px 20px; }
        .choose-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 30px; }
        .choose-item { background: #fff; border-left: 5px solid var(--p-dark); padding: 20px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: transform .3s ease; }
        .choose-item:hover { transform: translateY(-5px); }
        .choose-item i { color: var(--p-dark); margin-right: 10px; }
        @media (max-width: 991px) { .choose-grid { grid-template-columns: 1fr; } }

        /* ========== FAQ ========== */
        .faq-section { padding: 60px 20px; background: #f6fff2; }
        .accordion-button { color: var(--p-dark); font-weight: 600; }
        .accordion-button:not(.collapsed) { background: rgba(255,215,0,0.2); }

        /* ========== CTA ========== */
        .cta-section { background: linear-gradient(90deg, var(--p-dark), var(--p-mid)); color: #fff; text-align: center; padding: 60px 20px; }
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
        <div class="bg-slide prayagraj-slide1"></div>
        <div class="bg-slide prayagraj-slide2"></div>
        <div class="bg-slide prayagraj-slide3"></div>
    </div>

    <div class="hero-card" role="region" aria-label="Prayagraj hero content">
        <h1 class="brand">Divya Dham Guides Association</h1>
        <h2 class="title">Prayagraj Triveni Sangam Darshan & Kumbh Nagari Pilgrimage Assistance</h2>
        <p class="desc">
            Experience the divine blessings at the sacred <strong>Triveni Sangam, Prayagraj</strong> — where the holy rivers <strong>Ganga, Yamuna, and the invisible Saraswati</strong> meet to form one of the most powerful spiritual confluences in the world. Known as <strong>Tirth Raj</strong> — the King of all Pilgrimages — Prayagraj holds a supreme position in Hindu tradition and is the sacred land of the <strong>Kumbh Mela, Magh Mela, Pind Daan, and Sangam Snan</strong>. Divya Dham Guides provides reliable assistance for Triveni Sangam darshan, Sangam boat rides, Pind Daan &amp; Shraddh rituals, Akshayavat darshan, Hanuman Temple visit, Kumbh Snan guidance, accommodation arrangements, and local pilgrimage travel support.
        </p>
        <div class="hero-ctas">
            <a href="/contact" class="btn btn-gold">Book Prayagraj Darshan</a>
            <a href="/contact" class="btn btn-outline-red">Enquiry Now</a>
        </div>
    </div>
</section>


<!-- ========== SERVICES ========== -->
<section class="container my-5">
    <div class="section-head">
        <h2>Our Prayagraj Triveni Sangam Darshan & Pilgrimage Services</h2>
        <p>Divya Dham Guides provides complete assistance to make your Prayagraj pilgrimage peaceful, organized, and spiritually fulfilling. From Triveni Sangam darshan and Kumbh Snan guidance to Pind Daan rituals, Akshayavat darshan, accommodation coordination, and local travel support — our team manages everything carefully so devotees can focus fully on prayer and devotion.</p>
    </div>

    <div class="feature-grid">

        <div class="feature-card">
            <i class="fa-solid fa-water"></i>
            <h5>Triveni Sangam Darshan & Sangam Snan Assistance</h5>
            <p>Triveni Sangam is the holiest confluence of Ganga, Yamuna, and invisible Saraswati rivers. A holy bath at the Sangam is believed to wash away all sins and grant moksha. Many first-time devotees need guidance on safe ghat access, boat arrangements, and proper ritual procedures.</p>
            <ul>
                <li>Sangam Snan guidance and safe ghat access coordination</li>
                <li>Organized boat ride arrangements to the Sangam point</li>
                <li>Guidance for Puja, Tarpan, and ritual offerings at Sangam</li>
                <li>Support during Kumbh Mela, Magh Mela, and regular pilgrimage visits</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-hotel"></i>
            <h5>Prayagraj Accommodation Booking Assistance</h5>
            <p>A comfortable and clean stay near the Sangam area is essential for a peaceful pilgrimage. Divya Dham Guides helps devotees arrange hygienic accommodation options near Triveni Sangam and the key temples of Prayagraj so your spiritual journey remains relaxed and well-organized.</p>
            <ul>
                <li>Hotels and guesthouses near Triveni Sangam and Prayagraj temples</li>
                <li>Clean and hygienic rooms for families, senior devotees, and groups</li>
                <li>Budget to premium stay options available</li>
                <li>Special tent/camp accommodation support during Kumbh and Magh Mela seasons</li>
                <li>Easy booking assistance based on your travel dates and group size</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-bus"></i>
            <h5>Prayagraj Travel Support & Local Pilgrimage Tour</h5>
            <ul>
                <li>Pickup &amp; drop from Prayagraj Junction Railway Station, Civil Lines, and Prayagraj Airport</li>
                <li>Local transport for Sangam, temple visits, and Akshayavat darshan</li>
                <li>Organized pilgrimage circuit covering Triveni Sangam, Hanuman Temple, Akshayavat, and Alopi Devi Temple</li>
                <li>Private vehicle for families, senior citizens, and pilgrimage groups</li>
                <li>Safe and comfortable journey with experienced local support</li>
                <li>Combined Prayagraj–Varanasi–Ayodhya pilgrimage coordination also available</li>
            </ul>
        </div>

    </div>
</section>


<!-- ========== PRAYAGRAJ CAROUSEL ========== -->
<section class="prayagraj-carousel" id="prayagraj-services">
    <div class="container">
        <h2 class="slider-heading">Prayagraj Triveni Sangam Special Rituals & Spiritual Experiences</h2>

        <div class="carousel-wrapper">
            <button class="nav-btn prev" aria-label="Previous">&#10094;</button>
            <div class="carousel-track">

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/triveni-sangam-darshan.jpg') }}" alt="Triveni Sangam Darshan Prayagraj"></div>
                    <div class="card-content">
                        <h3>🕉 Triveni Sangam Darshan & Sangam Snan</h3>
                        <ul>
                            <li>Sacred holy dip at Ganga–Yamuna–Saraswati confluence</li>
                            <li>Guided Sangam ghat access and safe entry</li>
                            <li>Puja and Tarpan arrangement at Sangam</li>
                            <li>Experienced local guide assistance</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Triveni Sangam Darshan Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/sangam-boat-ride.jpg') }}" alt="Sangam Boat Ride Prayagraj"></div>
                    <div class="card-content">
                        <h3>Sangam Boat Ride & Sunrise Darshan</h3>
                        <ul>
                            <li>Peaceful boat ride to the Sangam confluence point</li>
                            <li>Witness the meeting of Ganga and Yamuna waters</li>
                            <li>Sunrise and sunset boat ride options available</li>
                            <li>Photography guidance and spiritual explanation</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Sangam Boat Ride at Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/pind-daan-prayagraj.jpg') }}" alt="Pind Daan Shraddh Prayagraj"></div>
                    <div class="card-content">
                        <h3>Pind Daan & Shraddh Rituals at Prayagraj</h3>
                        <ul>
                            <li>Sacred Pitru rituals at Triveni Sangam</li>
                            <li>Experienced Pandit Ji Arrangement</li>
                            <li>Complete Puja Samagri provided</li>
                            <li>Ghat arrangement and ritual guidance</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Pind Daan and Shraddh at Prayagraj Triveni Sangam" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/akshayavat-darshan.jpg') }}" alt="Akshayavat Darshan Prayagraj"></div>
                    <div class="card-content">
                        <h3>Akshayavat & Patalpuri Temple Darshan</h3>
                        <ul>
                            <li>Darshan of the immortal sacred Banyan Tree</li>
                            <li>Patalpuri Temple visit inside Allahabad Fort</li>
                            <li>Entry coordination and temple guidance</li>
                            <li>Spiritual history explanation by local guide</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Akshayavat Darshan at Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/hanuman-temple-prayagraj.jpg') }}" alt="Bade Hanuman Ji Temple Prayagraj"></div>
                    <div class="card-content">
                        <h3>Bade Hanuman Ji Temple Darshan</h3>
                        <ul>
                            <li>Visit the unique reclining Hanuman statue at Sangam</li>
                            <li>Puja and Darshan assistance</li>
                            <li>Temple ritual guidance</li>
                            <li>Spiritual significance explanation</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Bade Hanuman Ji Temple Darshan Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/kumbh-snan-prayagraj.jpg') }}" alt="Kumbh Snan Magh Mela Prayagraj"></div>
                    <div class="card-content">
                        <h3>Kumbh Snan & Magh Mela Assistance</h3>
                        <ul>
                            <li>Kumbh Snan planning and coordination</li>
                            <li>Safe ghat and bathing area guidance</li>
                            <li>Accommodation near Sangam during Mela</li>
                            <li>Akhara Sadhus darshan and local support</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Kumbh Snan and Magh Mela assistance Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/alopi-devi-temple.jpg') }}" alt="Alopi Devi Temple Prayagraj"></div>
                    <div class="card-content">
                        <h3>Alopi Devi Temple Darshan</h3>
                        <ul>
                            <li>Visit the unique Shakti Peeth of Maa Alopi Devi</li>
                            <li>Puja arrangement and darshan guidance</li>
                            <li>Temple ritual support</li>
                            <li>Experienced local guide</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Alopi Devi Temple Darshan Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/mankameshwar-temple-prayagraj.jpg') }}" alt="Mankameshwar Mahadev Temple Prayagraj"></div>
                    <div class="card-content">
                        <h3>Mankameshwar Mahadev Temple Darshan</h3>
                        <ul>
                            <li>Ancient Shiva temple on Yamuna banks</li>
                            <li>Puja and Abhishek arrangement</li>
                            <li>Temple darshan guidance</li>
                            <li>Spiritual tour support</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Mankameshwar Mahadev Temple Darshan Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/nagvasuki-temple-prayagraj.jpg') }}" alt="Nagvasuki Temple Prayagraj"></div>
                    <div class="card-content">
                        <h3>Nagvasuki Temple & Bharadwaj Ashram Visit</h3>
                        <ul>
                            <li>Nagvasuki Temple — sacred shrine of Lord Vasuki</li>
                            <li>Bharadwaj Ashram — ancient Ramayana-linked site</li>
                            <li>Temple darshan guidance</li>
                            <li>Spiritual history explanation</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to visit Nagvasuki Temple and Bharadwaj Ashram Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/prayagraj-pilgrimage-tour.jpg') }}" alt="Prayagraj Complete Pilgrimage Tour"></div>
                    <div class="card-content">
                        <h3>Prayagraj Complete Pilgrimage Tour</h3>
                        <ul>
                            <li>Triveni Sangam Darshan &amp; Snan</li>
                            <li>All major temples covered in one tour</li>
                            <li>Comfortable vehicle &amp; experienced guide</li>
                            <li>Custom itinerary for families and groups</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Complete Pilgrimage Tour Prayagraj" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

            </div><!-- /.carousel-track -->
            <button class="nav-btn next" aria-label="Next">&#10095;</button>
        </div><!-- /.carousel-wrapper -->

        <p class="note mt-5">
            <strong>Note:</strong> Divya Dham Guides arranges all temple schedules, Pandit Ji, and Pilgrimage Support for you —
            <a href="/contact" class="note-btn note-btn-enquire"><i class="fa-solid fa-calendar-check"></i> Book / Enquire</a>
            &nbsp;or&nbsp;
            <a href="tel:+919109507691" class="note-btn note-btn-call"><i class="fa-solid fa-phone"></i> +91 9109507691</a>
        </p>
    </div>
</section>


<!-- ========== PRAYAGRAJ ABOUT ========== -->
<section class="prayagraj-about" id="prayagraj-about">
    <div class="container">
        <div class="about-card">
            <h2 class="about-main-heading">Prayagraj – Tirth Raj, Triveni Sangam & Kumbh Nagari</h2>
            <h4 class="about-sub-heading">Divya Dham Guides Association</h4>
            <p><strong>Prayagraj</strong> — revered as <span class="highlight">Tirth Raj</span>, the King of all Pilgrimages — is one of the most sacred cities of India, located at the divine confluence of the holy rivers <span class="highlight">Ganga, Yamuna, and the invisible Saraswati</span>. According to Hindu scriptures, Lord Brahma himself performed the first Yagna at this sacred land, making it a place of supreme spiritual significance for all Hindus. Devotees believe that a holy bath at the <span class="highlight">Triveni Sangam</span> washes away all sins and grants <span class="highlight">Moksha (liberation)</span>.</p>
            <p>Prayagraj is the sacred land of the world-famous <span class="highlight">Kumbh Mela</span> — the largest spiritual gathering on earth — held every 12 years, and the annual <span class="highlight">Magh Mela</span> held every year during the month of Magh (January–February). Prayagraj is also famous for the sacred <span class="highlight">Akshayavat</span> (the immortal Banyan Tree inside Allahabad Fort), the <span class="highlight">Bade Hanuman Ji Temple</span> at the Sangam, <span class="highlight">Alopi Devi Temple</span>, <span class="highlight">Mankameshwar Mahadev Temple</span>, and <span class="highlight">Nagvasuki Temple</span>.</p>
            <p>At <strong>Divya Dham Guides Association</strong>, we provide <span class="highlight">Triveni Sangam Darshan Assistance</span>, <span class="highlight">Sangam Boat Ride Arrangements</span>, <span class="highlight">Pind Daan &amp; Shraddh Ritual Coordination</span>, <span class="highlight">Kumbh &amp; Magh Mela Snan Guidance</span>, <span class="highlight">Temple Tour Support</span>, and <span class="highlight">Pilgrimage Travel Assistance</span> so that your Prayagraj Yatra remains peaceful, organized, and spiritually fulfilling.</p>
            <p>Prayagraj is ideally combined with a pilgrimage to <span class="highlight">Kashi (Varanasi)</span> and <span class="highlight">Ayodhya</span> — the holy triangle of Uttar Pradesh. Our team helps you plan this complete <span class="highlight">Uttar Pradesh Tirtha Yatra</span> in a single smooth and well-organized pilgrimage journey.</p>
            <div class="about-cta">
                <a href="https://divyadhamguides.com/blogs" class="explore-btn">Explore More</a>
            </div>
        </div>
    </div>
</section>


<!-- ========== FREE CALL ========== -->
<section class="free-call-section" id="prayagraj-contact">
    <div class="container text-center">
        <h2>Need Help Planning Your Prayagraj Triveni Sangam Yatra?</h2>
        <p>Not sure how to plan your Prayagraj pilgrimage — Sangam Snan, Pind Daan, Akshayavat darshan, or Kumbh Mela arrangements? Our team will guide you with complete details about all rituals, temple visits, accommodation, and travel support — <strong>in just a quick 2–3 minute call!</strong></p>
        <a href="tel:+919109507691" class="btn-call-now">
            <i class="fa-solid fa-phone-volume"></i> Call Now for Free Consultation
            <span>📞 +91 9109507691</span>
        </a>
    </div>
</section>


<!-- ========== WHY CHOOSE ========== -->
<section class="choose-section" id="prayagraj-why-choose">
    <div class="container">
        <div class="section-head"><h2>Why Choose Divya Dham Guides</h2></div>
        <div class="choose-grid">
            <div class="choose-item"><i class="fa-solid fa-headset"></i> 24×7 Support for devotees during Prayagraj Yatra</div>
            <div class="choose-item"><i class="fa-solid fa-water"></i> Hassle-free Triveni Sangam Snan and boat ride assistance</div>
            <div class="choose-item"><i class="fa-solid fa-user-tie"></i> Experienced local pilgrimage guides in Prayagraj</div>
            <div class="choose-item"><i class="fa-solid fa-hotel"></i> Clean accommodation &amp; comfortable travel near Sangam area</div>
            <div class="choose-item"><i class="fa-solid fa-route"></i> Customized Prayagraj, Kashi &amp; Ayodhya combined pilgrimage packages</div>
        </div>
    </div>
</section>


<!-- ========== FAQ ========== -->
<section class="faq-section py-5 bg-light" id="prayagraj-faq">
    <div class="container">
        <div class="section-head text-center mb-4">
            <h2 class="fw-bold" style="color:#1a4d00;">Frequently Asked Questions</h2>
            <p class="text-muted">Quick answers to common queries about Prayagraj Triveni Sangam Darshan &amp; Pilgrimage Services.</p>
        </div>

        <div class="accordion" id="prayagrajFaqAccordion">

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#prayagrajFaq1" aria-expanded="true">
                        1. How can I plan Triveni Sangam Darshan and Sangam Snan at Prayagraj?
                    </button>
                </h2>
                <div id="prayagrajFaq1" class="accordion-collapse collapse show" data-bs-parent="#prayagrajFaqAccordion">
                    <div class="accordion-body">You can contact Divya Dham Guides for complete assistance in planning your Prayagraj pilgrimage. Our team helps with Triveni Sangam darshan, safe ghat access, boat ride arrangements, Puja and Tarpan coordination, and travel planning for a smooth and peaceful Sangam Snan experience.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prayagrajFaq2">
                        2. What is the significance of Triveni Sangam at Prayagraj?
                    </button>
                </h2>
                <div id="prayagrajFaq2" class="accordion-collapse collapse" data-bs-parent="#prayagrajFaqAccordion">
                    <div class="accordion-body">Triveni Sangam is the sacred confluence of the holy rivers Ganga, Yamuna, and the invisible Saraswati at Prayagraj. It is considered the most powerful tirtha (pilgrimage site) in Hinduism. A holy bath here is believed to wash away all sins accumulated over lifetimes and grant Moksha (spiritual liberation). It is also the site of the world-famous Kumbh Mela held every 12 years.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prayagrajFaq3">
                        3. Can Pind Daan and Shraddh rituals be performed at Prayagraj?
                    </button>
                </h2>
                <div id="prayagrajFaq3" class="accordion-collapse collapse" data-bs-parent="#prayagrajFaqAccordion">
                    <div class="accordion-body">Yes, Prayagraj is one of the most sacred places in India for performing Pind Daan and Shraddh rituals for the peace of ancestors. Divya Dham Guides helps arrange an experienced Pandit Ji, complete Puja Samagri, and proper ghat access for these sacred Pitru rituals at Triveni Sangam.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prayagrajFaq4">
                        4. Which temples and sacred places can be visited in Prayagraj?
                    </button>
                </h2>
                <div id="prayagrajFaq4" class="accordion-collapse collapse" data-bs-parent="#prayagrajFaqAccordion">
                    <div class="accordion-body">Prayagraj is home to many important sacred sites including Triveni Sangam, Akshayavat (inside Allahabad Fort), Patalpuri Temple, Bade Hanuman Ji Temple, Alopi Devi Temple, Mankameshwar Mahadev Temple, Nagvasuki Temple, and Bharadwaj Ashram. Our team helps plan a comprehensive pilgrimage tour covering all these sacred spots comfortably.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prayagrajFaq5">
                        5. What is Kumbh Mela and when is the next Kumbh at Prayagraj?
                    </button>
                </h2>
                <div id="prayagrajFaq5" class="accordion-collapse collapse" data-bs-parent="#prayagrajFaqAccordion">
                    <div class="accordion-body">Kumbh Mela is the world's largest spiritual gathering held at Prayagraj every 12 years when planetary positions align to create the most auspicious bathing period at Triveni Sangam. The Maha Kumbh 2025 was a historic event with over 45 crore devotees visiting. The annual Magh Mela takes place every year during January–February at Prayagraj. Divya Dham Guides provides full planning and on-ground support for both events.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prayagrajFaq6">
                        6. Can Prayagraj, Varanasi, and Ayodhya be visited together?
                    </button>
                </h2>
                <div id="prayagrajFaq6" class="accordion-collapse collapse" data-bs-parent="#prayagrajFaqAccordion">
                    <div class="accordion-body">Yes, Prayagraj, Varanasi (Kashi), and Ayodhya form the holy pilgrimage triangle of Uttar Pradesh. Many devotees visit all three sacred cities together as part of a complete Uttar Pradesh Tirtha Yatra. Divya Dham Guides offers customized combined pilgrimage packages covering all three cities in a single organized and comfortable journey.</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ========== CTA ========== -->
<section class="cta-section" id="prayagraj-cta">
    <h3>Ready to plan your Prayagraj Triveni Sangam Yatra?</h3>
    <p>Sangam Snan guidance, Pind Daan ritual assistance, Kumbh Mela support &amp; complete Prayagraj–Kashi–Ayodhya pilgrimage packages available.</p>
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
                    <img src="{{ asset('images/ayodhya.jpg') }}" alt="Ayodhya Ram Mandir">
                    <div class="card-content">
                        <h5 class="card-title">Ayodhya Ram Mandir</h5>
                        <p class="card-text">Seek divine blessings at the sacred Ram Mandir and holy ghats of Ayodhya.</p>
                        <a href="ayodhya.html" class="btn-book">Book Now</a>
                        <a href="ayodhya.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/kashi.jfif') }}" alt="Kashi Vishwanath Varanasi">
                    <div class="card-content">
                        <h5 class="card-title">Kashi Vishwanath Darshan</h5>
                        <p class="card-text">Seek divine blessings at Kashi Vishwanath Jyotirlinga and Ganga Aarti.</p>
                        <a href="kashi.html" class="btn-book">Book Now</a>
                        <a href="kashi.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/baglamukhi_mata.jfif') }}" alt="Maa Baglamukhi Nalkheda">
                    <div class="card-content">
                        <h5 class="card-title">Maa Baglamukhi Nalkheda</h5>
                        <p class="card-text">Experience divine power and protection at Maa Baglamukhi Nalkheda Dham.</p>
                        <a href="baglamukhi.html" class="btn-book">Book Now</a>
                        <a href="baglamukhi.html" class="stretched-link"></a>
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


<!-- ========== FOOTER ========== -->
<footer class="site-footer">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-4 col-md-6">
                <p class="footer-brand">🕉 Divya Dham Guides</p>
                <p class="footer-tagline">Your trusted partner for spiritual journeys in Ayodhya, Varanasi, Prayagraj, Ujjain &amp; Nalkheda.</p>
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
                    <span>Ayodhya, Varanasi, Prayagraj,<br>Ujjain &amp; Nalkheda, India</span>
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

<!-- ========== HEADER JS (same as baglamukhi / omkareshwar) ========== -->
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

<!-- ========== CAROUSEL JS (same logic as baglamukhi / omkareshwar) ========== -->
<script>
(function () {
    const track   = document.querySelector('.prayagraj-carousel .carousel-track');
    const wrapper = document.querySelector('.prayagraj-carousel .carousel-wrapper');
    const prevBtn = document.querySelector('.prayagraj-carousel .prev');
    const nextBtn = document.querySelector('.prayagraj-carousel .next');

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