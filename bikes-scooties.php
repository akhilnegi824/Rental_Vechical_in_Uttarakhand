<?php 
  $title = 'Bikes & Scooties | Rental Vichal';

  // Dataset Array for Rental Bikes (Naam, Price aur Custom Image Path)
  $bikes = [
    'Royal Enfield Classic 350' => ['price' => 1600, 'img_src' => 'assets/images/bike/Enifield_360.png'],
    'Royal Enfield Himalayan'   => ['price' => 2000, 'img_src' => 'assets/images/bike/himalayan.png'],
    'KTM Duke 200'              => ['price' => 1500, 'img_src' => 'assets/images/bike/duke_200.png'],
    'Yamaha R15'                => ['price' => 1400, 'img_src' => 'assets/images/bike/r15.png'],
    'Bajaj Pulsar 150'          => ['price' => 900,  'img_src' => 'assets/images/bike/pulser_150.png'],
    'TVS Apache RTR'            => ['price' => 1000, 'img_src' => 'assets/images/bike/apache.png'],
    'Hero Splendor'             => ['price' => 650,  'img_src' => 'assets/images/bike/splendor.png'],
    'Honda Shine'               => ['price' => 750,  'img_src' => 'assets/images/bike/shine.png'],
    'Yamaha FZ'                 => ['price' => 1100, 'img_src' => 'assets/images/bike/fz.png'],
    'Suzuki Gixxer'             => ['price' => 1200, 'img_src' => 'assets/images/bike/gixxer.png']
  ];

  // Dataset Array for Rental Scooties (Naam, Price aur Custom Image Path)
  $scooties = [
    'Honda Activa 6G'      => ['price' => 700,  'img_src' => 'assets/images/scooties/activa_6g.png'],
    'TVS Ntorq 125'        => ['price' => 850,  'img_src' => 'assets/images/scooties/ntorq_125.png'],
    'Suzuki Access 125'    => ['price' => 750,  'img_src' => 'assets/images/scooties/access_125.png'],
    'Yamaha Fascino'       => ['price' => 750,  'img_src' => 'assets/images/scooties/fascino.png'],
    'Honda Dio'            => ['price' => 700,  'img_src' => 'assets/images/scooties/dio.png'],
    'TVS Jupiter'          => ['price' => 700,  'img_src' => 'assets/images/scooties/jupiter.png'],
    'Aprilia SR 160'       => ['price' => 1000, 'img_src' => 'assets/images/scooties/aprilla.png'],
    'Hero Pleasure Plus'   => ['price' => 650,  'img_src' => 'assets/images/scooties/pleasure.png'],
    'Ola S1 Pro'           => ['price' => 900,  'img_src' => 'assets/images/scooties/ola.png'],
    'Ather 450X'           => ['price' => 950,  'img_src' => 'assets/images/scooties/ather.png']
  ];

  require 'includes/header.php';

  /**
   * Helper function to render vehicle listing cards dynamically
   */
  function rides($list, $type) {
    foreach ($list as $name => $details) {
      $price = $details['price'];
      $image_path = $details['img_src']; // Har vehicle ki custom photo ka exact path
      ?>
      <div class="col-md-6 col-lg-4">
        <article class="vehicle-card">
          
          <!-- Vehicle Visual Frame -->
          <div class="vehicle-image">
            <!-- Yeh tag aapke custom path se photo ko website par load karega -->
            <img src="<?= $image_path ?>" alt="<?= htmlspecialchars($name) ?>" style="width:100%; height:100%; object-fit:cover;">
          </div>
          
          <!-- Vehicle Content Summary -->
          <div class="vehicle-info">
            <h3><?= htmlspecialchars($name) ?></h3>
            <p><i class="bi bi-speedometer2"></i> Helmet included on request</p>
            
            <!-- Pricing Bar & Direct Redirect -->
            <div class="price">
              <b>₹<?= number_format($price) ?></b> / day 
              <a href="book-now.php?vehicle=<?= urlencode($name) ?>&price=<?= $price ?>" class="btn btn-dark">
                Book <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        </article>
      </div>
      <?php
    }
  }
?>

<main class="listing-page">
  <div class="container">
    
    <!-- Header Section -->
    <span class="tag dark">TWO-WHEELER RENTALS</span>
    <h1>Ride the hills <em>your way.</em></h1>
    <p class="lead">Choose from 10 bikes and 10 scooties. Manage images directly through the arrays above.</p>

    <!-- Bikes List Section -->
    <h2 class="list-title" id="bikes">
      Bikes <small>10 vehicles</small>
    </h2>
    <div class="row g-4">
      <?php rides($bikes, 'bikes'); ?>
    </div>

    <!-- Scooties List Section -->
    <h2 class="list-title" id="scooties">
      Scooties <small>10 vehicles</small>
    </h2>
    <div class="row g-4">
      <?php rides($scooties, 'scooties'); ?>
    </div>

  </div>
</main>

<?php 
  require 'includes/footer.php';
?>
