<row id="top" class="mb-3">
    <div class="col">
        <h3>Hapus Data Bagian</h3>
    </div>
    <div class="col">
        <a href="?page=bagian" class="btn btn-primary fload-end">
            <i class="fa fa-arrow-circle-left"></i>
            Kembali
        </a>
    </div>
</row>
<row id="pesan" class="mb-3">
    <div class="col">
        <?php 
        include "database/connection.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM bagian WHERE id=$id";
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
               <?php echo $sql ?>
                </div>
        <?php 
        }
        ?>
         
    </div>
</row>