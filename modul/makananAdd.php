<?php

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['submit'])) {

    // ambil data dari formulir
    $nama_minuman = $_POST['nama_makanan'];
    $daerah_minuman = $_POST['daerah_makanan'];
    $keterangan = $_POST['keterangan'];

    // buat query
    $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan, keterangan) VALUE ('$nama_makanan', '$daerah_makanan', '$keterangan')";
    $sql = mysqli_query($conn, $query);

    // apakah proses simpan berhasil?
    if ($sql) {
        echo "<script>window.alert('Data berhasil ditambah!'); window.location='?page=makanan';</script>";
    } else {
        echo "<script>window.alert('Gagal menambah data!'); window.location='?page=makanan';</script>";
    }
}
?>

<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Tambah Data Daftar makanan</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="row">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama Makanan</label>
                                <input type="text" class="form-control" name="nama_makanan">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Daerah makanan</label>
                                <input type="text" class="form-control" name="daerah_makanan">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput3" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mx-0" style="width: 6em; height:2.4em">Submit</button>
                            <input class="btn btn-warning mx-2" type="reset" value="Reset" style="width: 6em; height:2.4em">
                            <a class="btn btn-primary" href="?page=makanan" role="button" style="width: 6em; height:2.4em">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>