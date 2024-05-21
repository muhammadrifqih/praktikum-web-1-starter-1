<row id="top" class="mb-3">
    <div class="col">
        <h3>Hapus Data Karyawan</h3>
    </div>
    <div class="col">
        <a href="?page=karyawan" class="btn btn-primary fload-end">
            <i class="fa fa-arrow-circle-left"></i>
            Kembali
        </a>
    </div>
</row>
<row id="pesan" class="mb-3">
    <div class="col">
        <?php 
        include "database/connection.php";
        $nik = $_GET['nik'];
        $sql = "DELETE FROM karyawan WHERE nik=$nik";
        $result = mysqli_query($connection, $sql);
        if (!$result) {
        ?>
        <div class="alert alert-danger" role="alert">
                <i class="fa fa-exclamation-circle"></i>
               <?php echo mysqli_error($connection) ?>
                </div>
        <?php 
        } else {
        ?>

<div class="alert alert-success" role="alert">
                <i class="fa fa-check-circle"></i>
                Hapus data berhasil
                <meta http-equiv='refresh' content="2;url=?page=karyawan">
                </div>
        <?php 
        }
        ?>
         
    </div>
</row>