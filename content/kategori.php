<!-- /.card -->
<h4 class="card-title">Data Kategori</h4>
<!-- <a href="index.php?page=Tambah Movie" class="btn btn-primary float-right">Tambah Buku <i class="fa fa-plus"></i></a> -->
<!-- /.card-header -->
<table border="1" id="example">
    <thead>
        <tr>
            <th width="8px">No</th>
            <th>Kategori ID</th>
            <th>Kategori</th>
            <th>Deskripsi</th>

        </tr>
    </thead>
    <tbody>
        <?php

        $query = mysqli_query($db, "SELECT * FROM categories");

        $no = 1;

        ?>
        <?php while ($data = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['CategoryID'] ?></td>
                <td><a href="index.php?id=<?php echo $data['CategoryID'] ?>"><?php echo $data['CategoryName'] ?></a></td>
                <td><?php echo $data['Description'] ?></td>

            </tr>

        <?php } ?>


    </tbody>
</table>