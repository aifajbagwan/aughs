<?php
$currentPage = 'science-department';
$pageTitle = "Science Department | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "The Science Department of AUGHS fosters empirical experimentation, natural inquiry, and laboratory training under Mrs. Yasmeen Sameer Shaikh.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Science Department";
$bannerDesc = "Systematic, comprehensive investigation and exploration of natural causes and scientific phenomena.";
$breadcrumbs = [
    ['title' => 'Departments', 'url' => url('departments.php')],
    ['title' => 'Science Department', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Scientific Inquiry</span>
            <h2>Department of Science &amp; Technology</h2>

            <div class="callout-box" style="font-size: 1.1rem; line-height: 1.8;">
                “Systematic, comprehensive, investigation and exploration of natural causes and effect is the full form of science.”
            </div>

            <p>
                The history of science covers the development of scientific discovery from ancient times to the present. It encompasses all three major branches of science: <strong>Natural, Social, and Formal</strong>. Science’s earliest documented roots can be traced to ancient Egypt and Mesopotamia around 3000 to 1200 BCE, shaping the continuous intellectual journey of humanity.
            </p>
            <p>
                Science fundamentally assists our understanding of the physical world around us. Everything we know about the universe — from how flora and fauna reproduce to what the fundamental structure of an atom is composed of — is the outcome of rigorous scientific research, empirical observation, and experimentation. Human progress throughout history has rested decisively upon transformative advances in science.
            </p>

            <!-- Lab Highlights -->
            <div class="grid-3" style="margin: 32px 0;">
                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #3b82f6;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-atom"></i> Physics Laboratory</h4>
                    <p style="font-size:0.92rem; margin:0;">Experiments covering mechanics, lenses, prisms, electromagnets, and electric circuits with hands-on apparatus.</p>
                </div>

                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #10b981;">
                    <h4 style="color:#047857; margin-bottom:8px;"><i class="fa-solid fa-flask-vial"></i> Chemistry Laboratory</h4>
                    <p style="font-size:0.92rem; margin:0;">Practical experiments in acid-base titrations, gas laws, salt identification, and chemical molecular reactions.</p>
                </div>

                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #8b5cf6;">
                    <h4 style="color:#6d28d9; margin-bottom:8px;"><i class="fa-solid fa-dna"></i> Biology Laboratory</h4>
                    <p style="font-size:0.92rem; margin:0;">Microscopic studies of cells, tissue structures, plant anatomy, and preserved organism specimens.</p>
                </div>
            </div>

            <!-- Head of Department Profile -->
            <h3 style="margin-top: 40px; color: var(--primary);"><i class="fa-solid fa-microscope" style="color:var(--secondary);"></i> Head of Department</h3>
            
            <div class="message-card-split" style="grid-template-columns: 280px 1fr; margin-top: 20px;">
                <div class="message-card-img" style="background-color: var(--primary);">
                    <img src="<?= url('wp-content/uploads/2023/07/Mrs.Yasmeen-Shaikh-1.jpg') ?>" alt="Mrs. Yasmeen Sameer Shaikh" class="leader-portrait" style="border-radius: var(--radius-md); width: 190px; height: 230px; object-fit: cover;">
                    <h3 class="leader-name" style="font-size: 1.15rem;">Mrs. Yasmeen Sameer Shaikh</h3>
                    <span class="leader-role">Head of Science Department</span>
                </div>
                <div class="message-card-body">
                    <span class="faculty-badge" style="background: #e0e7ff; color: #3730a3;">HOD Profile</span>
                    <h3 style="color: var(--primary); margin-top: 4px; margin-bottom: 12px;">Mrs. Yasmeen Sameer Shaikh</h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.98rem; color: var(--text-main);">
                        <p style="margin: 0;"><strong>Academic Qualification:</strong> B.Sc., B.Ed.</p>
                        <p style="margin: 0;"><strong>Teaching Experience:</strong> 6 Years</p>
                        <p style="margin: 0;"><strong>Email Address:</strong> <a href="mailto:yasmeen.pathan@azamcampus.org" style="color:var(--primary-light); font-weight:600;">yasmeen.pathan@azamcampus.org</a></p>
                    </div>

                    <p style="margin-top: 14px; color: var(--text-muted); font-size: 0.92rem;">
                        Overseeing secondary school science curriculum delivery, coordinating annual science exhibitions, student project mentorship, and laboratory safety standards.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('departments.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    All Departments <i class="fa-solid fa-layer-group"></i>
                </a>
                <a href="<?= url('history-department.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    History Department <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
