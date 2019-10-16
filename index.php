<?php require 'aplications/controllers/functions.php';?>

<!DOCTYPE html>
<html lang="en">
<?php require 'akses/header.php';?>
<body id="page-top">
    <div id="wrapper">
        <?php require 'akses/navbar_left.php';?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php require 'akses/navbar_top.php';?>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="tambah-data.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Tambah Data</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <?php $no=1;?>
                        <?php
                            if(mysqli_num_rows($barang)){
                                while($bar=mysqli_fetch_assoc($barang)){
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $no;?></th>
                                <td><?= $bar["kd_barang"];?></td>
                                <td><?= $bar["nm_barang"];?></td>
                                <td><?= $bar["harga"];?></td>
                            </tr>
                        </tbody>
                        <?php $no++?>
                        <?php }}?>
                    </table>
                </div>
            <?php require 'akses/footer.php';?>
</body>
</html>