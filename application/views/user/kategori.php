<!DOCTYPE html>
<html>
<head>
    <title>Diskon dan Promo</title>
    <link rel="stylesheet" href="<?= base_url('assets/kategori.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>

<!-- Header -->
<header class="header-bar">
    <div class="header-left">
        <img src="<?= base_url('assets/icons/sakinah_logo.png'); ?>" class="logo" alt="Logo Sakinah Mart">
    </div>
</header>

<div class="container">

    <div class="header-right">
        <h1>Diskon dan Promo</h1>
    </div>

    <div class="kategori-grid">
    <?php foreach ($kategori as $k): ?>
        <?php if ($k->status == 'aktif'): ?> 
            <a href="<?= site_url('user/promo/'.$k->id_kategori); ?>" class="card">
                <img src="<?= base_url('uploads/flyer/'.$k->thumbnail) ?>" 
                    alt="<?= $k->nama_kategori ?>">
                <h3><?= $k->nama_kategori; ?></h3>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
    </div>
</div>

<footer>
    <p>© Copyright IT Team RSIS 2025. All Rights Reserved.</p>
</footer>

</body>
</html>