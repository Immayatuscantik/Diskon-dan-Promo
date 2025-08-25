<!DOCTYPE html>
<html>
<head>
    <title><?= $flyer->nama_flyer; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/other.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/flyer.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- Header -->
<header class="header-bar">
    <div class="header-left">
        <img src="<?= base_url('assets/icons/sakinah_logo.png'); ?>" class="logo" alt="Logo Sakinah Mart">
    </div>
</header>
    <div class="container">
        <div class="header">
            <a href="<?= site_url('user/'); ?>" class="btn-icon btn-home">
                <i class="fa-solid fa-house"></i>
            </a>
            <h2><?= $flyer->nama_flyer; ?></h2>
            <a href="<?= site_url('user/promo/'.$id_kategori); ?>" class="btn-icon btn-back">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <img src="<?= base_url('uploads/flyer/'.$flyer->gambar); ?>" alt="<?= $flyer->nama_flyer; ?>">
    </div>

    <footer>
    <p>© Copyright IT Team RSIS 2025. All Rights Reserved.</p>
    </footer>

</body>
</html>
