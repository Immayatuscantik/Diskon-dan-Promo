<!DOCTYPE html>
<html>

<head>
 <title>Tambah Flyer</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/tambah_promo.css'); ?>">
</head>

<body class="p-4">
 <div class="container">
  <h2>Tambah/Edit Promo</h2>

  <?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>

  <?= form_open_multipart('admin/tambah'); ?>
  <div class="form-group mb-2">
   <label>Judul Promo</label>
   <input type="text" name="nama_flyer" class="form-control" required>
  </div>

  <div class="form-group mb-2">
   <label>Kategori</label>
   <select name="id_kategori" class="form-control" required>
    <option value="">-- Pilih Kategori --</option>
    <?php foreach ($kategori as $k): ?>
    <option value="<?= $k->id_kategori; ?>"><?= $k->nama_kategori; ?></option>
    <?php endforeach; ?>
   </select>
  </div>

  <div class="form-group mb-2">
   <label>Flyer</label>
   <input type="file" name="gambar" class="form-control" required>
  </div>

  <div class="form-group mb-2">
   <label>Tanggal Mulai</label>
   <input type="date" name="tgl_mulai" class="form-control" required>
  </div>

  <div class="form-group mb-2">
   <label>Tanggal Selesai</label>
   <input type="date" name="tgl_selesai" class="form-control" required>
  </div>

  <div class="form-group mb-3">
   <label>Status</label>
   <select name="status" class="form-control">
    <option value="Aktif">Aktif</option>
    <option value="Tidak Aktif">Tidak Aktif</option>
   </select>
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="<?= site_url('flyer'); ?>" class="btn btn-secondary">Batal</a>
  <?= form_close(); ?>
 </div>
</body>

</html>