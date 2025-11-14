<?php
include "../koneksi.php";
if (!isset($_GET['id'])) {
    header("Location: index.php?page=mpk");
    exit;
}

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mpk WHERE id_mpk=$id"));

if (isset($_POST['update'])) {
     $id_siswa = $_POST['id_siswa'];
     $id_kelas = $_POST['id_kelas'];
      $username = $_POST['username'];

    mysqli_query($koneksi, "UPDATE mpk SET id_kelas='$id_kelas',id_siswa ='$id_siswa',username = '$username' WHERE id_mpk=$id");
    header("Location: index.php?page=mpk&pesan=edit");
    exit;
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-5">
    <h2 class="mb-4">Ubah Data mpk</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Nama siswa</label>
            <select name="id_siswa" class="form-select" required>
                <option value="">-- Pilih siswa --</option>
                <?php 
                    $siswa = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nama_siswa ASC");
                    while ($row = mysqli_fetch_assoc($siswa)) { ?>
                    <option value="<?= $row['id_siswa']; ?>">
                        <?= $row['nama_siswa']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">kelas</label>
            <select name="id_kelas" class="form-select" required>
                <option value="">-- Pilih kelas --</option>
                <?php 
                    // ambil data guru
                    $kelas = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY nama_kelas ASC");
                    while ($row = mysqli_fetch_assoc($kelas)) { ?>
                    <option value="<?= $row['id_kelas']; ?>">
                        <?= $row['nama_kelas']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
         <div class="mb-3">
            <label class="form-label">username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="index.php?page=jurusan" class="btn btn-secondary">Kembali</a>
    </form>
</div>