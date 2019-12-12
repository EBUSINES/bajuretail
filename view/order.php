<?php 
session_start();
include '../header.php';
?>
<div class="container" style="margin-top:8%;">
    <!-- <div class="row"> -->
        <?php 
        require '../Item.php';

        // if (!$_GET['id']) {
        //     header("location: ../index.php");
        //     // jika tidak ada id yang di passing
        // }
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
        <form action="POST">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">id baramg</th>
                <th scope="col">Nama brg</th>
                <th scope="col">harga</th>
                <th scope="col">jumlah</th>
                <th scope="col">subtotal</th>
                <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php 
                $cart = unserialize(serialize($_SESSION['cart']));
                $s = 0;
                $index = 0;
                for($i=0; $i<count($cart); $i++){
                    $s += $cart[$i]->harga * $cart[$i]->jumlah_produk;
                ?>	
                <tr>
                <th scope="row">#</th>
                <td> <?php echo $cart[$i]->nama_produk; ?></td> 
                <td> <?php echo $cart[$i]->harga; ?></td> 
                <td> <?php echo $cart[$i]->jumlah_produk; ?></td> 
                <td> <?php echo $cart[$i]->nama_produk; ?></td> 
                <td><a href="<?= BASE_URL ?>/view/order.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a></td>
                </tr>
                <?php 
                    $index++;
                } ?>
                <tr>
 		<td colspan="5" style="text-align:right; font-weight:bold">Sum 
         <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button">
         <input type="hidden" name="update">
 		</td>
 		<td> <?php echo $s; ?> </td>
 	</tr>
            </tbody>
            </table>
        </form>
    <!-- </div> -->
</div>
<?php 
if(isset($_GET["id"]) && isset($_GET["index"])){
 header('Location: order.php');
} 
?>
<?php 
include '../footer.php';
?>