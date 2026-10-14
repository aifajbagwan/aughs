<?php
$currentPage = 'our-philosophy';
$pageTitle = "Our Philosophy | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "The guiding educational philosophy and core commitments of Anglo Urdu Girls' High School, Azam Campus, Pune.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Our Philosophy";
$bannerDesc = "Fostering lifelong learning, mutual respect, self-discipline, and holistic character.";
$breadcrumbs = [
    ['title' => 'About Us', 'url' => url('about-us.php')],
    ['title' => 'Our Philosophy', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Guiding Principles</span>
            <h2>Educational Philosophy &amp; Ethos</h2>

            <div class="callout-box" style="font-size: 1.1rem; line-height: 1.8;">
                “Anglo Urdu Girls’ High School aims to develop in each of our students a desire for lifelong learning so that they become valuable members of society. The school places a high emphasis on teaching the students how to live with others and we encourage creativity and endorse the philosophy of <strong>‘considering the feelings of others at all times.’</strong>”
            </div>

            <p>
                The school is committed to providing the highest quality education for all in an environment that cares deeply for our students, staff, and parents. We recognize that education is not merely the transmission of factual knowledge, but the wholesome transformation of personality, moral consciousness, and intellectual curiosity.
            </p>

            <h3 style="margin-top: 32px; color: var(--primary);"><i class="fa-solid fa-circle-check" style="color:var(--secondary);"></i> Our Core Commitments</h3>
            <p>This commitment is demonstrated in our daily curricular and extracurricular life by encouraging students to:</p>

            <div class="grid-2" style="margin-top: 20px;">
                <div style="background:var(--bg-alt); padding:20px 24px; border-radius:var(--radius-md); border-left:4px solid #3b82f6;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-chart-line"></i> Academic &amp; Physical Potential</h4>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Reach their full academic, social, and physical potential in a fair, positive, and consistent learning environment.
                    </p>
                </div>

                <div style="background:var(--bg-alt); padding:20px 24px; border-radius:var(--radius-md); border-left:4px solid #10b981;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-arrow-trend-up"></i> Learning Commitment</h4>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Display an active commitment to improving their learning outcomes through dedication and regular academic review.
                    </p>
                </div>

                <div style="background:var(--bg-alt); padding:20px 24px; border-radius:var(--radius-md); border-left:4px solid #f59e0b;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-shield-halved"></i> Self-Discipline</h4>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Develop a strong sense of self-discipline, integrity, and focus in both their classroom work and sports play.
                    </p>
                </div>

                <div style="background:var(--bg-alt); padding:20px 24px; border-radius:var(--radius-md); border-left:4px solid #8b5cf6;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-handshake"></i> Mutual Respect</h4>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Respect the fundamental rights, dignity, and perspectives of fellow students, staff, parents, and campus visitors.
                    </p>
                </div>

                <div style="background:var(--bg-alt); padding:20px 24px; border-radius:var(--radius-md); border-left:4px solid #06b6d4;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-book-open-reader"></i> Literacy &amp; Numeracy</h4>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Develop a solid conceptual understanding of all key learning areas, particularly high-standard literacy and mathematical numeracy.
                    </p>
                </div>

                <div style="background:var(--bg-alt); padding:20px 24px; border-radius:var(--radius-md); border-left:4px solid #ec4899;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-scale-balanced"></i> Equal Opportunity</h4>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Provide equal opportunity, encouragement, and holistic support for every girl in the school community without discrimination.
                    </p>
                </div>

                <div style="background:var(--bg-alt); padding:20px 24px; border-radius:var(--radius-md); border-left:4px solid #f97316;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-brain"></i> Life Skills &amp; Inquiry</h4>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Cultivate essential life skills such as responsibility, clear communication, independent thought, problem-solving, teamwork, and creative expression.
                    </p>
                </div>

                <div style="background:var(--bg-alt); padding:20px 24px; border-radius:var(--radius-md); border-left:4px solid #14b8a6;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-route"></i> Preparation for Higher Learning</h4>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Prepare students thoroughly for their next stages of higher education and professional career choices by building upon their individual strengths.
                    </p>
                </div>
            </div>

            <div style="text-align:center; margin-top:40px;">
                <a href="<?= url('mission-vission.php') ?>" class="btn btn-primary" style="margin-right:12px;">
                    Read Mission &amp; Vision <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= url('admission.php') ?>" class="btn btn-primary" style="background:var(--primary);">
                    Admission Information <i class="fa-solid fa-graduation-cap"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
