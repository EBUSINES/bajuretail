<?php 
session_start();
include '../header.php';
require '../Item.php';
if ($_GET['id']) {
    header("location: order.php");
    // menangani URL 
}

?>
<div class="container order">
    <h1 class="order">Order Detail</h1>
        <?php 
        if (isset($_GET['id']) && !isset($_POST['update']) ) {
            $id     = $_GET['id'];
            $sql    = "SELECT * FROM `produk` WHERE id_produk = $id";
            $query  = mysqli_query($conn,$sql);
            $produk = mysqli_fetch_object($query);
            $item   = new Item();
            $item->id_produk    =   $produk->id_produk;
            $item->nama_produk  =   $produk->nama_produk;
            $item->size_produk  =   $produk->size_produk;
            $item->harga        =   $produk->harga;
            $itemstock          =   $produk->jumlah_produk;
            $item->jumlah_produk=   1;
            
            // cek produk ada di cart
            $index = -1;
            $cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
            for($i=0; $i<count($cart);$i++)
                if ($cart[$i]->id_produk == $_GET['id']){
                    $index = $i;
                    break;
                }
                if($index == -1) 
                    $_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
                else {
                    
                    if (($cart[$index]->jumlah_produk) < $itemstock)
                        $cart[$index]->jumlah_produk ++;
                        $_SESSION['cart'] = $cart;
                }
        }
        // delete
        if(isset($_GET['index']) && !isset($_POST['update'])) {
            $cart = unserialize(serialize($_SESSION['cart']));
            unset($cart[$_GET['index']]);
            $cart = array_values($cart);
            $_SESSION['cart'] = $cart;
        }
        if(isset($_POST['update'])) {
            $arrQuantity = $_POST['quantity'];
            $cart = unserialize(serialize($_SESSION['cart']));
            for($i=0; $i<count($cart);$i++) {
                $cart[$i]->jumlah_produk = $arrQuantity[$i];
            }
            $_SESSION['cart'] = $cart;
        }
        ?>
        <form action="" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $cart = unserialize(serialize($_SESSION['cart']));
                    $total = 0;
                    $index = 0;
                    $nom = 1;
                    for($i=0; $i<count($cart); $i++){
                        $total += $cart[$i]->harga * $cart[$i]->jumlah_produk;
                    ?>	
                    <tr>
                        <th scope="row"><?= $nom++; ?></th>
                        <td><?php echo $cart[$i]->nama_produk; ?></td>
                        <td><?php echo $cart[$i]->harga; ?></td>
                        <td><?php echo $cart[$i]->jumlah_produk; ?></td>
                        <td>
                            <a href="<?= BASE_URL ?>/view/order.php?index=<?php echo $index; ?>" class="badge badge-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash fa-1"></i> Hapus</a>
                        </td>
                        <?php 
                        $index++;
                        } ?>
                    </tr>
                    <?php
                    if ($total == 0) { ?>
                    <tr>
                        <td colspan="1"></td>
                        <th colspan="3"><i>Tidak ada item , silahkan belanja terlebih dahulu</i></th>
                    </tr>
                    <?php }else {?>
                    <tr>
                        <td colspan="1"></td>
                        <th colspan="3">Total Pembayaran</th>
                        <td><b>Rp. <?php echo $total; ?></b></td>
                    </tr>
                    <?php }
                    ?>
                    
                </tbody>
            </table>
            <a class="btn btn-info" href="<?= BASE_URL ?>" role="button"><i class="fa fa-arrow-left"></i> Continue Shopping</a>
            <a class="btn btn-success" href="<?= BASE_URL ?>/view/payment.php" role="button">Payment <i class="fa fa-arrow-right"></i></a>
        </form>
</div>
<?php 
include '../footer.php';
?>