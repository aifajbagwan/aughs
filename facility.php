<?php
$currentPage = 'facility';
$pageTitle = "School Facilities | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "State-of-the-art campus infrastructure at AUGHS: digital classrooms, computer laboratory, physics, chemistry & biology labs, library, and sports academy.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Campus Facilities &amp; Infrastructure";
$bannerDesc = "Providing contemporary educational spaces, scientific laboratories, and athletic infrastructure for well-rounded student growth.";
$breadcrumbs = [
    ['title' => 'Facility', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Infrastructure Excellence</span>
            <h2>State-of-the-Art Facilities at Azam Campus</h2>
            <p>
                M.C.E. Society’s Anglo Urdu Girls’ High School boasts an expansive, modern infrastructure thoughtfully architected to provide young female scholars with the finest learning environment in Pune. From digital classrooms to specialized science laboratories and sports complexes, our facilities inspire both academic concentration and recreational vitality.
            </p>

            <!-- 1. Classrooms -->
            <div style="margin-top: 40px; border-top: 2px solid var(--border-color); padding-top: 32px;">
                <h3 style="color: var(--primary); font-size: 1.55rem; margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-chalkboard-user" style="color: var(--secondary);"></i> Classrooms &amp; Smart E-Learning
                </h3>
                <p style="font-size: 1.05rem; line-height: 1.8;">
                    Each classroom is fully furnished, spacious, well-lighted, and cross-ventilated. Every classroom is integrated with a <strong>Computer and Projector</strong> system to deliver interactive digital curriculum, visual simulations, and multimedia educational content, ensuring an engaging learning experience.
                </p>

                <div class="grid-4" style="margin-top: 20px;">
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/02/j2.jpg') ?>" data-lightbox data-title="Spacious Classrooms">
                                <img src="<?= url('wp-content/uploads/2021/02/j2-1024x682.jpg') ?>" alt="Classroom Interior">
                            </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/02/j.jpg') ?>" data-lightbox data-title="Classroom Seating & Lighting">
                                <img src="<?= url('wp-content/uploads/2021/02/j-1024x682.jpg') ?>" alt="Classroom Setup">
                            </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/02/j4.jpg') ?>" data-lightbox data-title="Digital Projection Classrooms">
                                <img src="<?= url('wp-content/uploads/2021/02/j4-1024x682.jpg') ?>" alt="Interactive Classroom">
                            </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/02/j3.jpg') ?>" data-lightbox data-title="Well-Ventilated Lecture Halls">
                                <img src="<?= url('wp-content/uploads/2021/02/j3-1024x682.jpg') ?>" alt="Lecture Hall">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Computer Lab & Internet Facility -->
            <div style="margin-top: 48px; border-top: 2px solid var(--border-color); padding-top: 32px;">
                <h3 style="color: var(--primary); font-size: 1.55rem; margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-laptop-code" style="color: var(--secondary);"></i> Computer Application &amp; High-Speed Internet Lab
                </h3>
                <p style="font-size: 1.05rem; line-height: 1.8;">
                    The school maintains a fully equipped Computer Lab to train students in Computer Applications, coding fundamentals, MS-CIT, and internet applications to keep our students thoroughly updated with the latest technological developments.
                </p>
                <div class="callout-box">
                    <strong>Internet as an Information Superhighway:</strong> The high-speed internet facility is a unique feature of Azam Campus and Anglo Urdu Girls’ High School. Available to both students and teachers, fiber-optic connectivity enables students to conduct research on diverse subjects such as Mathematics, Science, History, Geography, and Urdu at minimal time investment.
                </div>

                <div class="grid-4" style="margin-top: 20px;">
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/03/j5.jpg') ?>" data-lightbox data-title="Computer Lab Setup">
                                <img src="<?= url('wp-content/uploads/2021/03/j5-1024x682.jpg') ?>" alt="Computer Lab">
                            </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/03/j8.jpg') ?>" data-lightbox data-title="Students Practicing on Computers">
                                <img src="<?= url('wp-content/uploads/2021/03/j8-1024x682.jpg') ?>" alt="IT Training">
                            </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/03/j7.jpg') ?>" data-lightbox data-title="IT Training Stations">
                                <img src="<?= url('wp-content/uploads/2021/03/j7-1024x682.jpg') ?>" alt="Computer Systems">
                            </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/03/j6.jpg') ?>" data-lightbox data-title="Networked IT Lab">
                                <img src="<?= url('wp-content/uploads/2021/03/j6-1024x682.jpg') ?>" alt="Networked Workstations">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. School Library -->
            <div style="margin-top: 48px; border-top: 2px solid var(--border-color); padding-top: 32px;">
                <h3 style="color: var(--primary); font-size: 1.55rem; margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-book-bookmark" style="color: var(--secondary);"></i> School Library &amp; Reading Room
                </h3>
                <div class="message-card-split" style="grid-template-columns: 1fr 400px; background: transparent; border: none; box-shadow: none;">
                    <div style="padding: 0;">
                        <p style="font-size: 1.05rem; line-height: 1.8;">
                            The school library is located on the second floor of the school building. It stocks textbooks for all subjects from Std V to X, along with an extensive reference collection including:
                        </p>
                        <ul style="margin-left: 20px; line-height: 1.8;">
                            <li>Comprehensive English, Urdu, and Marathi dictionaries and encyclopedias.</li>
                            <li>Geographical atlases, world maps, and scientific charts.</li>
                            <li>Current affairs periodicals, literary gazettes, and educational magazines.</li>
                            <li>Maharashtra State Board question paper sets and previous model answer sheets.</li>
                            <li>High-speed fiber connectivity to access digital libraries worldwide for advanced reference work.</li>
                        </ul>
                    </div>
                    <div style="height: 260px; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                        <a href="<?= url('wp-content/uploads/2021/03/1.jpg') ?>" data-lightbox data-title="AUGHS Library">
                            <img src="<?= url('wp-content/uploads/2021/03/1-1024x682.jpg') ?>" alt="School Library" style="width:100%; height:100%; object-fit:cover;">
                        </a>
                    </div>
                </div>
            </div>

            <!-- 4. Sports Ground & Azam Sports Academy -->
            <div style="margin-top: 48px; border-top: 2px solid var(--border-color); padding-top: 32px;">
                <h3 style="color: var(--primary); font-size: 1.55rem; margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-medal" style="color: var(--secondary);"></i> Sports Complex &amp; Azam Sports Academy
                </h3>
                <p style="font-size: 1.05rem; line-height: 1.8;">
                    The school has a huge playground with comprehensive sports amenities for girls to play and participate in various indoor and outdoor sports. Our management has established a centralized <strong>Azam Sports Academy</strong>, ensuring professional coaching, world-class athletic equipment, tennis courts, and specialized training in throwball, rifle shooting, athletics, and martial arts.
                </p>

                <div class="grid-2" style="margin-top: 20px;">
                    <div class="card-item">
                        <div class="card-media" style="height: 280px;">
                            <a href="<?= url('wp-content/uploads/2021/03/2.jpg') ?>" data-lightbox data-title="Azam Campus Sports Playground">
                                <img src="<?= url('wp-content/uploads/2021/03/2.jpg') ?>" alt="Sports Ground">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 style="color:var(--primary); margin-bottom: 6px;">Spacious Outdoor Sports Ground</h4>
                            <p class="card-text">Outdoor stadium grounds for athletics, track events, football, and march past drills.</p>
                        </div>
                    </div>

                    <div class="card-item">
                        <div class="card-media" style="height: 280px;">
                            <a href="<?= url('wp-content/uploads/2021/03/3.jpg') ?>" data-lightbox data-title="Sports Practice Facilities">
                                <img src="<?= url('wp-content/uploads/2021/03/3.jpg') ?>" alt="Sports Facilities">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 style="color:var(--primary); margin-bottom: 6px;">Throwball &amp; Court Games</h4>
                            <p class="card-text">Dedicated hard courts and indoor complexes for championship throwball, table tennis, and badminton.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Science Laboratories (Physics, Chemistry, Biology) -->
            <div style="margin-top: 48px; border-top: 2px solid var(--border-color); padding-top: 32px;">
                <h3 style="color: var(--primary); font-size: 1.55rem; margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-microscope" style="color: var(--secondary);"></i> Specialized Science Laboratories
                </h3>
                <p style="font-size: 1.05rem; line-height: 1.8;">
                    Scientific education at AUGHS is deeply rooted in empirical experimentation. Our laboratories are equipped with modern instruments conforming to state and national board standards.
                </p>

                <div class="grid-3" style="margin-top: 24px;">
                    <!-- Physics Lab -->
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/03/4.jpg') ?>" data-lightbox data-title="Physics Laboratory">
                                <img src="<?= url('wp-content/uploads/2021/03/4-1024x768.jpg') ?>" alt="Physics Lab">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 style="color:var(--primary); margin-bottom: 8px;">Physics Laboratory</h4>
                            <p class="card-text">
                                Modern apparatus covering mechanics, optics, electricity, and magnetism prescribed for secondary and higher classes. Sustains passion for physics with practical experiments motivating divergent scientific thinking.
                            </p>
                        </div>
                    </div>

                    <!-- Chemistry Lab -->
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/03/5.jpg') ?>" data-lightbox data-title="Chemistry Laboratory">
                                <img src="<?= url('wp-content/uploads/2021/03/5-1024x768.jpg') ?>" alt="Chemistry Lab">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 style="color:var(--primary); margin-bottom: 8px;">Chemistry Laboratory</h4>
                            <p class="card-text">
                                Fully stocked with reagents, glassware, titration stations, and safety equipment. Students perform chemical reaction analysis, salt tests, and practicals as per syllabus guidelines.
                            </p>
                        </div>
                    </div>

                    <!-- Biology Lab -->
                    <div class="card-item">
                        <div class="card-media">
                            <a href="<?= url('wp-content/uploads/2021/03/4-1024x768.jpg') ?>" data-lightbox data-title="Biology Laboratory">
                                <img src="<?= url('wp-content/uploads/2021/03/4-1024x768.jpg') ?>" alt="Biology Lab">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 style="color:var(--primary); margin-bottom: 8px;">Biology Laboratory</h4>
                            <p class="card-text">
                                Equipped with precision microscopes, computer displays, botanical slides, human anatomy charts, and preserved specimens of unicellular and multicellular organisms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 48px;">
                <a href="<?= url('admission.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    Admission Process <i class="fa-solid fa-graduation-cap"></i>
                </a>
                <a href="<?= url('gallery.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Visit Campus Gallery <i class="fa-solid fa-images"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
