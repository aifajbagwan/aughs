<?php
$currentPage = 'urdu-department';
$pageTitle = "Urdu Department | M.C.E. Society's Anglo Urdu Girls' High School";
$pageDesc = "The Urdu Department of AUGHS fosters literary excellence, poetic recitations, calligraphy, and cultural appreciation under Mrs. Farheen Arif Khan.";
include __DIR__ . '/includes/header.php';

$bannerTitle = "شعبۂ اردو — Urdu Department";
$bannerDesc = "سیکڑوں اور بھی دنیا میں زبانیں ہیں مگر — جس پر مرتی ہے فصاحت وہ زبان ہے اردو";
$breadcrumbs = [
    ['title' => 'Departments', 'url' => url('departments.php')],
    ['title' => 'Urdu Department', 'url' => '']
];
include __DIR__ . '/includes/page-banner.php';
?>

<section class="section-pad bg-body">
    <div class="container">
        <div class="content-box">
            <span class="section-badge">شعبۂ اردو و ادبیات</span>
            <h2>Urdu Language &amp; Literary Heritage</h2>

            <!-- Authentic Urdu Poetry Card -->
            <div class="urdu-poetry-box">
                <p style="font-weight: 700; font-size: 1.6rem; margin-bottom: 8px;">اردو زبان کا تاریخی پس منظر</p>
                <p style="font-size: 1.5rem; margin-bottom: 6px;">سیکڑوں اور بھی دنیا میں زبانیں ہیں مگر</p>
                <p style="font-size: 1.5rem; color: var(--secondary);">جس پر مرتی ہے فصاحت وہ زبان ہے اردو</p>
            </div>

            <!-- Authentic Urdu Script Content -->
            <div class="urdu-container">
                <div class="urdu-text">
                    یہ ایک تاریخی حقیقت ہے کہ جب دو نئے افراد یا مختلف تہذیبوں کے لوگ ایک دوسرے سے متعارف ہوئے تو ان کے درمیان ضروریاتِ زندگی کی تکمیل اور بات چیت کے نتیجے میں ایک نئی تہذیب وزبان کی راہ ہموار ہونے لگی جو بتدریج کسی ملک وقوم کی تہذیب وثقافت اور علم و ادب کا حصہ بن کر اس ملک وقوم کی ترقی وخوشحالی کا ذریعہ ثابت ہوئی ۔ایسے ہی میل جول ،آپسی تعلقات اور اخذ وقبول کے نتیجے میں اردو کی فضا ہموار ہوئی ۔گیارھویں صدی میں دو قوموں کے باہمی اختلاط و ارتباط سے اردو زبان کا آغاز ہوا ۔
                </div>

                <div class="urdu-text">
                    ہماری زبان اُردو مادری زبان ہے ۔ہمارے مدرسے <strong>اینگلو اردو گرلز ہائی اسکول</strong> میں اردو زبان کی ترقی و ترویج میں خصوصی اقدام اٹھائے جاتے ہیں۔تاکہ ہماری قوم کے نو نہالوں کی ہمہ جہت ترقی اور مختلف صلاحیتوں کو جلا ملتی رہے۔اسی کے پیش نظر مدرسے میں مختلف النوع پروگرام کا انعقاد کیا جاتا ہے ۔ جس میں خوشخطی، نظم خوانی غزل خوانی اور فی البدیہہ تقاریر اور مضمون نویسی کے مقابلے لیے جاتے ہیں۔
                </div>

                <div class="urdu-text">
                    اسی کے ساتھ اعظم کیمپس کی بزم اردو اور نوبل ایسوسییشن دی ایسوسییشن آف اردو میڈیم ہائی اسکول پونے دکن مسلم انسٹی ٹیوٹ انجمن اردو ترقی ہند پونے جیسے اداروں کے زیر اہتمام ہونے والے بین المدارس تقریری ادبی اور ثقافتی پروگراموں اور مقابلوں میں ہماری طالبات شریک ہوتی ہیں اور اردو اساتذہ کی رہبری میں شاندار کامیابی حاصل کرتی ہیں۔
                </div>

                <div class="urdu-text">
                    پوری دنیا میں خالص اردو بولنے والوں کی تعداد ١١ کروڑ سے زائد ہے، جس کے لحاظ سے اردو دنیا کی نویں بڑی زبان ہے ۔ اردو کو مختلف ناموں سے پکارا جاتا رہا مثلا ہندوی ،ریختہ، ریختی، دہلوی اور کھڑی بولی ۔ اردو زبان کے فروغ میں سرسید، شبلی، حالی، ندوی، ڈپٹی نذیر احمد، میر تقی میر، مصحفی، غالب اور علامہ اقبال جیسے عظیم شاعروں اور ادیبوں نے لازوال ادب تخلیق کیا ہے ۔
                </div>

                <div class="urdu-poetry-box" style="margin-top: 24px; background: #fffdf5;">
                    <p style="font-size: 1.5rem; margin-bottom: 4px;">اردو ہے جس کا نام ہمیں جانتے ہیں داغ</p>
                    <p style="font-size: 1.5rem; color: var(--primary);">سارے جہاں میں دھوم اردو زبان کی ہے</p>
                </div>
            </div>

            <!-- Faculty Profile -->
            <h3 style="margin-top: 36px; color: var(--primary);"><i class="fa-solid fa-user-tie" style="color:var(--secondary);"></i> Department Faculty</h3>
            
            <div class="message-card-split" style="grid-template-columns: 280px 1fr; margin-top: 20px;">
                <div class="message-card-img" style="background-color: var(--primary);">
                    <img src="<?= url('wp-content/uploads/2023/07/Mrs-Farheen-Arif-Khan.jpg') ?>" alt="Mrs. Farheen Arif Khan" class="leader-portrait" style="border-radius: var(--radius-md); width: 190px; height: 230px; object-fit: cover;">
                    <h3 class="leader-name" style="font-size: 1.15rem;">Mrs. Farheen Arif Khan</h3>
                    <span class="leader-role">Senior Teacher, Urdu Department</span>
                </div>
                <div class="message-card-body">
                    <span class="faculty-badge" style="background: #dcfce7; color: #166534;">Faculty Details</span>
                    <h3 style="color: var(--primary); margin-top: 4px; margin-bottom: 12px;">Mrs. Farheen Arif Khan</h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 10px; font-size: 1rem; color: var(--text-main);">
                        <p style="margin: 0;"><strong>Academic Qualification:</strong> M.A. B.Ed.</p>
                        <p style="margin: 0;"><strong>Teaching Experience:</strong> 23 Years</p>
                        <p style="margin: 0;"><strong>Email Address:</strong> <a href="mailto:farheen.shaikh@azamcampus.org" style="color:var(--primary-light); font-weight:600;">farheen.shaikh@azamcampus.org</a></p>
                    </div>

                    <p style="margin-top: 16px; color: var(--text-muted); font-size: 0.95rem;">
                        Guiding secondary school girls in linguistic aesthetics, Urdu grammar, debate tournaments, and literary symposiums across Maharashtra.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="<?= url('departments.php') ?>" class="btn btn-primary" style="margin-right: 12px;">
                    All Departments <i class="fa-solid fa-layer-group"></i>
                </a>
                <a href="<?= url('maths-department.php') ?>" class="btn btn-primary" style="background: var(--primary);">
                    Maths Department <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
