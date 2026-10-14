<?php
/**
 * Configuration file for Anglo Urdu Girls' High School Website
 * M.C.E. Society, Pune
 */

// Error reporting for development (can be turned off in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Dynamic Base URL detection
if (!defined('BASE_URL')) {
    $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    // If running in subdirectory like /aughs
    $baseDir = rtrim($scriptDir, '/');
    define('BASE_URL', $baseDir);
}

// Site Details
define('SITE_NAME', "M.C.E. Society's Anglo Urdu Girls' High School");
define('SITE_SHORT_NAME', 'AUGHS');
define('SITE_TAGLINE', 'A Door Towards Success - Empowering Young Girls for Tomorrow');
define('SCHOOL_PHONE', '020-26446936');
define('SCHOOL_EMAIL', 'prin-aughs@azamcampus.org');
define('SCHOOL_ADDRESS', '2390-B, K.B. Hidayatulla Rd, Azam Campus, Camp, Pune, Maharashtra 411001');
define('SCHOOL_HOURS', 'Mon - Sat: 7:30 AM - 5:30 PM');
define('ADMISSION_FORM_URL', 'https://forms.gle/EwV313uffWq2fTdB8');

/**
 * Generate asset / page URL
 */
function url($path = '') {
    $path = ltrim($path, '/');
    if (empty($path)) {
        return BASE_URL ? BASE_URL . '/' : '/';
    }
    return (BASE_URL ? BASE_URL . '/' : '/') . $path;
}

/**
 * Check if the given slug matches the current active page
 */
function isActive($slugs, $currentPage) {
    if (!is_array($slugs)) {
        $slugs = [$slugs];
    }
    return in_array($currentPage, $slugs) ? 'active' : '';
}

/**
 * Sanitize string for output
 */
function e($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}
