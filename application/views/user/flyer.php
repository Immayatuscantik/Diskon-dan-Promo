<!DOCTYPE html>
<html>
<head>
    <title><?= $flyer->nama_flyer; ?></title>
</head>
<body>
    <h2><?= $flyer->nama_flyer; ?></h2>
    <img src="<?= base_url('uploads/flyer/'.$flyer->gambar); ?>" width="500">
</body>
</html>
