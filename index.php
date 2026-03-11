<?php include 'db.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <div class="row align-items-center">
            <div class="col-lg-7 text-white mb-5 mb-lg-0 pe-lg-5">
                <span class="badge bg-primary px-3 py-2 mb-3 rounded-pill fs-6">#1 Travel Service in Sri Lanka</span>
                <h1 class="display-3 fw-bold mb-4 text-white">Reliable Cab Service & Tours in Sri Lanka</h1>
                <p class="lead mb-4 text-light opacity-75">Experience the beauty of the Island with our professional, safe, and comfortable transportation services. Your journey begins with HKCC.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="tours.php" class="btn btn-primary btn-lg rounded-pill px-4 shadow">Explore Tours</a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="booking-form-wrapper">
                    <h4 class="mb-4 text-center fw-bold">Book Your Ride</h4>
                    <form id="waRideForm" onsubmit="sendRideToWhatsApp(event)">
                        <div class="mb-3">
                            <label class="form-label form-label-sm fw-medium">Pickup Location</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="fas fa-map-marker-alt text-primary"></i></span>
                                <input type="text" name="pickup" class="form-control border-start-0 ps-0 bg-light" placeholder="Airport, Hotel, etc." required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label form-label-sm fw-medium">Drop Location</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="fas fa-location-arrow text-primary"></i></span>
                                <input type="text" name="drop" class="form-control border-start-0 ps-0 bg-light" placeholder="Destination" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="form-label form-label-sm fw-medium">Date</label>
                                <input type="date" name="date" class="form-control bg-light" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label form-label-sm fw-medium">Time</label>
                                <input type="time" name="time" class="form-control bg-light" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill shadow-sm fs-5">Book via WhatsApp <i class="fab fa-whatsapp ms-2"></i></button>
                    </form>

                    <script>
                        function sendRideToWhatsApp(e) {
                            e.preventDefault();
                            var pickup = e.target.pickup.value;
                            var drop = e.target.drop.value;
                            var date = e.target.date.value;
                            var time = e.target.time.value;
                            
                            var waMsg = "Hello HKCC CABS AND TOURS,\n\n*New Ride Booking*\n\n*Pickup:* " + pickup + "\n*Drop:* " + drop + "\n*Date:* " + date + "\n*Time:* " + time;
                            
                            var waUrl = "https://wa.me/94704227692?text=" + encodeURIComponent(waMsg);
                            window.location.href = waUrl;
                            
                            e.target.reset(); // clear form
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative">
                    <img src="images/fleet_car.png" alt="HKCC Cab" class="img-fluid rounded shadow-sm">
                    <div class="position-absolute bottom-0 start-0 bg-primary text-white p-4 rounded-end shadow" style="transform: translateY(20px);">
                        <h3 class="fw-bold mb-0">10+</h3>
                        <p class="mb-0">Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
                <h5 class="text-primary fw-bold text-uppercase mb-2">About Us</h5>
                <h2 class="section-title text-start mb-4">Your Trusted Travel Partner in Sri Lanka</h2>
                <p class="text-muted mb-4 fs-5">HKCC CABS AND TOURS provides top-notch transportation and tour services across Sri Lanka. With a modern fleet and professional drivers, we ensure that every journey is safe, comfortable, and memorable.</p>
                <div class="row mb-5">
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary fs-4 me-3"></i>
                            <span class="fw-medium text-dark">Professional Drivers</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary fs-4 me-3"></i>
                            <span class="fw-medium text-dark">24/7 Availability</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary fs-4 me-3"></i>
                            <span class="fw-medium text-dark">Well-Maintained Fleet</span>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary fs-4 me-3"></i>
                            <span class="fw-medium text-dark">Affordable Pricing</span>
                        </div>
                    </div>
                </div>
                <a href="about.php" class="btn btn-primary rounded-pill px-4 py-2">Read Our Story</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section-padding section-bg">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-primary fw-bold text-uppercase mb-2">Our Services</h5>
            <h2 class="section-title">What We Offer</h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">We provide a comprehensive range of transportation services designed to meet your every travel need in Sri Lanka.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-plane-arrival"></i></div>
                    <h5 class="mb-3">Airport Transfers</h5>
                    <p class="text-muted mb-4">Prompt and hassle-free pickup and drop-off to and from the Bandaranayake International Airport for a smooth start or end to your trip.</p>
                    <a href="services.php" class="btn btn-outline-primary rounded-pill btn-sm px-4">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-car-side"></i></div>
                    <h5 class="mb-3">City Taxi Service</h5>
                    <p class="text-muted mb-4">Quick, safe, and reliable rides around the city for your daily commute, meetings, shopping trips, or dining out.</p>
                    <a href="services.php" class="btn btn-outline-primary rounded-pill btn-sm px-4">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card text-center h-100">
                    <div class="service-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <h5 class="mb-3">Tour Packages</h5>
                    <p class="text-muted mb-4">Explore Sri Lanka's beautiful destinations with our customized tour packages, guided by our knowledgeable and friendly drivers.</p>
                    <a href="services.php" class="btn btn-outline-primary rounded-pill btn-sm px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Tours -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-primary fw-bold text-uppercase mb-2">Explore Sri Lanka</h5>
            <h2 class="section-title">Popular Tour Destinations</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="tour-card">
                    <img src="images/sigiriya.png" alt="Sigiriya" class="w-100 tour-img">
                    <div class="tour-content">
                        <h4 class="mb-2">Sigiriya</h4>
                        <p class="text-light opacity-75 mb-3 small">The ancient rock fortress, an iconic symbol of Sri Lankan history and breathtaking landscapes.</p>
                        <a href="tours.php" class="btn-link">View Tour Details <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="tour-card">
                    <img src="images/kandy.png" alt="Kandy" class="w-100 tour-img">
                    <div class="tour-content">
                        <h4 class="mb-2">Kandy</h4>
                        <p class="text-light opacity-75 mb-3 small">Cultural capital featuring the majestic Temple of the Sacred Tooth Relic and beautiful lake.</p>
                        <a href="tours.php" class="btn-link">View Tour Details <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="tour-card">
                    <img src="images/yala.png" alt="Yala" class="w-100 tour-img" onerror="this.src='images/hero_bg.png'">
                    <div class="tour-content">
                        <h4 class="mb-2">Yala National Park</h4>
                        <p class="text-light opacity-75 mb-3 small">Thrilling wildlife safaris offering chances to see leopards, elephants, and diverse wildlife.</p>
                        <a href="tours.php" class="btn-link">View Tour Details <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="tours.php" class="btn btn-primary rounded-pill px-5 py-2">View All Destinations</a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section-padding section-bg">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-primary fw-bold text-uppercase mb-2">Testimonials</h5>
            <h2 class="section-title">What Our Clients Say</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="testimonial-item">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="mb-4">
                        <span class="text-primary fs-5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    </div>
                    <p class="text-muted fst-italic mb-4 fs-5">"Excellent service! The driver was very punctual and polite. The car was spotlessly clean and comfortable. Highly recommended for anyone traveling in Sri Lanka."</p>
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0 text-dark">Sarah Jenkins</h5>
                            <span class="text-muted small">Traveler from UK</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-item">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="mb-4">
                        <span class="text-primary fs-5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    </div>
                    <p class="text-muted fst-italic mb-4 fs-5">"We booked a 5-day tour package with HKCC. It was perfectly organized. Our driver acted as a wonderful guide too, showing us hidden gems. Unforgettable experience!"</p>
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0 text-dark">Mark & Emily</h5>
                            <span class="text-muted small">Couple from Australia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
                <h2 class="fw-bold text-white mb-2">Ready to Start Your Journey?</h2>
                <p class="fs-5 mb-0 opacity-75">Book your ride today and experience the best transportation service in Sri Lanka.</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <a href="contact.php" class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-primary shadow">Book Now</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
