<?php
include '../koneksi.php';

if (isset($_POST["submit"])) {
    $jumlah = $_POST["jumlah"];
    $id = $_POST["id"];
    $query = mysqli_query($db, "SELECT * FROM products WHERE ProductID='$id'");
    $data = mysqli_fetch_array($query);
    $harga = $data["UnitPrice"];
    $total = $jumlah * $harga;
    $query = mysqli_query($db, "INSERT INTO Keranjang (ProdukId,banyakBarang,subtotal) VALUES ('$id','$jumlah','$total')");



    header("location:../index.php?page=keranjang");
}
