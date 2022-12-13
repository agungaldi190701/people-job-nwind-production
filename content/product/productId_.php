<?php
if (isset($_GET['product']) && $_GET['product'] != '') {
    $product = $_GET['product'];

?>

    <!-- /.card -->
    <h4 class="card-title">Detail Produk</h4>
    <!-- <a href="index.php?page=Tambah Movie" class="btn btn-primary float-right">Tambah Buku <i class="fa fa-plus"></i></a> -->
    <!-- /.card-header -->
    <a href="<?= $previous ?>">Back</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th width="8px">No</th>
                <th>ProductID</th>
                <th>ProductName</th>
                <th>SupplierID</th>
                <th>CategoryID</th>
                <th>QuantityPerUnit</th>
                <th>UnitPrice</th>
                <th>UnitsInStock</th>
                <th>UnitsOnOrder</th>
                <th>ReorderLevel</th>
                <th>Discontinued</th>

            </tr>
        </thead>
        <tbody>
            <?php


            $query = mysqli_query($db, "SELECT * FROM products WHERE ProductID='$product'");

            $no = 1;

            ?>
            <?php while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['ProductID'] ?></td>
                    <td>
                        <?php echo $data['ProductName'] ?>
                    </td>
                    <td><?php echo $data['SupplierID'] ?></td>
                    <td><?php echo $data['CategoryID'] ?></td>
                    <td><?php echo $data['QuantityPerUnit'] ?></td>
                    <td><?php echo $data['UnitPrice'] ?></td>
                    <td><?php echo $data['UnitsInStock'] ?></td>
                    <td><?php echo $data['UnitsOnOrder'] ?></td>
                    <td><?php echo $data['ReorderLevel'] ?></td>
                    <td><?php echo $data['Discontinued'] ?></td>

                </tr>
                <form action="query/tambah.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['ProductID'] ?>">
                    <input type="text" name="jumlah" id="" placeholder="Masukan Jumlah">
                    <input type="submit" name="submit" value="Bayar">
                </form>

            <?php } ?>


        </tbody>
    </table>

<?php } ?>