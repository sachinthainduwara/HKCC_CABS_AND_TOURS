<?php include 'db.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold">Tour Destinations</h1>
        <p class="lead mb-0">Discover the breathtaking landscapes, ancient history, and vibrant culture of Sri Lanka.</p>
    </div>
</div>

<section class="section-padding section-bg">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-primary fw-bold text-uppercase mb-2">Our Packages</h5>
            <h2 class="section-title">Popular Sri Lankan Destinations</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">We offer carefully curated tour routes covering the most sought-after locations in the island. Our English-speaking drivers double as guides, making your trip informative and safe.</p>
        </div>

        <div class="row g-4">
            <!-- Tour 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="tour-card h-100 bg-white">
                    <img src="images/sigiriya.png" alt="Sigiriya" class="w-100 tour-img">
                    <div class="p-4 pt-4 mt-n2 bg-white position-relative" style="z-index: 10;">
                        <h4 class="mb-2 text-secondary">Sigiriya & Dambulla</h4>
                        <p class="text-muted small mb-3">Explore the 5th-century rock fortress of Sigiriya, the 'Lion Rock', featuring ancient frescoes and ruins, and the magnificent Dambulla Cave Temple.</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="text-primary fw-bold">1 - 2 Days</span>
                            <a href="contact.php?tour=Sigiriya" class="btn btn-outline-primary btn-sm rounded-pill px-3">Book Tour</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="tour-card h-100 bg-white">
                    <img src="images/kandy.png" alt="Kandy" class="w-100 tour-img">
                    <div class="p-4 pt-4 mt-n2 bg-white position-relative" style="z-index: 10;">
                        <h4 class="mb-2 text-secondary">Kandy Cultural Tour</h4>
                        <p class="text-muted small mb-3">Visit the sacred Temple of the Tooth Relic, serene Kandy Lake, and the lush Peradeniya Botanical Gardens in the island's hill capital.</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="text-primary fw-bold">1 - 2 Days</span>
                            <a href="contact.php?tour=Kandy" class="btn btn-outline-primary btn-sm rounded-pill px-3">Book Tour</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour 3 -->
             <div class="col-lg-4 col-md-6">
                <div class="tour-card h-100 bg-white">
                    <img src="images/hero_bg.png" alt="Ella" class="w-100 tour-img">
                    <div class="p-4 pt-4 mt-n2 bg-white position-relative" style="z-index: 10;">
                        <h4 class="mb-2 text-secondary">Ella & Hill Country</h4>
                        <p class="text-muted small mb-3">Experience the cool climate of Ella, featuring the iconic Nine Arch Bridge, Little Adam's Peak, and rolling green tea plantations.</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="text-primary fw-bold">2 - 3 Days</span>
                            <a href="contact.php?tour=Ella" class="btn btn-outline-primary btn-sm rounded-pill px-3">Book Tour</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="tour-card h-100 bg-white">
                    <img src="images/yala.png" alt="Yala" class="w-100 tour-img">
                    <div class="p-4 pt-4 mt-n2 bg-white position-relative" style="z-index: 10;">
                        <h4 class="mb-2 text-secondary">Yala Safari</h4>
                        <p class="text-muted small mb-3">Embark on a thrilling wildlife safari in Yala National Park, home to leopards, elephants, crocodiles, and diverse bird species.</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="text-primary fw-bold">1 - 2 Days</span>
                            <a href="contact.php?tour=Yala" class="btn btn-outline-primary btn-sm rounded-pill px-3">Book Tour</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="tour-card h-100 bg-white">
                    <img src="images/yala.png" alt="Mirissa" class="w-100 tour-img">
                    <div class="p-4 pt-4 mt-n2 bg-white position-relative" style="z-index: 10;">
                        <h4 class="mb-2 text-secondary">Mirissa Beachscape</h4>
                        <p class="text-muted small mb-3">Relax on the sunny beaches of Mirissa, conquer the waves, and enjoy incredible whale and dolphin watching experiences off the southern coast.</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="text-primary fw-bold">2 - 3 Days</span>
                            <a href="contact.php?tour=Mirissa" class="btn btn-outline-primary btn-sm rounded-pill px-3">Book Tour</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="tour-card h-100 bg-white">
                    <img src="images/hero_bg.png" alt="Round Trip" class="w-100 tour-img">
                    <div class="p-4 pt-4 mt-n2 bg-white position-relative" style="z-index: 10;">
                        <h4 class="mb-2 text-secondary">Full Island Bound</h4>
                        <p class="text-muted small mb-3">The ultimate Sri Lankan adventure encompassing the cultural triangle, hill country, wildlife safaris, and golden sandy beaches.</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="text-primary fw-bold">7 - 14 Days</span>
                            <a href="contact.php?tour=Full_Island" class="btn btn-outline-primary btn-sm rounded-pill px-3">Book Tour</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
