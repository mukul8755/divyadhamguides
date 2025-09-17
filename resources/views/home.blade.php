@extends('layout')

@section('title', 'Home')

@section('content')

    @push('styles')
        <style>
            /* Overlay */
            .popup-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.7);
                justify-content: center;
                align-items: center;
                z-index: 1050;
            }

            /* Form Box */
            .popup-form {
                background: #fff;
                padding: 2rem;
                border-radius: 1rem;
                width: 100%;
                max-width: 420px;
                position: relative;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
                border-left: 6px solid rgb(255, 221, 0);
                /* Yellow Side Border */
                animation: fadeIn 0.3s ease;
            }

            /* Close Button */
            .close-popup {
                position: absolute;
                top: 15px;
                right: 20px;
                font-size: 1.8rem;
                cursor: pointer;
                color: #b91c1c;
                transition: 0.2s;
            }

            .close-popup:hover {
                color: #7f1d1d;
            }

            /* Input + Icons */
            .form-group i {
                font-size: 1.2rem;
                color: #b91c1c;
            }

            .form-control {
                border-radius: 8px;
                border: 1px solid #ddd;
                transition: 0.3s;
            }

            .form-control:focus {
                border-color: rgb(255, 221, 0);
                box-shadow: 0 0 5px rgba(255, 221, 0, 0.6);
            }

            /* Animation */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @media (max-width: 768px) {
                .hero .container {
                    padding-bottom: 160px;
                    /* more space on small screens */
                }
            }

            .hero .btn:last-child {
                margin-bottom: 120px;
                /* adjust until it clears floating buttons */
            }

            .hero .container {
                padding-bottom: 120px;
                /* adjust as needed */
            }
        </style>
    @endpush
    <!-- Popup Overlay -->
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-form">
            <span class="close-popup" id="closePopupBtn">&times;</span>
            <h2 class="mb-3 text-danger">Book a Tour</h2>
            <form id="contactFormPopup">
                @csrf
                <div id="popupMessage" class="alert alert-success d-none"></div>
                <div class="form-group mb-3 d-flex align-items-center">
                    <i class="fas fa-user me-2 text-danger"></i>
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group mb-3 d-flex align-items-center">
                    <i class="fas fa-envelope me-2 text-danger"></i>
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="form-group mb-3 d-flex align-items-center">
                    <i class="fas fa-phone me-2 text-danger"></i>
                    <input type="tel" name="phone" class="form-control" placeholder="Your Phone" required>
                </div>
                <div class="form-group mb-3 d-flex align-items-start">
                    <i class="fas fa-comment me-2 mt-2 text-danger"></i>
                    <textarea class="form-control" rows="3" name="message" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger w-100">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Hero Section with Video Background -->
    <section
        class="hero position-relative d-flex justify-content-center align-items-center text-center vh-100 overflow-hidden">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="w-100 h-100 position-absolute top-0 start-0"
            style="object-fit: cover;">
            <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
        </video>

        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.55);"></div>

        <!-- Content -->
        <div class="container position-relative text-white">
            <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">
                Welcome to Divya Dham Guide Association
            </h1>
            <p class="lead mt-3 animate__animated animate__fadeInUp">
                Your trusted partner for spiritual journeys in Ayodhya, Varanasi, and Prayagraj.
            </p>
            <a href="#packages"
                class="btn btn-lg btn-danger mt-4 shadow-lg px-5 py-3 rounded-pill animate__animated animate__fadeInUp">
                Explore Packages
            </a>
        </div>
    </section>


    <!-- About Section -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold text-danger mb-4">About Us</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
               We specialize in curating <span class="fw-bold">the best spiritual tour packages in Ayodhya and Varanasi,</span> designed to help devotees and travelers experience India’s most sacred cities with comfort and authenticity. Whether you want to take a holy dip at the Triveni Sangam in Prayagraj, attend the mesmerizing Ganga Aarti in Varanasi, or seek blessings at the Ram Mandir in Ayodhya, we ensure your pilgrimage is smooth, meaningful, and unforgettable.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold text-danger mb-5">Our Services</h2>
            <div class="row g-4">

                <div class="col-md-4">
                    <a href="/destinations" class="text-decoration-none text-dark">
                        <div class="service-box p-4 shadow-sm h-100 rounded-4 bg-white">
                            <i class="fas fa-gopuram fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">Temple Guidance</h5>
                            <p class="text-muted">Visit ancient temples with experienced spiritual guides.</p>
                            <span class="btn btn-outline-danger mt-2">Know More</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <div
                        class="service-box p-4 shadow-sm h-100 rounded-4 bg-white d-flex flex-column justify-content-between">
                        <div>
                            <i class="fas fa-hotel fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">Accommodation/Stay</h5>
                            <p class="text-muted">Clean and affordable stays for pilgrims and families.</p>
                        </div>
                        <a href="/stay" class="btn btn-outline-danger mt-3 align-self-center">Know More</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div
                        class="service-box p-4 shadow-sm h-100 rounded-4 bg-white d-flex flex-column justify-content-between">
                        <div>
                            <i class="fas fa-bus fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">Travel Support</h5>
                            <p class="text-muted">Safe & comfortable transport to all destinations.</p>
                        </div>
                        <a href="/travel-support" class="btn btn-outline-danger mt-3 align-self-center">Know More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Darshan Packages -->
    <section id="packages" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold text-danger mb-5">Darshan Packages</h2>
            <div class="row g-4">
                @foreach ($destinations as $id => $destination)
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm border-0 rounded-4 h-100 package-card">
                            <img src="{{ asset($destination['image']) }}" class="card-img-top rounded-top-4"
                                alt="{{ $destination['title'] }}">
                            <div class="card-body text-start">
                                <h5 class="fw-bold text-danger">{{ $destination['title'] }}</h5>
                                <p class="text-muted">{{ Str::limit(strip_tags($destination['intro']), 100) }}</p>
                                <a href="{{ route('destinations.show', $id) }}"
                                    class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

