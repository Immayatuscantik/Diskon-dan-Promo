<!DOCTYPE html>
<html>
<head>
    <title><?= $flyer->nama_flyer; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/flyer.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="header">
        <h2><?= $flyer->nama_flyer; ?></h2>
        <a href="<?= site_url('user/promo/'.$id_kategori); ?>" class="btn">Kembali</a>
    </div>
    <img src="<?= base_url('uploads/flyer/'.$flyer->gambar); ?>" alt="<?= $flyer->nama_flyer; ?>">
</div>
</body>
</html>
