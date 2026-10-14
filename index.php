<?php
$currentPage = 'home';
$pageTitle = "Home | M.C.E. Society's Anglo Urdu Girls' High School, Pune";
$pageDesc = "Welcome to Anglo Urdu Girls' High School, Azam Campus, Pune. Providing quality education, modern labs, sports, and value-based learning for girls.";
include __DIR__ . '/includes/header.php';
?>

<!-- Hero Slider / Banner Section -->
<section class="hero-slider-wrap">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="hero-tag"><i class="fa-solid fa-graduation-cap"></i> Welcome to AUGHS</span>
                <h1 class="hero-title">
                    Empowering Young Minds, <br>
                    <span>Enriching Future Leaders</span>
                </h1>
                <p class="hero-subtitle">
                    “If you will pay attention in class you will learn something new every day.” M.C.E. Society's Anglo Urdu Girls' High School stands as a beacon of academic brilliance, technological advancement, and cultural heritage in Azam Campus, Pune.
                </p>
                <div class="hero-buttons">
                    <a href="<?= url('admission.php') ?>" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus"></i> Admissions Open
                    </a>
                    <a href="<?= url('facility.php') ?>" class="btn btn-outline-white">
                        <i class="fa-solid fa-school"></i> Explore Campus
                    </a>
                    <a href="<?= url('about-us.php') ?>" class="btn btn-outline-white">
                        <i class="fa-solid fa-circle-info"></i> About Us
                    </a>
                </div>
            </div>
            
            <div class="hero-card">
                <h3 style="color:#ffffff; font-size:1.3rem; margin-bottom:16px; border-bottom:1px solid rgba(255,255,255,0.2); padding-bottom:10px;">
                    <i class="fa-solid fa-compass" style="color:var(--accent);"></i> Campus Highlights
                </h3>
                <div class="hero-quick-features">
                    <div class="hero-feature-item">
                        <div class="hero-feature-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                        <div class="hero-feature-text">
                            <h4>Smart Digital Classrooms</h4>
                            <p>Equipped with modern projectors and e-learning facilities.</p>
                        </div>
                    </div>
                    <div class="hero-feature-item">
                        <div class="hero-feature-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <div class="hero-feature-text">
                            <h4>High-Tech Computer Lab</h4>
                            <p>High-speed fiber connectivity for IT education &amp; Olympiads.</p>
                        </div>
                    </div>
                    <div class="hero-feature-item">
                        <div class="hero-feature-icon"><i class="fa-solid fa-trophy"></i></div>
                        <div class="hero-feature-text">
                            <h4>Azam Sports Academy</h4>
                            <p>Expansive grounds, throwball championships &amp; rifle shooting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notice Ticker Strip -->
<div class="notice-strip">
    <div class="container">
        <div class="notice-wrap">
            <span class="notice-label"><i class="fa-solid fa-bullhorn"></i> Notice</span>
            <div class="notice-text">
                Online Admissions are now open! Follow the simple 3-step admission procedure. Submit registration form or apply online via the admission portal.
            </div>
        </div>
    </div>
</div>

<!-- Key Stats Counter -->
<section class="section-pad-sm bg-white">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-box">
                <div class="stat-number">100%</div>
                <div class="stat-label">SSC Board Success</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">66+</div>
                <div class="stat-label">Division Merit Toppers</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">40+</div>
                <div class="stat-label">Experienced Teachers</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">15+</div>
                <div class="stat-label">Specialized Labs &amp; Facilities</div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome & Principal Message Section -->
<section class="section-pad bg-alt">
    <div class="container">
        <div class="section-head">
            <span class="section-badge">Welcome Message</span>
            <h2 class="section-title">Message From The Principal's Desk</h2>
            <p class="section-lead">A warm welcome from Mrs. Roshan Ara Shaikh to students, parents, and visitors.</p>
        </div>

        <div class="message-card-split">
            <div class="message-card-img">
                <img src="<?= url('wp-content/uploads/2023/09/roshan-ara-mam-crop.jpg') ?>" alt="Mrs. Roshan Ara Shaikh" class="leader-portrait">
                <h3 class="leader-name">Mrs. Roshan Ara Shaikh</h3>
                <span class="leader-role">Principal, AUGHS</span>
                <span style="font-size: 0.8rem; opacity: 0.8; margin-top: 4px;">M.A. B.Ed.</span>
            </div>
            <div class="message-card-body">
                <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                <p>
                    It gives me enormous pride and pleasure to witness and applaud the collaborative efforts of our teachers and students. M.C.E. Society’s Anglo Urdu Girls’ High School is indeed blessed and fortunate to receive constant support and cooperation from <strong>MRS. ABEDA INAMDAR</strong> (President, M.C.E. Society), Chairman and members of the school committee in all our endeavors.
                </p>
                <p>
                    Academic excellence with character and all-around personality development are the core elements of education imparted in this school. We have the timely realization that the creative domains of the students should be provided a suitable environment...
                </p>
                <a href="<?= url('principal-message.php') ?>" class="btn btn-primary" style="margin-top: 10px;">
                    Read Full Message <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Promotional Banner ("Come and Learn") -->
