    <!-- /.card -->
    <h4 class="card-title">Data Yang ada di Keranjang</h4>

    <!-- /.card-header -->
    <a href="<?= $previous ?>">Back</a>
    <br><br>
    <table border="1" id="example">
        <thead>
            <tr>
                <th width="8px">No</th>

                <th>ProductName</th>
                <th>Jumlah Barang</th>
                <th>SubTotal</th>



            </tr>

        </thead>
        <tbody>
            <?php


            $query = mysqli_query($db, "SELECT * FROM keranjang INNER JOIN products ON keranjang.ProdukId=products.ProductID");

            $no = 1;

            ?>
            <?php while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>

                    <td>
                        <?php echo $data['ProductName'] ?>
                    </td>
                    <td><?php echo $data['banyakBarang'] ?></td>
                    <td>Rp.<?php echo $data['subtotal'] ?>,-</td>



                </tr>




            <?php } ?>


        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total</th>
                <th>
                    <?php
                    $query = mysqli_query($db, "SELECT SUM(subtotal) AS total FROM keranjang");
                    $data = mysqli_fetch_array($query);
                    echo "Rp." . $data['total'] . ",-";
                    ?>
                </th>
            </tr>
        </tfoot>
    </table>