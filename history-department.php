<?php
$currentPage = 'history-department';
$pageTitle = "History Department | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "The History Department at AUGHS, led by Nazneen Sadique Shaikh (M.A History, M.A Sociology, B.Ed).";
include __DIR__ . '/includes/header.php';

$bannerTitle = "History Department";
$bannerDesc = "Systematic study and documentation of the human past, civilizational memories, and cultural heritage.";
$breadcrumbs = [
    ['title' => 'Departments', 'url' => url('departments.php')],
    ['title' => 'History Department', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Chronicles &amp; Civilizations</span>
            <h2>Department of History &amp; Social Sciences</h2>

            <div class="callout-box" style="font-size: 1.1rem; line-height: 1.8;">
                “History is the systematic study and documentation of the human past. The period of events before the invention of writing systems is considered prehistory. ‘History’ is an umbrella term comprising past events as well as the memory, discovery, collection, organization, presentation, and interpretation of these events.”
            </div>

            <p>
                The study of history at Anglo Urdu Girls’ High School is focused on fostering critical temporal consciousness and constitutional awareness. Students examine the evolution of ancient civilizations, medieval empires, colonial developments, the glorious Indian National Freedom Movement, and contemporary global socio-political transformations.
            </p>
            <p>
                Through historical project maps, mock parliaments, heritage quizzes, and museum visits, students learn to contextualize modern societal events within the continuum of historical decisions.
            </p>

            <!-- Faculty Profile -->
            <h3 style="margin-top: 36px; color: var(--primary);"><i class="fa-solid fa-landmark" style="color:var(--secondary);"></i> Department Faculty</h3>
            
            <div class="message-card-split" style="grid-template-columns: 280px 1fr; margin-top: 20px;">
                <div class="message-card-img" style="background-color: var(--primary);">
                    <img src="<?= url('wp-content/uploads/2023/07/His.png') ?>" alt="Nazneen Sadique Shaikh" class="leader-portrait" style="border-radius: var(--radius-md); width: 190px; height: 230px; object-fit: cover;">
                    <h3 class="leader-name" style="font-size: 1.15rem;">Nazneen Sadique Shaikh</h3>
                    <span class="leader-role">Senior History Teacher</span>
                </div>
                <div class="message-card-body">
                    <span class="faculty-badge" style="background: #fef3c7; color: #92400e;">Faculty Profile</span>
                    <h3 style="color: var(--primary); margin-top: 4px; margin-bottom: 12px;">Nazneen Sadique Shaikh</h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.98rem; color: var(--text-main);">
                        <p style="margin: 0;"><strong>Academic Qualifications:</strong> M.A. (History), M.A. (Sociology), B.Ed.</p>
                        <p style="margin: 0;"><strong>Teaching Experience:</strong> 16 Years</p>
                        <p style="margin: 0;"><strong>Email Address:</strong> <a href="mailto:nazneensadique044@gmail.com" style="color:var(--primary-light); font-weight:600;">nazneensadique044@gmail.com</a></p>
                    </div>

                    <p style="margin-top: 14px; color: var(--text-muted); font-size: 0.92rem;">
                        Bringing over a decade and a half of dedicated expertise in historical pedagogy, interdisciplinary sociological perspectives, and board examination preparation.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('departments.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    All Departments <i class="fa-solid fa-layer-group"></i>
                </a>
                <a href="<?= url('geography-department.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Geography Department <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
