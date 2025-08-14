<!DOCTYPE html>
<html>
<head>
    <title><?= $flyer->nama_flyer; ?></title>
</head>
<body>
  <a href="<?= site_url('user/promo/'.$id_kategori); ?>" class="btn btn-secondary mb-3">Kembali</a>
    <h2><?= $flyer->nama_flyer; ?></h2>
    <img src="<?= base_url('uploads/flyer/'.$flyer->gambar); ?>" width="500">
</body>
</html>
