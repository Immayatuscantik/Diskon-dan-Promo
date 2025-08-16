<!DOCTYPE html>
<html>

<head>
 <title>Tambah Kategori</title>
 <link rel="stylesheet" href="<?= base_url('assets/css/tambah_kategori.css') ?>">
</head>

<body>
  <form method="post">
  <h2>Tambah/Edit Kategori</h2>
  <label>Nama Kategori</label>
  <input type="text" name="nama_kategori" required>
    <label>Nomor Urut</label>
    <input type="number" name="nomor_urut" required>
  <br><br>
   <label>Status</label>
   <select name="status" class="form-control">
    <option value="Aktif">Aktif</option>
    <option value="Tidak Aktif">Tidak Aktif</option>
   </select>
  <button type="submit">Simpan</button>
  <a href="<?= site_url('kategori'); ?>" class="btn btn-secondary">Batal</a>
  </select>
  <br><br>
  <?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>
 </form>
</body>

</html>