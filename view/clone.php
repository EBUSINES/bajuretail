<?php 
session_start();
include '../header.php';
?>
<div class="container" style="margin-top:8%;">
    <div class="row">
        <?php 
        require '../Item.php';

        if (!$_GET['id']) {
            header("location: ../index.php");
            // jika tidak ada id yang di passing
        }
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
            $item->quantity     =   1;
            
            // cek produk ada di cart
            $index = 1;
            $cart = unserialize(serialize($_SESSION['cart']));
            for ($i=0; $i < count($cart) ; $i++) { 
                if ($cart[$i]->id == $_GET['id']) {
                    $index = $i;
                break;
                }
                if ($index == -1) {
                    $_SESSION['cart'][] = $item;
                }else{
                    if (($cart[$index]->quantity) < $itemstock) {
                        $cart[$index]->quantity++;
                        $_SESSION['cart'] = $cart;
                    }
                }
            }
        }



        while ($data = mysqli_fetch_array($query)) { ?>
        <!-- THUMBNAIL ITEM -->
        <div class="col-12 col-md-3">
            <div class="card border-light" style="width: 15rem;">
                <img src="https://images.unsplash.com/photo-1446447058589-03a67b4b50c6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-center"><?= $data['nama_produk'] ?></p>
                </div>
            </div>
        </div>
        <!-- FORM ADD DATA -->
        <div class="col-12 col-md-6">
            <form action="">
                <h1><?= $data['nama_produk'] ?></h1><hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col col-md-5">
                            <label for="exampleFormControlInput1">Jumlah Baju</label>
                            <input type="number" min="1" class="form-control" id="inputbaju">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="customRadioInline1">Ukuran Baju</label>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">M</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">S</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">L</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline4">XL</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline5" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline5">XXL</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Keterangan untuk penjual</label>
                    <textarea class="form-control" id="keterangan" rows="3"></textarea>
                </div>
                <div class="form-group mb-auto">
                    <button class="btn bnt-sm btn-success" onclick="add()"><i class="fa fa-plus"></i> Add</button>
                    <button class="btn bnt-sm btn-primary"><i class="fa fa-shopping-cart"></i> Checkout</button>
                </div>
            </form>
        </div>
        <?php } ?>
        <!-- LIST SIDEBAR ITEM -->
        <div class="col-12 col-md-3 ml-auto">
            <ul class="list-unstyled">
            <?php 
            $sql = "SELECT * FROM `produk` LIMIT 5";
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_assoc($query)) { ?>
                <li class="media mb-2">
                    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        class="mr-3" style="width: 64px;height: 64px;" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><?= $data['nama_produk'] ?></h5>
                        <span class="badge badge-primary sizeku">Kategori <?= $data['id_kategori'] ?></span>
                    </div>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php 
include '../footer.php';
?>