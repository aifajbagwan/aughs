<?php
/**
 * Inner Page Banner Component
 * Usage:
 * $bannerTitle = "Page Title";
 * $bannerDesc = "Optional subtitle or description";
 * $breadcrumbs = [['title' => 'Home', 'url' => url('index.php')], ['title' => 'Current Page', 'url' => '']];
 * include __DIR__ . '/page-banner.php';
 */
?>
<section class="page-banner">
    <div class="container">
        <h1 class="page-banner-title"><?= e($bannerTitle ?? 'Anglo Urdu Girls\' High School') ?></h1>
        <?php if (!empty($bannerDesc)): ?>
            <p class="page-banner-desc"><?= e($bannerDesc) ?></p>
        <?php endif; ?>
        
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?= url('index.php') ?>"><i class="fa-solid fa-house"></i> Home</a>
            <?php if (!empty($breadcrumbs)): ?>
                <?php foreach ($breadcrumbs as $crumb): ?>
                    <span class="sep"><i class="fa-solid fa-angle-right"></i></span>
                    <?php if (!empty($crumb['url'])): ?>
                        <a href="<?= e($crumb['url']) ?>"><?= e($crumb['title']) ?></a>
                    <?php else: ?>
                        <span><?= e($crumb['title']) ?></span>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <span class="sep"><i class="fa-solid fa-angle-right"></i></span>
                <span><?= e($bannerTitle ?? 'Page') ?></span>
            <?php endif; ?>
        </nav>
    </div>
</section>
