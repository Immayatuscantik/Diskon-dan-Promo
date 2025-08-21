<!DOCTYPE html>
<html>

<head>
    <title>Kelola Promo dan Diskon</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/promo.css'); ?>">
</head>

<body class="p-4">
    <div class="sidebar">
        <ul>
            <li><a href="<?= site_url('kategori'); ?>">Kategori</a></li>
            <li><a href="<?= site_url('admin'); ?>" class="active">Promo</a></li>
        </ul>
    </div>

    <div class="container">
        <h2>Kelola Promo dan Diskon</h2>
        <a href="<?= site_url('admin/tambah'); ?>" class="btn btn-primary" style="margin-bottom:16px;display:inline-block;">+ Tambah</a>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Promo</th>
                    <th>Deskripsi</th> <!-- ✅ Tambah kolom deskripsi -->
                    <th>Kategori</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Status</th>
                    <th>Flyer</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($flyers)): ?>
                    <?php $no = 1; foreach ($flyers as $f): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $f->nama_flyer; ?></td>
                            <td><?= $f->deskripsi; ?></td> <!-- ✅ tampilkan deskripsi -->
                            <td><?= $f->nama_kategori; ?></td>
                            <td><?= $f->tgl_mulai; ?></td>
                            <td><?= $f->tgl_selesai; ?></td>
                            <td>
                                <?php if ($f->status == 'aktif'): ?>
                                    <span style="color:green;font-weight:bold;"> Aktif</span>
                                <?php else: ?>
                                    <span style="color:red;font-weight:bold;"> Tidak Aktif</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (!empty($f->gambar)): ?>
                                    <img src="<?= base_url('uploads/flyer/' . $f->gambar); ?>" width="80">
                                <?php else: ?>
                                    <span class="text-muted">Tidak ada gambar</span>
                                <?php endif; ?>
                            </td>
                            <td class="aksi-cell">
                                <a href="<?= base_url('index.php/admin/hapus/'.$f->id_flyer) ?>" onclick="return confirm('Yakin ingin menghapus promo ini?');" class="aksi-btn">
                                    <img src="<?= base_url('assets/icons/trash.png'); ?>" alt="Hapus" width="44" height="44">
                                </a>
                                <span class="aksi-separator"></span>
                                <a href="<?= base_url('index.php/admin/edit/'.$f->id_flyer) ?>" class="aksi-btn">
                                    <img src="<?= base_url('assets/icons/edit.png'); ?>" alt="Edit" width="44" height="44">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data flyer</td> <!-- ✅ colspan jadi 9 -->
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
