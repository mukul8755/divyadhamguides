@extends('layout')

@section('title', 'Best Spiritual Tour Packages in Ayodhya, Varanasi and Prayagraj')
@section('meta_description', 'Spiritual tour packages in Ayodhya, Varanasi & Prayagraj. 24/7 tour and travel agency for pilgrimage, darshan, and cultural journeys. Contact us Today!')

@section('content')

@push('styles')
<style>
/* Overlay */
.popup-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.75);
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

/* Input Fields */
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
    from { opacity: 0; transform: translateY(-15px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
@endpush

<!-- Popup Overlay -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup-form position-relative p-4 rounded shadow-lg bg-white">
        <span class="close-popup position-absolute top-0 end-0 m-3 fs-3" id="closePopupBtn">&times;</span>

        <img id="festivalImage" class="img-fluid mb-3 rounded shadow-sm" alt="Festival" style="display:none;">
        <h2 id="festivalTitle" class="mb-3 text-danger">Book a Tour</h2>
        <p id="festivalDate" class="text-muted mb-2"></p>
        <div id="festivalDescription" class="mb-3 text-secondary"></div>

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

<!-- Hero Section -->
<section class="hero position-relative d-flex justify-content-center align-items-center text-center vh-100 overflow-hidden">
    <video autoplay muted loop playsinline class="w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover;">
        <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
    </video>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.55);"></div>
    <div class="container position-relative text-white">
        <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">
            Welcome to Divya Dham Guide Association
        </h1>
        <p class="lead mt-3 animate__animated animate__fadeInUp">
            Your trusted partner for spiritual journeys in Ayodhya, Varanasi, and Prayagraj.
        </p>
        <a href="#packages" class="btn btn-lg btn-danger mt-4 shadow-lg px-5 py-3 rounded-pill animate__animated animate__fadeInUp">
            Explore Packages
        </a>
    </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold text-danger mb-4">About Us</h2>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">
           We specialize in curating <span class="fw-bold">the best spiritual tour packages in Ayodhya and Varanasi,</span> designed to help devotees and travelers experience India’s most sacred cities with comfort and authenticity.
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
                <div class="service-box p-4 shadow-sm h-100 rounded-4 bg-white d-flex flex-column justify-content-between">
                    <div>
                        <i class="fas fa-hotel fa-3x text-danger mb-3"></i>
                        <h5 class="fw-bold">Accommodation/Stay</h5>
                        <p class="text-muted">Clean and affordable stays for pilgrims and families.</p>
                    </div>
                    <a href="/stay" class="btn btn-outline-danger mt-3 align-self-center">Know More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-box p-4 shadow-sm h-100 rounded-4 bg-white d-flex flex-column justify-content-between">
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

<!-- CTA Section -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #b91c1c, #7f1d1d);">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Plan Your Spiritual Journey Today</h2>
        <p class="lead mb-4">Join thousands of devotees who experienced peace, devotion, and comfort with us.</p>
        <a href="/contact" class="btn btn-lg btn-danger mt-4 shadow-lg px-5 py-3 rounded-pill animate__animated animate__fadeInUp">
            Get in Touch
        </a>
    </div>
</section>

@endsection

<!-- JS Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/notiflix/dist/notiflix-aio-3.2.6.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.getElementById('popupOverlay');
    const titleEl = document.getElementById('festivalTitle');
    const descEl = document.getElementById('festivalDescription');
    const dateEl = document.getElementById('festivalDate');
    const imgEl = document.getElementById('festivalImage');

    fetch('/api/festival')
        .then(res => res.json())
        .then(festival => {
            if (festival && festival.title) {
                titleEl.textContent = festival.title;
                descEl.innerHTML = festival.description || '';
                dateEl.textContent = festival.festival_date ? `Festival Date: ${festival.festival_date}` : '';
                if (festival.image) {
                    imgEl.src = festival.image;
                    imgEl.style.display = 'block';
                }
                overlay.style.display = 'flex';
            } else {
                showDefaultForm();
            }
        })
        .catch(() => showDefaultForm());

    function showDefaultForm() {
        titleEl.textContent = "Book a Spiritual Tour";
        descEl.innerHTML = "<p class='text-secondary mb-3'>Plan your next pilgrimage with us — Ayodhya, Varanasi & Prayagraj.</p>";
        dateEl.textContent = '';
        imgEl.style.display = 'none';
        overlay.style.display = 'flex';
    }

    document.getElementById('closePopupBtn').addEventListener('click', () => {
        overlay.style.display = 'none';
    });

    $(document).ready(function() {
        $('#contactFormPopup').on('submit', function(e) {
            e.preventDefault();
            let formData = $(this).serialize();
            Notiflix.Loading.dots('Submitting...');
            $.ajax({
                url: "{{ route('contact.store') }}",
                method: "POST",
                data: formData,
                success: function() {
                    Notiflix.Loading.remove();
                    $('#popupMessage').removeClass('d-none').text("Your message has been submitted successfully!");
                    setTimeout(() => {
                        $('#popupOverlay').hide();
                        $('#popupMessage').addClass('d-none').text("");
                        $('#contactFormPopup')[0].reset();
                    }, 2000);
                },
                error: function(xhr) {
                    Notiflix.Loading.remove();
                    if (xhr.responseJSON?.errors) {
                        Object.values(xhr.responseJSON.errors).forEach(err => Notiflix.Notify.failure(err[0]));
                    } else {
                        Notiflix.Notify.failure("Something went wrong. Please try again.");
                    }
                }
            });
        });
    });
});
</script>
