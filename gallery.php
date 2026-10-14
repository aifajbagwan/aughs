<?php
$currentPage = 'gallery';
$pageTitle = "Photo Gallery | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Photo gallery showcasing campus life, classrooms, computer & science laboratories, sports events, and cultural celebrations at AUGHS.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Campus Photo Gallery";
$bannerDesc = "A visual glimpse into our vibrant school life, athletic milestones, celebrations, and modern facilities.";
$breadcrumbs = [
    ['title' => 'Gallery', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';

$galleryItems = [
    [
        'title' => 'Annual Cultural Program & Student Assembly',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.13.57-AM-843x1024.jpeg',
        'full'  => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.13.57-AM.jpeg'
    ],
    [
        'title' => 'Students Academic Gathering at Assembly Hall',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.17.29-AM-1-1024x682.jpeg',
        'full'  => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.17.29-AM-1.jpeg'
    ],
    [
        'title' => 'Classroom Learning & Seminar Session',
        'category' => 'campus',
        'thumb' => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.17.30-AM-2-1024x519.jpeg',
        'full'  => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.17.30-AM-2.jpeg'
    ],
    [
        'title' => 'School Orientation & Guidance Lecture',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.21.48-AM-1024x519.jpeg',
        'full'  => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.21.48-AM.jpeg'
    ],
    [
        'title' => 'Co-Curricular Group Interactive Session',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.22.41-AM-1024x519.jpeg',
        'full'  => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.22.41-AM.jpeg'
    ],
    [
        'title' => 'Student Workshop & Mentorship Program',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-07-06-at-1.12.51-PM-1-1024x461.jpeg',
        'full'  => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-07-06-at-1.12.51-PM-1.jpeg'
    ],
    [
        'title' => 'Auditorium Educational Event at Azam Campus',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.17.55-AM-1024x768.jpeg',
        'full'  => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-06-26-at-8.17.55-AM.jpeg'
    ],
    [
        'title' => 'Campus Exhibition & Project Presentation',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-07-06-at-1.12.51-PM-1024x461.jpeg',
        'full'  => 'wp-content/uploads/2023/07/WhatsApp-Image-2023-07-06-at-1.12.51-PM.jpeg'
    ],
    [
        'title' => 'Anglo Urdu Girls’ High School Campus Building',
        'category' => 'campus',
        'thumb' => 'wp-content/uploads/2021/02/Abeda_Inamdar_College_for_Girls_Anglo_Urdu_Girls_school_Azam_Campus-768x576.jpg',
        'full'  => 'wp-content/uploads/2021/02/Abeda_Inamdar_College_for_Girls_Anglo_Urdu_Girls_school_Azam_Campus.jpg'
    ],
    [
        'title' => 'Modern Well-Furnished Digital Classroom',
        'category' => 'campus',
        'thumb' => 'wp-content/uploads/2021/02/j2-1024x682.jpg',
        'full'  => 'wp-content/uploads/2021/02/j2.jpg'
    ],
    [
        'title' => 'Interactive Classroom with Digital Projector',
        'category' => 'campus',
        'thumb' => 'wp-content/uploads/2021/02/j4-1024x682.jpg',
        'full'  => 'wp-content/uploads/2021/02/j4.jpg'
    ],
    [
        'title' => 'State-of-the-Art Computer Application Lab',
        'category' => 'labs',
        'thumb' => 'wp-content/uploads/2021/03/j5-1024x682.jpg',
        'full'  => 'wp-content/uploads/2021/03/j5.jpg'
    ],
    [
        'title' => 'Computer Coding & Digital Skills Practical',
        'category' => 'labs',
        'thumb' => 'wp-content/uploads/2021/03/j8-1024x682.jpg',
        'full'  => 'wp-content/uploads/2021/03/j8.jpg'
    ],
    [
        'title' => 'Advanced Physics Laboratory & Experiments',
        'category' => 'labs',
        'thumb' => 'wp-content/uploads/2021/03/4-1024x768.jpg',
        'full'  => 'wp-content/uploads/2021/03/4.jpg'
    ],
    [
        'title' => 'Chemistry Laboratory Apparatus & Chemicals',
        'category' => 'labs',
        'thumb' => 'wp-content/uploads/2021/03/5-1024x768.jpg',
        'full'  => 'wp-content/uploads/2021/03/5.jpg'
    ],
    [
        'title' => 'School Library & Global Reading Room',
        'category' => 'campus',
        'thumb' => 'wp-content/uploads/2021/03/1-1024x682.jpg',
        'full'  => 'wp-content/uploads/2021/03/1.jpg'
    ],
    [
        'title' => 'Azam Campus Sports Ground & Athletics Arena',
        'category' => 'sports',
        'thumb' => 'wp-content/uploads/2021/03/2.jpg',
        'full'  => 'wp-content/uploads/2021/03/2.jpg'
    ],
    [
        'title' => 'Azam Sports Academy Playing Courts',
        'category' => 'sports',
        'thumb' => 'wp-content/uploads/2021/03/3.jpg',
        'full'  => 'wp-content/uploads/2021/03/3.jpg'
    ],
    [
        'title' => 'Annual Throwball Championship Victory Ceremony',
        'category' => 'sports',
        'thumb' => 'wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.51.38-PM-1024x768.jpeg',
        'full'  => 'wp-content/uploads/2021/02/WhatsApp-Image-2021-02-13-at-2.51.38-PM.jpeg'
    ],
    [
        'title' => 'National Level IT Olympiad at Assembly Hall',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2021/02/11.png',
        'full'  => 'wp-content/uploads/2021/02/11.png'
    ],
    [
        'title' => 'Inter-School Drawing & Painting Exhibition',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2021/02/12.png',
        'full'  => 'wp-content/uploads/2021/02/12.png'
    ],
    [
        'title' => 'Sakal Schoolympics Rifle Shooting Range',
        'category' => 'sports',
        'thumb' => 'wp-content/uploads/2021/02/13.png',
        'full'  => 'wp-content/uploads/2021/02/13.png'
    ],
    [
        'title' => 'Inter-School Flower Arrangement on Tennis Court',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2021/02/14.png',
        'full'  => 'wp-content/uploads/2021/02/14.png'
    ],
    [
        'title' => 'R.S.P. Troop Top 10 Platoon Honor with Dignitaries',
        'category' => 'events',
        'thumb' => 'wp-content/uploads/2021/02/16.png',
        'full'  => 'wp-content/uploads/2021/02/16.png'
    ]
];
?>

<section class="section-pad bg-body">
    <div class="container-wide">
        <!-- Filter Tabs -->
        <div class="gallery-filters">
            <button class="filter-btn active" data-filter="all"><i class="fa-solid fa-border-all"></i> All Photos</button>
            <button class="filter-btn" data-filter="campus"><i class="fa-solid fa-school"></i> Campus &amp; Classrooms</button>
            <button class="filter-btn" data-filter="labs"><i class="fa-solid fa-flask"></i> Laboratories &amp; IT</button>
            <button class="filter-btn" data-filter="sports"><i class="fa-solid fa-medal"></i> Sports &amp; Games</button>
            <button class="filter-btn" data-filter="events"><i class="fa-solid fa-calendar-check"></i> Events &amp; Celebrations</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid">
            <?php foreach ($galleryItems as $item): ?>
                <div class="gallery-card" data-category="<?= e($item['category']) ?>" data-lightbox data-lightbox-src="<?= url($item['full']) ?>" data-title="<?= e($item['title']) ?>">
                    <img src="<?= url($item['thumb']) ?>" alt="<?= e($item['title']) ?>" loading="lazy">
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-expand" style="font-size: 1.4rem; color: var(--accent); margin-bottom: 6px;"></i>
                        <p class="gallery-caption"><?= e($item['title']) ?></p>
                        <span style="font-size: 0.75rem; text-transform: uppercase; color: #cbd5e1; letter-spacing: 0.5px;"><?= ucfirst($item['category']) ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div style="text-align: center; margin-top: 48px;">
            <a href="<?= url('activities.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                View Activities Details <i class="fa-solid fa-list-check"></i>
            </a>
            <a href="<?= url('facility.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                Explore Facilities <i class="fa-solid fa-compass"></i>
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
