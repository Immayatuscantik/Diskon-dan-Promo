<!DOCTYPE html>
<html>
<head>
    <title>Kategori</title>
    <link rel="stylesheet" href="<?= base_url('assets/kategori.css'); ?>">
</head>
<body>

<div class="container">
    <h2 style="text-align:center;">Kategori</h2>

    <!-- wrapper flex -->
    <div class="kategori-grid">
        <?php foreach ($kategori as $k): ?>
            <div class="card">
                <img src="<?= base_url('uploads/flyer/'.$k->thumbnail) ?>" 
                     alt="<?= $k->nama_kategori ?>">

                <h3><?= $k->nama_kategori; ?></h3>
                <a href="<?= site_url('user/promo/'.$k->id_kategori); ?>" class="btn">Lihat Promo</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
