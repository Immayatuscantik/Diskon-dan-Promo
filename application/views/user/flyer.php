<!DOCTYPE html>
<html>
<head>
    <title><?= $flyer->nama_flyer; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/flyer.css'); ?>">
</head>
<body>
    <div class="container">
        <a href="<?= site_url('user/promo/'.$id_kategori); ?>" class="btn">Kembali</a>
        <h2><?= $flyer->nama_flyer; ?></h2>
        <img src="<?= base_url('uploads/flyer/'.$flyer->gambar); ?>" alt="<?= $flyer->nama_flyer; ?>">
    </div>
</body>
</html>
