<?php
$currentPage = 'geography-department';
$pageTitle = "Geography Department | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "The Geography Department at AUGHS, led by Mrs. Minaz Naeem Tamboli (MA, B.Ed, 24 years experience), organizing environmental days and excursions.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Geography Department";
$bannerDesc = "Understanding an interconnected world, physical landscapes, ecological resources, and global citizenship.";
$breadcrumbs = [
    ['title' => 'Departments', 'url' => url('departments.php')],
    ['title' => 'Geography Department', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Earth &amp; Environment</span>
            <h2>Department of Geography</h2>

            <div class="callout-box" style="font-size: 1.1rem; line-height: 1.8;">
                “Geography is a richly diverse and comprehensive subject that provides us with an understanding of a changing and interconnected world. It involves the study of physical environments and resources, cultures, economies, societies, people, places, global development, and citizenship.”
            </div>

            <p>
                The Department of Geography in our school regularly organizes dynamic academic and environmental competitions such as elocution speeches, poster making, slogan writing, and student PowerPoint presentations.
            </p>
            <p>
                The department enthusiastically commemorates significant environmental and global awareness milestones on campus, including <strong>World Population Day</strong> and <strong>World Ozone Day</strong>. To bridge theoretical knowledge with practical observation, the department organizes educational field visits with students to iconic local ecosystems and industrial centers such as <strong>Katraj Dairy</strong>, <strong>Anandvan (Forest &amp; Plant Nursery)</strong>, and <strong>Katraj Rajiv Gandhi Zoological Garden</strong>.
            </p>
            <p>
                Furthermore, students are enlightened through specialized guest lectures by invited environmental experts and conservationists on pressing ecological topics.
            </p>

            <!-- Curricular Initiatives -->
            <div class="grid-3" style="margin: 32px 0;">
                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #06b6d4;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-tree"></i> Environmental Observances</h4>
                    <p style="font-size:0.92rem; margin:0;">Active student engagement during World Population Day, World Environment Day, and Ozone Preservation Day.</p>
                </div>

                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #10b981;">
                    <h4 style="color:#047857; margin-bottom:8px;"><i class="fa-solid fa-bus-simple"></i> Ecological Field Excursions</h4>
                    <p style="font-size:0.92rem; margin:0;">Field visits to Katraj Dairy plant, Anandvan botanical nursery, and conservation reserves for experiential geography.</p>
                </div>

                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #f59e0b;">
                    <h4 style="color:var(--secondary-hover); margin-bottom:8px;"><i class="fa-solid fa-chalkboard"></i> Guest Lectures &amp; PPTs</h4>
                    <p style="font-size:0.92rem; margin:0;">Student digital presentation competitions, map-reading workshops, and visiting lectures on climate and ecology.</p>
                </div>
            </div>

            <!-- Faculty Profile -->
            <h3 style="margin-top: 40px; color: var(--primary);"><i class="fa-solid fa-earth-americas" style="color:var(--secondary);"></i> Department Faculty</h3>
            
            <div class="message-card-split" style="grid-template-columns: 280px 1fr; margin-top: 20px;">
                <div class="message-card-img" style="background-color: var(--primary);">
                    <img src="<?= url('wp-content/uploads/2023/07/Mrs.-Minaz-Naeem-Tamboli-2.jpg') ?>" alt="Mrs. Minaz Naeem Tamboli" class="leader-portrait" style="border-radius: var(--radius-md); width: 190px; height: 210px; object-fit: cover;">
                    <h3 class="leader-name" style="font-size: 1.15rem;">Mrs. Minaz Naeem Tamboli</h3>
                    <span class="leader-role">Senior Geography Teacher</span>
                </div>
                <div class="message-card-body">
                    <span class="faculty-badge" style="background: #cffafe; color: #0e7490;">Senior Faculty Profile</span>
                    <h3 style="color: var(--primary); margin-top: 4px; margin-bottom: 12px;">Mrs. Minaz Naeem Tamboli</h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.98rem; color: var(--text-main);">
                        <p style="margin: 0;"><strong>Academic Qualification:</strong> M.A. B.Ed.</p>
                        <p style="margin: 0;"><strong>Experience in Teaching:</strong> 24 Years</p>
                        <p style="margin: 0;"><strong>Email Address:</strong> <a href="mailto:minaztamboli04@gmail.com" style="color:var(--primary-light); font-weight:600;">minaztamboli04@gmail.com</a></p>
                    </div>

                    <p style="margin-top: 14px; color: var(--text-muted); font-size: 0.92rem;">
                        A stalwart educator with nearly a quarter-century of pedagogical dedication, inspiring girls in environmental stewardship, topographical map analysis, and geographical reasoning.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('departments.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    All Departments <i class="fa-solid fa-layer-group"></i>
                </a>
                <a href="<?= url('english-department.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    English Department <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
