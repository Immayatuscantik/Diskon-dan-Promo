<!DOCTYPE html>
<html>
<head>
    <title><?= $promo->flyer; ?></title>
</head>
<body>
    <h2><?= $promo->flayer; ?></h2>
    <img src="<?= base_url('uploads/flyer/'.$flyer->gambar); ?>" width="500">
    <p><?= $flyer->deskripsi; ?></p>
</body>
</html>
