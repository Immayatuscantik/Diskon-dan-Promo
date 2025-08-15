<!DOCTYPE html>
<html>
<head>
    <title>Kelola Kategori</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/kategori.css'); ?>">
</head>
<body class="p-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="<?= site_url('kategori'); ?>" class="active">Kategori</a></li>
            <li><a href="<?= site_url('admin'); ?>">Promo</a></li>
        </ul>
    </div>

    <!-- Konten -->
    <div class="container">
        <h2>Kelola Kategori</h2>
        <a href="<?= site_url('kategori/tambah'); ?>" class="btn btn-primary mb-3">+ Tambah</a>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nomor Urut</th>
                    <th>Status</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($kategori)) : ?>
                    <?php $no = 1; foreach ($kategori as $row) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->nama_kategori ?></td>
                            <td><?= $row->nomor_urut ?></td>
                            <td><?= $row->status; ?></td>
                            <td>
                                <a href="<?= site_url('kategori/edit/'.$row->id_kategori) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= site_url('kategori/hapus/'.$row->id_kategori) ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?');" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center">Data tidak ada</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
