<?php
require_once __DIR__ . '/../config.php';

// Default page title and description
$pageTitle = isset($pageTitle) ? $pageTitle . " | " . SITE_NAME : SITE_NAME . " - Azam Campus, Pune";
$pageDesc = isset($pageDesc) ? $pageDesc : "Official Website of Anglo Urdu Girls' High School, M.C.E. Society, Azam Campus, Pune. Excellence in academic, moral and extracurricular education.";
$currentPage = isset($currentPage) ? $currentPage : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDesc) ?>">
    <link rel="canonical" href="<?= e(url($_SERVER['REQUEST_URI'] ?? '')) ?>">

    <!-- Favicons -->
    <link rel="icon" href="<?= url('wp-content/uploads/2021/03/2-aughs-60x60.jpg') ?>" sizes="32x32" />
    <link rel="icon" href="<?= url('wp-content/uploads/2021/03/2-aughs.jpg') ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?= url('wp-content/uploads/2021/03/2-aughs.jpg') ?>" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;700&family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Modern Stylesheet -->
    <link rel="stylesheet" href="<?= url('assets/css/style.css?v=' . filemtime(__DIR__ . '/../assets/css/style.css')) ?>">
</head>
<body>

    <!-- Top Contact Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-contact">
                <a href="mailto:<?= SCHOOL_EMAIL ?>"><i class="fa-solid fa-envelope"></i> <?= SCHOOL_EMAIL ?></a>
                <a href="tel:<?= str_replace('-', '', SCHOOL_PHONE) ?>"><i class="fa-solid fa-phone"></i> <?= SCHOOL_PHONE ?></a>
                <span class="campus-badge"><i class="fa-solid fa-graduation-cap"></i> Azam Campus, Pune</span>
            </div>
            <div class="top-bar-right">
                <span style="font-size:0.8rem; color:#cbd5e1;"><i class="fa-solid fa-clock"></i> <?= SCHOOL_HOURS ?></span>
            </div>
        </div>
    </div>

    <!-- Main Branding Header -->
    <header class="branding-header">
        <div class="container">
            <div class="branding-wrap">
                <a href="<?= url('index.php') ?>" class="school-brand" aria-label="Home">
                    <img src="<?= url('wp-content/uploads/2021/03/cropped-4-aughs.png') ?>" alt="AUGHS Logo" class="school-logo">
                    <div class="school-titles">
                        <span class="society-title">M.C.E. Society's</span>
                        <h1 class="school-name">Anglo Urdu Girls' High School</h1>
                        <span class="school-sub">2390-B, K.B. Hidayatulla Rd, Azam Campus, Camp, Pune - 411001</span>
                    </div>
                </a>
                <div class="header-cta-group">
                    <a href="<?= url('admission.php') ?>" class="btn-header-admit">
                        <i class="fa-solid fa-file-pen"></i> Apply for Admission
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="main-nav-bar" id="mainNavBar">
        <div class="container">
            <button class="mobile-nav-toggle" aria-label="Toggle navigation menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-item <?= isActive('home', $currentPage) ?>">
                    <a href="<?= url('index.php') ?>" class="nav-link">Home</a>
                </li>
                
                <li class="nav-item nav-item-has-children <?= isActive(['about-us', 'our-philosophy', 'mission-vission', 'president-message', 'principal-message'], $currentPage) ?>">
                    <a href="<?= url('about-us.php') ?>" class="nav-link">
                        About us <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item <?= isActive('about-us', $currentPage) ?>">
                            <a href="<?= url('about-us.php') ?>" class="submenu-link">Overview & History</a>
                        </li>
                        <li class="submenu-item <?= isActive('our-philosophy', $currentPage) ?>">
                            <a href="<?= url('our-philosophy.php') ?>" class="submenu-link">Our Philosophy</a>
                        </li>
                        <li class="submenu-item <?= isActive('mission-vission', $currentPage) ?>">
                            <a href="<?= url('mission-vission.php') ?>" class="submenu-link">Mission &amp; Vision</a>
                        </li>
                        <li class="submenu-item <?= isActive('president-message', $currentPage) ?>">
                            <a href="<?= url('president-message.php') ?>" class="submenu-link">President Message</a>
                        </li>
                        <li class="submenu-item <?= isActive('principal-message', $currentPage) ?>">
                            <a href="<?= url('principal-message.php') ?>" class="submenu-link">Principal Message</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= isActive('admission', $currentPage) ?>">
                    <a href="<?= url('admission.php') ?>" class="nav-link">Admission</a>
                </li>

                <li class="nav-item <?= isActive('activities', $currentPage) ?>">
                    <a href="<?= url('activities.php') ?>" class="nav-link">Activities</a>
                </li>

                <li class="nav-item <?= isActive('facility', $currentPage) ?>">
                    <a href="<?= url('facility.php') ?>" class="nav-link">Facility</a>
                </li>

                <li class="nav-item nav-item-has-children <?= isActive(['achievements', 'staff-achievements', 'student-achievements'], $currentPage) ?>">
                    <a href="<?= url('achievements.php') ?>" class="nav-link">
                        Achievements <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item <?= isActive('achievements', $currentPage) ?>">
                            <a href="<?= url('achievements.php') ?>" class="submenu-link">Achievements Overview</a>
                        </li>
                        <li class="submenu-item <?= isActive('staff-achievements', $currentPage) ?>">
                            <a href="<?= url('staff-achievements.php') ?>" class="submenu-link">Staff Achievements</a>
                        </li>
                        <li class="submenu-item <?= isActive('student-achievements', $currentPage) ?>">
                            <a href="<?= url('student-achievements.php') ?>" class="submenu-link">Student Achievements</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-has-children <?= isActive(['information', 'rules-regulations'], $currentPage) ?>">
                    <a href="<?= url('information.php') ?>" class="nav-link">
                        Information <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item <?= isActive('information', $currentPage) ?>">
                            <a href="<?= url('information.php') ?>" class="submenu-link">Governing Board &amp; Staff</a>
                        </li>
                        <li class="submenu-item <?= isActive('rules-regulations', $currentPage) ?>">
                            <a href="<?= url('rules-regulations.php') ?>" class="submenu-link">Rules &amp; Regulations</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-item-has-children <?= isActive(['departments', 'urdu-department', 'science-department', 'maths-department', 'history-department', 'geography-department', 'english-department'], $currentPage) ?>">
                    <a href="<?= url('departments.php') ?>" class="nav-link">
                        Departments <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item <?= isActive('departments', $currentPage) ?>">
                            <a href="<?= url('departments.php') ?>" class="submenu-link">All Departments</a>
                        </li>
                        <li class="submenu-item <?= isActive('urdu-department', $currentPage) ?>">
                            <a href="<?= url('urdu-department.php') ?>" class="submenu-link">Urdu Department</a>
                        </li>
                        <li class="submenu-item <?= isActive('science-department', $currentPage) ?>">
                            <a href="<?= url('science-department.php') ?>" class="submenu-link">Science Department</a>
                        </li>
                        <li class="submenu-item <?= isActive('maths-department', $currentPage) ?>">
                            <a href="<?= url('maths-department.php') ?>" class="submenu-link">Maths Department</a>
                        </li>
                        <li class="submenu-item <?= isActive('history-department', $currentPage) ?>">
                            <a href="<?= url('history-department.php') ?>" class="submenu-link">History Department</a>
                        </li>
                        <li class="submenu-item <?= isActive('geography-department', $currentPage) ?>">
                            <a href="<?= url('geography-department.php') ?>" class="submenu-link">Geography Department</a>
                        </li>
                        <li class="submenu-item <?= isActive('english-department', $currentPage) ?>">
                            <a href="<?= url('english-department.php') ?>" class="submenu-link">English Department</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= isActive('gallery', $currentPage) ?>">
                    <a href="<?= url('gallery.php') ?>" class="nav-link">Gallery</a>
                </li>

                <li class="nav-item <?= isActive(['contact', 'contact-2'], $currentPage) ?>">
                    <a href="<?= url('contact.php') ?>" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
