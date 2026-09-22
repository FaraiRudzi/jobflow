<?php
$pageMeta = [
    'index.php' => ['title' => 'Job Flow Digital Solutions | Outsourcing & African Talent', 'description' => 'Job Flow Digital Solutions connects global businesses with skilled African talent through reliable outsourcing, customer support, IT, finance, and digital services.'],
    'about_us.php' => ['title' => 'About Job Flow Digital Solutions | Global Talent Partner', 'description' => 'Learn how Job Flow Digital Solutions empowers businesses and African professionals through ethical, scalable outsourcing partnerships.'],
    'services.php' => ['title' => 'Outsourcing Services for Growing Businesses | Job Flow', 'description' => 'Explore Job Flow services, including talent acquisition, IT support, finance and accounting, dental support, BPO, and customer service outsourcing.'],
    'contact.php' => ['title' => 'Contact Job Flow Digital Solutions', 'description' => 'Talk to Job Flow Digital Solutions about dependable outsourcing, skilled African talent, and tailored support for your business.'],
    'team.php' => ['title' => 'Meet the Job Flow Digital Solutions Team', 'description' => 'Meet the people behind Job Flow Digital Solutions and our commitment to excellent global outsourcing partnerships.'],
    'talent_acquisition.php' => ['title' => 'Talent Acquisition Services | Job Flow', 'description' => 'Find and retain qualified professionals with Job Flow talent acquisition support for growing businesses.'],
    'it_services.php' => ['title' => 'IT Services and Technical Support | Job Flow', 'description' => 'Strengthen your operations with responsive IT services and technical support from Job Flow Digital Solutions.'],
    'finance_accounting.php' => ['title' => 'Finance and Accounting Outsourcing | Job Flow', 'description' => 'Improve financial accuracy and efficiency with Job Flow finance and accounting outsourcing services.'],
    'bpo.php' => ['title' => 'Business Process Outsourcing Services | Job Flow', 'description' => 'Scale efficiently with flexible business process outsourcing delivered by Job Flow Digital Solutions.'],
    'customer_support.php' => ['title' => 'Customer Support Outsourcing | Job Flow', 'description' => 'Deliver better customer experiences with dependable, professional customer support outsourcing from Job Flow.'],
    'dental_services.php' => ['title' => 'Dental Practice Support Services | Job Flow', 'description' => 'Give your dental practice reliable administrative and operational support through Job Flow outsourcing services.'],
    'other_services.php' => ['title' => 'Business Support Services | Job Flow', 'description' => 'Discover additional business support services tailored to your operational needs by Job Flow Digital Solutions.'],
    'privacy_policy.php' => ['title' => 'Privacy Policy | Job Flow Digital Solutions', 'description' => 'Read the Job Flow Digital Solutions privacy policy and learn how we handle personal information.'],
];
$currentFile = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$metadata = $pageMeta[$currentFile] ?? ['title' => 'Job Flow Digital Solutions | Global Outsourcing Partner', 'description' => 'Job Flow Digital Solutions helps businesses grow with skilled African talent and practical outsourcing solutions.'];
$pageTitle = $pageTitle ?? $metadata['title'];
$pageDescription = $pageDescription ?? $metadata['description'];
$siteUrl = defined('SITE_URL') ? SITE_URL : rtrim(BASE_URL, '/');
$canonicalPages = ['servicess.php' => 'services.php', 'teamss.php' => 'team.php'];
$canonicalPage = $canonicalPages[$currentFile] ?? $currentFile;
$canonicalUrl = $siteUrl . '/' . $canonicalPage;
$socialImage = $siteUrl . '/images/logo1.png';
?>
<!DOCTYPE html>
<html lang="en-ZW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="Job Flow Digital Solutions">
    <meta name="theme-color" content="#102a43">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Job Flow Digital Solutions">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($socialImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:locale" content="en_ZW">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($socialImage, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="icon" href="<?php echo BASE_URL; ?>images/logo1.png" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>images/logo1.png">
    <link rel="manifest" href="<?php echo BASE_URL; ?>site.webmanifest">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <style>
        [x-cloak] { display: none !important; }
    </style>
    <script type="application/ld+json">
    <?php echo json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Job Flow Digital Solutions',
        'url' => $siteUrl,
        'logo' => $socialImage,
        'description' => $pageDescription,
        'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Harare', 'addressCountry' => 'ZW'],
        'contactPoint' => ['@type' => 'ContactPoint', 'telephone' => '+263714384422', 'contactType' => 'customer service'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
    </script>
    <script type="application/ld+json">
    <?php echo json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'Job Flow Digital Solutions',
        'url' => $siteUrl,
        'description' => $pageDescription,
        'potentialAction' => ['@type' => 'SearchAction', 'target' => $siteUrl . '/?q={search_term_string}', 'query-input' => 'required name=search_term_string'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
    </script>
</head>
<body class="font-inter" x-data="{ mobileMenuOpen: false }">
    <a class="skip-link" href="#main-content">Skip to content</a>
    
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 max-w-7xl flex items-center justify-between py-4">
            <a href="<?php echo BASE_URL; ?>index.php" class="flex items-center space-x-2 text-gray-900 font-bold text-xl md:text-2xl" aria-label="Job Flow Home">
                <img src="<?php echo BASE_URL; ?>images/logo2.png" alt="Job Flow Digital Solutions Logo" class="h-10 w-auto">
                <span class="hidden md:block">JobFlow Digital Solutions</span>
            </a>
            
            <nav class="hidden lg:flex flex-grow justify-end" aria-label="Main Navigation">
                <ul class="flex items-center space-x-8">
                    <li><a href="<?php echo BASE_URL; ?>index.php" class="font-semibold text-gray-600 hover:text-blue-600 transition-colors duration-200 <?php echo ($currentPage === 'home') ? 'text-blue-600' : ''; ?>" <?php echo ($currentPage === 'home') ? 'aria-current="page"' : ''; ?>>Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>about_us.php" class="font-semibold text-gray-600 hover:text-blue-600 transition-colors duration-200 <?php echo ($currentPage === 'about') ? 'text-blue-600' : ''; ?>" <?php echo ($currentPage === 'about') ? 'aria-current="page"' : ''; ?>>About Us</a></li>

                    <li class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="font-semibold text-gray-600 hover:text-blue-600 transition-colors duration-200 flex items-center" :class="{'text-blue-600': open || ['dental_services', 'talent_acquisition', 'it_services', 'finance_accounting', 'bpo', 'customer_support', 'other_services'].includes('<?php echo $currentPage; ?>')}" @click="open = !open">
                            Services
                            <svg class="ml-2 h-4 w-4 transform transition-transform duration-200" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <ul x-show="open" 
                            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" 
                            x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-56 bg-white shadow-lg rounded-md overflow-hidden z-10 border border-gray-100"
                            x-cloak>
                            <li><a href="dental_services.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors duration-200">Dental Services</a></li>
                            <li><a href="talent_acquisition.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors duration-200">Talent Acquisition</a></li>
                            <li><a href="it_services.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors duration-200">IT Services</a></li>
                            <li><a href="finance_accounting.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors duration-200">Finance & Accounting</a></li>
                            <li><a href="bpo.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors duration-200">BPO Services</a></li>
                            <li><a href="customer_support.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors duration-200">Customer Support</a></li>
                            <li><a href="other_services.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors duration-200">Other Services</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_URL; ?>team.php" class="font-semibold text-gray-600 hover:text-blue-600 transition-colors duration-200 <?php echo ($currentPage === 'team') ? 'text-blue-600' : ''; ?>" <?php echo ($currentPage === 'team') ? 'aria-current="page"' : ''; ?>>Our Team</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contact.php" class="font-semibold text-gray-600 hover:text-blue-600 transition-colors duration-200 <?php echo ($currentPage === 'contact') ? 'text-blue-600' : ''; ?>" <?php echo ($currentPage === 'contact') ? 'aria-current="page"' : ''; ?>>Contact</a></li>
                </ul>
            </nav>

            <a href="<?php echo BASE_URL; ?>contact.php" class="hidden lg:inline-flex items-center px-5 py-2.5 rounded-full bg-[#0f4c81] text-white font-semibold shadow-sm hover:bg-[#f57a3d] transition-all duration-300">Get a Quote</a>

            <!-- Mobile menu button -->
            <div class="lg:hidden flex items-center">
                <button @click="mobileMenuOpen = true" class="text-gray-700 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-label="Open main menu">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-cloak class="lg:hidden">
            <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                 class="fixed inset-0 bg-black/50 z-40" @click="mobileMenuOpen = false"></div>

            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" 
                 x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                 class="fixed inset-y-0 left-0 bg-white z-50 w-full max-w-sm p-6 flex flex-col shadow-xl">
                
                <div class="flex items-center justify-between mb-8">
                    <a href="<?php echo BASE_URL; ?>index.php" class="text-gray-900 font-bold text-xl">JobFlow</a>
                    <button @click="mobileMenuOpen = false" class="text-gray-700 p-2 rounded-md -mr-2" aria-label="Close main menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- UPDATED: Mobile Navigation Links with Services Dropdown -->
                <nav x-data="{ servicesOpen: false }">
                    <ul class="space-y-4 text-xl">
                        <li><a href="<?php echo BASE_URL; ?>index.php" class="block font-semibold text-gray-700 hover:text-blue-600">Home</a></li>
                        <li><a href="<?php echo BASE_URL; ?>about_us.php" class="block font-semibold text-gray-700 hover:text-blue-600">About Us</a></li>
                        <li>
                            <button @click="servicesOpen = !servicesOpen" class="w-full flex justify-between items-center font-semibold text-gray-700 hover:text-blue-600">
                                Services
                                <svg class="h-5 w-5 transform transition-transform" :class="{'rotate-180': servicesOpen}" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                            </button>
                            <ul x-show="servicesOpen" x-transition class="pl-4 mt-2 space-y-3 text-lg border-l-2 border-gray-200">
                                <li><a href="dental_services.php" class="block text-gray-600 hover:text-blue-600">Dental Services</a></li>
                                <li><a href="talent_acquisition.php" class="block text-gray-600 hover:text-blue-600">Talent Acquisition</a></li>
                                <li><a href="it_services.php" class="block text-gray-600 hover:text-blue-600">IT Services</a></li>
                                <li><a href="finance_accounting.php" class="block text-gray-600 hover:text-blue-600">Finance & Accounting</a></li>
                                <li><a href="bpo.php" class="block text-gray-600 hover:text-blue-600">BPO Services</a></li>
                                <li><a href="customer_support.php" class="block text-gray-600 hover:text-blue-600">Customer Support</a></li>
                                <li><a href="other_services.php" class="block text-gray-600 hover:text-blue-600">Other Services</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo BASE_URL; ?>team.php" class="block font-semibold text-gray-700 hover:text-blue-600">Our Team</a></li>
                        <li><a href="<?php echo BASE_URL; ?>contact.php" class="block font-semibold text-gray-700 hover:text-blue-600">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main id="main-content">