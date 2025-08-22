<!DOCTYPE html>
<html>
<head>
    <title><?= $kategori->nama_kategori; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }
        .header-col {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
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
            width: 34px;
            height: 34px;
            border-radius: 50%;
            color: #000000ff;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.2s;
        }
        .btn-icon:hover {
            background: #29a96f;
            color : #ffffffff;
        }


        body {
	        background: linear-gradient(135deg, #f5f5f5, #e8f5e9);
            font-family: 'Lato', Arial, sans-serif;
        }
        .container {
            max-width: 1300px;
            margin: 40px auto;
            padding: 30px;
        }
        h2 {
            font-size: 1.50rem;
            color: #2e7d32;;
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
    </style>
</head>
<body>
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
</body>
</html>
