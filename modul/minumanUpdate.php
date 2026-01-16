<?php
include "includes/config.php";

// ambil id dari URL
$id = $_GET['id'];

// cek apakah tombol update diklik
if (isset($_POST['update'])) {

    $nama_minuman   = $_POST['nama_minuman'];
    $daerah_minuman = $_POST['daerah_minuman'];
    $keterangan     = $_POST['keterangan'];

    $query = "UPDATE tbl_minuman SET
                nama_minuman   = '$nama_minuman',
                daerah_minuman = '$daerah_minuman',
                keterangan     = '$keterangan'
              WHERE id_minuman = $id";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='?page=minuman';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate!'); window.location='?page=minuman';</script>";
    }
}

// ambil data lama berdasarkan id
$query = "SELECT * FROM tbl_minuman WHERE id_minuman = $id";
$sql   = mysqli_query($conn, $query);
$data  = mysqli_fetch_assoc($sql);
?>

<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Update Data Minuman</h5>
                </div>
                <div class="card-body">
                    <form method="post">

                        <div class="mb-3">
                            <label class="form-label">Nama Minuman</label>
                            <input type="text" class="form-control" name="nama_minuman"
                                   value="<?= $data['nama_minuman']; ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Daerah Minuman</label>
                            <input type="text" class="form-control" name="daerah_minuman"
                                   value="<?= $data['daerah_minuman']; ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan"
                                   value="<?= $data['keterangan']; ?>">
                        </div>

                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                           <p></p>
                            <a href="?page=minuman" class="btn btn-secondary mx-2">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
