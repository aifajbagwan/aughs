<?php
$currentPage = 'mission-vission';
$pageTitle = "Mission & Vision | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Explore the mission and vision of Anglo Urdu Girls' High School, dedicated to empowering girls through joyful learning and 21st-century skills.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Mission &amp; Vision";
$bannerDesc = "Guiding our pedagogical journey towards holistic empowerment and 21st-century excellence.";
$breadcrumbs = [
    ['title' => 'About Us', 'url' => url('about-us.php')],
    ['title' => 'Mission & Vision', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Our Purpose</span>
            <h2>Our Mission &amp; Strategic Vision</h2>

            <!-- Mission Section -->
            <div style="background: linear-gradient(to right, #eff6ff, #f8fafc); border-radius: var(--radius-md); padding: 32px; border-left: 5px solid var(--primary); margin: 28px 0;">
                <h3 style="margin-top:0; color:var(--primary); display:flex; align-items:center; gap:10px;">
                    <i class="fa-solid fa-bullseye" style="color:var(--secondary);"></i> Our Mission
                </h3>
                <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-main);">
                    The Mission of <strong>Anglo Urdu Girls’ High School Pune</strong> is to render a secure, friendly, creative, motivating, and nurturing environment while honing the academic, artistic, and social skills of the students.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-main);">
                    Our constant effort is to empower our students and create leaders for tomorrow. We aim to add extra brilliance to every facet of a child’s personality which will help her to stand apart. At Anglo Urdu Girls High School, Pune <strong>innovation is the buzzword</strong>. We believe in learning things by gaining hands-on experience by doing, thinking, problem-solving, listening, talking, reading, playing, sharing, and role-playing — making learning a joyful experience.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-main); margin-bottom: 0;">
                    Our classrooms and activities are designed in such a manner that they put a child at ease and stimulate active learning. <em>For us, it is imperative that the school be a place where a child is truly happy.</em>
                </p>
            </div>

            <!-- Vision Section -->
            <div style="background: linear-gradient(to right, #fffbeb, #f8fafc); border-radius: var(--radius-md); padding: 32px; border-left: 5px solid var(--secondary); margin: 28px 0;">
                <h3 style="margin-top:0; color:var(--secondary-hover); display:flex; align-items:center; gap:10px;">
                    <i class="fa-solid fa-eye" style="color:var(--accent);"></i> Our Vision
                </h3>
                <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-main);">
                    In the globalized techno-dominated society of the 21st century, trends in education are constantly evolving. The <strong>holistic development of a child in a stimulating environment</strong> is our highest priority.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-main); margin-bottom: 0;">
                    In order to achieve this target, our teaching-learning process is carefully customized to meet the specific needs of each individual student, ensuring that every girl receives education in its finest, most impactful form.
                </p>
            </div>

            <!-- How We Deliver Our Mission -->
            <h3 style="margin-top: 36px; color: var(--primary);">Key Pillars of Our Educational Framework</h3>
            <div class="grid-3" style="margin-top: 20px;">
                <div class="card-item" style="border: 1px solid var(--border-color); background: #ffffff;">
                    <div class="card-body">
                        <div style="font-size: 2rem; color: var(--primary); margin-bottom: 12px;"><i class="fa-solid fa-hands-holding-child"></i></div>
                        <h4 style="color: var(--primary); margin-bottom: 8px;">Experiential Learning</h4>
                        <p class="card-text">Hands-on laboratory sessions, IT Olympiads, field excursions, and role-play making learning concrete and memorable.</p>
                    </div>
                </div>

                <div class="card-item" style="border: 1px solid var(--border-color); background: #ffffff;">
                    <div class="card-body">
                        <div style="font-size: 2rem; color: var(--secondary); margin-bottom: 12px;"><i class="fa-solid fa-shield-cat"></i></div>
                        <h4 style="color: var(--primary); margin-bottom: 8px;">Safe &amp; Nurturing Campus</h4>
                        <p class="card-text">A secure, supportive, and compassionate environment on Azam Campus where every student feels valued, confident, and motivated.</p>
                    </div>
                </div>

                <div class="card-item" style="border: 1px solid var(--border-color); background: #ffffff;">
                    <div class="card-body">
                        <div style="font-size: 2rem; color: #10b981; margin-bottom: 12px;"><i class="fa-solid fa-seedling"></i></div>
                        <h4 style="color: var(--primary); margin-bottom: 8px;">Leadership &amp; Character</h4>
                        <p class="card-text">Inculcating moral dignity, eloquence, social responsibility, and sportsmanship to transform girls into confident leaders.</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('president-message.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    President Message <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= url('principal-message.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Principal Message <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
