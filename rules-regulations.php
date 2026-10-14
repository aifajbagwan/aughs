<?php
$currentPage = 'rules-regulations';
$pageTitle = "Rules & Regulations | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Code of conduct, discipline guidelines, attendance rules, uniform standards, and safety policies of AUGHS, Azam Campus, Pune.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Rules &amp; Regulations";
$bannerDesc = "Fostering an atmosphere of discipline, safety, mutual respect, and decorum across Azam Campus.";
$breadcrumbs = [
    ['title' => 'Information', 'url' => url('information.php')],
    ['title' => 'Rules & Regulations', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Campus Code of Conduct</span>
            <h2>Discipline Rules &amp; Institutional Guidelines</h2>
            <p>
                To maintain a peaceful, productive, and academically stimulating learning environment, all students of Anglo Urdu Girls’ High School are expected to strictly adhere to the established disciplinary code and general behavioral guidelines.
            </p>

            <!-- Discipline Rules Block -->
            <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 32px; margin-top: 32px; border-left: 5px solid var(--primary);">
                <h3 style="color: var(--primary); font-size: 1.4rem; margin-top: 0; margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-gavel" style="color: var(--secondary);"></i> Discipline Rules
                </h3>
                
                <ul style="list-style-type: none; padding: 0; display: flex; flex-direction: column; gap: 14px;">
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Respect &amp; Courtesy:</strong> Students should treat school staff with respect at all times and be courteous to fellow students.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>School Property Care:</strong> Students will refrain from damaging any form of school property. The school reserves the right to be compensated by the student/parents for any such damages.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Campus Cleanliness:</strong> Students will refrain from littering and keep the school premises, corridors, and classrooms completely clean.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Academic Integrity &amp; Attendance:</strong> Unacceptable behavior including but not limited to irregular attendance, academic dishonesty, neglect of homework, disruptive behavior, loitering, and disrespectful behavior towards staff or fellow students will result in serious disciplinary action.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Zero Tolerance for Bullying:</strong> Any form of bullying or ragging will result in an immediate disciplinary committee review and could result in expulsion with a negative conduct certificate.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Disciplinary Review:</strong> Any misbehavior or violation of school discipline will be dealt with by the disciplinary committee and corrective action will be taken. In extreme cases, parents will be called in to discuss the child’s behavior and it may lead to suspension or expulsion from the school.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Medium of Communication:</strong> The medium of instruction is English and students are expected to communicate in English at all times on school grounds to improve language fluency.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Compulsory ID Card:</strong> It is compulsory to bring the school-issued student ID card every day. Not bringing the ID card could result in the child not being allowed into the school premises.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Cash Policy:</strong> For safety and security, parents should refrain from sending cash with their child without specific written notice from the school.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-circle-check" style="color: var(--secondary); margin-top: 4px;"></i>
                        <span><strong>Valuables Prohibited:</strong> For safety and security, parents must refrain from sending valuables (such as expensive jewelry, smartwatches, smartphones, or electronic gadgets) to school.</span>
                    </li>
                </ul>
            </div>

            <!-- Other Guidelines Block -->
            <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 32px; margin-top: 36px; border-left: 5px solid var(--secondary);">
                <h3 style="color: var(--secondary-hover); font-size: 1.4rem; margin-top: 0; margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-list-check" style="color: var(--accent);"></i> General Campus Guidelines
                </h3>

                <ul style="list-style-type: none; padding: 0; display: flex; flex-direction: column; gap: 14px;">
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-clock" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Punctuality:</strong> Punctuality is essential at all times. Students who contravene this rule without a valid reason will be penalized as per school rules.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-bell" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Departure:</strong> No student will remain on the campus or in the classroom after the final dismissal bell has been rung unless authorized for supervised sports or study.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-person-walking" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Orderly Movement:</strong> Students' manner of movement in corridors, staircases, and assembly halls should be quiet, courteous, and orderly at all times.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-ban" style="color: #ef4444; margin-top: 4px;"></i>
                        <span><strong>Prohibited Articles:</strong> Students are strictly forbidden to bring valuable articles such as jewelry, costly fountain pens, wristwatches, or mobile phones.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-shirt" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Uniform &amp; Grooming:</strong> If earrings must be worn, they must be small modest hoops or studs. Nose rings, bangles, rings, bracelets, tattoos, and Mehendi of any kind are strictly not permitted.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-coins" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Pocket Money:</strong> Students are not permitted to carry money to school except necessary bus fare where applicable.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-book" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Authorized Literature:</strong> Only literature that is directly connected with school curriculum and reading work is permitted on campus.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-bag-shopping" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>School Bag:</strong> Every child must carry an organized school bag/satchel. No loose textbooks or notebooks are allowed.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-heart" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Public Decorum:</strong> Students must maintain exemplary decorum in public places, city transit, and outside school, honoring the reputation of the institution.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-triangle-exclamation" style="color: #ef4444; margin-top: 4px;"></i>
                        <span><strong>Property Protection:</strong> Use of swear words, foul language, scribbling or scratching on school furniture and walls, and any misbehavior in school buses will be strictly dealt with.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-baseball-bat-ball" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Playground Regulations:</strong> Students must not play games in classrooms or use cricket bats and hockey sticks inside academic blocks. All games must take place on the designated playground.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-user-shield" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Head of Institution Authority:</strong> Any pupil persistently insubordinate, repeatedly mischievous, guilty of examination malpractice, or exerting an unwholesome influence on peers may be permanently expelled or removed by the Principal.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-shield" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Code Applicability:</strong> The rule of good behavior applies outside as well as inside the school perimeter.</span>
                    </li>
                    <li style="display: flex; gap: 12px; align-items: flex-start;">
                        <i class="fa-solid fa-calendar-xmark" style="color: var(--primary); margin-top: 4px;"></i>
                        <span><strong>Unauthorized Functions:</strong> Social functions, gatherings, picnics, excursions, or outings involving pupils must not be organized without the Principal's prior written approval.</span>
                    </li>
                </ul>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('admission.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    Admission Procedure <i class="fa-solid fa-graduation-cap"></i>
                </a>
                <a href="<?= url('information.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Governing Roster <i class="fa-solid fa-users"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
