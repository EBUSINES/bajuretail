<?php 
include '../header.php';
?>
<div class="container" style="margin-top:5%;">
    <div class="row">
        <div class="col col-md-6">
            <h2>Details User</h2>
            <hr>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama Depan</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Belakang</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inlineFormInputGroup">Telepon/HP</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+62</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="81xxx">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Alamat</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Provinsi</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Kota/Kab</label>
                            <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Kecamatan</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="validationCustom04">Bank</label>
                        <select class="custom-select" id="validationCustom04" required>
                            <option selected disabled value="">Pilih Bank</option>
                            <option>Bank BCA</option>
                            <option>Bank BNI</option>
                            <option>Bank BRI</option>
                            <option>Bank Mandiri</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputCity">a/n</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inlineFormInputGroup">Voucher</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-ticket"></i></div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="voucher code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="customFile">Upload Bukti Transfer</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Process</button>
                <button type="submit" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
            </form>
        </div>
        <div class="col col-md-6">
            <h2>Detail Orders</h2>
            <hr>
            <table class="table table-borderless table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Size</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Baju Muslim</td>
                        <td>L</td>
                        <td>Putih</td>
                        <td>1</td>
                        <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Celana Chinos</td>
                        <td>XL</td>
                        <td>Navy</td>
                        <td>2</td>
                        <td>RP. 35.000</td>
                    </tr>
                    <tr class="table-success">
                        <th scope="row" colspan="5">Total</th>
                        <td>Rp. 85.000</td>
                    </tr>
                </tbody>
            </table>
            <div class="alert alert-danger" role="alert">
                <p><b>Transfer sejumlah Rp. 85.000</b> ke Rekening (BCA/BNI/BRI/MANDIRI)<br><b>a/n Paktoha</b></p>
            </div>
        </div>
    </div>
</div>

<?php 
include '../footer.php';
?>