<div class="container">
    <div class="promo-banner">
        <div class="promo-content">
            <span style="color:var(--accent); font-weight:700; text-transform:uppercase; font-size:0.85rem; letter-spacing:1px;">Come and Learn</span>
            <h3>Anglo Urdu Girl's High School</h3>
            <p>
                Experience interactive learning with state-of-the-art facilities, certified faculty, comprehensive Urdu, English, Mathematics, and Science curricula in a secure and inspiring campus.
            </p>
        </div>
        <div>
            <a href="<?= url('about-us.php') ?>" class="btn btn-primary">
                <i class="fa-solid fa-compass"></i> Discover More
            </a>
        </div>
    </div>
</div>

<!-- President Message Spotlight -->
<section class="section-pad bg-white">
    <div class="container">
        <div class="message-card-split" style="grid-template-columns: 1fr 360px;">
            <div class="message-card-body" style="padding: 40px 0 40px 40px;">
                <span class="section-badge">Leadership Vision</span>
                <h2 style="font-size:1.8rem; margin-bottom:12px; color:var(--primary);">From the President's Desk</h2>
                <div class="callout-box" style="margin-top:0;">
                    “Learning is not achieved by chance; it must be sought for with order and attended to with diligence.”
                </div>
                <p>
                    I take profound pleasure to pen my message for Anglo Urdu Girls’ High School — a door towards success which showcases the hidden talent and artistic sensibilities of the students. M.C.E. Society has scrupulously tapped, promoted, and nurtured true talent through devotion and dedication.
                </p>
                <a href="<?= url('president-message.php') ?>" class="btn btn-primary">
                    Read President's Address <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="message-card-img" style="background-color: var(--primary);">
                <img src="<?= url('wp-content/uploads/2021/02/abeda-inamdar.jpg') ?>" alt="MRS. ABEDA INAMDAR" class="leader-portrait">
                <h3 class="leader-name">MRS. ABEDA INAMDAR</h3>
                <span class="leader-role">President, M.C.E. Society</span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Programs & Campus Facilities -->
<section class="section-pad bg-alt">
    <div class="container">
        <div class="section-head">
            <span class="section-badge">Campus Infrastructure</span>
            <h2 class="section-title">World-Class Facilities</h2>
            <p class="section-lead">Equipping students with modern tools, spacious environments, and athletic arenas.</p>
        </div>

        <div class="grid-3">
            <!-- Facility 1: Classrooms -->
            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/02/j2-1024x682.jpg') ?>" alt="AUGHS Classrooms">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Digital Classrooms</h3>
                    <p class="card-text">
                        Each classroom is fully furnished, spacious, and well-lighted, equipped with computers and digital projectors for interactive e-learning.
                    </p>
                    <a href="<?= url('facility.php') ?>" class="card-footer-link">
                        View Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Facility 2: Computer Lab -->
            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/03/j5-1024x682.jpg') ?>" alt="Computer Lab">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Computer Applications Lab</h3>
                    <p class="card-text">
                        Modern computer laboratory providing training in computer applications, programming, MS-CIT, CCC, and high-speed fiber internet.
                    </p>
                    <a href="<?= url('facility.php') ?>" class="card-footer-link">
                        View Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Facility 3: Science Labs -->
            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/03/4-1024x768.jpg') ?>" alt="Science Laboratories">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Science Laboratories</h3>
                    <p class="card-text">
                        Well-equipped Physics, Chemistry, and Biology laboratories enabling hands-on experimentation and scientific inquiry.
                    </p>
                    <a href="<?= url('facility.php') ?>" class="card-footer-link">
                        View Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Facility 4: Library -->
            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/03/1-1024x682.jpg') ?>" alt="School Library">
                </div>
                <div class="card-body">
                    <h3 class="card-title">School Library</h3>
                    <p class="card-text">
                        Located on the 2nd floor, housing textbooks, encyclopedias, atlases, board exam papers, periodicals, and global reading resources.
                    </p>
                    <a href="<?= url('facility.php') ?>" class="card-footer-link">
                        View Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Facility 5: Sports Ground -->
            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/03/2.jpg') ?>" alt="Sports Ground">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Azam Sports Academy</h3>
                    <p class="card-text">
                        Expansive playground and centralized sports academy fostering athletic talent in throwball, rifle shooting, athletics, and tennis.
                    </p>
                    <a href="<?= url('facility.php') ?>" class="card-footer-link">
                        View Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Facility 6: Chemistry Lab -->
            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/03/5-1024x768.jpg') ?>" alt="Chemistry Lab">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Advanced Chemistry Lab</h3>
                    <p class="card-text">
                        Fully equipped with safety apparatus, reagents, and instruments for practical syllabus experiments from Std VI through SSC.
                    </p>
                    <a href="<?= url('facility.php') ?>" class="card-footer-link">
                        View Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Academic Departments Quick Links -->
