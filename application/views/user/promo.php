<!DOCTYPE html>
<html>
<head>
    <title><?= $kategori->nama_kategori; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* ========================= */
        /* Header */
        /* ========================= */
        .header-top {
            position: fixed; /* biar nempel di atas */
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background: linear-gradient(120deg, #e8f5e9 0%, #d7e7d7 40%, #daf2db 100%);
            padding: 16px 24px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            z-index: 1000; /* biar selalu di atas elemen lain */
        }

        .header-top .logo {
            max-height: 65px;
            width: auto;
            height: auto;
        }

        .header-bar h1 {
            font-size: 24px;
            color: #c5eec7;
            margin: 0;
            font-weight: 600;
        }
        
        .header-col {
            margin-top: 30px;  /* biar gak ketumpuk logo */
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 20px;
        }
        .header-left { justify-content: flex-start; }
        .header-center { justify-content: center; }
        .header-right { justify-content: flex-end; }

        .btn-kembali {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f5f6fa;
            color: #fffefeff;
            font-size: 18px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn-kembali:hover {
            background-color: #29a96f;
        }
        .btn-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ade0adff;
            color: #003f01ff;
            font-size: 18px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn-icon:hover {
            background-color: #29a96f;
            color: #fff;
        }


        body {
        font-family: "Lato", Arial, sans-serif;
        position: relative;        /* penting biar ::before/::after muncul */
        min-height: 100vh;
        margin: 0;
         background: linear-gradient(120deg, #e8f5e9 0%, #d7e7d7 40%, #daf2db 100%);
        overflow-x: hidden;
        }

        .container {
            max-width: 1300px;
            margin: 40px auto;
            padding: 30px;
        }
        h2 {
            font-size: 2rem;
	        color: #006a02;
            font-weight: bold;
            margin: 0;
            text-align: center;
        }

        .swiper {
            max-width: 1400px;
            margin: 0 auto;
            padding-bottom: 40px;
        }
        .swiper-wrapper {
            align-items: stretch;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: stretch;
        }

        .promo-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            width: 420px;
            height: 420px;
            display: block;
            position: relative;
            overflow: hidden;
            transition: box-shadow 0.2s;
            text-decoration: none;
            color: inherit;
        }
        .promo-card:hover {
            box-shadow: 0 8px 32px rgba(0,0,0,0.14);
        }
        .promo-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .promo-title {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5); /* overlay menutupi penuh */
            color: #ffffffff;
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        @media (max-width: 1100px) {
            .swiper { max-width: 98vw; }
            .promo-card { width: 95vw; height: 340px; }
        }

        @media (max-width: 600px) {
            .promo-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
                justify-items: center;
            }
            .promo-card {
                width: 95%;
                margin: 0 auto;
            }
        }

        footer {
            text-align: center;
            padding: 16px;
            background: #c5eec7;
            color: #000000;
            font-size: 14px;
            margin-top: 40px;
            border-radius: 12px 12px 0 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
<header class="header-top">
    <div class="header-left">
        <img src="<?= base_url('assets/icons/sakinah_logo.png'); ?>" class="logo" alt="Logo Sakinah Mart">
    </div>
</header>
    <div class="container">
        <div class="header-bar">
            <div class="header-col header-left"></div>
            <div class="header-col header-center">
                <h2><?= $kategori->nama_kategori; ?></h2>
            </div>
            <div class="header-col header-right">
                <a href="<?= site_url('user'); ?>" class="btn-icon btn-kembali">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($flyer as $item): ?>
                <div class="swiper-slide">
                    <a href="<?= site_url('user/flyer/'.$item->id_flyer); ?>" class="promo-card">
                        <img src="<?= base_url('uploads/flyer/'.$item->gambar); ?>" alt="<?= $item->nama_flyer; ?>">
                        <div class="promo-title"><?= $item->nama_flyer; ?></div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 40,
            centeredSlides: true,
            speed: 800,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            breakpoints: {
                0: { // untuk layar <=600px
                    slidesPerView: 1,
                    spaceBetween: 16,
                    centeredSlides: true
                },
                601: { // untuk layar >600px
                    slidesPerView: 3,
                    spaceBetween: 40,
                    centeredSlides: true
                }
            }
        });
    </script>

    <footer>
    <p>© Copyright IT Team RSIS 2025. All Rights Reserved.</p>
    </footer>

</body>
</html>
