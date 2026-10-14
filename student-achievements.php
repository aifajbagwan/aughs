<?php
$currentPage = 'student-achievements';
$pageTitle = "Student Achievements - SSC Toppers | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "Complete Hall of Fame of SSC Board Toppers and Pune Division Merit Holders of Anglo Urdu Girls' High School from 1993 to 2019.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "Student Achievements";
$bannerDesc = "Honoring our stellar SSC Board merit holders who secured top ranks across Pune Division.";
$breadcrumbs = [
    ['title' => 'Achievements', 'url' => url('achievements.php')],
    ['title' => 'Student Achievements', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';

$toppers = [
    [1, "Shaikh Nahid Aqueel Ahmed", "1993-94", "91.57%", "21st in Pune Division"],
    [2, "Ansari Zarin Masood", "1997-98", "94.80%", "1st in Pune Division"],
    [3, "Mujahid Sadeqa Usman", "1999-00", "92.52%", "4th in Pune Division"],
    [4, "Khan Lubna Md. Hanif", "1999-00", "92.42%", "5th in Pune Division"],
    [5, "Ansari Sadeqa Abdussalam", "2000-01", "94.52%", "1st in Pune Division"],
    [6, "Shaikh Sameena Naseer", "2000-01", "94.00%", "2nd in Pune Division"],
    [7, "Sayde Nazneen Ab. Rauf", "2000-01", "93.86%", "3rd in Pune Division"],
    [8, "Bukhari Aatiya Naaz Sham", "2000-01", "93.20%", "5th in Pune Division"],
    [9, "Fakhi Sana Haroon", "2000-01", "92.93%", "7th in Pune Division"],
    [10, "Padiyar Noorjahan Ibrahim", "2000-01", "92.13%", "13th in Pune Division"],
    [11, "Rogangar Majeda Altaf", "2001-02", "94.66%", "1st in Pune Division"],
    [12, "Taj Mohd Saba Kauser Kamruddin", "2001-02", "91.86%", "17th in Pune Division"],
    [13, "Wajeda Karigar", "2002-03", "95.20%", "1st in Pune Division"],
    [14, "Dalal Rafat Fatima Abdul Aziz", "2002-03", "91.73%", "20th in Pune Division"],
    [15, "Shaikh Humera M. Kifayatullah", "2004-05", "93.60%", "8th in Pune Division"],
    [16, "Jamadar Afreen Sikandar", "2005-06", "96.40%", "1st in Pune Division"],
    [17, "Magdum Shehnaz Allauddin", "2005-06", "95.60%", "3rd in Pune Division"],
    [18, "Magrabi Bibi Raza", "2006-07", "95.69%", "1st in Pune Division"],
    [19, "Tanzeela Aquil Ahmed", "2006-07", "94.46%", "2nd in Pune Division"],
    [20, "Khan Iram Arif", "2007-08", "95.69%", "3rd in Pune Division"],
    [21, "Karigar Saniya Ab Razzaque", "2008-09", "93.23%", "1st in School"],
    [22, "Bagban Khansa Rafique", "2009-10", "97.45%", "1st in School"],
    [23, "Patwekar Sana Md. Javed", "2009-10", "95.09%", "2nd in School"],
    [24, "Patel Asma Kausar Ab. Waheed", "2009-10", "94.91%", "Distinction"],
    [25, "Ayesha Mushtaque", "2009-10", "94.36%", "Distinction"],
    [26, "Multani Ayesha Saba Md. Irfan", "2009-10", "94.36%", "Distinction"],
    [27, "Ansari Gulnaz Mukhtar", "2009-10", "94.00%", "Distinction"],
    [28, "Khan Gausiya Arif", "2009-10", "93.82%", "Distinction"],
    [29, "Dalal Iram Raees", "2009-10", "93.64%", "Distinction"],
    [30, "Shaikh Taherim Hissamuddin", "2009-10", "93.64%", "Distinction"],
    [31, "Shaikh Rumman Hanif", "2009-10", "94.45%", "Distinction"],
    [32, "Shaikh Sanabi Riyazuddin", "2009-10", "92.73%", "Distinction"],
    [33, "Mulla Jasmin Salim", "2009-10", "91.82%", "Distinction"],
    [34, "Shaikh Irfana Ahmed", "2009-10", "91.09%", "Distinction"],
    [35, "Shaikh Rakshanda Abdul Rauf", "2010-11", "94.36%", "Distinction"],
    [36, "Shaikh Farheen Rafique", "2010-11", "93.82%", "Distinction"],
    [37, "Khot Mubashbira Shahid", "2010-11", "93.27%", "Distinction"],
    [38, "Sayyed Sanober Hanif", "2010-11", "91.64%", "Distinction"],
    [39, "Mankar Rafiya Siraj", "2010-11", "91.45%", "Distinction"],
    [40, "Khan Sawleha M. Hadis", "2010-11", "91.27%", "Distinction"],
    [41, "Khot Huda Shahid", "2012-13", "93.27%", "Distinction"],
    [42, "Sayyed Bilquis Mazhar", "2012-13", "92.55%", "Distinction"],
    [43, "Shaikh Saba Naaz Nasir Ahmed", "2012-13", "92.00%", "Distinction"],
    [44, "Ansari Mahek Mateen", "2012-13", "92.00%", "Distinction"],
    [45, "Shaikh Bushra Hanif", "2012-13", "91.40%", "Distinction"],
    [46, "Asari Alfiya Inayat", "2012-13", "91.00%", "Distinction"],
    [47, "Karigar Saniya Ab. Razzaque", "2013-14", "95.20%", "Distinction"],
    [48, "Tamboli Ifrah Naeem", "2013-14", "92.20%", "Distinction"],
    [49, "Shaikh Rizwana Mehboob", "2013-14", "91.80%", "Distinction"],
    [50, "Shaikh Ayesha Rafique", "2014-15", "95.80%", "Distinction"],
    [51, "Tamboli Taskeen Zakir Hussain", "2014-15", "94.60%", "Distinction"],
    [52, "Khan Bareela Farooque", "2014-15", "94.00%", "Distinction"],
    [53, "Khan Shafiya Mohd. Saleem", "2015-16", "93.06%", "Distinction"],
    [54, "Khan Sara Mohd. Qaisar", "2015-16", "93.00%", "Distinction"],
    [55, "Dhotekar Fatima Asif", "2015-16", "91.20%", "Distinction"],
    [56, "Mujawar Yashfin Iqbal Ahmed", "2016-17", "93.00%", "Distinction"],
    [57, "Shaikh Farkhanda Abdul Rauf", "2016-17", "91.40%", "Distinction"],
    [58, "Shaikh Zainab Shamim", "2016-17", "91.20%", "Distinction"],
    [59, "Momin Rahat Abdul Karim", "2017-18", "96.40%", "1st in School"],
    [60, "Shaikh Maheen Rafique Ahmed", "2017-18", "95.00%", "2nd in School"],
    [61, "Shaikh Mantasha Yusuf", "2017-18", "94.20%", "3rd in School"],
    [62, "Ansari Noorfatema Khurshid", "2017-18", "93.20%", "4th in School"],
    [63, "Karajgi Muskan", "2017-18", "92.40%", "5th in School"],
    [64, "Shaikh Roqaiya Shamim", "2018-19", "93.60%", "Distinction"],
    [65, "Shaikh Masira Istiyaque", "2018-19", "92.80%", "Distinction"],
    [66, "Shaikh Maheen Abdul Rauf", "2018-19", "92.60%", "Distinction"]
];
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">Academic Excellence</span>
            <h2>SSC Board Toppers &amp; Division Merit Holders</h2>
            <p>
                The Maharashtra State Board of Secondary and Higher Secondary Education (SSC) results of Anglo Urdu Girls’ High School bear testimony to our students’ intellectual dedication and our teachers’ tireless guidance. Below is our complete, historic record of toppers who scored above 91% and secured distinction and top ranks across the Pune Division:
            </p>

            <div class="table-responsive" style="margin-top: 28px;">
                <table class="table-custom" id="toppersTable">
                    <thead>
                        <tr>
                            <th style="width: 80px;">Sr. No.</th>
                            <th>Student Name</th>
                            <th>Academic Year</th>
                            <th>Percentage</th>
                            <th>Position / Merit in Pune Division</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($toppers as $t): ?>
                            <tr>
                                <td><strong><?= $t[0] ?></strong></td>
                                <td><strong style="color:var(--primary);"><?= e($t[1]) ?></strong></td>
                                <td><?= e($t[2]) ?></td>
                                <td><span style="font-weight:700; color:var(--secondary);"><?= e($t[3]) ?></span></td>
                                <td>
                                    <?php if (strpos($t[4], '1st') !== false): ?>
                                        <span class="rank-badge rank-1st"><i class="fa-solid fa-crown"></i> <?= e($t[4]) ?></span>
                                    <?php elseif (strpos($t[4], 'in Pune Division') !== false || strpos($t[4], 'in School') !== false): ?>
                                        <span class="rank-badge"><i class="fa-solid fa-medal"></i> <?= e($t[4]) ?></span>
                                    <?php else: ?>
                                        <span style="color:var(--text-muted); font-size:0.88rem;"><?= e($t[4]) ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('staff-achievements.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    Staff Achievements <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= url('admission.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Apply for Admission <i class="fa-solid fa-graduation-cap"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
