<?php
$currentPage = 'president-message';
$pageTitle = "President Message | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Read the message from MRS. ABEDA INAMDAR, President of M.C.E. Society, on women empowerment and modern education at AUGHS.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "President's Message";
$bannerDesc = "Guiding principles on women empowerment, technological advent, and leadership development.";
$breadcrumbs = [
    ['title' => 'About Us', 'url' => url('about-us.php')],
    ['title' => 'President Message', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <div class="message-card-split" style="margin-bottom: 30px;">
                <div class="message-card-img" style="background-color: var(--primary);">
                    <img src="<?= url('wp-content/uploads/2021/02/abeda-inamdar.jpg?v=' . filemtime(__DIR__ . '/wp-content/uploads/2021/02/abeda-inamdar.jpg')) ?>" alt="MRS. ABEDA INAMDAR" class="leader-portrait">
                    <h3 class="leader-name" style="color: #ffffff !important; margin: 8px 0 4px 0;">MRS. ABEDA INAMDAR</h3>
                    <span class="leader-role">President, M.C.E. Society</span>
                    <span style="font-size: 0.82rem; color: #cbd5e1; margin-top: 4px;">Visionary Leader &amp; Educationist</span>
                </div>
                <div class="message-card-body">
                    <span class="section-badge">From the President’s Desk</span>
                    <h2 style="margin-top: 4px; margin-bottom: 16px; color: var(--primary);">Empowering Girls to Become Leaders &amp; Job Generators</h2>

                    <div class="callout-box" style="margin-top: 0; font-size: 1.15rem; color: var(--primary-dark);">
                        “Learning is not achieved by chance; it must be sought for with order and attended to with diligence.”
                    </div>

                    <p>
                        I take a profound pleasure to pen my message for <strong>Anglo Urdu Girls’ High School</strong> — a door towards success which showcases the hidden content, talent, and skills of the students. Their artistic sensibilities are a beautiful blend of creative writing, modern thinking, and aesthetic and athletic potentials.
                    </p>
                    <p>
                        M.C.E. Society has scrupulously tapped, promoted, and nurtured true talent by sheer determination, devotion, and dedication.
                    </p>
                </div>
            </div>

            <!-- Full Body of President's Message -->
            <div style="font-size: 1.04rem; line-height: 1.85; color: var(--text-main);">
                <p>
                    This progressive institute has inculcated not only moral value strengths in the youngsters, but also encouraged the advent of technology in the field of imparting education. I opine that the winds and waves are always on the side of the ablest navigators. I yearn and strive hard to train the young minds to become true leaders for the times to come.
                </p>

                <div class="callout-box" style="border-left-color: var(--accent); background: #fefce8;">
                    <strong>“Women Empowerment”</strong> and <strong>“Girl Power”</strong> is the call of the day. Hence, I take immense pride in knowing that commendable academic excellence is proven here in outstanding achievements like MS-CIT, CCC exams, and Hardware. Language enhancement — be it Marathi, Urdu, or English — is the course of our all-round development. The exemplary performance of the students in all curricular and extracurricular activities affirms the timeless adage: <em>“The hand that rocks the cradle rules the world.”</em>
                </div>

                <p>
                    As an ardent admirer and supporter of traditional values combined with modern education, as an educationist my thirst is on orienting our students to become <strong>Job Generators rather than job seekers</strong>.
                </p>

                <p style="font-weight: 600; color: var(--primary);">
                    “Perseverance, persistence, patience, and perspiration make an unbeatable combination for success.”
                </p>

                <p>
                    This alma mater has been an abode of novel ideas which emphasize on <em>“Responsibility, Recycle, and Recreation.”</em>
                </p>

                <div class="callout-box">
                    “If you focus on results, you will never change; if you focus on change, you will get results.”
                </div>

                <p>
                    The school leadership, together with highly spirited and motivated teaching faculty members and exuberant students, has been a hallmark of this prestigious institute. Their wholehearted zeal, enthusiasm, positive blend of mind, and innovative abilities have enabled the students to attain unprecedented success.
                </p>

                <p style="margin-top: 24px; font-weight: 700; color: var(--primary);">
                    I forward my heartfelt blessings and warmest best wishes for a glorious future.
                </p>

                <div style="margin-top: 32px; border-top: 1px solid var(--border-color); padding-top: 20px;">
                    <p style="margin-bottom: 2px; font-weight: 800; font-size: 1.1rem; color: var(--primary);">MRS. ABEDA INAMDAR</p>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">President, Maharashtra Cosmopolitan Education Society, Azam Campus, Pune</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('principal-message.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    Read Principal's Message <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= url('student-achievements.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    View Student Achievements <i class="fa-solid fa-trophy"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
