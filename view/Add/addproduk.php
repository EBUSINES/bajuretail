<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>

            <tr> 
                <td>Description</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>

            <tr> 
                <td>Ukuran</td>
                <td><input type="text" name="size_produk"></td>
            </tr>

            <tr> 
                <td>Warna</td>
                <td><input type="text" name="warna_produk"></td>
            </tr>

            <tr> 
                <td>gambar</td>
                <td><input type="text" name="gambar_product"></td>
            </tr>

            <tr> 
                <td>Jumlah</td>
                <td><input type="integer" name="jumlah_produk"></td>
            </tr>

            <tr> 
                <td>harga</td>
                <td><input type="integer" name="harga"></td>
            </tr>

            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_produk = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $size_produk = $_POST['size_produk'];
        $warna_produk = $_POST['warna_produk'];
        $gambar_product = $_POST['gambar_product'];
        $jumlah_produk = $_POST['jumlah_produk'];
        $harga = $_POST['harga'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk , deskripsi , size_produk , warna_produk , gambar_product , jumlah_produk , harga) VALUES('$nama_produk' , '$deskripsi' , '$size_produk' , '$warna_produk' , '$gambar_product' , '$jumlah_produk' , '$harga')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>