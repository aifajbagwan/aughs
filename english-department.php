<?php
$currentPage = 'english-department';
$pageTitle = "English Department | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "The English Department at AUGHS builds communicative fluency, grammatical mastery, creative writing, and elocution skills.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "English Department";
$bannerDesc = "Empowering young female scholars with global communication skills, literary appreciation, and linguistic eloquence.";
$breadcrumbs = [
    ['title' => 'Departments', 'url' => url('departments.php')],
    ['title' => 'English Department', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Global Linguistic Fluency</span>
            <h2>Department of English Language &amp; Literature</h2>

            <div class="callout-box" style="font-size: 1.1rem; line-height: 1.8;">
                “Language is the road map of a culture. It tells you where its people come from and where they are going. English is the gateway to global academic scholarship, scientific discovery, and international communication.”
            </div>

            <p>
                At Anglo Urdu Girls’ High School, the Department of English is committed to cultivating exceptional communicative confidence, expressive clarity, and grammatical precision. In our increasingly interconnected world, English serves as the lingua franca of global commerce, higher scientific research, technology, and governance.
            </p>
            <p>
                The department employs dynamic pedagogical methodologies that combine formal grammatical rigor with interactive spoken English training, phonetics practice, literature appreciation, and public speaking forums.
            </p>

            <!-- Key Academic Pillars -->
            <div class="grid-3" style="margin: 32px 0;">
                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #ec4899;">
                    <h4 style="color:var(--primary); margin-bottom:8px;"><i class="fa-solid fa-microphone-lines"></i> Spoken English &amp; Elocution</h4>
                    <p style="font-size:0.92rem; margin:0;">Regular classroom debates, extempore speeches, and pronunciation workshops eliminating hesitation and building poise.</p>
                </div>

                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #3b82f6;">
                    <h4 style="color:#1d4ed8; margin-bottom:8px;"><i class="fa-solid fa-pen-nib"></i> Creative Writing</h4>
                    <p style="font-size:0.92rem; margin:0;">Essay composition, poetry writing, short story narration, and letter writing adhering to state board scoring criteria.</p>
                </div>

                <div style="background:var(--bg-alt); padding:22px; border-radius:var(--radius-md); border-left:4px solid #10b981;">
                    <h4 style="color:#047857; margin-bottom:8px;"><i class="fa-solid fa-spell-check"></i> Grammar &amp; Vocabulary</h4>
                    <p style="font-size:0.92rem; margin:0;">Systematic syntactic analysis, clause structures, idioms, and reading comprehension exercises fostering accurate writing.</p>
                </div>
            </div>

            <h3 style="margin-top: 36px; color: var(--primary);">Curriculum &amp; Co-Curricular Highlights</h3>
            <ul style="margin-left: 20px; line-height: 1.8; margin-top: 14px;">
                <li><strong>English Speaking Campus Policy:</strong> Encouraging students to converse in English during school hours to naturally enhance everyday fluency.</li>
                <li><strong>Language Laboratory Access:</strong> Digital listening and speaking tools inside Azam Campus to practice phonetics and accent modulation.</li>
                <li><strong>Annual Reading Marathon:</strong> Encouraging book reviews, classic novel reading, and library research projects.</li>
                <li><strong>Board Exam Special Coaching:</strong> Thorough training on formal letter writing, report writing, dialogue construction, and critical appreciation of English poems.</li>
            </ul>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('departments.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    All Departments <i class="fa-solid fa-layer-group"></i>
                </a>
                <a href="<?= url('urdu-department.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Urdu Department <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
