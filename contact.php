<?php 
$title = 'Contact Us | Rental Vichal';
require 'includes/header.php';
?>

<main class="form-page">
    <div class="container">
        <span class="tag dark">CONTACT US</span>
        <h1>Let’s plan your<br><em>perfect ride.</em></h1>

        <div class="row g-4 mt-3">
            <!-- Contact Details Sidebar -->
            <div class="col-lg-4">
                <div class="notice h-100">
                    <h3>Call us</h3>
                    <p>+91 98765 43210</p>

                    <h3>Email us</h3>
                    <p>hello@rentalvichal.in</p>

                    <h3>Visit us</h3>
                    <p>Dehradun, Uttarakhand<br>Open daily: 8 AM – 8 PM</p>
                </div>
            </div>

            <!-- Interactive Message Form -->
            <div class="col-lg-8">
                <form class="booking-form" onsubmit="alert('Thank you! We will get back to you soon.'); return false;">
                    <h3>Send us a message</h3>
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="user-name">Your name</label>
                            <input type="text" id="user-name" name="name" required>
                        </div>

                        <div class="col-md-6">
                            <label for="user-phone">Phone number</label>
                            <input type="tel" id="user-phone" name="phone" required>
                        </div>

                        <div class="col-12">
                            <label for="user-email">Email</label>
                            <input type="email" id="user-email" name="email">
                        </div>

                        <div class="col-12">
                            <label for="user-msg">How can we help?</label>
                            <textarea id="user-msg" name="message" rows="5" required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-warning w-100">
                                Send message <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require 'includes/footer.php'; ?>
