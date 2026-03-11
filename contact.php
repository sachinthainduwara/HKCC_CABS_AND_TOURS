<?php include 'db.php'; ?>
<?php
// Simple form submission handler (if database was connected, we'd insert the data here)
$success_msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    // Here we would typically write to database using $conn defined in db.php
    /*
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, service, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $service, $message);
    if($stmt->execute()) { ... }
    */

    $success_msg = "Thank you $name! Your request for '$service' has been received. Our team will contact you shortly.";
}
?>
<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p class="lead mb-0">Get in touch with us for bookings, inquiries, and customized tour packages.</p>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-5 mb-5 mb-lg-0 pe-lg-5">
                <h5 class="text-primary fw-bold text-uppercase mb-2">Get In Touch</h5>
                <h2 class="section-title text-start mb-4">We Are Here To Help You</h2>
                <p class="text-muted mb-5">Whether you need a quick airport transfer, a city ride, or planning a multi-day tour around Sri Lanka, our support team is available 24/7 to answer your questions.</p>

                <div class="contact-info-box shadow-sm border border-light">
                    <div class="contact-info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h5 class="mb-1 text-dark">Office Location</h5>
                        <p class="text-muted mb-0">123 Main Street, Colombo 01, Sri Lanka</p>
                    </div>
                </div>

                <div class="contact-info-box shadow-sm border border-light">
                    <div class="contact-info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h5 class="mb-1 text-dark">Contact Number</h5>
                        <p class="text-muted mb-0">+94 70 422 7692</p>
                    </div>
                </div>

                <div class="contact-info-box shadow-sm border border-light mb-0">
                    <div class="contact-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5 class="mb-1 text-dark">Email Address</h5>
                        <p class="text-muted mb-0">info@hkcccabs.com<br>bookings@hkcccabs.com</p>
                    </div>
                </div>
                
                <div class="mt-4 pt-2">
                    <h5 class="fw-bold mb-3">Connect With Us</h5>
                    <a href="#" class="btn btn-primary btn-floating me-2 shadow-sm"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-primary btn-floating me-2 shadow-sm"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-primary btn-floating me-2 shadow-sm"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/94704227692" target="_blank" class="btn btn-success btn-floating shadow-sm"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Booking/Contact Form -->
            <div class="col-lg-7">
                <div class="bg-white p-5 rounded-4 shadow border border-light h-100">
                    <h3 class="fw-bold mb-4 text-secondary">Send a Request / Book Now</h3>
                    <?php if($success_msg): ?>
                        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                            <i class="fas fa-check-circle me-2"></i> <?php echo $success_msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form id="waContactForm" onsubmit="sendToWhatsApp(event)">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium text-dark">Your Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control form-control-lg bg-light border-0" required placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium text-dark">Email Address</label>
                                <input type="email" name="email" class="form-control form-control-lg bg-light border-0" placeholder="john@example.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium text-dark">Phone Number / WhatsApp <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control form-control-lg bg-light border-0" required placeholder="+94 77 xxx xxxx">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium text-dark">Select Service <span class="text-danger">*</span></label>
                                <select name="service" class="form-select form-select-lg bg-light border-0" required>
                                    <option value="" disabled selected>Choose a Service</option>
                                    <option value="Airport Transfer" <?php echo (isset($_GET['tour']) && $_GET['tour'] == 'Airport') ? 'selected' : ''; ?>>Airport Transfer</option>
                                    <option value="City Taxi">City Taxi</option>
                                    <option value="Tour Package" <?php echo isset($_GET['tour']) ? 'selected' : ''; ?>>Tour Package</option>
                                    <option value="Vehicle Rental" <?php echo isset($_GET['vehicle']) ? 'selected' : ''; ?>>Vehicle Rental</option>
                                    <option value="Other Inquiry">Other Inquiry</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-medium text-dark">Your Message / Booking Details <span class="text-danger">*</span></label>
                                <?php
                                    $msg_content = "";
                                    if(isset($_GET['tour'])) {
                                        $msg_content = "I would like to inquire about the " . htmlspecialchars($_GET['tour']) . " tour package.";
                                    } elseif(isset($_GET['vehicle'])) {
                                        $msg_content = "I would like to book a " . htmlspecialchars($_GET['vehicle']) . " vehicle for my trip.";
                                    }
                                ?>
                                <textarea name="message" class="form-control bg-light border-0" rows="5" required placeholder="Please provide locations, dates, passenger count, or any specific requirements."><?php echo $msg_content; ?></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill shadow">Send via WhatsApp <i class="fab fa-whatsapp ms-2"></i></button>
                            </div>
                        </div>
                    </form>

                    <script>
                    function sendToWhatsApp(e) {
                        e.preventDefault();
                        var name = document.querySelector('input[name="name"]').value;
                        var email = document.querySelector('input[name="email"]').value;
                        var phone = document.querySelector('input[name="phone"]').value;
                        var service = document.querySelector('select[name="service"]').value;
                        var message = document.querySelector('textarea[name="message"]').value;
                        
                        var waMsg = "Hello HKCC CABS AND TOURS,\n\n*New Service Request*\n\n*Name:* " + name + "\n" +
                                    (email ? "*Email:* " + email + "\n" : "") + 
                                    "*Phone:* " + phone + "\n*Service:* " + service + "\n*Message:* " + message;
                        
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

<!-- Google Map -->
<section class="p-0">
    <!-- Embed a simple google map with an iframe focused on Colombo Sri Lanka -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.63162580741!2d79.85620549999999!3d6.92183355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" width="100%" height="450" style="border:0; filter: grayscale(20%); display:block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php include 'includes/footer.php'; ?>
