<?php
/**
 * ==========================================================================
 * RENTAL BOOKING PROCESSOR
 * ==========================================================================
 */

require 'config.php';

// Route back unauthorized direct access attempts
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: book-now.php');
    exit;
}

try {
    // 1. Sanitize input payloads defensively
    $vehicle         = trim($_POST['vehicle'] ?? '');
    $vehicle_type    = trim($_POST['vehicle_type'] ?? '');
    $pickup_date     = trim($_POST['pickup_date'] ?? '');
    $rental_days     = filter_var($_POST['rental_days'] ?? 0, FILTER_VALIDATE_INT);
    $full_name       = trim($_POST['full_name'] ?? '');
    $phone           = trim($_POST['phone'] ?? '');
    $email           = trim($_POST['email'] ?? '');
    $dob             = trim($_POST['dob'] ?? '');
    $driving_license = trim($_POST['driving_license'] ?? '');
    $aadhaar         = trim($_POST['aadhaar'] ?? '');
    $pan             = trim($_POST['pan'] ?? '');
    $pickup_location = trim($_POST['pickup_location'] ?? '');
    $address         = trim($_POST['address'] ?? '');

    // Convert an optional empty string explicitly to a safe database SQL NULL
    $email = !empty($email) ? $email : null;

    // 2. Prepare transactional architecture 
    $sql = 'INSERT INTO bookings (
                vehicle, vehicle_type, pickup_date, rental_days, 
                full_name, phone, email, dob, driving_license, 
                aadhaar, pan, pickup_location, address
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

    $stmt = $pdo->prepare($sql);
    
    // Execute securely via prepared statements parameters binding matrix
    $stmt->execute([
        $vehicle,
        $vehicle_type,
        $pickup_date,
        $rental_days,
        $full_name,
        $phone,
        $email,
        $dob,
        $driving_license,
        $aadhaar,
        $pan,
        $pickup_location,
        $address
    ]);

    $isSuccessful = true;

} catch (Throwable $exception) {
    // Silently log execution failures globally without exposing tracking logs to end-users
    error_log("Booking Transaction Interrupted: " . $exception->getMessage());
    $isSuccessful = false;
}

// 3. Render Status View Engine UI layout component frames
$title = 'Booking Status';
require 'includes/header.php';
?>

<main class="success-page">
  <div class="container text-center">
    
    <!-- Render context specific responsive system layout metrics dynamically -->
    <?php if ($isSuccessful): ?>
      <i class="bi bi-check-circle-fill text-success"></i>
      <h1>Booking request received!</h1>
      <p>Thank you! Our team will contact you shortly to confirm your ride.</p>
    <?php else: ?>
      <i class="bi bi-exclamation-triangle-fill text-danger"></i>
      <h1>Database connection needed</h1>
      <p>Import your database.sql schema file into phpMyAdmin and update config.php credentials.</p>
    <?php endif; ?>

    <a class="btn btn-warning mt-4" href="index.php">Return home</a>
  </div>
</main>

<?php 
  require 'includes/footer.php'; 
?>
