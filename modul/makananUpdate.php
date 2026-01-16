<?php
include "includes/config.php";

// ambil id dari URL
$id = $_GET['id'];

// jika tombol update diklik
if (isset($_POST['update'])) {
    $nama_makanan   = $_POST['nama_makanan'];
    $daerah_makanan = $_POST['daerah_makanan'];
    $keterangan     = $_POST['keterangan'];

    $query = "UPDATE tbl_makanan SET 
                nama_makanan='$nama_makanan',
                daerah_makanan='$daerah_makanan',
                keterangan='$keterangan'
              WHERE id_makanan=$id";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='?page=makanan';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate!'); window.location='?page=makanan';</script>";
    }
}

// ambil data lama
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
?>

<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Update Data Makanan</h5>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Nama Makanan</label>
                            <input type="text" class="form-control" name="nama_makanan"
                                   value="<?= $data['nama_makanan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Daerah Makanan</label>
                            <input type="text" class="form-control" name="daerah_makanan"
                                   value="<?= $data['daerah_makanan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan"
                                   value="<?= $data['keterangan']; ?>">
                        </div>

                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            <p></p>
                            <a href="?page=makanan" class="btn btn-secondary mx-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
