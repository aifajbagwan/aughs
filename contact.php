<?php
$currentPage = 'contact';
$pageTitle = "Contact Us | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Get in touch with Anglo Urdu Girls' High School, Azam Campus, Pune. Phone: 020-26446936, Email: prin-aughs@azamcampus.org.";
require_once __DIR__ . '/config.php';

$feedback = null;
$error = null;

// Handle Contact Form Submission
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST' && isset($_POST['submit_contact'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        $error = "Please fill in all required fields (Name, Email, and Message).";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please provide a valid email address.";
    } else {
        // In a real environment, mail() or database logging can occur here.
        // We simulate a successful submission message.
        $feedback = "Thank you, " . htmlspecialchars($name) . "! Your message has been sent successfully. The school administration will reach out to you shortly.";
    }
}

include __DIR__ . '/includes/header.php';

$bannerTitle = "Contact Us";
$bannerDesc = "We welcome your inquiries, feedback, and campus visits. Reach out to our admissions and administrative office.";
$breadcrumbs = [
    ['title' => 'Contact', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <!-- School Building Visual Banner -->
        <div style="border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 40px; box-shadow: var(--shadow-md); max-height: 420px;">
            <img src="<?= url('wp-content/uploads/2021/02/Abeda_Inamdar_College_for_Girls_Anglo_Urdu_Girls_school_Azam_Campus.jpg') ?>" alt="AUGHS Campus Building, Azam Campus" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <div class="contact-grid">
            <!-- Left Column: Contact Cards -->
            <div>
                <span class="section-badge">Get in Touch</span>
                <h2 style="color: var(--primary); margin-bottom: 20px;">Connect With Our Administration</h2>
                <p style="color: var(--text-muted); margin-bottom: 24px;">
                    Whether you have questions regarding the ongoing admission process, school curriculum, transport, or facilities, our staff is delighted to assist you.
                </p>

                <div class="contact-card-list">
                    <!-- Address Card -->
                    <div class="contact-info-card">
                        <div class="contact-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="contact-info-text">
                            <h4>Campus Address</h4>
                            <p><?= SCHOOL_ADDRESS ?></p>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="contact-info-card">
                        <div class="contact-info-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="contact-info-text">
                            <h4>Telephone Helpline</h4>
                            <p><a href="tel:<?= str_replace('-', '', SCHOOL_PHONE) ?>"><?= SCHOOL_PHONE ?></a></p>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Available Monday – Saturday, 8:00 AM – 4:30 PM</span>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="contact-info-card">
                        <div class="contact-info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="contact-info-text">
                            <h4>Official Email</h4>
                            <p><a href="mailto:<?= SCHOOL_EMAIL ?>"><?= SCHOOL_EMAIL ?></a></p>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Direct communication with the Principal's Office</span>
                        </div>
                    </div>

                    <!-- Hours Card -->
                    <div class="contact-info-card">
                        <div class="contact-info-icon"><i class="fa-solid fa-clock"></i></div>
                        <div class="contact-info-text">
                            <h4>Office Hours</h4>
                            <p><?= SCHOOL_HOURS ?></p>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Sunday &amp; Public Holidays: Closed</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Contact Form -->
            <div>
                <div class="content-box" style="margin-bottom: 0;">
                    <h3 style="color: var(--primary); margin-top: 0; margin-bottom: 16px;">
                        <i class="fa-solid fa-paper-plane" style="color: var(--secondary);"></i> Send Us an Inquiry
                    </h3>
                    <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 24px;">
                        Fill out the form below and our counselor will respond to your queries promptly.
                    </p>

                    <?php if (!empty($feedback)): ?>
                        <div class="alert alert-success">
                            <i class="fa-solid fa-circle-check"></i>
                            <div><?= e($feedback) ?></div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div><?= e($error) ?></div>
                        </div>
                    <?php endif; ?>

                    <form action="<?= url('contact.php') ?>" method="POST">
                        <div class="form-group">
                            <label class="form-label" for="contact_name">Full Name <span style="color:#ef4444;">*</span></label>
                            <input type="text" id="contact_name" name="name" class="form-control" required placeholder="e.g. Mohammad Irfan">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_email">Email Address <span style="color:#ef4444;">*</span></label>
                            <input type="email" id="contact_email" name="email" class="form-control" required placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_phone">Contact Phone Number</label>
                            <input type="tel" id="contact_phone" name="phone" class="form-control" placeholder="10-digit mobile number">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_subject">Subject / Inquiry Type</label>
                            <select id="contact_subject" name="subject" class="form-control">
                                <option value="Admission Inquiry">Admission Inquiry</option>
                                <option value="School Timings & Fees">School Timings &amp; Fees</option>
                                <option value="Transport Inquiry">School Bus / Transport</option>
                                <option value="Academic Inquiry">Curriculum &amp; Academics</option>
                                <option value="General Feedback">General Feedback / Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_message">Your Message <span style="color:#ef4444;">*</span></label>
                            <textarea id="contact_message" name="message" class="form-control" required placeholder="Please write your questions or details here..."></textarea>
                        </div>

                        <button type="submit" name="submit_contact" class="btn btn-primary" style="width: 100%; padding: 14px; font-size: 1rem;">
                            <i class="fa-solid fa-paper-plane"></i> Submit Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Maps Embed -->
        <div style="margin-top: 48px; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-color);">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.3364952086433!2d73.87413537496294!3d18.51368998257924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0451a81ee0f%3A0xe510ce2913bfad2f!2sAzam%20Campus%2C%20Camp%2C%20Pune%2C%20Maharashtra%20411001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                width="100%" 
                height="380" 
                style="border:0; display:block;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                title="Azam Campus Pune Location Map">
            </iframe>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
