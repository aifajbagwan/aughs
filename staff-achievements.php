<?php
$currentPage = 'staff-achievements';
$pageTitle = "Staff Achievements | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Staff achievements, sports awards, CCC ICT certifications, and Best Teacher honors at Anglo Urdu Girls' High School, Pune.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Staff Achievements";
$bannerDesc = "Honoring our educators who lead by example through sports championships, professional certifications, and prestigious teaching accolades.";
$breadcrumbs = [
    ['title' => 'Achievements', 'url' => url('achievements.php')],
    ['title' => 'Staff Achievements', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Faculty Accolades</span>
            <h2>Distinguished Honors of Our Educators</h2>
            <p>
                Our teachers embody continuous learning, professional excellence, and sporting vigor. Through their enthusiastic participation in campus tournaments and certified training, they set an inspiring standard for all our students.
            </p>

            <!-- Event 1: Throw Ball Competition -->
            <div style="margin-top: 36px; background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-sm);">
                <span class="faculty-badge" style="background:#dbeafe; color:#1e40af;">Championship Gold &amp; Silver</span>
                <h3 style="color: var(--primary); font-size: 1.5rem; margin-top: 8px; margin-bottom: 12px;">
                    <i class="fa-solid fa-trophy" style="color: var(--secondary);"></i> Intra-Campus Teachers Throwball Championship
                </h3>
                
                <p style="font-size: 1.02rem; line-height: 1.8; color: var(--text-main);">
                    <strong>Azam Sports Academy</strong> organized the Annual Intra-Campus Teachers Throwball Competition on the auspicious occasion of the birthday celebration of <strong>Dr. P. A. Inamdar Sir</strong>. In a remarkable demonstration of athletic supremacy, <strong>both the Winner and Runner-up teams were from Anglo Urdu Girls' High School (A.U.G.H.School)!</strong>
                </p>

                <div class="callout-box" style="margin: 18px 0;">
                    <strong>Prize Distribution Ceremony:</strong> Held at <strong>V.M. Gany Sports Complex</strong> on <strong>2nd January 2021</strong>.<br>
                    <strong>Dignitaries Present:</strong> Chief Guest IPL player <strong>Mr. Marshal Khadiwale</strong> &amp; <strong>Dr. Latif Magdum</strong> (Secretary, M.C.E. Society). AUGHS Principal and Team Captain <strong>Mrs. Shaheen I. Shaikh</strong> accepted the championship trophy, alongside Vice Principal <strong>Mrs. Shabnam K. Khan</strong>, <strong>Mrs. Dilshad A. Shaikh</strong>, <strong>Mrs. Parveen F. Dalal</strong>, and <strong>Ms. Haseena Shaikh</strong>.
                </div>

                <div class="grid-2" style="margin-top: 24px;">
                    <div class="card-item">
                        <div class="card-media" style="height: 280px;">
                            <a href="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.51.38-PM.jpeg') ?>" data-lightbox data-title="Throwball Winners receiving trophy">
                                <img src="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.51.38-PM-1024x768.jpeg') ?>" alt="AUGHS Throwball Team Prize">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 style="font-size: 1rem; color: var(--primary); margin-bottom: 4px;">Trophy Presentation with Chief Guests</h4>
                            <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0;">IPL cricketer Marshal Khadiwale &amp; Dr. Latif Magdum presenting the victory cup.</p>
                        </div>
                    </div>

                    <div class="card-item">
                        <div class="card-media" style="height: 280px;">
                            <a href="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.52.44-PM.jpeg') ?>" data-lightbox data-title="AUGHS Throwball Squad at V.M. Gany Sports Complex">
                                <img src="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.52.44-PM.jpeg') ?>" alt="AUGHS Throwball Squad">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 style="font-size: 1rem; color: var(--primary); margin-bottom: 4px;">AUGHS Victorious Squad</h4>
                            <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0;">Faculty members celebrating their double win at the campus sports arena.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 2: CCC Exam Certification -->
            <div style="margin-top: 40px; background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-sm);">
                <div class="message-card-split" style="grid-template-columns: 1fr 340px; background: transparent; border: none; box-shadow: none;">
                    <div>
                        <span class="faculty-badge" style="background:#dcfce7; color:#166534;">100% Digital Literacy</span>
                        <h3 style="color: var(--primary); font-size: 1.45rem; margin-top: 8px; margin-bottom: 12px;">
                            <i class="fa-solid fa-certificate" style="color: #10b981;"></i> 100% Staff Passed Government CCC Examination
                        </h3>
                        <p style="font-size: 1.02rem; line-height: 1.8; color: var(--text-main);">
                            In line with the school's vision of modern technology adoption, <strong>all teaching and administrative staff successfully passed the government Course on Computer Concepts (CCC) Examination</strong> in November 2020.
                        </p>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">
                            This certification validates advanced competence in operating modern word processors, spreadsheets, digital teaching tools, online classrooms, and automated educational administration.
                        </p>
                    </div>
                    <div style="height: 250px; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                        <a href="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.54.17-PM.jpeg') ?>" data-lightbox data-title="Staff CCC Exam Group">
                            <img src="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.54.17-PM.jpeg') ?>" alt="AUGHS Staff Passing CCC Examination" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event 3: Best Teacher Award -->
            <div style="margin-top: 40px; background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-sm);">
                <div class="message-card-split" style="grid-template-columns: 280px 1fr; background: transparent; border: none; box-shadow: none;">
                    <div style="height: 340px; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                        <a href="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-14-at-10.11.20-PM.jpeg') ?>" data-lightbox data-title="Mrs. Shahin Irfan Shaikh - Best Teacher Award">
                            <img src="<?= url('wp-content/uploads/2021/02/WhatsApp-Image-2021-02-14-at-10.11.20-PM-225x300.jpeg') ?>" alt="Best Teacher Award Ceremony" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                    <div style="padding-left: 10px;">
                        <span class="faculty-badge" style="background:#fef3c7; color:#92400e;">Maulana Azad Trust Honor</span>
                        <h3 style="color: var(--primary); font-size: 1.45rem; margin-top: 8px; margin-bottom: 12px;">
                            <i class="fa-solid fa-star" style="color: var(--accent);"></i> Best Teacher Award — Mrs. Shahin Irfan Shaikh
                        </h3>
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-main);">
                            <strong>Mrs. Shahin Irfan Shaikh</strong> was conferred with the prestigious <strong>Best Teacher Award</strong> by the esteemed <strong>Maulana Azad Trust</strong> in recognition of her tireless devotion to quality secondary education, student mentorship, and pedagogical excellence at Anglo Urdu Girls' High School.
                        </p>
                        <div class="callout-box" style="margin-top: 16px;">
                            A proud moment of recognition celebrating exemplary dedication, inspiring both colleagues and pupils across Azam Campus.
                        </div>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('student-achievements.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    View Student SSC Merit Toppers <i class="fa-solid fa-trophy"></i>
                </a>
                <a href="<?= url('information.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Governing Board &amp; Staff <i class="fa-solid fa-users"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
