<?php
$currentPage = 'information';
$pageTitle = "Information & Governing Board | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Governing Board of M.C.E. Society, School Committee, Teaching Staff, Computer Staff, Non-Teaching, and Statutory Committees of AUGHS.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "School Information &amp; Administration";
$bannerDesc = "Official roster of the M.C.E. Society Governing Board, School Management, Teaching Faculty, and Committees.";
$breadcrumbs = [
    ['title' => 'Information', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';

$governingBoard = [
    [1, "Hon’ble Dr. P.A. Inamdar", "President"],
    [2, "Mrs. Abeda P.A. Inamdar", "Vice President"],
    [3, "Mr. Latif Magdum", "Secretary"],
    [4, "Prof. Shaikh Muzaffar", "Treasurer"],
    [5, "Mr. Irfan J. Shaikh", "Joint Secretary"],
    [6, "Mr. Haji A.Q. Qureshi", "Joint Secretary"],
    [7, "Mr. Majeed U. Dawood", "Member"],
    [8, "Mr. S. A. Inamdar", "Member"],
    [9, "Adv. Shaikh M. Hanif", "Member"],
    [10, "Mr. Badruddin I. Shaikh", "Member"],
    [11, "Mr. Abbas Ismail Shaikh", "Member"],
    [12, "Mr. Mashkur Ahmed Shaikh", "Member"],
    [13, "Dr. Mumtaz Peerbhoy", "Member"],
    [14, "Adv. Iftekhar P. Inamdar", "Member"],
    [15, "Mr. S.U. Patel", "Member"]
];

$schoolCommittee = [
    [1, "Mr. S. A. Inamdar", "Chairman"],
    [2, "Mr. Abbas Shaikh", "Member"],
    [3, "Mr. Khalid Ansari", "Member"],
    [4, "Mr. S. U. Patel", "Member"],
    [5, "Mr. Badruddin Shaikh", "Member"]
];

$teachingStaff = [
    [1, "Mrs. Roshan Ara Shaikh", "M.A. B.Ed.", "Principal"],
    [2, "Mrs. Nafeesa Salim Shaikh", "B.Sc. B.Ed. MA", "Asstt. Teacher"],
    [3, "Mrs. Dilshad Asif Shaikh", "M.A. M.P.Ed", "Asstt. Teacher"],
    [4, "Mrs. Rizwana Altaf Shaikh", "B.Sc. B.Ed. MA.", "Asstt. Teacher"],
    [5, "Mrs. Najma Qutubuddin Sayyed", "B.Sc. B.Ed", "Asstt. Teacher"],
    [6, "Mrs. Yasmeen Nizamuddin Shaikh", "M.A. B.Ed.", "Asstt. Teacher"],
    [7, "Mrs. Shabana Abdul Hamid Shaikh", "B.A. A.T.D. A.M.", "Asstt. Teacher"],
    [8, "Mrs. Parveen Faiz Ahmed Dalal", "M.A. B.Ed.", "Asstt. Teacher"],
    [9, "Mrs. Meenaz Naeem Tamboli", "M.A. B.Ed", "Asstt. Teacher"],
    [10, "Mrs. Farheen Arif Shaikh", "M.A. B.Ed", "Asstt. Teacher"],
    [11, "Mrs. Sumaiya Sikandar Shaikh", "M.A. B.Ed", "Asstt. Teacher"],
    [12, "Mrs. Gazala Abbas Shaikh", "B.A. B.Ed", "Asstt. Teacher"],
    [13, "Mrs. Batool Feroz Shaikh", "M.A. B.Ed", "Asstt. Teacher"],
    [14, "Ms. Salma Bano Bashir Ahmed Dhotekar", "M.A. B.Ed", "Asstt. Teacher"],
    [15, "Mrs. Shabana Sameer Shaikh", "M.A. B.Ed", "Asstt. Teacher"],
    [16, "Mrs. Nazneen Sadique Shaikh", "M.A. B.Ed", "Asstt. Teacher"],
    [17, "Mrs. Anjum Bilal Shaikh", "H.SC D.Ed. BA", "Asstt. Teacher"],
    [18, "Mrs. Sana Irshad Sayyed", "H.SC D.Ed. BA. B.Ed", "Asstt. Teacher"],
    [19, "Mrs. Shabina Ayyub Shaikh", "M.Sc. B.Ed", "Asstt. Teacher"],
    [20, "Mrs. Nilofar Sikandar Mulani", "MA B.Ed", "Asstt. Teacher"],
    [21, "Mrs. Tehsin Valiahmed Attar", "MA, B.Ed", "Asstt. Teacher"],
    [22, "Mrs. Sajeda Sajjad Khan", "M.A. B.Ed", "Asstt. Teacher"],
    [23, "Mrs. Hajra Azhar Shaikh", "M.A. B.Ed", "Asstt. Teacher"],
    [24, "Mrs. Sifat Alim Ashraf Khan", "M.Sc. M.Ed", "Asstt. Teacher"],
    [25, "Ms. Bilquis Ishaque Sayyed", "M.A. D.Ed", "Asstt. Teacher"],
    [26, "Ms. Sara Altaf Shaikh", "BCA, B.Ed", "Asstt. Teacher"],
    [27, "Mrs. Habiba Rehmani", "MA B.Ed", "Asstt. Teacher"],
    [28, "Mrs. Naziya M. Pathan", "BSC B.Ed", "Asstt. Teacher"],
    [29, "Mrs. Yasmeen Q. Pathan", "B.SC B.Ed", "Asstt. Teacher"],
    [30, "Mrs. Shabnam Peerzade", "B.P.Ed", "Shikshan Sevak"],
    [31, "Ms. Nishatunnisa Aijaz", "B.A, D.Ed", "Shikshan Sevak"],
    [32, "Mrs. Sana J. Dhalait", "B.SC, B.Ed", "Shikshan Sevak"],
    [33, "Mrs. Jabeen Shaikh", "M.A. B.Ed.", "Shikshan Sevak"],
    [34, "Ms. Alfiya R. Suttar", "B.A, D.Ed.", "Shikshan Sevak"],
    [35, "Mrs. Bushra Rogankar", "B.Sc. B.Ed.", "Shikshan Sevak"],
    [36, "Mrs. Almas J. Patel", "B.A, D.Ed.", "Shikshan Sevak"],
    [37, "Mrs. Sameenabano Imran", "B.Sc. B.Ed.", "Asstt. Teacher"],
    [38, "Mrs. Qamrunnisa Sharif Khan", "B.Sc. B.Ed.", "Asstt. Teacher"],
    [39, "Mrs. Shamim I. Ansari", "B.A, B.Ed", "Asstt. Teacher"],
    [40, "Mrs. Munzarin Shaikh", "B.SC, B.Ed", "Asstt. Teacher"],
    [41, "Mrs. Sana Dafedar", "B.A, D.Ed", "Asstt. Teacher"]
];

$nonTeaching = [
    [1, "Mr. Amir Mulla", "B.Com", "Clerk"],
    [2, "Mr. Muzzaffar H. Mulla", "M.A, B.Ed", "Clerk"],
    [3, "Mr. Samiullah Shaikh", "B.Com", "Clerk"],
    [4, "Mr. Adam Shabbir Shaikh", "B.Com", "Clerk"],
    [5, "Ms. Waheda A.Q. Sayyed", "M.Lib, M.Com, M.A, B.Ed", "Librarian"],
    [6, "Mr. Azam Bashir Tamboli", "SSC", "Lab. Assistant"],
    [7, "Ms. Tahura Sayyed", "H.SC D.T.Ed", "Lab. Assistant"]
];

$serviceStaff = [
    [1, "Mr. Javed Imamkhan Inamdar", "Lab. Attendant"],
    [2, "Mr. Ramchandra Chandrakant Mandle", "Peon"],
    [3, "Mrs. Parveen Shafiq Pansare", "Peon"],
    [4, "Mrs. Muktabai Devidas Doiphode", "Peon"],
    [5, "Mr. Javed Mukhatar Sayyed", "Peon"],
    [6, "Mr. Vinod Dattatray Dhokade", "Peon"],
    [7, "Mrs. Sushma Satish Sarwan", "Peon"],
    [8, "Mr. Juned S. Tamboli", "Peon"],
    [9, "Mr. Sharukh Khan", "Peon"]
];

$transportCommittee = [
    [1, "Mrs. Roshan Ara Shaikh", "Principal"],
    [2, "Police Inspector", "Member"],
    [3, "Asst. Police Inspector", "Member"],
    [4, "Mrs. Najma Q. Sayyed", "Member"],
    [5, "Mrs. Nishatunnisa M. Shaikh", "Member"],
    [6, "PTA", "Member"],
    [7, "Tajoddin Shaikh", "Driver Representative"],
    [8, "Afzal Khan", "Driver Representative"]
];

$harassmentCommittee = [
    [1, "Mrs. Roshan Ara Shaikh", "Principal"],
    [2, "Mrs. Nafisa Saleem Shaikh", "Member"],
    [3, "Miss. Waheeda Sayyed", "Member"],
    [4, "Mrs. Dr. Afreen Shaikh", "Member"],
    [5, "Shaikh Ummul Qura Sameer", "8th Std. Student"],
    [6, "Maulvi Zeba Anis", "9th Std. Student"],
    [7, "Pansare Rumana Sadique", "10th Std. Student"]
];
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Institutional Governance</span>
            <h2>School Administration &amp; Staff Committees</h2>
            <p>
                Complete official administrative directories of the Maharashtra Cosmopolitan Education Society (M.C.E. Society), School Management Committee, Teaching Faculty, Non-Teaching Staff, and Statutory Committees.
            </p>

            <!-- 1. Governing Board -->
            <div style="margin-top: 36px;">
                <h3 style="color: var(--primary); font-size: 1.4rem; margin-bottom: 14px; border-bottom: 2px solid var(--accent); padding-bottom: 8px;">
                    <i class="fa-solid fa-landmark"></i> Governing Board — Maharashtra Cosmopolitan Education Society
                </h3>
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Sr. No.</th>
                                <th>Name of Trustee / Dignitary</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($governingBoard as $gb): ?>
                                <tr>
                                    <td><strong><?= $gb[0] ?></strong></td>
                                    <td><strong style="color:var(--primary);"><?= e($gb[1]) ?></strong></td>
                                    <td><span class="faculty-badge" style="margin:0;"><?= e($gb[2]) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 2. School Committee -->
            <div style="margin-top: 40px;">
                <h3 style="color: var(--primary); font-size: 1.4rem; margin-bottom: 14px; border-bottom: 2px solid var(--secondary); padding-bottom: 8px;">
                    <i class="fa-solid fa-users-gear"></i> School Management Committee
                </h3>
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Sr. No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($schoolCommittee as $sc): ?>
                                <tr>
                                    <td><strong><?= $sc[0] ?></strong></td>
                                    <td><strong style="color:var(--primary);"><?= e($sc[1]) ?></strong></td>
                                    <td><span class="rank-badge" style="margin:0;"><?= e($sc[2]) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 3. Teaching Staff -->
            <div style="margin-top: 40px;">
                <h3 style="color: var(--primary); font-size: 1.4rem; margin-bottom: 14px; border-bottom: 2px solid var(--primary-light); padding-bottom: 8px;">
                    <i class="fa-solid fa-chalkboard-user"></i> Teaching Faculty (Secondary Section)
                </h3>
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Sr. No.</th>
                                <th>Name of Teacher</th>
                                <th>Academic Qualification</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($teachingStaff as $ts): ?>
                                <tr>
                                    <td><strong><?= $ts[0] ?></strong></td>
                                    <td><strong style="color:var(--primary);"><?= e($ts[1]) ?></strong></td>
                                    <td><?= e($ts[2]) ?></td>
                                    <td><span class="faculty-badge" style="background:var(--bg-alt); color:var(--primary-dark); margin:0;"><?= e($ts[3]) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 4. Computer & Technical Staff -->
            <div style="margin-top: 40px;">
                <h3 style="color: var(--primary); font-size: 1.4rem; margin-bottom: 14px; border-bottom: 2px solid #10b981; padding-bottom: 8px;">
                    <i class="fa-solid fa-computer"></i> Computer &amp; ICT Faculty
                </h3>
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Sr. No.</th>
                                <th>Name of Staff</th>
                                <th>Qualification</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1</strong></td>
                                <td><strong style="color:var(--primary);">Ms. Asiya Lukde</strong></td>
                                <td>M.A. B.Ed</td>
                                <td><span class="faculty-badge" style="background:#dcfce7; color:#166534; margin:0;">Computer Teacher</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 5. Non-Teaching Staff -->
            <div style="margin-top: 40px;">
                <h3 style="color: var(--primary); font-size: 1.4rem; margin-bottom: 14px; border-bottom: 2px solid #6366f1; padding-bottom: 8px;">
                    <i class="fa-solid fa-clipboard-user"></i> Administrative &amp; Laboratory Staff
                </h3>
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Sr. No.</th>
                                <th>Name of Staff</th>
                                <th>Qualification</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($nonTeaching as $nt): ?>
                                <tr>
                                    <td><strong><?= $nt[0] ?></strong></td>
                                    <td><strong style="color:var(--primary);"><?= e($nt[1]) ?></strong></td>
                                    <td><?= e($nt[2]) ?></td>
                                    <td><span class="rank-badge" style="background:#e0e7ff; color:#3730a3; margin:0;"><?= e($nt[3]) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 6. Service Staff -->
            <div style="margin-top: 40px;">
                <h3 style="color: var(--primary); font-size: 1.4rem; margin-bottom: 14px; border-bottom: 2px solid #64748b; padding-bottom: 8px;">
                    <i class="fa-solid fa-hand-holding-heart"></i> Service &amp; Support Staff
                </h3>
                <div class="table-responsive">
                    <table class="table-custom">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Sr. No.</th>
                                <th>Name of Staff</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($serviceStaff as $ss): ?>
                                <tr>
                                    <td><strong><?= $ss[0] ?></strong></td>
                                    <td><strong style="color:var(--primary);"><?= e($ss[1]) ?></strong></td>
                                    <td><?= e($ss[2]) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 7. Statutory Committees -->
            <div class="grid-2" style="margin-top: 40px;">
                <!-- Transport Committee -->
                <div>
                    <h3 style="color: var(--primary); font-size: 1.3rem; margin-bottom: 14px; border-bottom: 2px solid var(--accent); padding-bottom: 8px;">
                        <i class="fa-solid fa-bus"></i> Transport Committee
                    </h3>
                    <div class="table-responsive">
                        <table class="table-custom">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transportCommittee as $tc): ?>
                                    <tr>
                                        <td><strong><?= $tc[0] ?></strong></td>
                                        <td><strong><?= e($tc[1]) ?></strong></td>
                                        <td><?= e($tc[2]) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sexual Harassment Prevention Committee -->
                <div>
                    <h3 style="color: var(--primary); font-size: 1.3rem; margin-bottom: 14px; border-bottom: 2px solid #ef4444; padding-bottom: 8px;">
                        <i class="fa-solid fa-shield-halved"></i> Internal Committee (POCSO &amp; Safety)
                    </h3>
                    <div class="table-responsive">
                        <table class="table-custom">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">Sr. No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($harassmentCommittee as $hc): ?>
                                    <tr>
                                        <td><strong><?= $hc[0] ?></strong></td>
                                        <td><strong><?= e($hc[1]) ?></strong></td>
                                        <td><span class="rank-badge" style="margin:0;"><?= e($hc[2]) ?></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('rules-regulations.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    Rules &amp; Regulations <i class="fa-solid fa-gavel"></i>
                </a>
                <a href="<?= url('contact.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Contact Administration <i class="fa-solid fa-phone"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
