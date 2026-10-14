    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1: About School -->
                <div class="footer-col footer-about">
                    <img src="<?= url('wp-content/uploads/2021/02/IMG-20210107-WA0008-removebg-preview-274x300.png') ?>" alt="AUGHS Emblem" class="footer-logo">
                    <p>
                        <strong>M.C.E. Society's Anglo Urdu Girls' High School</strong> has been an emblem of academic excellence, holistic education, and women empowerment at Azam Campus, Pune.
                    </p>
                    <p style="font-size:0.84rem; color:#94a3b8;">
                        <i class="fa-solid fa-award" style="color:var(--accent);"></i> Dedicated to nurturing young female leaders with academic rigor, technological proficiency, and moral integrity.
                    </p>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="<?= url('index.php') ?>"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
                        <li><a href="<?= url('about-us.php') ?>"><i class="fa-solid fa-chevron-right"></i> About Us</a></li>
                        <li><a href="<?= url('our-philosophy.php') ?>"><i class="fa-solid fa-chevron-right"></i> Our Philosophy</a></li>
                        <li><a href="<?= url('admission.php') ?>"><i class="fa-solid fa-chevron-right"></i> Admission Procedure</a></li>
                        <li><a href="<?= url('facility.php') ?>"><i class="fa-solid fa-chevron-right"></i> Campus Facilities</a></li>
                        <li><a href="<?= url('activities.php') ?>"><i class="fa-solid fa-chevron-right"></i> School Activities</a></li>
                        <li><a href="<?= url('gallery.php') ?>"><i class="fa-solid fa-chevron-right"></i> Photo Gallery</a></li>
                        <li><a href="<?= url('contact.php') ?>"><i class="fa-solid fa-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Academics & Info -->
                <div class="footer-col">
                    <h4>Academics &amp; Info</h4>
                    <ul class="footer-links">
                        <li><a href="<?= url('principal-message.php') ?>"><i class="fa-solid fa-chevron-right"></i> Principal's Message</a></li>
                        <li><a href="<?= url('president-message.php') ?>"><i class="fa-solid fa-chevron-right"></i> President's Message</a></li>
                        <li><a href="<?= url('student-achievements.php') ?>"><i class="fa-solid fa-chevron-right"></i> SSC Merit Toppers</a></li>
                        <li><a href="<?= url('staff-achievements.php') ?>"><i class="fa-solid fa-chevron-right"></i> Staff Achievements</a></li>
                        <li><a href="<?= url('information.php') ?>"><i class="fa-solid fa-chevron-right"></i> Governing Board &amp; Staff</a></li>
                        <li><a href="<?= url('rules-regulations.php') ?>"><i class="fa-solid fa-chevron-right"></i> Rules &amp; Regulations</a></li>
                        <li><a href="<?= url('maths-department.php') ?>"><i class="fa-solid fa-chevron-right"></i> Maths Department</a></li>
                        <li><a href="<?= url('urdu-department.php') ?>"><i class="fa-solid fa-chevron-right"></i> Urdu Department</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info -->
                <div class="footer-col">
                    <h4>Campus Address</h4>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?= SCHOOL_ADDRESS ?></span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <span><a href="tel:<?= str_replace('-', '', SCHOOL_PHONE) ?>"><?= SCHOOL_PHONE ?></a></span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <span><a href="mailto:<?= SCHOOL_EMAIL ?>"><?= SCHOOL_EMAIL ?></a></span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-clock"></i>
                        <span><?= SCHOOL_HOURS ?></span>
                    </div>
                    <div style="margin-top: 15px;">
                        <a href="<?= ADMISSION_FORM_URL ?>" target="_blank" rel="noopener" class="btn btn-primary" style="padding: 8px 18px; font-size: 0.85rem;">
                            <i class="fa-solid fa-file-signature"></i> Online Admission Form
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?= date('Y') ?> AUGHS - Anglo Urdu Girls' High School, M.C.E. Society, Pune. All Rights Reserved.</p>
                <p>Designed with dedication for modern education &amp; excellence.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top" title="Scroll to top" aria-label="Scroll to top">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <!-- Lightbox Modal -->
    <div class="lightbox-modal" id="lightboxModal" role="dialog" aria-modal="true">
        <button class="lightbox-close" aria-label="Close image modal">&times;</button>
        <div class="lightbox-content">
            <img id="lightboxImg" src="" alt="Enlarged view">
            <p id="lightboxCaption" style="text-align: center; color: #fff; margin-top: 10px; font-weight: 500;"></p>
        </div>
    </div>

    <!-- Main JavaScript -->
    <script src="<?= url('assets/js/main.js') ?>"></script>
</body>
</html>
