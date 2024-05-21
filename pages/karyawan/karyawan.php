<?php 
    include "database/connection.php";
?>

<div class="container-fluid px-4">
    <div class="row">
        <div class="col">
            <h3>Karyawan</h3>
        </div>
        <div class="col">
            <a href="?page=karyawantambah" class="btn btn-success float-end">
                <i class="fa fa-plus-circle"></i>
                Tambah</a>
            </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <?php 
            $selectSQL = "SELECT * FROM karyawan";
            $result = mysqli_query($connection,$selectSQL);
            if (!$result) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo mysqli_error($connection) ?>
            </div>
        <?php 
        return;
            }
            if (mysqli_num_rows($result)==0) {
                ?>
                <div class="alert alert-light" role="alert">
                    Data Kosong
                </div>
                <?php 
                return;
            }
            ?>
        
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th class="col-1 " width="50">NIK</th>
                        <th class="col">Nama Karyawan</th>
                        <th class="col-2 ">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {        
                   ?>
                   <tr class="align-middle">
                    <td>
                        <?php echo $row["nik"]?>
                    </td>
                    <td>
                        <?php echo $row["nama"] ?>
                    </td>
                    <td class="text-end">
                        <a href="?page=karyawanubah&nik=<?php echo $row['nik'] ?>" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                            Ubah
                        </a>
                        <a href="?page=karyawanhapus&nik=<?php echo $row['nik'] ?>" onclick="javascript: return config('Konfirmasi data akan dihapus?');" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Hapus
                        </a>
                    </td>
                   </tr>
                    <?php 
                    } 
                    ?>

                </tbody>
            </table>
        </div>
    </div>

</div>