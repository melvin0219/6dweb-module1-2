<?php
$store_name = "Santa's Candy Shop";
$nav_links = [
    'Overview' => '#overview',
    'Best Sellers' => '#bestsellers',
    'Nutrition' => '#nutrition',
    'Shopping Cart' => '#cart'
];
?>
<header class="site-header">
    <div class="container header-inner">
        <div class="brand">
            <span class="brand-badge">Melvin's VC</span>
            <a href="index.php" class="brand-title"><?= $store_name ?></a>
        </div>
        <nav class="site-nav">
            <?php foreach ($nav_links as $label => $url): ?>
                <a href="<?= $url ?>" class="nav-link"><?= $label ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>