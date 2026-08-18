<?php 
$title = 'Book Cars | Rental Vichal';

// Sabhi cars ki price aur unki image src ka clean array
$cars = [
    'Maruti Baleno' => [
        'price' => 1800, 
        'image' => 'assets/images/car/baleno.png'
    ],
    'Maruti Swift' => [
        'price' => 1600, 
        'image' => 'assets/images/car/swift.png'
    ],
    'Maruti Ertiga' => [
        'price' => 2400, 
        'image' => 'assets/images/car/Ertiga.png'
    ],
    'Mahindra Thar' => [
        'price' => 3500, 
        'image' => 'assets/images/car/Thar.png'
    ],
    'Toyota Fortuner' => [
        'price' => 6500, 
        'image' => 'assets/images/car/Fortuner.png'
    ],
    'Maruti Brezza' => [
        'price' => 2200, 
        'image' => 'assets/images/car/Brezza.png'
    ],
    'Alto K10' => [
        'price' => 1200, 
        'image' => 'assets/images/car/Alto.png'
    ],
    'Maruti Dzire' => [
        'price' => 1700, 
        'image' => 'assets/images/car/dzire.png'
    ],
    'Hyundai Creta' => [
        'price' => 3000, 
        'image' => 'assets/images/car/creta.png'
    ],
    'Kia Seltos' => [
        'price' => 3200, 
        'image' => 'assets/images/car/seltos.png'
    ],
    'Tata Nexon' => [
        'price' => 2500, 
        'image' => 'assets/images/car/nexon.png'
    ],
    'Mahindra Scorpio' => [
        'price' => 3800, 
        'image' => 'assets/images/car/scorpio.png'
    ],
    'Toyota Innova' => [
        'price' => 4000, 
        'image' => 'assets/images/car/innova.png'
    ],
    'Honda City' => [
        'price' => 2800, 
        'image' => 'assets/images/car/honda_city.png'
    ],
    'Renault Kwid' => [
        'price' => 1100, 
        'image' => 'assets/images/car/kwid.png'
    ]
];

require 'includes/header.php'; 
?>

<main class="listing-page">
    <div class="container">
        <span class="tag dark">CAR RENTALS</span>
        <h1>Choose your <em>four-wheel ride.</em></h1>
        <p class="lead">Daily rental prices shown below.</p>

        <div class="row g-4">
            <?php foreach ($cars as $name => $car): ?>
                <div class="col-md-6 col-lg-4">
                    <article class="vehicle-card">
                        
                        <!-- Car Image Container -->
                        <div class="vehicle-image">
                            <img src="<?= htmlspecialchars($car['image']) ?>" 
                                 alt="<?= htmlspecialchars($name) ?>" 
                                 onerror="this.style.display='none'">
                            <span>
                                <i class="bi bi-image"></i> Image path: <?= basename($car['image']) ?>
                            </span>
                        </div>

                        <!-- Car Information Details -->
                        <div class="vehicle-info">
                            <h3><?= htmlspecialchars($name) ?></h3>
                            <p><i class="bi bi-people"></i> Comfortable & well maintained</p>
                            
                            <div class="price">
                                <b>₹<?= number_format($car['price']) ?></b> / day 
                                <a href="book-now.php?vehicle=<?= urlencode($name) ?>&price=<?= $car['price'] ?>" 
                                   class="btn btn-dark">
                                   Book <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php require 'includes/footer.php'; ?>
