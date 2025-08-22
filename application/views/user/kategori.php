<!DOCTYPE html>
<html>
<head>
    <title>Diskon dan Promo</title>
    <link rel="stylesheet" href="<?= base_url('assets/kategori.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">
    <h2 style="text-align:center;">Diskon dan Promo</h2>

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

</body>
</html>
