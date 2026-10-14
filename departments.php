<?php
$currentPage = 'departments';
$pageTitle = "Academic Departments | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Overview of academic departments at AUGHS: Urdu, Science, Mathematics, History, Geography, and English.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Academic Departments";
$bannerDesc = "Specialized scholastic departments dedicated to nurturing critical inquiry, linguistic eloquence, and scientific temperament.";
$breadcrumbs = [
    ['title' => 'Departments', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Scholastic Disciplines</span>
            <h2>Our Specialized Academic Departments</h2>
            <p>
                At Anglo Urdu Girls’ High School, each scholastic department is staffed by qualified, passionate educators who foster analytical depth, conceptual clarity, and practical applications in secondary school education.
            </p>

            <div class="grid-3" style="margin-top: 36px;">
                <!-- Urdu Department -->
                <div class="card-item" style="border-top: 4px solid #10b981;">
                    <div class="card-body">
                        <div style="font-size: 2.2rem; color: #10b981; margin-bottom: 12px;">
                            <i class="fa-solid fa-book-quran"></i>
                        </div>
                        <h3 class="card-title">Urdu Department</h3>
                        <p class="card-text">
                            Celebrating our rich mother tongue with calligraphy, poetry recitation (Ghazals &amp; Nazms), essay competitions, and cultural literature events under the leadership of Mrs. Farheen Arif Khan.
                        </p>
                        <a href="<?= url('urdu-department.php') ?>" class="card-footer-link">
                            Explore Department <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Mathematics Department -->
                <div class="card-item" style="border-top: 4px solid #3b82f6;">
                    <div class="card-body">
                        <div style="font-size: 2.2rem; color: #3b82f6; margin-bottom: 12px;">
                            <i class="fa-solid fa-square-root-variable"></i>
                        </div>
                        <h3 class="card-title">Maths Department</h3>
                        <p class="card-text">
                            Headed by Ms. Shabina Ayyub Shaikh with a team of 12 dedicated faculty members, running the Inamdar Maths Academy, inter-class quizzes, and talent search competitive exams.
                        </p>
                        <a href="<?= url('maths-department.php') ?>" class="card-footer-link">
                            Explore Department <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Science Department -->
                <div class="card-item" style="border-top: 4px solid #8b5cf6;">
                    <div class="card-body">
                        <div style="font-size: 2.2rem; color: #8b5cf6; margin-bottom: 12px;">
                            <i class="fa-solid fa-flask"></i>
                        </div>
                        <h3 class="card-title">Science Department</h3>
                        <p class="card-text">
                            Headed by Mrs. Yasmeen Sameer Shaikh, delivering hands-on physics, chemistry, and biology laboratory training, scientific exhibitions, and natural exploration.
                        </p>
                        <a href="<?= url('science-department.php') ?>" class="card-footer-link">
                            Explore Department <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- History Department -->
                <div class="card-item" style="border-top: 4px solid #f59e0b;">
                    <div class="card-body">
                        <div style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 12px;">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <h3 class="card-title">History Department</h3>
                        <p class="card-text">
                            Under Nazneen Sadique Shaikh (M.A History, M.A Sociology), exploring human past, world civilizations, Indian freedom movement, and historical preservation.
                        </p>
                        <a href="<?= url('history-department.php') ?>" class="card-footer-link">
                            Explore Department <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Geography Department -->
                <div class="card-item" style="border-top: 4px solid #06b6d4;">
                    <div class="card-body">
                        <div style="font-size: 2.2rem; color: #06b6d4; margin-bottom: 12px;">
                            <i class="fa-solid fa-earth-americas"></i>
                        </div>
                        <h3 class="card-title">Geography Department</h3>
                        <p class="card-text">
                            Led by Mrs. Minaz Naeem Tamboli, organizing environmental poster making, World Population Day, Ozone Day, and educational excursions to Katraj Dairy and Anandvan.
                        </p>
                        <a href="<?= url('geography-department.php') ?>" class="card-footer-link">
                            Explore Department <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- English Department -->
                <div class="card-item" style="border-top: 4px solid #ec4899;">
                    <div class="card-body">
                        <div style="font-size: 2.2rem; color: #ec4899; margin-bottom: 12px;">
                            <i class="fa-solid fa-language"></i>
                        </div>
                        <h3 class="card-title">English Department</h3>
                        <p class="card-text">
                            Building communicative fluency, grammatical foundation, public speaking, and creative writing to equip young women for higher academic and professional spheres.
                        </p>
                        <a href="<?= url('english-department.php') ?>" class="card-footer-link">
                            Explore Department <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
