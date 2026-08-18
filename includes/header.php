<?php 
  $active = basename($_SERVER['PHP_SELF']); 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title ?? 'Rental Vichal in Uttarakhand') ?></title>
  
  <!-- CSS Frameworks & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
  
  <!-- Custom Stylesheet -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ==========================================================================
     HEADER & NAVIGATION BAR
     ========================================================================== -->
  <header>
    <nav class="navbar navbar-expand-lg container">
      
      
      <a class="brand" href="index.php">
        <b>RENTAL</b>
        <strong>VICHAL</strong>
        <small>IN UTTARAKHAND</small>
      </a>
      
      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
        <i class="bi bi-list"></i>
      </button>
      
      <!-- Navigation Links Menu -->
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          
          <li class="nav-item">
            <a class="nav-link <?= $active === 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?= $active === 'cars.php' ? 'active' : '' ?>" href="cars.php">Cars</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?= $active === 'bikes-scooties.php' ? 'active' : '' ?>" href="bikes-scooties.php">Bikes & Scooties</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?= $active === 'about.php' ? 'active' : '' ?>" href="about.php">About</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?= $active === 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
          </li>
          
          <!-- Call to Action Button -->
          <li class="nav-item ms-lg-3">
            <a class="btn btn-warning" href="book-now.php">
              Book Now <i class="bi bi-arrow-up-right"></i>
            </a>
          </li>
          
        </ul>
      </div>

    </nav>
  </header>
