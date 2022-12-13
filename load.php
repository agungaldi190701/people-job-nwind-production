 <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'Dashboard':
                include "content/kategori.php";
                break;
            case 'Product':
                include "content/product/product.php";
                break;
            case 'keranjang':
                include "content/keranjang.php";
                break;
            default:
                echo "<center><h3>Maaf. content tidak di temukan !</h3></center>";
                break;
        }
    } elseif (isset($_GET['id'])) {
        include "content/product/productId.php";
    } elseif (isset($_GET['product'])) {
        include "content/product/productId_.php";
    } else {
        include "content/kategori.php";
    }


    ?>