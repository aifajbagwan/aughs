<?php
$currentPage = 'maths-department';
$pageTitle = "Mathematics Department | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "The Mathematics Department at AUGHS, headed by Ms. Shabina Ayyub Shaikh with 12 faculty members, running the Inamdar Maths Academy.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Mathematics Department";
$bannerDesc = "Building mental discipline, logical reasoning, and analytical prowess through conceptual learning.";
$breadcrumbs = [
    ['title' => 'Departments', 'url' => url('departments.php')],
    ['title' => 'Maths Department', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';

$mathFaculty = [
    [
        'name' => 'Mrs. Nafeesa Shaikh',
        'role' => 'Assistant Teacher',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Nafeesa-Shaikh.jpg'
    ],
    [
        'name' => 'Mrs. Rizwana Shaikh',
        'role' => 'Assistant Teacher',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Rizwana-Shaikh.jpg'
    ],
    [
        'name' => 'Mrs. Qamrunnisa Shaikh',
        'role' => 'Assistant Teacher',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Qamrunnisa-Shaikh.jpg'
    ],
    [
        'name' => 'Mrs. Munzarin Shaikh',
        'role' => 'Assistant Teacher',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Munzarin-Shaikh.jpg'
    ],
    [
        'name' => 'Mrs. Yasmeen Shaikh',
        'role' => 'Assistant Teacher',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Yasmeen-Shaikh.jpg'
    ],
    [
        'name' => 'Mrs. Naziya Sayyed',
        'role' => 'Assistant Teacher',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Naziya-Sayyed.jpg'
    ],
    [
        'name' => 'Mrs. Sameena Khan',
        'role' => 'Assistant Teacher',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Sameena-Khan.jpg'
    ],
    [
        'name' => 'Mrs. Sana Dafedar',
        'role' => 'Assistant Teacher',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Sana-Dafedar.jpg'
    ],
    [
        'name' => 'Mrs. Sana Javed',
        'role' => 'Shikshan Sevak',
        'img'  => 'wp-content/uploads/2023/07/Mrs-Sana-Javed.jpg'
    ],
    [
        'name' => 'Mrs. Almas Patel',
        'role' => 'Shikshan Sevak',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Almas-Patel.jpg'
    ],
    [
        'name' => 'Mrs. Bushra Rogangar',
        'role' => 'Shikshan Sevak',
        'img'  => 'wp-content/uploads/2023/07/Mrs.Bushra-Rogangar.jpg'
    ]
];
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Analytical Rigor</span>
            <h2>Department of Mathematics</h2>
            
            <div class="callout-box" style="font-size: 1.1rem; line-height: 1.8;">
                “Mathematics is a powerful tool for global understanding and communication that organizes our lives and prevents chaos. Mathematics helps us understand the world and provides an effective way of building mental discipline.”
            </div>

            <p>
                Math encourages logical reasoning, critical thinking, creative thinking, abstract and spatial visualization, problem-solving ability, and clear communication skills. Mathematics plays a vital role in all aspects of life, whether in everyday matters such as time tracking, driving, and cooking, or specialized professional careers in accounting, finance, banking, data engineering, and software development.
            </p>
            <p>
                These functions require a solid mathematical background, and scientific experiments conducted by scientists rely fundamentally upon mathematical techniques. Mathematics serves as the universal language to describe scientific discoveries and technological achievements.
            </p>

            <!-- Curricular Initiatives -->
            <div class="grid-3" style="margin: 32px 0;">
                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid var(--primary);">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-brain"></i> Inter-Class Math Quiz</h4>
                    <p style="font-size:0.92rem; margin:0;">Organized regularly to test quick mental calculations, logic puzzles, and core subject comprehension among students.</p>
                </div>

                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid var(--secondary);">
                    <h4 style="color:var(--secondary-hover); margin-bottom:8px;"><i class="fa-solid fa-book-atlas"></i> Inamdar Maths Academy</h4>
                    <p style="font-size:0.92rem; margin:0;">Formed by Dr. P. A. Inamdar, the academy provided a 7-volume series of specialized mathematics books for conceptual depth.</p>
                </div>

                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #10b981;">
                    <h4 style="color:#047857; margin-bottom:8px;"><i class="fa-solid fa-trophy"></i> Competitive Examinations</h4>
                    <p style="font-size:0.92rem; margin:0;">Students actively compete in Pune Talent Search (PTS), State Scholarship, NMMS, National Talent Search (NTS), and Rehmani30.</p>
                </div>
            </div>

            <!-- Head of Department Spotlight -->
            <h3 style="margin-top: 40px; color: var(--primary);"><i class="fa-solid fa-crown" style="color:var(--secondary);"></i> Head of Department</h3>
            <div class="message-card-split" style="grid-template-columns: 280px 1fr; margin-top: 20px;">
                <div class="message-card-img" style="background-color: var(--primary);">
                    <img src="<?= url('wp-content/uploads/2023/07/Ms.Shabina-Ayyub-Shaikh.jpg') ?>" alt="Ms. Shabina Ayyub Shaikh" class="leader-portrait" style="border-radius: var(--radius-md); width: 190px; height: 210px; object-fit: cover;">
                    <h3 class="leader-name" style="font-size: 1.15rem;">Ms. Shabina Ayyub Shaikh</h3>
                    <span class="leader-role">HOD, Mathematics Department</span>
                </div>
                <div class="message-card-body">
                    <span class="faculty-badge" style="background: #dbeafe; color: #1e40af;">HOD Profile</span>
                    <h3 style="color: var(--primary); margin-top: 4px; margin-bottom: 12px;">Ms. Shabina Ayyub Shaikh</h3>
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.98rem; color: var(--text-main);">
                        <p style="margin: 0;"><strong>Academic Qualification:</strong> M.Sc. B.Ed.</p>
                        <p style="margin: 0;"><strong>Teaching Experience:</strong> 15+ Years</p>
                        <p style="margin: 0;"><strong>Official Email:</strong> <a href="mailto:shabinashaikh@azamcampus.org" style="color:var(--primary-light); font-weight:600;">shabinashaikh@azamcampus.org</a></p>
                    </div>
                    <p style="margin-top: 14px; color: var(--text-muted); font-size: 0.92rem;">
                        Leading the curriculum planning, inter-class math exhibitions, diagnostic mentoring, and competitive exam training across classes V through X.
                    </p>
                </div>
            </div>

            <!-- Department Faculty Team (11 Teachers with Real Photos) -->
            <h3 style="margin-top: 48px; color: var(--primary);"><i class="fa-solid fa-people-group" style="color:var(--secondary);"></i> Mathematics Teaching Faculty</h3>
            <p style="color: var(--text-muted); margin-bottom: 24px;">Our accomplished team of mathematics teachers guiding secondary students with individual care:</p>

            <div class="grid-4">
                <?php foreach ($mathFaculty as $mf): ?>
                    <div class="faculty-card">
                        <img src="<?= url($mf['img']) ?>" alt="<?= e($mf['name']) ?>" class="faculty-avatar">
                        <h4 class="faculty-name"><?= e($mf['name']) ?></h4>
                        <span class="faculty-badge"><?= e($mf['role']) ?></span>
                        <p class="faculty-meta">Mathematics Faculty</p>
                        <p class="faculty-meta" style="font-size:0.8rem; color:var(--text-light);"><i class="fa-solid fa-graduation-cap"></i> Secondary Section</p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('science-department.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    Science Department <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= url('departments.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    All Departments <i class="fa-solid fa-layer-group"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
