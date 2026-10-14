<?php
$currentPage = 'achievements';
$pageTitle = "Achievements | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Exemplary achievements of students and teachers of Anglo Urdu Girls' High School in academics, sports, and professional excellence.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "School Achievements";
$bannerDesc = "Celebrating decades of unparalleled academic merit, sports championships, and pedagogical excellence.";
$breadcrumbs = [
    ['title' => 'Achievements', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Hall of Fame</span>
            <h2>Celebrating Student &amp; Faculty Distinction</h2>
            <p>
                At Anglo Urdu Girls’ High School, striving for excellence is a habit nurtured across classrooms, laboratories, and athletic courts. Over the years, our students have repeatedly established benchmarks in the Maharashtra SSC Board Examinations, clinching top merit positions across Pune Division. Concurrently, our dedicated teaching faculty continuously achieves accolades in district sports, ICT certifications, and state teacher recognition.
            </p>

            <div class="stats-grid" style="margin: 36px 0;">
                <div class="stat-box">
                    <div class="stat-number">66+</div>
                    <div class="stat-label">Division Merit Ranks</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">97.45%</div>
                    <div class="stat-label">Record Highest Score</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">CCC Certified Faculty</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">Top 10</div>
                    <div class="stat-label">R.S.P. Platoon in District</div>
                </div>
            </div>

            <div class="grid-2" style="margin-top: 32px;">
                <!-- Student Achievements Card -->
                <div class="card-item" style="border-top: 4px solid var(--secondary);">
                    <div class="card-body">
                        <div style="font-size: 2.2rem; color: var(--secondary); margin-bottom: 12px;">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <h3 class="card-title">Student Achievements &amp; SSC Toppers</h3>
                        <p class="card-text">
                            Explore our comprehensive Hall of Fame featuring 66 distinguished SSC Board toppers from 1993 to 2019 who brought laurels to AUGHS by securing 1st, 2nd, 3rd, 4th, and 5th ranks in the Pune Division.
                        </p>
                        <a href="<?= url('student-achievements.php') ?>" class="btn btn-primary" style="margin-top: auto;">
                            View SSC Merit List <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Staff Achievements Card -->
                <div class="card-item" style="border-top: 4px solid var(--primary);">
                    <div class="card-body">
                        <div style="font-size: 2.2rem; color: var(--primary); margin-bottom: 12px;">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <h3 class="card-title">Staff Achievements &amp; Honors</h3>
                        <p class="card-text">
                            Learn about our faculty’s stellar achievements: winners of the Intra-Campus Teachers Throwball Championship, 100% staff passing the government CCC examination, and Best Teacher awards from Maulana Azad Trust.
                        </p>
                        <a href="<?= url('staff-achievements.php') ?>" class="btn btn-primary" style="margin-top: auto; background: var(--primary);">
                            View Staff Achievements <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
