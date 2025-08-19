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
<<<<<<< HEAD
                <p>Klik untuk lihat promo</p>
                <a href="<?= site_url('user/promo/'.$k->id_kategori); ?>">Lihat Promo</a>
=======
                <a href="<?= site_url('user/promo/'.$k->id_kategori); ?>" class="btn">Lihat Promo</a>
>>>>>>> 78cb0ffde59e420f784e12227596e26d6ef3ba4b
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
