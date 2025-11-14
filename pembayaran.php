<?php
include "../koneksi.php";

// --- Cek apakah ada pencarian ---
$cari = "";
if (isset($_GET['cari']) && $_GET['cari'] != "") {
    $cari = $_GET['cari'];

    $result = mysqli_query($koneksi, "SELECT * FROM pembayaran
                                        JOIN siswa ON pembayaran.id_siswa = siswa.id_siswa 
                                        JOIN pegawai ON pembayaran.id_pegawai = pegawai.id_pegawai
                                        WHERE (nama_siswa LIKE '%$cari%'
                                        ORDER BY id_pembayaran DESC"); 
} else { 
    $result = mysqli_query($koneksi, "SELECT * FROM pembayaran,siswa,pegawai 
                                        WHERE pembayaran.id_siswa=siswa.id_siswa
                                        AND pembayaran.id_pegawai=pegawai.id_pegawai 
                                        ORDER BY id_pembayaran DESC"); }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-3">
    <h2 class="mb-3 text-center">👨‍🎓 Data pembayaran</h2>

    <!-- Notifikasi -->
    <?php if (isset($_GET['pesan'])): ?>
        <div class="alert alert-success alert-dismissible fade show">
            <?php 
            if ($_GET['pesan'] == 'tambah') echo "✅ Data pembayaran berhasil ditambahkan!";
            if ($_GET['pesan'] == 'edit') echo "✅ Data pembayaran berhasil diperbaharui!";
            if ($_GET['pesan'] == 'hapus') echo "✅ Data pembayaran berhasil dihapus!";
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <!-- Pencarian + Tombol Tambah -->
    <div class="d-flex justify-content-between mb-3">
        <form class="d-flex" method="get" action="">
            <input type="hidden" name="page" value="pembayaran">
            <input class="form-control me-2" type="search" name="cari" placeholder="Cari pembayaran...." value="<?= htmlspecialchars($cari) ?>">
            <button class="btn btn-outline-primary" type="submit">Cari</button>
        </form>
        <a href="pembayaran_tambah.php" class="btn btn-primary">+ Tambah pembayaran</a>
    </div>

    <!-- Tabel Data Ringkas -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal Pembayaran</th>
                    <th>bulan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1; 
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>

                        <td><?= htmlspecialchars($row['nama_siswa']) ?></td>
                        <td><?= htmlspecialchars($row['tgl_pembayaran']) ?></td>
                        <td><?= htmlspecialchars($row['bulan']) ?></td>
                        <td>
                            <button 
                                class="btn btn-info btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#detailModal<?= $row['id_siswa'] ?>">
                                🔍 Detail
                            </button>
                        </td>
                    </tr>

                    <!-- Modal Detail -->
                    <div class="modal fade" id="detailModal<?= $row['id_siswa'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title">Detail Siswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body text-start">
                                    <p><strong>Nama:</strong> <?= htmlspecialchars($row['nama_siswa']) ?></p>
                                    <p><strong>Tanggal pembayaran:</strong> <?= htmlspecialchars($row['tgl_pembayaran']) ?></p>
                                    <p><strong>Bulan:</strong> <?= htmlspecialchars($row['bulan']) ?></p>
                                    <p><strong>Nominal:</strong> <?= htmlspecialchars($row['metode']) ?></p>
                                    <p><strong>Metode:</strong> <?= htmlspecialchars($row['telp']) ?></p>
                                    <p><strong>Nama Pegawai:</strong> <?= htmlspecialchars($row['nama_pegawai']) ?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="pembayaran_edit.php?id=<?= $row['id_siswa'] ?>" class="btn btn-warning">✏️ Edit</a>
                                    <a href="pembayaran_hapus.php?id=<?= $row['id_siswa'] ?>" 
                                       class="btn btn-danger"
                                       onclick="return confirm('Yakin ingin menghapus pembayaran ini?')">🗑️ Hapus</a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php } 
            } else { ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">⚠️ Data tidak ditemukan</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
