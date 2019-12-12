<?php 
include '../header.php';
?>
<div class="container" style="margin-top:5%;">
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <h2 class="pay">Details User</h2>
            <hr>
            <form action = "payment.php" method="post" name="view/thanks.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" class="form-control" name="namadepan" id="namadepan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama_belakang">Belakang</label>
                        <input type="text" class="form-control" name="namabelakang" id="namabelakang">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nohp">Telepon/HP</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+62</div>
                        </div>
                        <input type="text" class="form-control" name="telepon" id="telepon" placeholder="81xxx">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kota">Kota/Kab</label>
                        <input type="text" class="form-control" id="kota" name="kota">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pilihbank">Bank</label>
                        <select class="custom-select" id="pilihbank" name="pilihbank" required>
                            <option selected disabled value="">Pilih Bank</option>
                            <option>Bank BCA</option>
                            <option>Bank BNI</option>
                            <option>Bank BRI</option>
                            <option>Bank Mandiri</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="atas_nama">a/n</label>
                        <input type="text" class="form-control" id="atasnama" name="atasnama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bukti">Upload Bukti Transfer</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="bukti" id="bukti">
                        <label class="custom-file-label" for="bukti">Choose file</label>
                    </div>
                </div>
                <div class="row pay">
                    <div class="col col-md-8">
                        <a href="<?php echo base_url('view/thanks.php') ?>" class="btn btn-success"><i class="fa fa-send"></i> Process</a>
                        <button type="Process" class="btn btn-default"><i class="fa fa-refresh"></i> Process </button></div>
                    <div class="col col-md-4">
                        <a href="<?php echo base_url('view/order.php') ?>" class="btn btn-block btn-warning mr-5"><i class="fa fa-arrow-left"></i> Back to Items</a>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>

<?php 
include '../footer.php';
?>

<?php
var dump ($_post)
    if(isset($_POST['Submit'])) {
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $provinsi = $_POST['provinsi'] ;
        $kota = $_POST['kota'] ;
        $kecamatan = $_POST['kecamatan'] ;
        $atas_nama = $_POST['atas_nama'] ;
 
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO customer(nama_depan , nama_belakang , nohp , alamat , provinsi
                                , kota , kecamatan , atas_nama) VALUES('$nama_depan' , '$nama_belakang' , '$nohp' , '$alamat'
                                ,'$provinsi' ,'$kota' ,'$kecamatan' ,'$atas_nama')");

        // Show message when user added
        echo "User added successfully. <a href='view/thanks.php'>View Users</a>";
    }
    ?>


?>