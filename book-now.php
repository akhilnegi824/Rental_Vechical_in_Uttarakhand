<?php 
  $title = 'Book Now | Rental Vichal';
  require 'includes/header.php';
?>

<main class="form-page">
  <div class="container">
    <div class="row g-5">
      
      <!-- Left Column: Information Bar -->
      <div class="col-lg-4">
        <span class="tag dark">BOOK YOUR RIDE</span>
        <h1>Adventure is<br><em>one form away.</em></h1>
        <p>Please fill in correct details. Our team will confirm availability by phone.</p>
        
        <div class="notice">
          <i class="bi bi-info-circle"></i> Driving licence and Aadhaar are required for every rental.
        </div>
      </div>

      <!-- Right Column: Booking Form -->
      <div class="col-lg-8">
        <form class="booking-form" action="process-booking.php" method="post">
          
          <!-- Section 1: Rental Specification -->
          <h3>Rental details</h3>
          <div class="row g-3">
            
            <div class="col-md-6">
              <label for="vehicle">Vehicle name *</label>
              <input id="vehicle" name="vehicle" required value="<?= htmlspecialchars($_GET['vehicle'] ?? '') ?>" placeholder="e.g. Maruti Swift">
            </div>
            
            <div class="col-md-6">
              <label for="vehicle_type">Vehicle type *</label>
              <select id="vehicle_type" name="vehicle_type" required>
                <option value="">Select type</option>
                <option>Car</option>
                <option>Bike</option>
                <option>Scooty</option>
              </select>
            </div>
            
            <div class="col-md-6">
              <label for="pickup_date">Pickup date *</label>
              <input id="pickup_date" name="pickup_date" type="date" required min="<?= date('Y-m-d') ?>">
            </div>
            
            <div class="col-md-6">
              <label for="rental_days">Rental days *</label>
              <input id="rental_days" name="rental_days" type="number" min="1" required placeholder="Number of days">
            </div>

          </div>

          <!-- Section 2: Personal KYC & Identification Details -->
          <h3>Personal details</h3>
          <div class="row g-3">
            
            <div class="col-md-6">
              <label for="full_name">Full name *</label>
              <input id="full_name" name="full_name" required>
            </div>
            
            <div class="col-md-6">
              <label for="phone">Phone number *</label>
              <input id="phone" name="phone" pattern="[0-9]{10}" required placeholder="10 digit mobile number">
            </div>
            
            <div class="col-md-6">
              <label for="email">Email address</label>
              <input id="email" name="email" type="email">
            </div>
            
            <div class="col-md-6">
              <label for="dob">Date of birth *</label>
              <input id="dob" name="dob" type="date" required>
            </div>
            
            <div class="col-md-6">
              <label for="driving_license">Driving licence number *</label>
              <input id="driving_license" name="driving_license" required>
            </div>
            
            <div class="col-md-6">
              <label for="aadhaar">Aadhaar card number *</label>
              <input id="aadhaar" name="aadhaar" pattern="[0-9]{12}" required placeholder="12 digit Aadhaar number">
            </div>
            
            <div class="col-md-6">
              <label for="pan">PAN card number *</label>
              <input id="pan" name="pan" required placeholder="ABCDE1234F">
            </div>
            
            <div class="col-md-6">
              <label for="pickup_location">Pickup location *</label>
              <select id="pickup_location" name="pickup_location" required>
                <option value="">Choose location</option>
                <option>Dehradun</option>
                <option>Haridwar</option>
                <option>Rishikesh</option>
                <option>Nainital</option>
                <option>Mussoorie</option>
              </select>
            </div>
            
            <div class="col-12">
              <label for="address">Address *</label>
              <textarea id="address" name="address" required rows="3"></textarea>
            </div>
            
            <!-- Terms Agreement & Submission Actions -->
            <div class="col-12">
              <label class="check">
                <input type="checkbox" required> I confirm that all information is correct and I accept the rental terms.
              </label>
              <button class="btn btn-warning btn-lg w-100 mt-3">
                Submit booking request <i class="bi bi-arrow-right"></i>
              </button>
            </div>

          </div>

        </form>
      </div>

    </div>
  </div>
</main>

<?php 
  require 'includes/footer.php';
?>
