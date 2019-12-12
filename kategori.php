<?php 
include "header.php";
?>
<div class="container kat">
    <h1 class="h1kat">Kategori</h1>
    <div class="row row-cols-1 row-cols-md-4">
        <?php 
        $sql    = "SELECT * FROM `kategori` WHERE id_kategori <= 4";
        $query  = mysqli_query($conn,$sql);
        while ($data = mysqli_fetch_object($query)) {?>
        <div class="col-3 mb-4">
            <div class="card">
            <img src="https://images.unsplash.com/photo-1484249157003-9ef495e190c0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><p class="text-center"><?= $data->nama_kategori ?></p></h5>
            </div>
            </div>
        </div><?php } ?>
    </div>
    <div class="row row-cols-1 row-cols-md-3">
        <?php 
        $sql    = "SELECT * FROM `kategori` WHERE id_kategori >= 5 AND id_kategori <= 8";
        $query  = mysqli_query($conn,$sql);
        while ($data = mysqli_fetch_object($query)) {?>
        <div class="col-3 mb-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1560243563-062bfc001d68?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><p class="text-center"><?= $data->nama_kategori ?></p></h5>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php 
include "footer.php";
?>