{{-- Why Choose Us --}}
    <section class="py-5 container">
        <h2 class="mb-4 text-center text-danger">Why Choose Us</h2>
        <p class="text-center">
            <strong>Divya Dham Guide Association</strong> is a trusted name for spiritual and pilgrimage tours in 
            <strong>Ayodhya</strong>, <strong>Varanasi</strong>, and <strong>Prayagraj</strong>. 
            Here’s why thousands of pilgrims choose us:
        </p>
        <ul class="list-unstyled mt-4 mx-auto" style="max-width: 800px;">
            <li class="mb-2">🌸 <strong>Customized Spiritual Tour Packages</strong> – Explore Ayodhya, Varanasi, and Prayagraj with itineraries tailored to your needs.</li>
            <li class="mb-2">🕒 <strong>24/7 Tour and Travel Assistance</strong> – Available round-the-clock to help with bookings, darshan arrangements, and travel support.</li>
            <li class="mb-2">📜 <strong>Professional Tour Guides</strong> – Experienced guides enrich your journey with history, culture, and spiritual insights.</li>
            <li class="mb-2">📍 <strong>Local Expertise</strong> – Discover hidden temples, authentic rituals, and local traditions with local guides.</li>
            <li class="mb-2">🛡️ <strong>Safe & Reliable Services</strong> – Trusted by thousands of pilgrims for seamless travel, comfortable stays, and devotional experiences.</li>
        </ul>
    </section>

    {{-- Our Spiritual Tour Packages --}}
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4 text-center text-danger">Our Spiritual Tour Packages</h2>

            <div class="mb-5">
                <h3>1. Most Affordable Pilgrimage Packages in Ayodhya & Varanasi</h3>
                <p>Discover the sacred sites of:</p>
                <ul style="list-style-type: none;">
                    <li>Ram Mandir, Hanuman Garhi, and Kanak Bhawan in Ayodhya</li>
                    <li>Kashi Vishwanath Temple, Dashashwamedh Ghat, and Sarnath in Varanasi</li>
                </ul>
                <p>Experience evening aartis, sacred rituals, and guided temple visits with our professional guides.</p>
            </div>

            <div class="mb-5">
                <h3>2. Spiritual Tour Packages: Ayodhya – Varanasi – Prayagraj</h3>
                <ul style="list-style-type: none;">
                    <li>Holy dip at Triveni Sangam (Ganga, Yamuna, Saraswati confluence)</li>
                    <li>The famous Ganga Aarti at Dashashwamedh Ghat</li>
                    <li>Darshan at sacred shrines in Ayodhya and Varanasi</li>
                </ul>
            </div>

            <div>
                <h3>3. Customized Pilgrimage Packages</h3>
                <p>Traveling with family, senior citizens, or international devotees? We offer:</p>
                <ul style="list-style-type: none;">
                    <li>Tailor-made itineraries</li>
                    <li>Comfortable hotels and hygienic meals</li>
                    <li>Private vehicles and personal travel coordinators</li>
                    <li>Stress-free planning and 24/7 support</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- 24/7 Travel Agency --}}
    <section class="py-5 container">
        <h2 class="mb-4 text-center text-danger">24/7 Tour and Travel Agency for Pilgrimage Tours</h2>
        <p class="text-center mx-auto" style="max-width: 800px;">
            We operate round the clock to ensure your spiritual journey is smooth. Whether it’s last-minute darshan arrangements, local transfers, or tour guide bookings, our <strong>24/7 travel agency in Ayodhya</strong> is always ready to help.
        </p>
    </section>

    {{-- Book Professional Tour Guides --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4 text-center text-danger">Book Professional Tour Guides</h2>
            <p class="text-center mx-auto" style="max-width: 800px;">
                A pilgrimage is not just about visiting temples—it’s about understanding their significance.
                Our <strong>professional tour guides in Ayodhya, Varanasi, and Prayagraj</strong> bring alive the legends, rituals, and history behind every shrine, making your journey truly memorable.
            </p>
        </div>
    </section>

    {{-- Plan Your Pilgrimage --}}
    <section class="py-5 container">
        <h2 class="mb-4 text-center">Plan Your Pilgrimage with Divya Dham Guide Association</h2>
        <p class="text-center mx-auto" style="max-width: 800px;">
            From <strong>Ayodhya Ram Mandir Darshan</strong> to <strong>Varanasi Ganga Aarti</strong> and the <strong>Triveni Sangam Snan</strong>,
            we ensure every moment of your pilgrimage is filled with peace, devotion, and divine energy.
        </p>
    </section>

    {{-- FAQs --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4 text-center text-danger">Frequently Asked Questions (FAQs)</h2>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Q1. What are the best spiritual tour packages in Ayodhya and Varanasi?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer curated packages that include Ram Mandir, Hanuman Garhi, Kashi Vishwanath Temple, Dashashwamedh Ghat, and Ganga Aarti, along with comfortable travel and stay.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Q2. Do you provide 24/7 support during pilgrimage tours?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. As a 24/7 tour and travel agency, we provide round-the-clock assistance for bookings, darshan, transportation, and emergencies.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Q3. Can I book professional tour guides in Ayodhya, Varanasi, and Prayagraj?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Absolutely. We provide certified local guides who share spiritual, cultural, and historical insights.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Q4. Do you offer customized tour packages for families and senior citizens?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, our customized spiritual tour packages are ideal for families and elderly pilgrims, with flexible itineraries and private travel options.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            Q5. How do I book a tour with Divya Dham Guide Association?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can easily contact us via our website or call our 24/7 helpline to book your pilgrimage package.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- CTA Section -->
    <section class="py-5 text-white" style="background: linear-gradient(135deg, #b91c1c, #7f1d1d);">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Plan Your Spiritual Journey Today</h2>
            <p class="lead mb-4">Join thousands of devotees who experienced peace, devotion, and comfort with us.</p>
            <a href="/contact"
                class="btn btn-lg btn-danger mt-4 shadow-lg px-5 py-3 rounded-pill animate__animated animate__fadeInUp">Get
                in Touch</a>
        </div>
    </section>

@endsection
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Notiflix -->
<script src="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-aio-3.2.6.min.js"></script>

@push('scripts')
    <script>
        const popupOverlay = document.getElementById('popupOverlay');
        const closeButton = document.getElementById('closePopupBtn');

        closeButton.addEventListener('click', () => {
            popupOverlay.style.display = 'none';
        });

        // Close on outside click
        // popupOverlay.addEventListener('click', (e) => {
        //   if (e.target === popupOverlay) popupOverlay.style.display = 'none';
        // });


        // ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === "Escape") popupOverlay.style.display = 'none';
        });

        // Auto Open after 2 seconds
        window.onload = () => {
            setTimeout(() => popupOverlay.style.display = 'flex', 2000);
        };


        $(document).ready(function() {
            $('#contactFormPopup').on('submit', function(e) {
                e.preventDefault();

                let formData = $(this).serialize();
                Notiflix.Loading.dots('Submitting...'); // show loader
                $.ajax({
                    url: "{{ route('contact.store') }}", // Laravel route
                    method: "POST",
                    data: formData,
                    success: function(response) {
                        Notiflix.Loading.remove(); // hide loader

                        $('#popupMessage')
                            .removeClass('d-none')
                            .text("Your message has been submitted successfully!");

                        // Hide popup after 2 seconds
                        setTimeout(() => {
                            popupOverlay.style.display = 'none';
                            $('#popupMessage').addClass('d-none').text(
                                ""); // clear message for next time
                        }, 2000);
                    },
                    error: function(xhr) {
                        Notiflix.Loading.remove(); // hide loader
                        if (xhr.responseJSON?.errors) {
                            let errors = xhr.responseJSON.errors;
                            Object.values(errors).forEach(err => {
                                Notiflix.Notify.failure(err[0]);
                            });
                        } else {
                            Notiflix.Notify.failure("Something went wrong. Please try again.");
                        }
                    },

                });
            });
        });
    </script>
@endpush

@push('styles')
    <style>
        .popup-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1050;
        }

        .popup-form {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            width: 100%;
            max-width: 400px;
            position: relative;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.3s ease;
        }

        .close-popup {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 1.5rem;
            cursor: pointer;
            color: #b91c1c;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
@endpush
