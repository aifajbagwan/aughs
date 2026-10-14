<?php
$currentPage = 'principal-message';
$pageTitle = "Principal Message | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Message from Mrs. Roshan Ara Shaikh, Principal of Anglo Urdu Girls' High School, Azam Campus, Pune.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Principal's Message";
$bannerDesc = "A collaborative vision of academic excellence, personality development, and innovative learning.";
$breadcrumbs = [
    ['title' => 'About Us', 'url' => url('about-us.php')],
    ['title' => 'Principal Message', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <div class="message-card-split" style="margin-bottom: 30px;">
                <div class="message-card-img" style="background-color: var(--primary-dark);">
                    <img src="<?= url('wp-content/uploads/2023/09/roshan-ara-mam-crop.jpg') ?>" alt="Mrs. Roshan Ara Shaikh" class="leader-portrait">
                    <h3 class="leader-name">Mrs. Roshan Ara Shaikh</h3>
                    <span class="leader-role">Principal, AUGHS</span>
                    <span style="font-size: 0.85rem; color: #cbd5e1; margin-top: 4px;">M.A. B.Ed.</span>
                </div>
                <div class="message-card-body">
                    <span class="section-badge">From the Principal’s Desk</span>
                    <h2 style="margin-top: 4px; margin-bottom: 16px; color: var(--primary);">Nurturing Character &amp; Academic Distinction</h2>

                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                    <p style="font-size: 1.08rem; line-height: 1.85;">
                        It gives me enormous pride and pleasure to witness and applaud the collaborative efforts of our teachers and students. M.C.E. Society’s Anglo Urdu Girls’ High School is indeed blessed and fortunate to receive constant support and cooperation from <strong>Dr. P. A. Inamdar</strong> (President M.C.E. Society) and <strong>Mrs. Abeda P. Inamdar</strong> (Vice President M.C.E. Society), Chairman, and members of the school committee in all our endeavors.
                    </p>
                </div>
            </div>

            <!-- Full Message Body -->
            <div style="font-size: 1.04rem; line-height: 1.85; color: var(--text-main);">
                <p>
                    Academic excellence with character and all-around personality development are the core elements of education imparted in this school. At our school, we have the timely realization that the creative domains of the students should be provided a suitable, encouraging environment. Hence the curricular and co-curricular activities organized throughout the year prove to be highly beneficial to our students.
                </p>

                <div class="callout-box">
                    The school makes optimum usage of the <strong>Computer Labs</strong>, <strong>Library</strong>, <strong>E-Learning Digital Classes</strong>, <strong>Spoken English Classes</strong>, and <strong>Sports Ground</strong> to meet the challenges of the modern competitive world with poise and distinction.
                </div>

                <p>
                    I am extremely thankful to the management for extending much-needed assistance to the staff members for retaining a congenial atmosphere filled with positive teamwork. I would appreciate my dear students for always being innovative and zealous, and I extend to them my warmest best wishes for all their future aspirations.
                </p>

                <div style="margin-top: 36px; border-top: 1px solid var(--border-color); padding-top: 20px;">
                    <p style="margin-bottom: 2px; font-weight: 800; font-size: 1.15rem; color: var(--primary);">Mrs. Roshan Ara Shaikh</p>
                    <p style="color: var(--secondary-hover); font-weight: 600; margin-bottom: 4px;">Principal, M.A. B.Ed.</p>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">Anglo Urdu Girls’ High School, M.C.E. Society, Azam Campus, Pune</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('about-us.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    About AUGHS <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= url('admission.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Apply for Admission <i class="fa-solid fa-file-pen"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
