<!DOCTYPE html>
<html>

<head>
 <title>Edit Flyer</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/tambah_promo.css'); ?>">
</head>

<body class="p-4">
 <div class="container">
  <h2>Edit Flyer</h2>

  <?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>

  <?= form_open_multipart('admin/edit/' . $flyer->id_flyer); ?>
  
  <div class="form-group mb-2">
   <label>Judul Promo</label>
   <input type="text" name="nama_flyer" class="form-control" value="<?= $flyer->nama_flyer; ?>" required>
  </div>

  <!-- ✅ Tambah Deskripsi -->
  <div class="form-group mb-2">
   <label>Deskripsi</label>
   <textarea name="deskripsi" class="form-control" rows="4" required><?= $flyer->deskripsi; ?></textarea>
  </div>
  <!-- ✅ End Deskripsi -->

  <div class="form-group mb-2">
   <label>Kategori</label>
   <select name="id_kategori" class="form-control" required>
    <option value="">-- Pilih Kategori --</option>
    <?php foreach ($kategori as $k): ?>
    <option value="<?= $k->id_kategori; ?>" <?= ($flyer->id_kategori == $k->id_kategori) ? 'selected' : ''; ?>>
     <?= $k->nama_kategori; ?>
    </option>
    <?php endforeach; ?>
   </select>
  </div>

  <div class="form-group mb-2">
   <label>Flyer</label><br>
   <?php if ($flyer->gambar): ?>
   <img src="<?= base_url('uploads/flyer/' . $flyer->gambar); ?>" width="100" class="mb-2">
   <?php endif; ?>
   <input type="file" name="gambar" class="form-control">
  </div>

  <div class="form-group mb-2">
   <label>Tanggal Mulai</label>
   <input type="date" name="tgl_mulai" class="form-control" value="<?= $flyer->tgl_mulai; ?>" required>
  </div>

  <div class="form-group mb-2">
   <label>Tanggal Selesai</label>
   <input type="date" name="tgl_selesai" class="form-control" value="<?= $flyer->tgl_selesai; ?>" required>
  </div>

  <div class="form-group mb-3">
   <label>Status</label>
   <select name="status" class="form-control">
    <option value="Aktif" <?= ($flyer->status == 'Aktif') ? 'selected' : ''; ?>>Aktif</option>
    <option value="Tidak Aktif" <?= ($flyer->status == 'Tidak Aktif') ? 'selected' : ''; ?>>Tidak Aktif</option>
   </select>
  </div>

  <br><br>
  <div class="form-actions">
    <button type="submit" class="btn btn-success">Update</button>
    <a href="<?= site_url('admin'); ?>" class="btn btn-cancel">Batal</a>
  </div>
  <?= form_close(); ?>
 </div>
 
</body>
</html>
