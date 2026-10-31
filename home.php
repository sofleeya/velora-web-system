<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to VELORA</h2>
        <p class="text-muted mb-0">Your one-stop system to manage insulated stainless steel flasks, customers, staffs and orders</p>
    </div>
</div>

<!-- Carousel -->
<div id="homeCarousel" class="carousel slide carousel-fade shadow-sm rounded overflow-hidden mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
            <div class="bg-primary text-white text-center px-5 py-5">
                <i class="bi bi-cup-hot display-1 mb-3 d-block"></i>
                <h2>Hot or Cold, All Day</h2>
                <p class="lead mb-5">Insulated stainless steel flasks that keep drinks at the right temperature.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <div class="bg-success text-white text-center px-5 py-5">
                <i class="bi bi-box-seam display-1 mb-3 d-block"></i>
                <h2>Track Your Inventory</h2>
                <p class="lead mb-5">Keep products, capacities, colors and stock quantities organised.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <div class="bg-dark text-white text-center px-5 py-5">
                <i class="bi bi-receipt display-1 mb-3 d-block"></i>
                <h2>Orders &amp; Invoices</h2>
                <p class="lead mb-5">Record every order and print clean invoices in seconds.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Quick links -->
<div class="row g-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-primary text-center">
            <div class="card-body">
                <i class="bi bi-cup-hot-fill text-primary display-4"></i>
                <h5 class="mt-3">Products</h5>
                <p class="text-muted">Manage flasks, brands, prices and stock.</p>
                <a href="products.php" class="btn btn-primary stretched-link">Open Products</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-success text-center">
            <div class="card-body">
                <i class="bi bi-people-fill text-success display-4"></i>
                <h5 class="mt-3">Customers</h5>
                <p class="text-muted">Keep customer records and contact details.</p>
                <a href="customers.php" class="btn btn-success stretched-link">Open Customers</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-warning text-center">
            <div class="card-body">
                <i class="bi bi-person-badge-fill text-warning display-4"></i>
                <h5 class="mt-3">Staffs</h5>
                <p class="text-muted">Manage the staffs who handle the orders.</p>
                <a href="staffs.php" class="btn btn-warning stretched-link">Open Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-info text-center">
            <div class="card-body">
                <i class="bi bi-cart-fill text-info display-4"></i>
                <h5 class="mt-3">Orders</h5>
                <p class="text-muted">Create orders, add products and view invoices.</p>
                <a href="orders.php" class="btn btn-info text-white stretched-link">Open Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>