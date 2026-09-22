<?php
require_once 'config.php';

$pages = [
    'index.php',
    'about_us.php',
    'services.php',
    'talent_acquisition.php',
    'it_services.php',
    'finance_accounting.php',
    'bpo.php',
    'customer_support.php',
    'dental_services.php',
    'other_services.php',
    'team.php',
    'contact.php',
    'privacy_policy.php',
];

header('Content-Type: application/xml; charset=utf-8');
$siteUrl = rtrim(SITE_URL, '/');
$lastModified = date('c');

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($pages as $page) {
    $priority = $page === 'index.php' ? '1.0' : ($page === 'services.php' ? '0.9' : '0.7');
    echo '<url>';
    echo '<loc>' . htmlspecialchars($siteUrl . '/' . $page, ENT_XML1, 'UTF-8') . '</loc>';
    echo '<lastmod>' . $lastModified . '</lastmod>';
    echo '<changefreq>monthly</changefreq>';
    echo '<priority>' . $priority . '</priority>';
    echo '</url>';
}
echo '</urlset>';
