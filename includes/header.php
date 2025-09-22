<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Job Flow Digital Solutions'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'Job Flow Digital Solutions offers comprehensive digital services to connect talent with opportunities.'; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    <link rel="icon" href="<?php echo BASE_URL; ?>images/logo.jpg" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>images/logo.jpg">
    <link rel="manifest" href="<?php echo BASE_URL; ?>site.webmanifest">
    
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    
    <header>
        <div class="container navbar">
            <a href="<?php echo BASE_URL; ?>index.php" class="logo" aria-label="Job Flow Home">
                <img src="<?php echo BASE_URL; ?>images/logo.jpg" alt="Job Flow Digital Solutions Logo" class="logo-img">
                <span>Job Flow Digital Solutions</span>
            </a>
            
            <nav class="main-nav" aria-label="Main Navigation">
                <ul id="main-nav-links" class="nav-links">
                    <li><a href="<?php echo BASE_URL; ?>index.php" class="<?php echo ($currentPage === 'home') ? 'active' : ''; ?>" <?php echo ($currentPage === 'home') ? 'aria-current="page"' : ''; ?>>Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>about_us.php" class="<?php echo ($currentPage === 'about') ? 'active' : ''; ?>" <?php echo ($currentPage === 'about') ? 'aria-current="page"' : ''; ?>>About Us</a></li>
                 
                   
                    
                    <li class="dropdown-item">
    <a href="<?php echo BASE_URL; ?>services.php" class="dropdown-toggle <?php echo ($currentPage === 'services') ? 'active' : ''; ?>" aria-expanded="false" aria-haspopup="true">Services</a>
    <ul class="dropdown-menu">
        <li><a href="talent_acquisition.php">Talent Acquisition</a></li>
        <li><a href="it_services.php">IT Services</a></li>
        <li><a href="finance_accounting.php">Finance & Accounting</a></li>
        <li><a href="bpo.php">BPO Services</a></li>
        <li><a href="customer_support.php">Customer Support</a></li>
        <li><a href="other_services.php">Other Services</a></li>
    </ul>
</li> <li><a href="<?php echo BASE_URL; ?>team.php" class="<?php echo ($currentPage === 'team') ? 'active' : ''; ?>" <?php echo ($currentPage === 'team') ? 'aria-current="page"' : ''; ?>>Our Team</a></li>
                    
                </ul>
            </nav>
            <button class="hamburger" aria-label="Open navigation menu" aria-controls="main-nav-links" aria-expanded="false">☰</button>
        </div>
    </header>

    <main>