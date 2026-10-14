<?php
$currentPage = 'activities';
$pageTitle = "Activities & Competitions | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Co-curricular activities, cultural competitions, sports tournaments, Olympiads, and R.S.P. troop achievements at AUGHS, Azam Campus.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Activities &amp; Competitions";
$bannerDesc = "Nurturing creative expressions, athletic skills, and leadership potential through vibrant co-curricular events.";
$breadcrumbs = [
    ['title' => 'Activities', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Student Life &amp; Events</span>
            <h2>Vibrant Co-Curricular &amp; Athletic Engagements</h2>
            <p>
                At Anglo Urdu Girls’ High School, education extends beyond textbook pages into athletic fields, art studios, science exhibitions, and cultural auditoriums. Our students participate enthusiastically in state-level, inter-school, and national competitions, consistently winning accolades and trophies.
            </p>

            <div style="display: flex; flex-direction: column; gap: 40px; margin-top: 36px;">

                <!-- Activity 1: Art Competition -->
                <div class="message-card-split" style="grid-template-columns: 380px 1fr; background: #ffffff;">
                    <div style="height: 100%; min-height: 280px; overflow: hidden;">
                        <a href="<?= url('wp-content/uploads/2023/03/1.png') ?>" data-lightbox data-title="Art Competition at AUGHS">
                            <img src="<?= url('wp-content/uploads/2023/03/1-791x1024.png') ?>" alt="Art Competition" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                    <div style="padding: 30px;">
                        <span class="faculty-badge">Art &amp; Creativity</span>
                        <h3 style="color: var(--primary); margin-bottom: 10px;">Inter-Class Drawing &amp; Art Competition</h3>
                        <p style="margin-bottom: 8px;"><strong>Center:</strong> Anglo Urdu Girls’ High School</p>
                        <p style="margin-bottom: 8px;"><strong>Total Participants:</strong> 72 Students (Classes V to X)</p>
                        <p style="margin-bottom: 12px;"><strong>Event In-charge:</strong> Mrs. S.H. Shaikh (Art Teacher)</p>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">
                            Organized to nurture creative imagination, color aesthetics, and observational sketching skills among students, providing a platform to display their artistic vision.
                        </p>
                    </div>
                </div>

                <!-- Activity 2: National Level IT Olympiad -->
                <div class="message-card-split" style="grid-template-columns: 1fr 380px; background: #ffffff;">
                    <div style="padding: 30px;">
                        <span class="faculty-badge">Information Technology</span>
                        <h3 style="color: var(--primary); margin-bottom: 10px;">National Level IT Olympiad Competition</h3>
                        <p style="margin-bottom: 8px;"><strong>Organized By:</strong> PAI ICT Academy</p>
                        <p style="margin-bottom: 12px;"><strong>Venue:</strong> Dr. A.R. Shaikh Assembly Hall, Azam Campus</p>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">
                            A premier competitive IT assessment testing computational logic, digital awareness, and software applications among budding secondary school technologists.
                        </p>
                    </div>
                    <div style="height: 100%; min-height: 280px; overflow: hidden;">
                        <a href="<?= url('wp-content/uploads/2021/02/11.png') ?>" data-lightbox data-title="National Level IT Olympiad">
                            <img src="<?= url('wp-content/uploads/2021/02/11.png') ?>" alt="National Level IT Olympiad" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                </div>

                <!-- Activity 3: Inter School Drawing Competition -->
                <div class="message-card-split" style="grid-template-columns: 380px 1fr; background: #ffffff;">
                    <div style="height: 100%; min-height: 280px; overflow: hidden;">
                        <a href="<?= url('wp-content/uploads/2021/02/12.png') ?>" data-lightbox data-title="Inter School Drawing Competition">
                            <img src="<?= url('wp-content/uploads/2021/02/12.png') ?>" alt="Inter School Drawing Competition" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                    <div style="padding: 30px;">
                        <span class="faculty-badge">Inter-School Arts</span>
                        <h3 style="color: var(--primary); margin-bottom: 10px;">Inter-School Drawing Competition</h3>
                        <p style="margin-bottom: 12px;"><strong>Organized By:</strong> M.C.E. Society’s English Medium School</p>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">
                            Students of AUGHS competed against prestigious schools across Pune, showcasing remarkable painting skill, canvas conceptualization, and aesthetic dexterity.
                        </p>
                    </div>
                </div>

                <!-- Activity 4: Rifle Shooting Competition -->
                <div class="message-card-split" style="grid-template-columns: 1fr 380px; background: #ffffff;">
                    <div style="padding: 30px;">
                        <span class="faculty-badge">Sports Excellence</span>
                        <h3 style="color: var(--primary); margin-bottom: 10px;">Sakal Schoolympics Rifle Shooting Competition</h3>
                        <p style="margin-bottom: 8px;"><strong>Held At:</strong> Hadapsar Rifle Range, Pune (District Rifle Association)</p>
                        <p style="margin-bottom: 12px;"><strong>Participants:</strong> 6 Selected Star Shooters of AUGHS</p>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">
                            Showcasing precision, mental focus, and discipline, AUGHS shooters achieved top honors in the Sakal Schoolympics rifle shooting event.
                        </p>
                    </div>
                    <div style="height: 100%; min-height: 280px; overflow: hidden;">
                        <a href="<?= url('wp-content/uploads/2021/02/13.png') ?>" data-lightbox data-title="Sakal Schoolympics Rifle Shooting">
                            <img src="<?= url('wp-content/uploads/2021/02/13.png') ?>" alt="Rifle Shooting Competition" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                </div>

                <!-- Activity 5: Flower Arrangement -->
                <div class="message-card-split" style="grid-template-columns: 380px 1fr; background: #ffffff;">
                    <div style="height: 100%; min-height: 280px; overflow: hidden;">
                        <a href="<?= url('wp-content/uploads/2021/02/14.png') ?>" data-lightbox data-title="Flower Arrangement Competition">
                            <img src="<?= url('wp-content/uploads/2021/02/14.png') ?>" alt="Flower Arrangement Competition" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                    <div style="padding: 30px;">
                        <span class="faculty-badge">Cultural &amp; Floral Art</span>
                        <h3 style="color: var(--primary); margin-bottom: 10px;">Inter-School Flower Arrangement Competition</h3>
                        <p style="margin-bottom: 8px;"><strong>Date:</strong> December 28th</p>
                        <p style="margin-bottom: 12px;"><strong>Venue:</strong> Azam Campus Tennis Court</p>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">
                            An exquisite floral exhibition testing creative harmony, natural balance, and botanical presentation organized with pride by Anglo Urdu Girls’ High School.
                        </p>
                    </div>
                </div>

                <!-- Activity 6: RSP Troop Selection in Top Ten -->
                <div class="message-card-split" style="grid-template-columns: 1fr 380px; background: #ffffff;">
                    <div style="padding: 30px;">
                        <span class="faculty-badge">Discipline &amp; Marching</span>
                        <h3 style="color: var(--primary); margin-bottom: 10px;">R.S.P. Troop Selected Among Top Ten Platoons</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 12px;">
                            The Road Safety Patrol (R.S.P.) Troop posed with <strong>Mrs. Abeda Inamdar</strong> (Vice President, M.C.E. Society), <strong>Principal Mrs. Ayesha Shaikh</strong>, and in-charge Teacher <strong>Mrs. Afzala Khan</strong>.
                        </p>
                        <div class="callout-box" style="margin: 0; padding: 12px 18px;">
                            <i class="fa-solid fa-medal" style="color:var(--accent);"></i> Awarded with a prestigious Memento and Certificates for <strong>Selection in the Top Ten Platoons out of 100 Schools</strong> across the region.
                        </div>
                    </div>
                    <div style="height: 100%; min-height: 280px; overflow: hidden;">
                        <a href="<?= url('wp-content/uploads/2021/02/16.png') ?>" data-lightbox data-title="R.S.P. Troop Selection">
                            <img src="<?= url('wp-content/uploads/2021/02/16.png') ?>" alt="R.S.P. Troop Award" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                </div>

                <!-- Activity 7: Digital Library Reading Week -->
                <div class="message-card-split" style="grid-template-columns: 380px 1fr; background: #ffffff;">
                    <div style="height: 100%; min-height: 280px; overflow: hidden;">
                        <a href="<?= url('wp-content/uploads/2021/02/17.png') ?>" data-lightbox data-title="Reading Week Celebration">
                            <img src="<?= url('wp-content/uploads/2021/02/17.png') ?>" alt="Digital Library Reading Week" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                    <div style="padding: 30px;">
                        <span class="faculty-badge">Literacy &amp; Reading</span>
                        <h3 style="color: var(--primary); margin-bottom: 10px;">Dr. A.P.J. Abdul Kalam Reading Week</h3>
                        <p style="margin-bottom: 8px;"><strong>Venue:</strong> Digital Library &amp; Reading Hall</p>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">
                            Reading Week (Vachan Prerana Din) celebrated with book fairs, poetry readings, essay writing, and interactive digital library research honoring the memory of Dr. A.P.J. Abdul Kalam.
                        </p>
                    </div>
                </div>

                <!-- Activity 8: Marathi Lavni Spardha & Cultural Events -->
                <div class="grid-2">
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/02/19.png') ?>" data-lightbox data-title="Marathi Lavni Spardha">
                                <img src="<?= url('wp-content/uploads/2021/02/19.png') ?>" alt="Marathi Lavni Spardha">
                            </a>
                        </div>
                        <div class="card-body">
                            <span class="faculty-badge">Folk Dance &amp; Drama</span>
                            <h3 class="card-title">Marathi Lavni Spardha</h3>
                            <p class="card-text">
                                Celebrating Maharashtra's rich cultural heritage and performing folk dance with authentic attire, rhythm, and artistic grace.
                            </p>
                        </div>
                    </div>

                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/02/20.png') ?>" data-lightbox data-title="Leadership & Mentorship">
                                <img src="<?= url('wp-content/uploads/2021/02/20.png') ?>" alt="Leadership & Supervisory Staff">
                            </a>
                        </div>
                        <div class="card-body">
                            <span class="faculty-badge">Guidance &amp; Mentorship</span>
                            <h3 class="card-title">Faculty Mentorship &amp; Guidance</h3>
                            <p class="card-text">
                                Assistant H.M. Mrs. Shabnam Khan and Supervisory Staff Mrs. Shaheen Shaikh, Mrs. Zainab Sayyed actively encouraging students with their steadfast presence and inspiration.
                            </p>
                        </div>
                    </div>

                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/02/2-1.png') ?>" data-lightbox data-title="Winner of Rifle Shooting">
                                <img src="<?= url('wp-content/uploads/2021/02/2-1.png') ?>" alt="Winner of Rifle Shooting">
                            </a>
                        </div>
                        <div class="card-body">
                            <span class="faculty-badge">Championship Gold</span>
                            <h3 class="card-title">Winner of Rifle Shooting Competition</h3>
                            <p class="card-text">
                                Commemorating triumphant sharpshooters of AUGHS who brought glory to Azam Campus at the district shooting championship.
                            </p>
                        </div>
                    </div>

                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/02/7-1.png') ?>" data-lightbox data-title="Vanrai Drawing Competition">
                                <img src="<?= url('wp-content/uploads/2021/02/7-1.png') ?>" alt="Vanrai Drawing Competition">
                            </a>
                        </div>
                        <div class="card-body">
                            <span class="faculty-badge">Environmental Art</span>
                            <h3 class="card-title">Vanrai Environmental Art Competition</h3>
                            <p class="card-text">
                                Creative poster making on tree plantation, environmental conservation, water saving, and green ecology.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('gallery.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    View Photo Gallery <i class="fa-solid fa-images"></i>
                </a>
                <a href="<?= url('staff-achievements.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Staff Achievements <i class="fa-solid fa-trophy"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
