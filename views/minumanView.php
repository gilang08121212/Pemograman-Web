<div class="card card-primary card-outline">
        
    <div class="card-header">
        <h5 class="float-start mt-2 fw-bold">Daftar Minuman Tradisional</h5>
        <div class="float-end mt-2">
            <a title="Tambah data" href="?page=minumanAdd" class="btn btn-sm btn-success"> Tambah Data</a>
        </div>
    </div>

    <div class="card-body">
        <table id="example" class="table table-striped table-hover" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center" style="padding-bottom: 25px;">No.</th>
                    <th class="text-center" style="padding-bottom: 25px;">Nama Minuman</th>
                    <th class="text-center" style="padding-bottom: 25px;">Asal Daerah</th>
                    <th class="text-center" style="padding-bottom: 25px;">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman 
                    ASC";
                    $sql = mysqli_query($conn, $query);
                    $nomor = 1;
                    foreach ($sql as $val) {
                    ?>

                        <td class="text-center" style="padding-left: 20px; padding-right: 20px;"><?= $nomor++; ?></td>
                        <td class="text-align justify" style="padding-left: 50px; padding-right: 50px;"><?= $val['nama_minuman']; ?></td>
                        <td class="text-align justify" style="padding-left: 50px; padding-right: 50px;"><?= $val['daerah_minuman']; ?></td>
                        <td class="text-align justify" style="padding-left: 30px; padding-right: 30px;"><?= $val['keterangan']; ?></td>
                        <td class="text-center">
                            <a href="?page=minumanUpdate&id=<?=$val['id_minuman']; ?>" class="btn btn-sm btn-warning">
                                Update</a>
                            <a href="?page=minumanDelete&id=<?=$val['id_minuman']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?');">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            
        </table>
    </div>
</div>