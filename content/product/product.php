<!-- /.card -->
<h4 class="card-title">Data Produk</h4>
<!-- <a href="index.php?page=Tambah Movie" class="btn btn-primary float-right">Tambah Buku <i class="fa fa-plus"></i></a> -->
<!-- /.card-header -->
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


        $query = mysqli_query($db, "SELECT * FROM products ");

        $no = 1;

        ?>
        <?php while ($data = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['ProductID'] ?></td>
                <td>
                    <a href="productId_.php?id=<?php echo $data['ProductID'] ?>"><?php echo $data['ProductName'] ?></a>
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




        <?php } ?>


    </tbody>
</table>