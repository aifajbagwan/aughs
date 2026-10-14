<?php
$currentPage = 'admission';
$pageTitle = "Admission Procedure | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Detailed admission procedure, requirements, document checklist, and online application form for Anglo Urdu Girls' High School, Pune.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Admission Procedure";
$bannerDesc = "A simple, parent-friendly 3-step admission process to welcome your daughter into the AUGHS family.";
$breadcrumbs = [
    ['title' => 'Admission', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Join Our Academic Family</span>
            <h2>Simple &amp; Transparent Admission Process</h2>
            <p>
                Anglo Urdu Girls’ High School offers a nurturing environment that fosters essential skills in children to empower them for the 21st century. Our endeavor has been to ensure Quality in Education and to provide a platform where learning is experiential, sequential, and a lifelong cherished memory.
            </p>
            <p>
                The admission procedure too is simple, parent-friendly, and transparent. Follow these easy steps to be a part of the Anglo Urdu Girls’ High School family:
            </p>

            <!-- Admission Steps Grid -->
            <div class="grid-3" style="margin: 32px 0;">
                <!-- Step 1 -->
                <div class="card-item" style="border-top: 4px solid var(--primary); padding: 24px;">
                    <div style="font-size: 2.2rem; color: var(--primary); font-weight: 800; font-family: var(--font-heading); margin-bottom: 10px;">
                        01
                    </div>
                    <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 12px;">Step 1: Admission Enquiry</h3>
                    <p class="card-text" style="font-size: 0.95rem;">
                        Submit the online Enquiry Form using our direct admission portal link or visit the school admissions office at Azam Campus. Our admissions counselor will get back to you promptly to answer your questions and assist you with the required information.
                    </p>
                    <a href="<?= ADMISSION_FORM_URL ?>" target="_blank" rel="noopener" class="btn btn-primary" style="margin-top: auto; font-size: 0.85rem; padding: 8px 18px;">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i> Open Google Form
                    </a>
                </div>

                <!-- Step 2 -->
                <div class="card-item" style="border-top: 4px solid var(--secondary); padding: 24px;">
                    <div style="font-size: 2.2rem; color: var(--secondary); font-weight: 800; font-family: var(--font-heading); margin-bottom: 10px;">
                        02
                    </div>
                    <h3 style="font-size: 1.25rem; color: var(--secondary-hover); margin-bottom: 12px;">Step 2: Registration</h3>
                    <p class="card-text" style="font-size: 0.95rem;">
                        Parents are requested to visit the school Admission Office to obtain and fill out the registration form. Parents may also complete the application form online, take a printout, fill in the necessary student details, and submit the hard copy of the completed form to the school counter.
                    </p>
                    <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600; margin-top: auto;">
                        <i class="fa-solid fa-building"></i> Office Hours: 9:00 AM - 4:00 PM
                    </span>
                </div>

                <!-- Step 3 -->
                <div class="card-item" style="border-top: 4px solid #10b981; padding: 24px;">
                    <div style="font-size: 2.2rem; color: #10b981; font-weight: 800; font-family: var(--font-heading); margin-bottom: 10px;">
                        03
                    </div>
                    <h3 style="font-size: 1.25rem; color: #047857; margin-bottom: 12px;">Step 3: Form Submission</h3>
                    <p class="card-text" style="font-size: 0.95rem;">
                        The parent needs to submit the finalized admission form along with the verified mandatory documents listed below. Kindly intimate the school administration in case your child requires special assistance due to any medical or health condition.
                    </p>
                    <span style="font-size: 0.85rem; color: #047857; font-weight: 600; margin-top: auto;">
                        <i class="fa-solid fa-circle-check"></i> Verification &amp; Confirmation
                    </span>
                </div>
            </div>

            <!-- Mandatory Documents Section -->
            <div style="background: #f8fafc; border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 32px; margin: 32px 0;">
                <h3 style="margin-top: 0; color: var(--primary); display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-folder-open" style="color: var(--secondary);"></i> Required Documents for Admission
                </h3>
                <p style="margin-bottom: 20px;">Please ensure you carry the following original and attested copies for verification at the admission desk:</p>
                
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Sr. No.</th>
                                <th>Document Required</th>
                                <th>Format / Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1</strong></td>
                                <td><strong>School Leaving Certificate (LC / TC)</strong></td>
                                <td>Original plus one self-attested photocopy. (The original document will be verified immediately and handled per state board norms).</td>
                            </tr>
                            <tr>
                                <td><strong>2</strong></td>
                                <td><strong>Progress / Report Cards</strong></td>
                                <td>Photocopy of previous class academic progress report card showing pass marks.</td>
                            </tr>
                            <tr>
                                <td><strong>3</strong></td>
                                <td><strong>Aadhar Card</strong></td>
                                <td>Photocopy of student's valid government Aadhar card.</td>
                            </tr>
                            <tr>
                                <td><strong>4</strong></td>
                                <td><strong>Passport Size Photographs</strong></td>
                                <td>Recent color passport size photographs of the student and parents.</td>
                            </tr>
                            <tr>
                                <td><strong>5</strong></td>
                                <td><strong>Caste Certificate (if applicable)</strong></td>
                                <td>Attested photocopy for students claiming category benefits.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Direct Google Form Action Banner -->
            <div class="promo-banner" style="background: linear-gradient(135deg, #1e3a5f, var(--primary));">
                <div class="promo-content">
                    <span style="color: var(--accent); font-weight: 700; text-transform: uppercase;">Official Online Application Form</span>
                    <h3>Ready to Begin Your Application?</h3>
                    <p>Click below to fill the official AUGHS online admission registration form directly on Google Forms.</p>
                </div>
                <div>
                    <a href="<?= ADMISSION_FORM_URL ?>" target="_blank" rel="noreferrer noopener" class="btn btn-primary" style="font-size: 1.05rem; padding: 14px 28px;">
                        <i class="fa-solid fa-file-circle-check"></i> Fill Admission Form Now
                    </a>
                </div>
            </div>

            <!-- Admission Enquiry Contact -->
            <div style="margin-top: 36px; padding: 24px; background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-md);">
                <h4 style="color: var(--primary); margin-bottom: 12px;"><i class="fa-solid fa-headset" style="color:var(--secondary);"></i> Admission Helpline &amp; Office Visit</h4>
                <p style="margin-bottom: 8px;"><strong>Address:</strong> <?= SCHOOL_ADDRESS ?></p>
                <p style="margin-bottom: 8px;"><strong>Helpline Phone:</strong> <a href="tel:<?= str_replace('-', '', SCHOOL_PHONE) ?>"><?= SCHOOL_PHONE ?></a></p>
                <p style="margin-bottom: 0;"><strong>Email Inquiries:</strong> <a href="mailto:<?= SCHOOL_EMAIL ?>"><?= SCHOOL_EMAIL ?></a></p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
