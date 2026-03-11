<?php include 'db.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold">Our Fleet</h1>
        <p class="lead mb-0">Choose from a variety of well-maintained vehicles to match your travel requirements.</p>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h5 class="text-primary fw-bold text-uppercase mb-2">Modern Vehicles</h5>
                <h2 class="section-title">Travel in Comfort and Safety</h2>
                <p class="text-muted fs-5">Whether you are traveling solo, as a couple, or with a large group, we have the right vehicle for you. Our fleet is fully air-conditioned, regularly serviced, and driven by professional chauffeurs.</p>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <!-- Vehicle 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="fleet-card h-100 shadow-sm border-0">
                    <img src="images/fleet_car.png" alt="Sedan Car" class="fleet-img w-100">
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0 text-secondary">Standard Sedan</h4>
                            <span class="badge bg-primary px-3 py-2 rounded-pill">Car</span>
                        </div>
                        <p class="text-muted small mb-4">Perfect for couples and small families. Enjoy a smooth ride in our comfortable hybrid sedans, ideal for city tours and airport transfers.</p>
                        <ul class="list-unstyled fleet-features mb-4">
                            <li class="mb-2"><i class="fas fa-users"></i> Up to 3 Passengers</li>
                            <li class="mb-2"><i class="fas fa-suitcase"></i> 2 Standard Luggages</li>
                            <li class="mb-2"><i class="fas fa-snowflake"></i> Air Conditioned</li>
                            <li class="mb-0"><i class="fas fa-wifi"></i> Free Wi-Fi (On Request)</li>
                        </ul>
                        <a href="contact.php?vehicle=Sedan" class="btn btn-outline-primary w-100 rounded-pill">Reserve Now</a>
                    </div>
                </div>
            </div>

            <!-- Vehicle 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="fleet-card h-100 shadow-sm border-0">
                    <img src="images/fleet_van.png" alt="Passenger Van" class="fleet-img w-100">
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0 text-secondary">Tourist Van</h4>
                            <span class="badge bg-primary px-3 py-2 rounded-pill">Van</span>
                        </div>
                        <p class="text-muted small mb-4">Spacious travel for medium-sized groups and families. Ample legroom and luggage space make these ideal for long-distance round trips.</p>
                        <ul class="list-unstyled fleet-features mb-4">
                            <li class="mb-2"><i class="fas fa-users"></i> Up to 8 Passengers</li>
                            <li class="mb-2"><i class="fas fa-suitcase"></i> 8 Standard Luggages</li>
                            <li class="mb-2"><i class="fas fa-snowflake"></i> Dual Air Conditioned</li>
                            <li class="mb-0"><i class="fas fa-couch"></i> Adjustable Seats</li>
                        </ul>
                        <a href="contact.php?vehicle=Van" class="btn btn-primary w-100 rounded-pill shadow-sm">Reserve Now</a>
                    </div>
                </div>
            </div>

            <!-- Vehicle 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="fleet-card h-100 shadow-sm border-0">
                    <img src="images/fleet_car.png" alt="Luxury Car" class="fleet-img w-100" style="filter: brightness(0.9) contrast(1.1);">
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0 text-secondary">Luxury Vehicle</h4>
                            <span class="badge bg-primary px-3 py-2 rounded-pill">Premium</span>
                        </div>
                        <p class="text-muted small mb-4">Travel in style and premium comfort. Perfect for VIP transport, corporate events, and honeymoon couples seeking a luxurious experience.</p>
                        <ul class="list-unstyled fleet-features mb-4">
                            <li class="mb-2"><i class="fas fa-users"></i> Up to 3 Passengers</li>
                            <li class="mb-2"><i class="fas fa-suitcase"></i> 2-3 Standard Luggages</li>
                            <li class="mb-2"><i class="fas fa-snowflake"></i> Climate Control A/C</li>
                            <li class="mb-0"><i class="fas fa-glass-martini"></i> Premium Interiors</li>
                        </ul>
                        <a href="contact.php?vehicle=Luxury" class="btn btn-outline-primary w-100 rounded-pill">Reserve Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Promo -->
<section class="py-5 bg-secondary text-white border-top border-primary border-5">
    <div class="container text-center">
        <h3 class="fw-bold mb-3">Need a Larger Vehicle?</h3>
        <p class="fs-5 opacity-75 mb-4">We also arrange mini-coaches and large buses for large tour groups and corporate outings.</p>
        <a href="contact.php" class="btn btn-primary btn-lg rounded-pill px-5 shadow">Contact Support</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
