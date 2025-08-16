<!DOCTYPE html>
<html>
<head>
    <title><?= $kategori->nama_kategori; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/promo.css'); ?>">
</head>
<body>

<div class="container my-4">
    <a href="<?= site_url('user'); ?>" class="btn btn-secondary mb-3">← Kembali</a>
    <h2 class="mb-4 text-center"><?= $kategori->nama_kategori; ?></h2>

<div class="swiper-container promo-banner">
    <div class="swiper-wrapper">
        <?php foreach ($flyer as $item): ?>
        <div class="swiper-slide">
            <div class="card">
                <img src="<?= base_url('uploads/flyer/'.$item->gambar); ?>" 
                     class="card-img-top" 
                     alt="<?= $item->nama_flyer; ?>">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $item->nama_flyer; ?></h5>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= site_url('user/flyer/'.$item->id_flyer); ?>" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="swiper-pagination"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.promo-banner', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    centeredSlides: true,
    slidesPerView: 3, // hanya tampilkan 3 slide
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    speed: 800
});
</script>


<style>
.swiper-slide {
    width: 300px; /* lebar kartu */
    opacity: 0.8;
    transition: all 0.3s ease;
}
.swiper-slide-active {
    opacity: 1;
    transform: scale(1.05); /* membesarkan sedikit slide aktif */
}
.card {
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    overflow: hidden;
}
.card img {
    width: 90%;
    height: 250px;
    object-fit: cover;
}
</style>
