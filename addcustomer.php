<!-- NITIP FUNGSI ADD CUSTOMER -->

<!-- <Html>
<head>
    <title>Add Customers</title>
</head>

<body>
    <a href = "admin.php">Go to Home</a>
    <br></br>

    <form action="addcustomer.php" method="post" name="AddCustomers">
        <table width = "25%" >
            <tr>
                <td>Nama Depan</td>
                <td><input type = "text" name="nama_depan"></td>
            </tr>

            <tr>
                <td>Nama Belakang</td>
                <td><input type = "text" name="nama_belakang"></td>
            </tr>

            <tr>
                <td>No Telepon</td>
                <td><input type = "text" name="no_hp"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type = "text" name="alamat"></td>
            </tr>

            <tr>
                <td>Provinsi</td>
                <td><input type = "text" name="provinsi"></td>
            </tr>

            <tr>
                <td>Kota</td>
                <td><input type = "text" name="kota"></td>
            </tr>

            <tr>
                <td>A/N</td>
                <td><input type = "text" name="atas_nama"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
            </tr>
        </table>
    </form> -->

    <?php

    if(isset($_POST['submit'])) {
        $nama_depan = $_POST['nama_depan'] ;
        $nama_belakang = $_POST['nama_belakang'] ;
        $no_hp = $_POST['no_hp'] ;
        $alamat = $_POST['alamat'] ;
        $provinsi = $_POST['provinsi'] ;
        $kota = $_POST['kota'] ;
        $kecamatan = $_POST['kecamatan'] ;
        $atas_nama = $_POST['atas_nama'] ;

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO customer(nama_depan,nama_belakang,no_hp,alamat,provinsi,kota,kecamatan,atas_nama) VALUES('$nama_depan','$nama_belakang','$no_hp','$alamat','$provinsi','$kota','$kecamatan','$atas_nama')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";

    }

    ?>

</body>
</html>
