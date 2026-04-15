<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KG2CVF9W');
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-53NFYKVWNN"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-53NFYKVWNN');
    </script>

    {{-- Default Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Best Spiritual Tour Packages in Ayodhya, Varanasi and Prayagraj')</title>
    <meta name="description" content="@yield('meta_description', 'Default description of your site.')">

    <meta property="og:title" content="Divya Dham Guide Association - @yield('title')">
    <meta property="og:description" content="@yield('meta_description', 'Spiritual tour packages in Ayodhya, Varanasi & Prayagraj. 24/7 tour and travel agency for pilgrimage, darshan, and cultural journeys.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('meta_url', 'https://divyadhamguides.com')">
    <meta property="og:image" content="@yield('meta_image', asset('images/og-image.jpg'))">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-3.2.6.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <style>
        /* Floating Buttons */
        .floating-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 1055;
        }

        .floating-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 16px;
            border-radius: 50px;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .floating-btn:hover {
            transform: scale(1.1);
        }

        .btn-whatsapp {
            background-color: #25D366;
        }

        .btn-phone {
            background-color: #007bff;
        }
    </style>

    @stack('styles')
</head>

<body>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KG2CVF9W"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" id="mainNavbar">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fw-bold" href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo" style="height:50px;">
                </a>

                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars text-danger"></i>
                </button>

                <!-- Menu Items -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a
                                class="nav-link {{ request()->is('/') ? 'active text-danger fw-bold' : '' }}"
                                href="/">Home</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->is('about') ? 'active text-danger fw-bold' : '' }}"
                                href="/about">About</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->is('services') ? 'active text-danger fw-bold' : '' }}"
                                href="/services">Services</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->is('stay') ? 'active text-danger fw-bold' : '' }}"
                                href="/stay">Stay</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->is('packages') ? 'active text-danger fw-bold' : '' }}"
                                href="/packages">Packages</a></li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle 
                                {{ in_array(Route::currentRouteName(), ['ayodhya','kashi','prayagraj','mahakaleshwar','omkareshwar','baglamukhi']) ? 'active text-danger fw-bold' : '' }}"
                                href="#"
                                data-bs-toggle="dropdown">

                                Destinations
                            </a>

                            <ul class="dropdown-menu">

                                <li>
                                    <a class="dropdown-item {{ Route::currentRouteName() == 'ayodhya' ? 'active text-danger fw-bold' : '' }}"
                                        href="{{ route('ayodhya') }}">
                                        Ayodhya Ram Mandir
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item {{ Route::currentRouteName() == 'kashi' ? 'active text-danger fw-bold' : '' }}"
                                        href="{{ route('kashi') }}">
                                        Kashi Vishwanath
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item {{ Route::currentRouteName() == 'prayagraj' ? 'active text-danger fw-bold' : '' }}"
                                        href="{{ route('prayagraj') }}">
                                        Prayagraj
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item {{ Route::currentRouteName() == 'mahakaleshwar' ? 'active text-danger fw-bold' : '' }}"
                                        href="{{ route('mahakaleshwar') }}">
                                        Mahakaleshwar
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item {{ Route::currentRouteName() == 'omkareshwar' ? 'active text-danger fw-bold' : '' }}"
                                        href="{{ route('omkareshwar') }}">
                                        Omkareshwar
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item {{ Route::currentRouteName() == 'baglamukhi' ? 'active text-danger fw-bold' : '' }}"
                                        href="{{ route('baglamukhi') }}">
                                        Baglamukhi
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item"><a
                                class="nav-link {{ request()->is('blogs') ? 'active text-danger fw-bold' : '' }}"
                                href="/blogs">Blogs</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->is('association') ? 'active text-danger fw-bold' : '' }}"
                                href="/association">Association</a></li>
                        <li class="nav-item"><a
                                class="nav-link {{ request()->is('contact') ? 'active text-danger fw-bold' : '' }}"
                                href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2026 Divya Dham Guides Association. All rights reserved.</p>
            <p>
                <a href="https://www.facebook.com/share/17CGcyuxnF/"><i class="fab fa-facebook-f me-2"></i></a>
                <a href="https://www.instagram.com/divyadhamguides?igsh=aGExa3doM2pydTYx"><i
                        class="fab fa-instagram me-2"></i></a>
                <i class="fab fa-x-twitter me-2"></i>
                <a href="https://youtube.com/@divyadhamguides?si=5n9-vr-koyLsuYjm"><i class="fab fa-youtube"></i></a>
            </p>
        </div>
    </footer>

    <!-- Floating Buttons -->
    <div class="floating-buttons">
        <a href="https://wa.me/+919109507691" target="_blank" class="floating-btn btn-whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:+919109507691" class="floating-btn btn-phone">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-aio-3.2.6.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    @stack('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById("destBtn").addEventListener("click", function() {
                document.getElementById("destDropdown").classList.toggle("show");
            });
            const toggler = document.querySelector('.navbar-toggler');
            const togglerIcon = toggler.querySelector('i');
            const navbarCollapse = document.getElementById('navbarNav');

            if (navbarCollapse && togglerIcon) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    toggle: false
                });

                toggler.addEventListener('click', (e) => {
                    if (!navbarCollapse.classList.contains('show')) {
                        bsCollapse.show();
                    }
                    e.preventDefault(); // prevent default toggle
                });

                navbarCollapse.addEventListener('show.bs.collapse', () => {
                    togglerIcon.classList.remove('fa-bars');
                    togglerIcon.classList.add('fa-xmark');
                });
                navbarCollapse.addEventListener('hide.bs.collapse', () => {
                    togglerIcon.classList.remove('fa-xmark');
                    togglerIcon.classList.add('fa-bars');
                    if (navbarCollapse.classList.contains('show')) {
                        bsCollapse.hide();
                    }
                });

                document.querySelectorAll('#navbarNav .nav-link').forEach(link => {
                    link.addEventListener('click', () => {
                        if (navbarCollapse.classList.contains('show')) {
                            bsCollapse.hide();
                        }
                    });
                });
            }
        });
    </script>

</body>

</html>