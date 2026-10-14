<?php
$currentPage = 'about-us';
$pageTitle = "About Us | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Learn about the history, ethos, leadership, and educational mission of Anglo Urdu Girls' High School at Azam Campus, Pune.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "About Our School";
$bannerDesc = "A legacy of empowering young girls through qualitative education, cultural heritage, and modern innovation.";
$breadcrumbs = [
    ['title' => 'About Us', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Our Legacy &amp; Heritage</span>
            <h2>Welcome to Anglo Urdu Girls' High School (AUGHS)</h2>
            <p>
                Established under the visionary auspices of the <strong>Maharashtra Cosmopolitan Education Society (M.C.E. Society)</strong>, Anglo Urdu Girls' High School has flourished into one of the premier educational institutions for girls in Pune. Nestled within the vibrant, sprawling academic enclave of Azam Campus, the school has consistently championed the noble cause of female education and youth empowerment.
            </p>
            <p>
                AUGHS offers a holistic learning environment that harmoniously bridges traditional moral and cultural values with cutting-edge 21st-century technological and scientific education. With a firm belief in fostering curious intellects, sound moral fiber, and independent leadership, the institution caters to secondary school students with excellence in state board academics, languages, sciences, information technology, and sporting achievements.
            </p>

            <div class="callout-box">
                “To educate a girl is to educate an entire generation. At Anglo Urdu Girls' High School, every student is encouraged to explore her potential, build enduring character, and become a responsible, enlightened citizen.”
            </div>

            <div class="grid-2" style="margin: 32px 0;">
                <div style="background:var(--bg-alt); padding:24px; border-radius:var(--radius-md); border-left:4px solid var(--primary);">
                    <h3 style="margin-top:0; color:var(--primary);"><i class="fa-solid fa-building-columns"></i> M.C.E. Society's Stewardship</h3>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Founded with the vision of educational upliftment, M.C.E. Society manages over 30 educational institutions on Azam Campus under the dynamic leadership of <strong>MRS. ABEDA INAMDAR</strong> (President). Their unwavering support provides AUGHS students with world-class infrastructure, digital libraries, and sports academies.
                    </p>
                </div>
                <div style="background:var(--bg-alt); padding:24px; border-radius:var(--radius-md); border-left:4px solid var(--secondary);">
                    <h3 style="margin-top:0; color:var(--secondary);"><i class="fa-solid fa-award"></i> Academic Rigor &amp; Merit</h3>
                    <p style="font-size:0.95rem; margin-bottom:0;">
                        Year after year, our students record a stellar 100% pass percentage in the Maharashtra SSC Board Examinations, with numerous students securing coveted top ranks across the Pune Division. Supported by 40+ dedicated educators, students receive individualized academic counseling, language enrichment, and competitive exam preparation.
                    </p>
                </div>
            </div>

            <h2>Explore About Us</h2>
            <p>Discover our guiding philosophy, visionary objectives, and leadership communications:</p>

            <div class="grid-4" style="margin-top: 24px;">
                <div class="card-item">
                    <div class="card-body">
                        <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-lightbulb" style="color:var(--accent);"></i> Our Philosophy</h4>
                        <p class="card-text">Nurturing a lifelong desire for learning and empathy for fellow human beings.</p>
                        <a href="<?= url('our-philosophy.php') ?>" class="card-footer-link">Read Philosophy <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-body">
                        <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-bullseye" style="color:var(--accent);"></i> Mission &amp; Vision</h4>
                        <p class="card-text">Creating an engaging, safe, and progressive environment for tomorrow's leaders.</p>
                        <a href="<?= url('mission-vission.php') ?>" class="card-footer-link">Read Mission <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-body">
                        <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-user-tie" style="color:var(--accent);"></i> President Message</h4>
                        <p class="card-text">Inspiring words of wisdom from MRS. ABEDA INAMDAR, President of M.C.E. Society.</p>
                        <a href="<?= url('president-message.php') ?>" class="card-footer-link">Read Address <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="card-item">
                    <div class="card-body">
                        <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-chalkboard-user" style="color:var(--accent);"></i> Principal Message</h4>
                        <p class="card-text">Reflections on collaborative school growth by Principal Mrs. Roshan Ara Shaikh.</p>
                        <a href="<?= url('principal-message.php') ?>" class="card-footer-link">Read Message <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