<section class="section-pad bg-white">
    <div class="container">
        <div class="section-head">
            <span class="section-badge">Curriculum Excellence</span>
            <h2 class="section-title">Academic Departments</h2>
            <p class="section-lead">Dedicated faculty inspiring academic depth across key scholastic domains.</p>
        </div>

        <div class="grid-3">
            <div class="card-item" style="border-top: 4px solid #10b981;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fa-solid fa-book-quran" style="color:#10b981;"></i> Urdu Department</h3>
                    <p class="card-text">
                        Preserving the rich poetic, literary, and cultural heritage of Urdu language through competitions, debates, and ghazal recitation.
                    </p>
                    <a href="<?= url('urdu-department.php') ?>" class="card-footer-link">Explore Department <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="card-item" style="border-top: 4px solid #3b82f6;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fa-solid fa-square-root-variable" style="color:#3b82f6;"></i> Maths Department</h3>
                    <p class="card-text">
                        Led by Ms. Shabina Ayyub Shaikh with 12 faculty members, organizing annual math quizzes, talent search exams, and analytical workshops.
                    </p>
                    <a href="<?= url('maths-department.php') ?>" class="card-footer-link">Explore Department <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="card-item" style="border-top: 4px solid #8b5cf6;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fa-solid fa-flask" style="color:#8b5cf6;"></i> Science Department</h3>
                    <p class="card-text">
                        Comprehensive investigation and exploration of natural causes, hands-on laboratory experiments, and scientific exhibits.
                    </p>
                    <a href="<?= url('science-department.php') ?>" class="card-footer-link">Explore Department <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="card-item" style="border-top: 4px solid #f59e0b;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fa-solid fa-landmark" style="color:#f59e0b;"></i> History Department</h3>
                    <p class="card-text">
                        Systematic study of human past, civilizational progress, cultural preservation, and national freedom movements.
                    </p>
                    <a href="<?= url('history-department.php') ?>" class="card-footer-link">Explore Department <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="card-item" style="border-top: 4px solid #06b6d4;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fa-solid fa-earth-americas" style="color:#06b6d4;"></i> Geography Department</h3>
                    <p class="card-text">
                        Understanding physical environment, resources, World Population Day, Ozone Day celebrations, and ecological field visits.
                    </p>
                    <a href="<?= url('geography-department.php') ?>" class="card-footer-link">Explore Department <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="card-item" style="border-top: 4px solid #ec4899;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fa-solid fa-language" style="color:#ec4899;"></i> English Department</h3>
                    <p class="card-text">
                        Fostering communicative mastery, grammar, creative writing, and public speaking in English to empower global competency.
                    </p>
                    <a href="<?= url('english-department.php') ?>" class="card-footer-link">Explore Department <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Activities & Competitions Preview -->
<section class="section-pad bg-alt">
    <div class="container">
        <div class="section-head">
            <span class="section-badge">Life At AUGHS</span>
            <h2 class="section-title">Recent Activities &amp; Competitions</h2>
            <p class="section-lead">Highlights of co-curricular engagements, sports triumphs, and artistic exhibitions.</p>
        </div>

        <div class="grid-3">
            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/02/11.png') ?>" alt="IT Olympiad">
                </div>
                <div class="card-body">
                    <h3 class="card-title">National IT Olympiad</h3>
                    <p class="card-text">
                        Organized by PAI ICT Academy at Dr. A.R. Shaikh Assembly Hall, engaging students in advanced computational problem-solving.
                    </p>
                    <a href="<?= url('activities.php') ?>" class="card-footer-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/02/12.png') ?>" alt="Drawing Competition">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Inter-School Art Competition</h3>
                    <p class="card-text">
                        Conducted by Art Teacher Mrs. S.H. Shaikh with 72 participants from Std V to X, showcasing immense creative and painting talent.
                    </p>
                    <a href="<?= url('activities.php') ?>" class="card-footer-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="card-item">
                <div class="card-media">
                    <img src="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.51.38-PM-1024x768.jpeg') ?>" alt="Throwball Competition">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Throwball Championship</h3>
                    <p class="card-text">
                        Azam Sports Academy Annual Intra-Campus Teachers Competition: AUGHS claimed both the Winner and Runner-up trophies.
                    </p>
                    <a href="<?= url('staff-achievements.php') ?>" class="card-footer-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div style="text-align:center; margin-top:36px;">
            <a href="<?= url('activities.php') ?>" class="btn btn-primary" style="margin-right:12px;">
                View All Activities <i class="fa-solid fa-list-check"></i>
            </a>
            <a href="<?= url('gallery.php') ?>" class="btn btn-primary" style="background:var(--primary);">
                Browse Photo Gallery <i class="fa-solid fa-images"></i>
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
