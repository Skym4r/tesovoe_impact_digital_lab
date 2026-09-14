<?php
require_once __DIR__ . '/template/inc/data.php';
require_once __DIR__ . '/template/header.php';
?>

    <main class="site-main">
        <?php
        $blocks = ['hero', 'services', 'about', 'advantages', 'reviews', 'form', 'contacts'];
        foreach ($blocks as $block) {
            $file = __DIR__ . "/template/template-parts/{$block}.php";
            if (file_exists($file)) {
                include $file;
            }
        }
        ?>
    </main>

<?php
require_once __DIR__ . '/template/footer.php';
?>