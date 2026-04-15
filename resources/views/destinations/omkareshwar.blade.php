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
           HEADER — FULLY RESPONSIVE (same as baglamukhi page)
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

        .header-logo img {
            height: 52px;
            width: auto;
            object-fit: contain;
        }

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

        .header-nav > li .dropdown-menu-custom.open { display: block; }

        .header-nav > li > button .chevron {
            font-size: 11px;
            transition: transform 0.25s;
        }
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

        .omkareshwar-slide1 { background-image: url('images/omkareshwar-banner1.jpg'); animation-delay: 0s; }
        .omkareshwar-slide2 { background-image: url('images/omkareshwar-banner2.jpg'); animation-delay: 4s; }
        .omkareshwar-slide3 { background-image: url('images/omkareshwar-banner3.jpg'); animation-delay: 8s; }

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

        /* ========== OMKARESHWAR CAROUSEL ========== */
        .omkareshwar-carousel { padding: 80px 0; background: linear-gradient(135deg, #2b0000, #5a0000); }
        .omkareshwar-carousel .slider-heading { text-align: center; color: #FFD700; font-weight: 700; margin-bottom: 50px; }
        .omkareshwar-carousel .carousel-wrapper { position: relative; overflow: hidden; padding: 0 50px; }

        @media (max-width: 600px) {
            .omkareshwar-carousel .carousel-wrapper { padding: 0 40px; }
        }

        .omkareshwar-carousel .carousel-track { display: flex; will-change: transform; }

        .omkareshwar-carousel .puja-card {
            flex: 0 0 320px;
            width: 320px;
            margin: 0 12px;
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        }

        @media (max-width: 600px) {
            .omkareshwar-carousel .puja-card {
                flex: 0 0 calc(100vw - 80px);
                width: calc(100vw - 80px);
                margin: 0 8px;
            }
        }

        .omkareshwar-carousel .card-img img { width: 100%; height: 240px; object-fit: cover; display: block; }
        .omkareshwar-carousel .card-content { padding: 20px; background: #fff; }
        .omkareshwar-carousel .card-content h3 { color: #b30000; font-size: 18px; margin-bottom: 10px; text-align: left; }
        .omkareshwar-carousel .card-content ul { font-size: 14px; padding-left: 18px; margin-bottom: 15px; text-align: left; }

        .omkareshwar-carousel .whatsapp-btn { display: inline-block; background: #25D366; color: #fff; padding: 8px 16px; border-radius: 30px; font-size: 14px; text-decoration: none; transition: 0.3s ease; }
        .omkareshwar-carousel .whatsapp-btn:hover { background: #1ebe5d; }

        .omkareshwar-carousel .nav-btn {
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

        .omkareshwar-carousel .nav-btn:hover { background: #ffc200; }
        .omkareshwar-carousel .prev { left: 6px; }
        .omkareshwar-carousel .next { right: 6px; }
        .omkareshwar-carousel .note { font-size: 0.95rem; color: #ccc; text-align: center; }

        .note-btn { display: inline-flex; align-items: center; gap: 6px; font-weight: 700; font-size: 0.88rem; padding: 7px 16px; border-radius: 25px; text-decoration: none; transition: all 0.25s ease; white-space: nowrap; }
        .note-btn-enquire { background: #FFD700; color: #7a0000; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-enquire:hover { background: #ffb300; color: #5a0000; transform: translateY(-2px); }
        .note-btn-call { background: #25D366; color: #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.3); }
        .note-btn-call:hover { background: #1ebe5d; color: #fff; transform: translateY(-2px); }
        @media (max-width: 480px) { .note-btn { font-size: 0.82rem; padding: 6px 13px; } }

        /* ========== OMKARESHWAR ABOUT ========== */
        .omkareshwar-about { padding: 100px 20px; background: linear-gradient(135deg, #3b0000, #6b0000); display: flex; justify-content: center; }
        .omkareshwar-about .container { max-width: 1000px; margin: auto; }
        .omkareshwar-about .about-card { background: #fff; padding: 60px 50px; border-radius: 20px; box-shadow: 0 25px 60px rgba(0,0,0,0.4); text-align: center; }
        .omkareshwar-about .about-main-heading { font-size: 32px; color: #7a0000; margin-bottom: 10px; }
        .omkareshwar-about .about-sub-heading  { font-size: 18px; color: #b8860b; margin-bottom: 30px; }
        .omkareshwar-about .about-card p { font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px; }
        .omkareshwar-about .highlight { color: #b30000; font-weight: 600; }
        .omkareshwar-about .about-cta { margin-top: 40px; }
        .omkareshwar-about .explore-btn { background: linear-gradient(45deg, #FFD700, #ffcc00); color: #7a0000; padding: 14px 35px; border-radius: 40px; text-decoration: none; font-weight: 600; font-size: 16px; transition: 0.3s ease; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
        .omkareshwar-about .explore-btn:hover { background: #b30000; color: #fff; transform: translateY(-3px); }
        @media (max-width: 768px) { .omkareshwar-about .about-card { padding: 40px 25px; } .omkareshwar-about .about-main-heading { font-size: 24px; } }

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
        <div class="bg-slide omkareshwar-slide1"></div>
        <div class="bg-slide omkareshwar-slide2"></div>
        <div class="bg-slide omkareshwar-slide3"></div>
    </div>

    <div class="hero-card" role="region" aria-label="Omkareshwar hero content">
        <h1 class="brand">Divya Dham Guides Association</h1>
        <h2 class="title">Omkareshwar Jyotirlinga Darshan Booking & Pilgrimage Assistance</h2>
        <p class="desc">
            Experience the divine blessings of Lord Shiva at the sacred Omkareshwar Jyotirlinga, one of the twelve holy Jyotirlingas located on the sacred Mandhata Island in the Narmada River, Madhya Pradesh. Devotees from across India visit Omkareshwar to seek spiritual peace, perform sacred rituals, and experience the powerful energy associated with the sacred sound "Om".
            Whether you are visiting for Jyotirlinga darshan, Abhishek pujan, Omkareshwar Parikrama, or a combined Mahakaleshwar–Omkareshwar pilgrimage, our experienced team ensures a smooth, organized, and spiritually fulfilling yatra so you can focus completely on devotion.
        </p>
        <div class="hero-ctas">
            <a href="/contact" class="btn btn-gold">Book Omkareshwar Darshan</a>
            <a href="/contact" class="btn btn-outline-red">Enquiry Now</a>
        </div>
    </div>
</section>


<!-- ========== SERVICES ========== -->
<section class="container my-5">
    <div class="section-head">
        <h2>Our Omkareshwar Jyotirlinga Darshan & Pilgrimage Services</h2>
        <p>Divya Dham Guides provides complete assistance to make your visit to Omkareshwar Jyotirlinga peaceful, organized, and spiritually fulfilling. From temple darshan guidance and Abhishek puja arrangements to accommodation coordination and local travel support, our team manages everything carefully so devotees can focus fully on prayer and devotion.</p>
    </div>

    <div class="feature-grid">

        <div class="feature-card">
            <i class="fa-solid fa-gopuram"></i>
            <h5>Omkareshwar Jyotirlinga Darshan Assistance</h5>
            <p>Omkareshwar Jyotirlinga is one of the twelve sacred Jyotirlingas of Lord Shiva, located on the holy Mandhata Island in the Narmada River. Many first-time devotees need proper guidance regarding temple entry, darshan timings, parikrama routes, and ritual procedures.</p>
            <ul>
                <li>We assist devotees with Omkareshwar Jyotirlinga Darshan and temple entry coordination.</li>
                <li>Our experienced local support team helps you understand temple rituals, darshan timings, and the proper worship sequence.</li>
                <li>We guide devotees regarding Omkareshwar Parikrama, Mamleshwar Temple visit, and nearby sacred spots.</li>
                <li>With our organized assistance, your Omkareshwar pilgrimage becomes calm, spiritually meaningful, and completely hassle-free.</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-hotel"></i>
            <h5>Omkareshwar Accommodation Booking Assistance</h5>
            <p>A comfortable stay is an important part of a peaceful pilgrimage experience. Divya Dham Guides helps devotees arrange clean, safe, and convenient accommodation options near Omkareshwar Temple so that your spiritual journey remains relaxed and well organized.</p>
            <ul>
                <li>Clean and comfortable stays located near Omkareshwar Jyotirlinga Temple.</li>
                <li>Hygienic and well-maintained rooms suitable for families and senior devotees.</li>
                <li>Accommodation options available for individuals, families, and pilgrimage groups.</li>
                <li>From budget guesthouses to comfortable premium hotel stays — multiple choices available.</li>
                <li>Simply share your travel dates and we will coordinate the best available accommodation for you.</li>
            </ul>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-bus"></i>
            <h5>Omkareshwar Travel Support & Pickup Services</h5>
            <ul>
                <li>Traveling to Omkareshwar becomes smooth and convenient with our organized transport assistance.</li>
                <li>Pickup & drop services from Indore Airport, Omkareshwar Road Railway Station, and nearby cities.</li>
                <li>Local vehicle arrangements for temple visits, parikrama routes, and Narmada ghat darshan.</li>
                <li>Private transfers for families, senior citizens, and group devotees.</li>
                <li>Comfortable and reliable vehicles ensuring a safe and peaceful journey.</li>
                <li>Our goal is to make your Omkareshwar pilgrimage well-planned, safe, and spiritually fulfilling.</li>
            </ul>
        </div>

    </div>
</section>


<!-- ========== OMKARESHWAR CAROUSEL ========== -->
<section class="omkareshwar-carousel" id="omkareshwar-services">
    <div class="container">
        <h2 class="slider-heading">Omkareshwar Jyotirlinga Special Rituals & Spiritual Services</h2>

        <div class="carousel-wrapper">
            <button class="nav-btn prev" aria-label="Previous">&#10094;</button>
            <div class="carousel-track">

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/omkareshwar-temple.jpg') }}" alt="Omkareshwar Jyotirlinga Darshan"></div>
                    <div class="card-content">
                        <h3>🕉 Omkareshwar Jyotirlinga Temple Darshan</h3>
                        <ul>
                            <li>VIP Darshan Assistance</li>
                            <li>Darshan at one of the holy 12 Jyotirlingas</li>
                            <li>Seek spiritual peace and divine blessings</li>
                            <li>Narmadeshwar Rudrabhishek & Pandit Guided Rituals</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Omkareshwar Jyotirlinga Darshan" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/narmadeshwar-shivling.jpg') }}" alt="Narmadeshwar Shivling Puja"></div>
                    <div class="card-content">
                        <h3>Narmadeshwar Shivling Puja & Rudrabhishek</h3>
                        <ul>
                            <li>Narmadeshwar Shivling from sacred Narmada River</li>
                            <li>Narmadeshwar Rudrabhishek</li>
                            <li>Pandit Guided Rituals</li>
                            <li>Sankalp Puja Available</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Narmadeshwar Shivling Rudrabhishek" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/narmada-aarti.jpg') }}" alt="Divine Narmada Blessings"></div>
                    <div class="card-content">
                        <h3>Divine Narmada Blessings</h3>
                        <ul>
                            <li>Narmada Snan & Parikrama</li>
                            <li>Morning & Evening Aarti</li>
                            <li>Sacred river rituals</li>
                            <li>Peaceful spiritual experience</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Narmada Rituals and Parikrama" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/mamleshwar-temple.jpg') }}" alt="Mamleshwar Jyotirlinga Darshan"></div>
                    <div class="card-content">
                        <h3>Mamleshwar Jyotirlinga Darshan</h3>
                        <ul>
                            <li>Visit the ancient Mamleshwar Temple</li>
                            <li>Temple VIP darshan guidance</li>
                            <li>Spiritual tour support</li>
                            <li>Pilgrim assistance</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to plan Mamleshwar Jyotirlinga Darshan" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/narmada-boating.jpg') }}" alt="Narmada River Boating"></div>
                    <div class="card-content">
                        <h3>Narmada River Boating</h3>
                        <ul>
                            <li>Peaceful boat ride on sacred Narmada River</li>
                            <li>Temple view from river</li>
                            <li>Safe boating experience</li>
                            <li>Ghat darshan guidance</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to book Narmada River Boating at Omkareshwar" class="whatsapp-btn" target="_blank">Book Now</a>
                    </div>
                </div>

                <div class="puja-card">
                    <div class="card-img"><img src="{{ asset('images/narmada-aarti-darshan.jpg') }}" alt="Narmada Aarti Darshan"></div>
                    <div class="card-content">
                        <h3>Narmada Aarti Darshan</h3>
                        <ul>
                            <li>Attend the divine evening Narmada Aarti</li>
                            <li>Aarti darshan assistance</li>
                            <li>Ghat visit guidance</li>
                            <li>Spiritual information</li>
                        </ul>
                        <a href="https://wa.me/919109507691?text=I want to attend Narmada Aarti Darshan" class="whatsapp-btn" target="_blank">Book Now</a>
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


<!-- ========== OMKARESHWAR ABOUT ========== -->
<section class="omkareshwar-about" id="omkareshwar-about">
    <div class="container">
        <div class="about-card">
            <h2 class="about-main-heading">Omkareshwar Jyotirlinga – Darshan & Puja Assistance</h2>
            <h4 class="about-sub-heading">Divya Dham Guides Association</h4>
            <p><strong>Omkareshwar Jyotirlinga</strong> is one of the sacred <span class="highlight">12 Jyotirlingas of Lord Shiva</span>, located on the holy <strong>Mandhata Island</strong> in the Narmada River, Madhya Pradesh. Devotees from across India visit this divine temple to seek <span class="highlight">spiritual peace</span>, <span class="highlight">inner strength</span>, <span class="highlight">divine blessings of Lord Shiva</span>, and <span class="highlight">positive life energy</span>.</p>
            <p>Situated around <strong>77 km from Indore in Madhya Pradesh</strong>, Omkareshwar is a deeply sacred pilgrimage destination where the holy <span class="highlight">Narmada River</span> flows around the island forming a natural shape resembling the sacred symbol <strong>"Om"</strong>. This unique spiritual geography makes Omkareshwar a powerful center for Shiva devotion, meditation, and temple worship.</p>
            <p>At <strong>Divya Dham Guides Association</strong>, we provide <span class="highlight">Omkareshwar Darshan Assistance</span>, <span class="highlight">Abhishek & Rudrabhishek Puja Booking</span>, <span class="highlight">Temple Guide Services</span>, and <span class="highlight">Pilgrimage Travel Support</span> so that your visit remains peaceful, organized, and spiritually fulfilling.</p>
            <p>Omkareshwar is considered highly sacred because it represents the divine vibration of <span class="highlight">"Om"</span>, symbolizing the universal consciousness of Lord Shiva. Devotees also perform the famous <span class="highlight">Omkareshwar Parikrama</span> around Mandhata Island, visiting several ancient temples and sacred ghats along the way.</p>
            <div class="about-cta">
                <a href="https://divyadhamguides.com/blogs" class="explore-btn">Explore More</a>
            </div>
        </div>
    </div>
</section>


<!-- ========== FREE CALL ========== -->
<section class="free-call-section" id="omkareshwar-contact">
    <div class="container text-center">
        <h2>Need Help Planning Your Omkareshwar Jyotirlinga Visit?</h2>
        <p>Not sure which Omkareshwar darshan or pilgrimage package is right for you? Our team will guide you with complete details about temple darshan, puja arrangements, travel support, and nearby pilgrimage options like Mahakaleshwar and Narmada Parikrama — <strong>in just a quick 2–3 minute call!</strong></p>
        <a href="tel:+919109507691" class="btn-call-now">
            <i class="fa-solid fa-phone-volume"></i> Call Now for Free Consultation
            <span>📞 +91 9109507691</span>
        </a>
    </div>
</section>


<!-- ========== WHY CHOOSE ========== -->
<section class="choose-section" id="omkareshwar-why-choose">
    <div class="container">
        <div class="section-head"><h2>Why Choose Divya Dham Guides</h2></div>
        <div class="choose-grid">
            <div class="choose-item"><i class="fa-solid fa-headset"></i> 24×7 Support for devotees</div>
            <div class="choose-item"><i class="fa-solid fa-ticket"></i> Hassle-free Omkareshwar Jyotirlinga Darshan assistance</div>
            <div class="choose-item"><i class="fa-solid fa-user-tie"></i> Experienced local pilgrimage guides</div>
            <div class="choose-item"><i class="fa-solid fa-hotel"></i> Clean accommodation & comfortable travel options</div>
            <div class="choose-item"><i class="fa-solid fa-route"></i> Customized Omkareshwar & Mahakaleshwar pilgrimage packages</div>
        </div>
    </div>
</section>


<!-- ========== FAQ ========== -->
<section class="faq-section py-5 bg-light" id="omkareshwar-faq">
    <div class="container">
        <div class="section-head text-center mb-4">
            <h2 class="fw-bold text-dark">Frequently Asked Questions</h2>
            <p class="text-muted">Quick answers to common queries about Omkareshwar Jyotirlinga Darshan & Pilgrimage Services.</p>
        </div>

        <div class="accordion" id="omkareshwarFaqAccordion">

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#omkareshwarFaq1" aria-expanded="true">
                        1. How can I plan Omkareshwar Jyotirlinga Darshan?
                    </button>
                </h2>
                <div id="omkareshwarFaq1" class="accordion-collapse collapse show" data-bs-parent="#omkareshwarFaqAccordion">
                    <div class="accordion-body">You can contact Divya Dham Guides for complete assistance in planning your Omkareshwar Jyotirlinga darshan. Our team helps with temple guidance, travel planning, accommodation coordination, and pilgrimage support for a smooth and peaceful visit.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#omkareshwarFaq2">
                        2. What rituals or pujas can be performed at Omkareshwar Temple?
                    </button>
                </h2>
                <div id="omkareshwarFaq2" class="accordion-collapse collapse" data-bs-parent="#omkareshwarFaqAccordion">
                    <div class="accordion-body">Devotees commonly perform Abhishek, Rudrabhishek, Narmadeshwar Shivling puja, and other traditional Shiva worship rituals at Omkareshwar. Our team can guide you regarding temple procedures and help coordinate the arrangements respectfully.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#omkareshwarFaq3">
                        3. Do you provide accommodation near Omkareshwar Temple?
                    </button>
                </h2>
                <div id="omkareshwarFaq3" class="accordion-collapse collapse" data-bs-parent="#omkareshwarFaqAccordion">
                    <div class="accordion-body">Yes, we assist devotees with clean and comfortable accommodation options near the Omkareshwar Jyotirlinga temple area, suitable for families, senior citizens, and group pilgrims.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#omkareshwarFaq4">
                        4. From which cities can I travel to Omkareshwar easily?
                    </button>
                </h2>
                <div id="omkareshwarFaq4" class="accordion-collapse collapse" data-bs-parent="#omkareshwarFaqAccordion">
                    <div class="accordion-body">Omkareshwar is well connected from major cities like Indore, Ujjain, and Khandwa. Many pilgrims visit Omkareshwar along with Mahakaleshwar Jyotirlinga in Ujjain as part of a combined Jyotirlinga pilgrimage.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#omkareshwarFaq5">
                        5. What is Omkareshwar Parikrama?
                    </button>
                </h2>
                <div id="omkareshwarFaq5" class="accordion-collapse collapse" data-bs-parent="#omkareshwarFaqAccordion">
                    <div class="accordion-body">Omkareshwar Parikrama is the sacred circumambulation of Mandhata Island, where devotees walk around the holy island while chanting Shiva mantras and visiting several ancient temples along the route.</div>
                </div>
            </div>

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#omkareshwarFaq6">
                        6. Can Omkareshwar and Mahakaleshwar be visited together?
                    </button>
                </h2>
                <div id="omkareshwarFaq6" class="accordion-collapse collapse" data-bs-parent="#omkareshwarFaqAccordion">
                    <div class="accordion-body">Yes, many devotees visit Omkareshwar Jyotirlinga and Mahakaleshwar Jyotirlinga together as part of a spiritual pilgrimage in Madhya Pradesh. Both temples are well connected and can be comfortably covered in a single yatra plan.</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ========== CTA ========== -->
<section class="cta-section" id="omkareshwar-cta">
    <h3>Ready to plan your Omkareshwar Jyotirlinga pilgrimage?</h3>
    <p>Temple darshan guidance, Rudrabhishek puja assistance & complete Omkareshwar–Mahakaleshwar pilgrimage packages available.</p>
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
                        <a href="baglamukhi.html" class="btn-book">Book Now</a>
                        <a href="baglamukhi.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="destination-card">
                    <img src="{{ asset('images/ujjain2.jpg') }}" alt="Mahakaleshwar Jyotirlinga Ujjain">
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

<!-- ========== HEADER JS (same as baglamukhi) ========== -->
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

<!-- ========== CAROUSEL JS (same logic as baglamukhi) ========== -->
<script>
(function () {
    const track   = document.querySelector('.omkareshwar-carousel .carousel-track');
    const wrapper = document.querySelector('.omkareshwar-carousel .carousel-wrapper');
    const prevBtn = document.querySelector('.omkareshwar-carousel .prev');
    const nextBtn = document.querySelector('.omkareshwar-carousel .next');

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